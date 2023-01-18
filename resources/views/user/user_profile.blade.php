@extends('admin.master')
@section('title', 'User Profile')
<!-- Theme style -->
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card card-danger">
            <div class="card-body">
                <h2 class="text-center">User Profile</h2>
                <form action="{{ route('user.update_profile', $user->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            </div>
                            <input type="text" name="name" value="{{ $user->name ?? '' }}" required class="form-control" data-mask>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" value="{{ $user->email ?? '' }}" required class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label>Old Password <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            </div>
                            <input type="password" name="old_password" class="form-control" data-mask>
                        </div>
                        @if($errors->has('old_password'))
                        <span class="text-danger">{{ $errors->first('old_password')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>New Password <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>

                            </div>
                            <input type="password" name="new_password" required class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>

                        </div>
                        @if($errors->has('new_password'))
                        <span class="text-danger">{{ $errors->first('new_password')}}</span>
                        @endif

                    </div>
                        <div class="form-group">
                            <label>Confirm Password <span class="text-danger">*</span></label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                </div>
                                <input type="password" name="confirm_password" required class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>

                            </div>
                            @if($errors->has('confirm_password'))
                            <span class="text-danger">{{ $errors->first('confirm_password')}}</span>
                            @endif
                        </div>

                    <div class="form-group">
                        <label></label>
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection

