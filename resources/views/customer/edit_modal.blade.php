<div class="modal fade" id="edit_customer{{$customer->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger">The field labels marked with * are required input fields.</p>
                <form action="{{route('customers.update', $customer->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company</label>
                                    <input type="text" name="company" value="{{ $customer->company }}" class="form-control" id="exampleInputEmail1" placeholder="Company Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Name<span style="color:red;"> *</span></label>
                                    <input type="text" name="name" required value="{{ $customer->name }}" class="form-control" id="exampleInputEmail1" placeholder="Enter  Name">

                                </div>
                                @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif()
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email-1<span style="color:red;"> *</span></label>
                                    <input type="email" name="email_1" required value="{{ $customer->email_1 }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                                </div>
                                @if($errors->has('email_1'))
                                <span class="text-danger">{{$errors->first('email_1')}}</span>
                                @endif()
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email-2</label>
                                    <input type="email" name="email_2" value="{{ $customer->email_1 }}" class="form-control" id="exampleInputEmail1">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone-1<span style="color:red;"> *</span></label>
                                    <input type="number" name="phone_1" required value="{{ $customer->phone_1 }}" class="form-control" id="exampleInputPassword1">
                                </div>
                                @if($errors->has('phone_1'))
                                <span class="text-danger">{{$errors->first('phone_1')}}</span>
                                @endif()
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone-2</label>
                                    <input type="number" name="phone_2" value="{{ $customer->phone_2 }}" class="form-control" id="exampleInputPassword1">


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Website<span style="color:red;"> *</span></label>
                                    <input type="text" name="website" required value="{{ $customer->website }}" class="form-control" id="exampleInputPassword1" >

                                </div>
                                @if($errors->has('website'))
                                <span class="text-danger">{{$errors->first('website')}}</span>
                                @endif()
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" name="address" value="{{ $customer->address }}" class="form-control" id="exampleInputPassword1">


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
