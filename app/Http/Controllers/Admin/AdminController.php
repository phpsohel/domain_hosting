<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Domain_Hosting;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
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
    public function Generate($id){
        $show  = Customer::find($id);
        $data = ['show' => $show];
        $pdf = Pdf::loadView('admin.customer.generate-pdf', $data);
        return $pdf->download('customer'.'-'.$show->id.'.pdf');
    }

    //Add Domain & Hosting

    public function DomainPdf($id){
        $show = Domain_Hosting::find($id);
        $data = ['show' => $show];
        $pdf = Pdf::loadView('admin.domain.generate-pdf', $data);
        return $pdf->download('domain-invoice'.'-'.$show->id.'.pdf');
    }

}
