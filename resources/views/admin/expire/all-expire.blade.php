@extends('admin.master')
@section('title', 'All Expire List')
@section('content')
<section class=" content">
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="row">
                </div>
            </div>
            <!-- /.col -->
        </div>
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    {{-- <div class="modal-header">
                        <h4 class="modal-title text-center">Add Domain</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> --}}
                    {{-- <div class="modal-body">
                        <form action="{{route('admin.store.add-domain')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Domain Name<span style="color:red;"> *</span></label>
                                    <input type="text" name="domain_name" class="form-control" id="exampleInputEmail1">
                                    @if($errors->has('domain_name'))
                                    <span class="text-danger">{{$errors->first('domain_name')}}</span>
                                    @endif()
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Domain Author Name <span style="color:red;"> *</span></label>
                                    <input type="text" name="domain_author_name" class="form-control" id="exampleInputEmail1">
                                    @if($errors->has('domain_author_name'))
                                    <span class="text-danger">{{$errors->first('domain_author_name')}}</span>
                                    @endif()
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Yearly Price <span style="color:red;"> *</span></label>
                                    <input type="text" name="domain_yearly_price" class="form-control" id="exampleInputEmail1">
                                    @if($errors->has('domain_yearly_price'))
                                    <span class="text-danger">{{$errors->first('domain_yearly_price')}}</span>
                                    @endif()
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Domain Start Date <span style="color:red;"> *</span></label>
                                    <input type="date" name="domain_start_date" class="form-control" id="exampleInputEmail1">
                                    @if($errors->has('domain_start_date'))
                                    <span class="text-danger">{{$errors->first('domain_start_date')}}</span>
                                    @endif()
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Domain Exp: Date <span style="color:red;"> *</span></label>
                                    <input type="date" name="domain_expiry_date" class="form-control" id="exampleInputEmail1">
                                    @if($errors->has('domain_start_date'))
                                    <span class="text-danger">{{$errors->first('domain_start_date')}}</span>
                                    @endif()
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hosting Space<span style="color:red;"> *</span></label>
                                    <input type="text" name="hosting_space" class="form-control" id="exampleInputPassword1">

                                    @if($errors->has('hosting_space'))
                                    <span class="text-danger">{{$errors->first('hosting_space')}}</span>
                                    @endif()
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hosting Author Name<span style="color:red;"> *</span></label>
                                    <input type="text" name="hosting_author_name" class="form-control" id="exampleInputPassword1" </div>
                                    @if($errors->has('hosting_author_name'))
                                    <span class="text-danger">{{$errors->first('hosting_author_name')}}</span>
                                    @endif()
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hosting Start Date <span style="color:red;"> *</span></label>
                                    <input type="date" name="hosting_start_date" class="form-control" id="exampleInputPassword1">
                                    @if($errors->has('hosting_start_date'))
                                    <span class="text-danger">{{$errors->first('hosting_start_date')}}</span>
                                    @endif()
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hosting Exp: Date <span style="color:red;"> *</span></label>
                                    <input type="date" name="hosting_expiry_date" class="form-control" id="exampleInputPassword1">
                                    @if($errors->has('hosting_expiry_date'))
                                    <span class="text-danger">{{$errors->first('hosting_expiry_date')}}</span>
                                    @endif()
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hosting Yearly Price<span style="color:red;"> *</span></label>
                                    <input type="text" name="hosting_yearly_price" class="form-control" id="exampleInputPassword1">
                                    @if($errors->has('hosting_yearly_price'))
                                    <span class="text-danger">{{$errors->first('hosting_yearly_price')}}</span>
                                    @endif()
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div> --}}
                {{-- <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div class="container">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Expire Domain & Hosting </h1>
            </div>
            {{-- <div class="col-sm-6" style="text-align:right;">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">Add Domain</button>
            </div> --}}
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="container">
            <form action="{{ route('admin.all-expire.search') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3 ">
                        <label for="">From Date</label>
                        <input id="From" name="from_date" type="date" value="{{  $from ?? '' }}" class="form-control">

                    </div>
                    <div class="form-group col-md-3 ">
                        <label for="">To Date</label>
                        <input id="Last" name="to_date" type="date" value="{{ $to ?? '' }}" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Customer Name</label>
                        <select name="cust_name" class="selectpicker form-control customer_id" data-live-search="true" id="" data-live-search-style="begins" title="Select Member Name">
                            <option value="" class="">All Customer</option>
                            @foreach ($customers as $customer)
                            <option value="{{$customer->id  }}" {{ $customer->id == $cust_name ? "Selected":'' }}>{{ $customer->name ?? ''}}</option>


                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for=""></label>
                        <button type="submit" class="form-control btn btn-primary mt-2">Search</button>
                    </div>
                </div>

            </form>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Customer Name</th>
                                    <th>Domain Name</th>
                                    <th> Author Name</th>
                                    <th>Yearly Price</th>
                                    <th>Start Date</th>
                                    <th>Exp: Date</th>
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
                                    <td>{{ $domain->customer->name ?? '' }}</td>
                                    <td>{{ $domain->domain_name ?? ''}}</td>
                                    <td>{{ $domain->domain_author_name ?? ''}}</td>
                                    <td>{{ $domain->domain_yearly_price}}</td>
                                    <td>{{ $domain->domain_start_date}}</td>
                                    <td>{{ $domain->domain_expiry_date}}</td>
                                    <td>{{ $domain->hosting_space}}</td>
                                    <td>{{ $domain->hosting_author_name}}</td>
                                    <td>{{ $domain->hosting_start_date}}</td>
                                    <td>{{ $domain->hosting_expiry_date}}</td>
                                    <td>{{ $domain->hosting_yearly_price}}</td>
                                    <td>
                                        <a href=""><i class="fa-solid fa-comment-sms"></i></a> |
                                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.edit-domain',$domain->id)}}" class="text-success">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a> |
                                        <a id="weet" onclick="check();" href="{{ route('admin.delete-domain',$domain->id)}}" class="text-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a> |
                                        <a href="{{  route('admin.view-domain',$domain->id ) }}" class="text-danger">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
</div>
</section>
@endsection
