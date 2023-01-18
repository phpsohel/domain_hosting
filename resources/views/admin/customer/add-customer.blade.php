@extends('admin.master')
@section('title', 'Add Customer')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection()
<!-- Theme style -->
@section('content')
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="">
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
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
                            <form action="{{route('admin.store.add-customer')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Name<span style="color:red;"> *</span></label>
                                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleInputEmail1" placeholder="Enter  Name">
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
                                                <input type="email" name="email_1" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
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
                                                <input type="number" name="phone_1" class="form-control" id="exampleInputPassword1" placeholder="01...">
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
                                                <input type="text" name="website" class="form-control" id="exampleInputPassword1" placeholder="www.com">
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
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
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
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">Add Customer</button>
                    <br>
                    <br>
                    <h1>All Customer </h1>
                </div>
                <div class="col-sm-6" style="">

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
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
                                $customers = \App\Models\Customer::all();
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
                                            <a href="{{ route('admin.edit-customer',$customer->id)}}" class="text-success">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a> |
                                            <a id="weet" onclick="check();" href="{{ route('admin.delete-customer',$customer->id)}}" class="text-danger">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a> |
                                            <a href="{{  route('admin.view-customer',$customer->id ) }}" class="text-danger">
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
@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}""></script>
<script src=" {{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}""></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}""></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}""></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}""></script>
<script src=" {{asset('admin/plugins/jszip/jszip.min.js')}}""></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}""></script>
<script src=" {{asset('admin/plugins/pdfmake/vfs_fonts.js')}}""></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}""></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}""></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}""></script>
<script>
    $(function () {
      $(" #example1").DataTable({ "responsive" : true, "lengthChange" : false, "autoWidth" : false, "buttons" : ["copy", "csv" , "excel" , "pdf" , "print" , "colvis" ] }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)'); $('#example2').DataTable({ "paging" : true, "lengthChange" : false, "searching" : false, "ordering" : true, "info" : true, "autoWidth" : false, "responsive" : true, }); }); </script>
    @endsection
