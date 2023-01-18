<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Models\Customer;
use App\Models\Domain_Hosting;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
class AdminController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
    //Admin Dashboard
    public function index()
    {
        return view('layout.index');
    }
    public function Logout()
    {
        Session::flush();
        Auth::Logout();
        return redirect('/login');
    }
    //Customer
    // public function Add_customer()
    // {
    //     return view('admin.customer.add-customer');
    // }
    // public function Store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email_1' => 'required|unique:customers',
    //         'phone_1' => 'required|unique:customers',
    //         'website' => 'required',
    //     ]);
    //     $add_customer = new Customer ;
    //     $add_customer->name =$request->name;
    //     $add_customer->company =$request->company;
    //     $add_customer->email_1 =$request->email_1;
    //     $add_customer->email_2 =$request->email_2;
    //     $add_customer->phone_1 =$request->phone_1;
    //     $add_customer->phone_2 =$request->phone_2;
    //     $add_customer->website =$request->website;
    //     $add_customer->address =$request->address;
    //     $add_customer->save();
    //     $notification = array(
    //         'message' => 'Added Successfully',
    //         'alert-type' => 'success'
    //     );
    //     return view('admin.customer.add-customer')->with('success' ,'Data added');
    // }
    // public function AllCustomer()
    // {
    //     return view('admin.customer.all-customer');
    // }
    // public function Edit($id)
    // {
    //     $edit = Customer::find($id);
    //     return view('admin.customer.edit-customer', compact('edit'));
    // }
    // public function Update(Request $request, $id)
    // {
    //     $request->validate([
    //     'name' => 'required',
    //     'email_1' => 'required',
    //     'phone_1' => 'required',
    //     'website' => 'required',
    //     ]);
    //     $update = Customer::find($id);
    //     $update->name =$request->name;
    //     $update->company =$request->company;
    //     $update->email_1 =$request->email_1;
    //     $update->email_2 =$request->email_2;
    //     $update->phone_1 =$request->phone_1;
    //     $update->phone_2 =$request->phone_2;
    //     $update->website =$request->website;
    //     $update->address =$request->address;
    //     $update->save();
    //     return redirect('admin/all-customer')->with('message', 'Data Updated  Successfully');
    // }
    public function Status($id){
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
    // public function Delete($id)
    // {
    //     $delete = Customer::find($id);
    //     $delete->delete();
    //     return redirect()->back();
    // }
    // public function View_Customer($id)
    // {
    //     $view = Customer::find($id);
    //    return view('admin.customer.view-customer', compact('view'));
    // }
    public function Generate($id){
        $show  = Customer::find($id);
        $data = ['show' => $show];
        $pdf = Pdf::loadView('admin.customer.generate-pdf', $data);
        return $pdf->download('customer'.'-'.$show->id.'.pdf');
    }

    //Add Domain & Hosting
    public function All_domain(){
        $customers  = Customer::all();
        $domains = Domain_Hosting::with('customer')->orderBy('id', 'DESC')->get();
        return view('admin.domain.all-domain', compact('domains', 'customers'));
    }
    public function Add_domain()
    {
        $customers = Customer::all();
        $domains = Domain_Hosting::orderBy('id', 'DESC')->get();
       return view('admin.domain.add-domain', compact('customers','domains'));
    }
    public function StoreAdmin(Request $request)
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
        return redirect()->back()->with('message', 'Data Added  Successfully');
    }

    public function Edit_Domain($id)
    {
        $edit = Domain_Hosting::find($id);

        $customers  = Customer::where('status',1)->select('id','name')->get();
        // return [$edit, $customers];
        return view('admin.domain.edit-domain', compact('edit', 'customers' ));
    }
    public function Update_Domain(Request $request, $id)
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
        return redirect('admin/all-domain')->with('message', 'Data Updated  Successfully');
    }
    public function Delete_Domain($id)
    {
        $delete = Domain_Hosting::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function View_Domain($id)
    {
        $view = Domain_Hosting::find($id);
        return view('admin.domain.view-domain', compact('view'));
    }
    public function DomainPdf($id){
        $show = Domain_Hosting::find($id);
        $data = ['show' => $show];
        $pdf = Pdf::loadView('admin.domain.generate-pdf', $data);
        return $pdf->download('domain-invoice'.'-'.$show->id.'.pdf');
    }
    // ================================
    //Expire Domain & Hosting
    // ===============================
    public function Expire()
    {
        $from = '';
        $to   = '';
        $cust_name   = '';
        $customers = Customer::orderBy('id', 'DESC')->get();
        $domains = Domain_Hosting::where('domain_expiry_date',date('y-m-d'))->get();
       return view('admin.expire.all-expire', compact('domains','customers','from','to','cust_name'));
    }
    public function ExpireSearch(Request $request)
    {
        $from = $request->from_date;
        $to   = $request->to_date;
        $cust_name   = $request->cust_name;

         $customers = Customer::orderBy('id', 'DESC')->get();

        if($from &&  $to && $cust_name )
        {
        $domains = Domain_Hosting::whereBetween('domain_expiry_date',array($from,$to))
         ->where('cust_id', $cust_name)
        ->orderBy('id', 'DESC')
        ->get();

        }elseif($from &&  $to)
        {
        $domains = Domain_Hosting::whereBetween('domain_expiry_date',array($from,$to))
        ->orderBy('id', 'DESC')
        ->get();
        }elseif($cust_name)
        {
         $domains = Domain_Hosting::where('cust_id', $cust_name)
        ->orderBy('id', 'DESC')
        ->get();
        }else{
              $domains = Domain_Hosting::where('domain_expiry_date',date('y-m-d'))->get();
        }
        return view('admin.expire.all-expire', compact('domains','customers','from','to','cust_name'));
    }


}
