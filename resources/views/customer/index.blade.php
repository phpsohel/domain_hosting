@extends('admin.master')
@section('title', 'Customers')

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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">Add Customer</button>
                                <br>
                                <br>
                                <h1>All Customer </h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

            <div class="row">
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center">Add Customer</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Name<span style="color:red;"> *</span></label>
                                                    <input type="text" name="name" required value="{{ old('name') }}" class="form-control" id="exampleInputEmail1" placeholder="Enter  Name">
                                                </div>
                                                @if($errors->has('name'))
                                                <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif()
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Company</label>
                                                    <input type="text" name="company" class="form-control" id="exampleInputEmail1" placeholder="Company Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email-1<span style="color:red;"> *</span></label>
                                                    <input type="email" name="email_1" required class="form-control" id="exampleInputEmail1" placeholder="Enter Email">

                                                </div>
                                                @if($errors->has('email_1'))
                                                <span class="text-danger">{{$errors->first('email_1')}}</span>
                                                @endif()
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email-2</label>
                                                    <input type="email" name="email_2" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Phone-1<span style="color:red;"> *</span></label>
                                                    <input type="number" name="phone_1" required class="form-control" id="exampleInputPassword1" placeholder="01...">

                                                </div>
                                                @if($errors->has('phone_1'))
                                                <span class="text-danger">{{$errors->first('phone_1')}}</span>
                                                @endif()
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Phone-2</label>
                                                    <input type="number" name="phone_2" class="form-control" id="exampleInputPassword1" placeholder="01...">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Website<span style="color:red;"> *</span></label>
                                                    <input type="text" name="website" required class="form-control" id="exampleInputPassword1" placeholder="www.com">

                                                </div>
                                                @if($errors->has('website'))
                                                <span class="text-danger">{{$errors->first('website')}}</span>
                                                @endif()
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Address</label>
                                                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Dhaka">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
                                            <th>Company</th>
                                            <th>Contact Person</th>
                                            <th>Email-1</th>
                                            <th>Email-2</th>
                                            <th>Phone-1</th>
                                            <th>Phone-2</th>
                                            <th>Website</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>SMS</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $i = 0;
                                    @endphp
                                    <tbody>
                                        @foreach( $customers as $customer)
                                        <tr>
                                            <td>{{ ++$i}}</td>
                                            <td>{{ $customer->company}}</td>
                                            <td>{{ $customer->name}}</td>
                                            <td>{{ $customer->email_1}}</td>
                                            <td>{{ $customer->email_2}}</td>
                                            <td>{{ $customer->phone_1}}</td>
                                            <td>{{ $customer->phone_2}}</td>
                                            <td>{{ $customer->website}}</td>
                                            <td>{{ $customer->address}}</td>
                                            <td>
                                                @if($customer->status == 1)
                                                <a href="{{ route('admin.status-customer', $customer->id )}}" class="btn btn-success">Active</a>
                                                @elseif($customer->status == 0)
                                                <a href="{{route('admin.status-customer',$customer->id )}}" class="btn btn-danger">Deactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href=""><i class="fa-solid fa-comment-sms"></i></a> |
                                                <a href=""><i class="fa-solid fa-envelope"></i></a>
                                            </td>
                                            <td>
                                                 <button type="button" class="open-EditUnitDialog btn btn-link" data-toggle="modal" data-target="#edit_customer{{$customer->id}}">
                                                    <i class="fa-solid fa-pen-to-square" style="color:#7c5cc4"></i>
                                                </button>
                                                <button type="submit" class="open-EditUnitDialog btn btn-link">
                                                    <a href="{{ route('customers.details', $customer->id) }}">
                                                        <i class="fa-solid fa-eye" style="color:#7c5cc4"></i>
                                                    </a>
                                                </button>
                                                <button type="submit" class="open-EditUnitDialog btn btn-link">
                                                        <a href="{{ route('customers.delete', $customer->id) }}" id="delete">
                                                            <i class="fa-solid fa-trash-can" style="color:#7c5cc4"></i>
                                                        </a>
                                                </button>
                                            </td>
                                        </tr>
                                        @include('customer.edit_modal')
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

