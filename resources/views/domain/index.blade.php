@extends('admin.master')
@section('title', 'Domain')

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible text-center">
        <button type="button" class="close"data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('success') }}
    </div>
    @endif
    @if(session()->has('danger'))

    <div class="alert alert-danger alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('danger') }}

    </div>
    @endif

@section('content')
    <section class="content">
        <div class="container-fluid">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">Add Domain</button>
                                <br>
                                <br>
                                <h1>All Domain </h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

            <div class="row">
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center">Add Domain</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('domains.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="card-body">
                                                 <div class="row">
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="col-md-6" data-select2-id="30">
                                                     <div class="form-group" data-select2-id="29">
                                                         <label>Company Name</label>
                                                         <select name="cust_id"  class="form-control" style="width: 100%;">
                                                             @foreach($customers as $key => $customer)
                                                             <option value="{{ $customer->id }}">{{ $customer->name ?? ''}}</option>
                                                             @endforeach
                                                         </select>

                                                         @if($errors->has('cust_id'))
                                                         <span class="text-danger">{{$errors->first('cust_id')}}</span>
                                                         @endif()

                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="exampleInputEmail1"> Domain Name<span style="color:red;"> *</span></label>
                                                         <input type="text" name="domain_name" required class="form-control" id="exampleInputEmail1">

                                                         @if($errors->has('domain_name'))
                                                         <span class="text-danger">{{$errors->first('domain_name')}}</span>
                                                         @endif()
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="exampleInputEmail1">Domain Author Name </label>
                                                         <input type="text" name="domain_author_name" required class="form-control" id="exampleInputEmail1">

                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="exampleInputEmail1">Domain Yearly Price </label>
                                                         <input type="text" name="domain_yearly_price" class="form-control" id="exampleInputEmail1">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="exampleInputEmail1">Domain Start Date </label>
                                                         <input type="date" name="domain_start_date" class="form-control" id="exampleInputEmail1">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="exampleInputEmail1">Domain Exp: Date </label>
                                                         <input type="date" name="domain_expiry_date" class="form-control" id="exampleInputEmail1">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="exampleInputPassword1">Hosting Space (GB)</label>
                                                         <input type="text" name="hosting_space" class="form-control" id="exampleInputPassword1">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="exampleInputPassword1">Hosting Author Name<span style="color:red;"> *</span></label>
                                                         <input type="text" name="hosting_author_name" required class="form-control" id="exampleInputPassword1">

                                                         @if($errors->has('hosting_author_name'))
                                                         <span class="text-danger">{{$errors->first('hosting_author_name')}}</span>
                                                         @endif()
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="exampleInputPassword1">Hosting Start Date </label>
                                                         <input type="date" name="hosting_start_date" class="form-control" id="exampleInputPassword1">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="exampleInputPassword1">Hosting Exp: Date </label>
                                                         <input type="date" name="hosting_expiry_date" class="form-control" id="exampleInputPassword1">
                                                     </div>

                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="exampleInputPassword1">Hosting Yearly Price</label>
                                                         <input type="text" name="hosting_yearly_price" class="form-control" id="exampleInputPassword1">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6"></div>
                                                 <div class="card-footer">
                                                     <button type="submit" class="btn btn-primary">Submit</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                </form>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <div type="" class=""></div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Customer Name</th>
                                            <th>Domain Name</th>
                                            <th>Author Name</th>
                                            <th>Yearly Price</th>
                                            <th>Start Date</th>
                                            <th>Exp: Date</th>
                                            <th>Left Days</th>
                                            <th>Hosting Space</th>
                                            <th>Hosting Author</th>
                                            <th>Hosting Start Date</th>
                                            <th>Hosting Exp: Date</th>
                                            <th>Hosting Yearly Price</th>
                                            <th>SMS</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $i = 0;
                                    @endphp
                                    <tbody>
                                        @foreach( $domains as $domain)
                                        <tr>
                                            <td>{{ ++$i}}</td>
                                            <td>{{ $domain->customer->name ?? ''}} ({{ $domain->customer->name ?? '' }})</td>

                                            <td>{{ $domain->domain_name  ?? ''}}</td>
                                            <td>{{ $domain->domain_author_name ?? ''}}</td>
                                            <td>{{ $domain->domain_yearly_price ?? ''}}</td>
                                            <td>{{ $domain->domain_start_date ?? ''}}</td>

                                            @php
                                            $currentdate = strtotime(date('Y-m-d'));
                                            $endingdate = strtotime($domain->domain_expiry_date);
                                            $secs = $endingdate - $currentdate; // == <seconds between the two times>
                                                $days = $secs / 86400;
                                                @endphp
                                                <td>
                                                    @if($days < 31) <span class="text-danger"> <b>{{$domain->domain_expiry_date ?? '' }}</b></span>

                                                        @else
                                                        <span> {{ $domain->domain_expiry_date ?? '' }}</span>
                                                        @endif
                                                </td>
                                                <td class="">{{ $days ?? '' }}</td>
                                                <td>{{ $domain->hosting_space ?? ''}}</td>
                                                <td>{{ $domain->hosting_author_name ?? ''}}</td>
                                                <td>{{ $domain->hosting_start_date ?? ''}}</td>
                                                @php
                                                $currentdate = strtotime(date('Y-m-d'));
                                                $endingdate = strtotime($domain->hosting_expiry_date);
                                                $secs = $endingdate - $currentdate; // == <seconds between the two times>
                                                    $days = $secs / 86400;
                                                    @endphp
                                                    <td>
                                                        @if($days < 31) <span class="text-danger"> <b>{{ $domain->hosting_expiry_date  ?? '' }}</b></span>
                                                            @else
                                                            <span> {{ $domain->hosting_expiry_date ?? '' }}</span>
                                                            @endif
                                                    </td>
                                                    <td>{{ $domain->hosting_yearly_price ?? ''}}</td>
                                                    <td>
                                                        <a href=""><i class="fa-solid fa-comment-sms"></i></a>
                                                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="open-EditUnitDialog btn btn-link" data-toggle="modal" data-target="#edit_domain{{$domain->id}}">

                                                            <i class="fa-solid fa-pen-to-square" style="color:#7c5cc4"></i>
                                                        </button>
                                                        <button type="submit" class="open-EditUnitDialog btn btn-link">
                                                            <a href="{{ route('domains.details', $domain->id) }}">

                                                                <i class="fa-solid fa-eye" style="color:#7c5cc4"></i>
                                                            </a>
                                                        </button>
                                                        <button type="submit" class="open-EditUnitDialog btn btn-link">
                                                            <a href="{{ route('domains.delete', $domain->id) }}" id="delete">
                                                                <i class="fa-solid fa-trash-can" style="color:#7c5cc4"></i>
                                                            </a>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @include('domain.edit_modal')
                                        @endforeach
                                    </tbody>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

