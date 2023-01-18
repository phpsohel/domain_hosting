<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Domain_Hosting;
use App\Http\Controllers\Controller;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['customers']  = Customer::all();
        $data['domains'] = Domain_Hosting::with('customer')->orderBy('id', 'DESC')->get();
        return view('domain.index', $data);
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
    public function store(Request $request)
    {
        $request->validate([
            'cust_id' => 'required',
            'domain_name' => 'required',
            'domain_author_name' => 'required',
            'domain_yearly_price' => 'required',
            'domain_start_date' => 'required',
            'hosting_space' => 'required',
            'hosting_author_name' => 'required',
            'hosting_expiry_date' => 'required',
            'hosting_yearly_price' => 'required',
            ]);
        $domain = new Domain_Hosting;
        $domain->cust_id  = $request->cust_id ;
        $domain->domain_name  = $request->domain_name ;
        $domain->domain_author_name = $request->domain_author_name;
        $domain->domain_yearly_price =$request->domain_yearly_price;
        $domain->domain_start_date   =$request->domain_start_date;
        $domain->domain_expiry_date  =$request->domain_expiry_date;
        $domain->hosting_space       =$request->hosting_space;
        $domain->hosting_author_name =$request->hosting_author_name;
        $domain->hosting_start_date  =$request->hosting_start_date;
        $domain->hosting_expiry_date =$request->hosting_expiry_date;
        $domain->hosting_yearly_price=$request->hosting_yearly_price;
        $domain->save();
        return redirect()->back()->with('success', 'Domain  Added  Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['show'] = Domain_Hosting::find($id);
        return view('domain.details', $data);
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
    public function update(Request $request, $id)
    {
        $update = Domain_Hosting::find($id);
        $update->cust_id =$request->cust_id;
        $update->domain_name =$request->domain_name;
        $update->domain_author_name  =$request->domain_author_name;
        $update->domain_yearly_price =$request->domain_yearly_price;
        $update->domain_start_date   =$request->domain_start_date;
        $update->domain_expiry_date  =$request->domain_expiry_date;
        $update->hosting_space       =$request->hosting_space;
        $update->hosting_author_name =$request->hosting_author_name;
        $update->hosting_start_date  =$request->hosting_start_date;
        $update->hosting_expiry_date =$request->hosting_expiry_date;
        $update->hosting_yearly_price=$request->hosting_yearly_price;
        $update->save();
        return redirect()->back()->with('success', ' Updated  Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Domain_Hosting::find($id);
        $delete->delete();
        return redirect()->back()->with('danger', 'Customer Delete Successfully!');
    }
}
