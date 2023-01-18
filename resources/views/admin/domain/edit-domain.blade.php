@extends('admin.master')
@section('title', 'Edit Domain')
<!-- Theme style -->
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Domain</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="modal-body">

                        <form action="{{route('admin.update-domain',$edit->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="card " style="padding: 30px;">
                                    <div class="row">
                                        <div class="col-md-6" data-select2-id="30">
                                            <div class="form-group" data-select2-id="29">
                                                <label>Customer Name</label>
                                                <select name="cust_id" class="form-control" style="width: 100%;">
                                                    @foreach ($customers as $customer)
                                                    <option value="{{ $customer->id }}" {{$customer->id == $edit->cust_id ? 'Selected': ''}}>{{ $customer->name ?? '' }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('cust_id'))
                                                <span class="text-danger">{{$errors->first('cust_id')}}</span>
                                                @endif()

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Domain Name <span style="color:red;"> *</span></label>
                                                <input type="text" name="domain_name" value="{{$edit->domain_name }}" class="form-control" id="exampleInputEmail1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Author Name</label>
                                                <input type="text" name="domain_author_name" value="{{$edit->domain_author_name}}" class="form-control" id="exampleInputEmail1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Yearly Price<span style="color:red;"> *</span></label>
                                                <input type="text" name="domain_yearly_price" value="{{$edit->domain_yearly_price}}" class="form-control" id="exampleInputEmail1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Start Date</label>
                                                <input type="date" name="domain_start_date" value="{{$edit->domain_start_date}}" class="form-control" id="exampleInputEmail1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Exp: Date</label>
                                                <input type="date" name="domain_expiry_date" value="{{$edit->domain_expiry_date}}" class="form-control" id="exampleInputPassword1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Hosting Space</label>
                                                <input type="text" name="hosting_space" value="{{$edit->hosting_space}}" class="form-control" id="exampleInputPassword1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Hosting Author</label>
                                                <input type="text" name="hosting_author_name" value="{{$edit->hosting_author_name}}" class="form-control" id="exampleInputPassword1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Hosting Start Date</label>
                                                <input type="date" name="hosting_start_date" value="{{$edit->hosting_start_date}}" class="form-control" id="exampleInputPassword1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Hosting Exp: Date</label>
                                                <input type="date" name="hosting_expiry_date" value="{{$edit->hosting_expiry_date}}" class="form-control" id="exampleInputPassword1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Hosting Yearly Price</label>
                                                <input type="text" name="hosting_yearly_price" value="{{$edit->hosting_yearly_price}}" class="form-control" id="exampleInputPassword1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            {{-- <div class="form-group">
                                                <label for="exampleInputPassword1">Hosting Yearly Price</label>
                                                <input type="text" name="hosting_yearly_price" value="{{$edit->hosting_yearly_price}}" class="form-control" id="exampleInputPassword1">
                                        </div> --}}
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
