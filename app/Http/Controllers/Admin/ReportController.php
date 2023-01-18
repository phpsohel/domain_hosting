<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use App\Models\Domain_Hosting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function domain_expire()
    {
        $data['from'] = date('Y-m-d');
        $data['to']   = date('Y-m-d');
        $data['cust_name']   = '';
        $data['customers'] = Customer::orderBy('id', 'DESC')->get();
        $data['domains'] = Domain_Hosting::where('domain_expiry_date',date('y-m-d'))->get();
        return view('report.domain_expire', $data);
    }
    public function domain_expire_search(Request $request)
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
              $domains = Domain_Hosting::where('domain_expiry_date', date('y-m-d'))->get();
        }
        return view('report.domain_expire', compact('domains','customers','from','to','cust_name'));
    }
}
