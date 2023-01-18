<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['customers'] = Customer::orderBy('id','DESC')->get();
        return view('customer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email_1' => 'required|unique:customers',
        //     'phone_1' => 'required|unique:customers',
        //     'website' => 'required',
        // ]);
        $add_customer = new Customer ;
        $add_customer->name =$request->name;
        $add_customer->company =$request->company;
        $add_customer->email_1 =$request->email_1;
        $add_customer->email_2 =$request->email_2;
        $add_customer->phone_1 =$request->phone_1;
        $add_customer->phone_2 =$request->phone_2;
        $add_customer->website =$request->website;
        $add_customer->address =$request->address;
        $add_customer->save();
        return redirect()->back()->with('success' ,'Customer added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['show'] = Customer::find($id);
        return view('customer.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function Update(Request $request, $id)
    {
        $update = Customer::find($id);
        $update->name =$request->name;
        $update->company =$request->company;
        $update->email_1 =$request->email_1;
        $update->email_2 =$request->email_2;
        $update->phone_1 =$request->phone_1;
        $update->phone_2 =$request->phone_2;
        $update->website =$request->website;
        $update->address =$request->address;
        $update->save();
        return redirect()->back()->with('success', 'Customer Updated  Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = Customer::find($id);
        $delete->delete();
        return redirect()->back()->with('danger', 'Customer Delete Successfully!');
    }
    public function status($id)
    {
       $status = DB::table('customers')->where('id', $id)->first();
       if($status->status){
            $status = 0;
       }else{
        $status = 1;
       }
       $values = array('status' =>$status);
       DB::table('customers')->where('id', $id)->update($values);
       return redirect()->back();
    }
}
