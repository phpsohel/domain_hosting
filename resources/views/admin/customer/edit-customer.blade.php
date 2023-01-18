@extends('admin.master')
@section('title', 'Edit Customer')
<!-- Theme style -->
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Customer</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="modal-body"  style="padding: 0px;">
                        <form action="{{route('admin.update-customer',$edit->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="card " style="padding: 30px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Name<span style="color:red;"> *</span></label>
                                                <input type="text" name="name" value="{{$edit->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter  Name">
                                            </div>
                                            @if($errors->has('name'))
                                            <span class="text-danger">{{$errors->first('name')}}</span>
                                            @endif()
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Company</label>
                                                <input type="text" name="company" value="{{$edit->company}}" class="form-control" id="exampleInputEmail1" placeholder="Company Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email-1<span style="color:red;"> *</span></label>
                                                <input type="email" name="email_1" value="{{$edit->email_1}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                                            </div>
                                            @if($errors->has('email_1'))
                                            <span class="text-danger">{{$errors->first('email_1')}}</span>
                                            @endif()
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email-2</label>
                                                <input type="email" name="email_2" value="{{$edit->email_2}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone-1<span style="color:red;"> *</span></label>
                                                <input type="number" name="phone_1" value="{{$edit->phone_1}}" class="form-control" id="exampleInputPassword1" placeholder="01...">
                                            </div>
                                            @if($errors->has('phone_1'))
                                            <span class="text-danger">{{$errors->first('phone_1')}}</span>
                                            @endif()
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone-2</label>
                                                <input type="number" name="phone_2" value="{{$edit->phone_2}}" class="form-control" id="exampleInputPassword1" placeholder="01...">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Website<span style="color:red;"> *</span></label>
                                                <input type="text" name="website" value="{{$edit->website}}" class="form-control" id="exampleInputPassword1" placeholder="www.com">
                                            </div>
                                            @if($errors->has('website'))
                                            <span class="text-danger">{{$errors->first('website')}}</span>
                                            @endif()
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <input type="text" name="address" value="{{$edit->address}}" class="form-control" id="exampleInputPassword1" placeholder="Dhaka">
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

    </div>

</section>
@endsection
