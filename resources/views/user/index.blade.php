@extends('admin.master')
@section('title', 'All  User')

@section('content')
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center">Add User</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-danger">The field labels marked with * are required input fields.</p>
                                <form action="{{ route('user.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                            </div>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                            </div>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        @if($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Role <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select class="form-control" name="role_id">
                                                @foreach($roles as $key => $role)
                                                <option value="{{ $role->id  }}">{{ $role->name ?? '' }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if($errors->has('role_id'))
                                        <span class="text-danger">{{ $errors->first('role_id')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
    </div class="container">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i class="fa-regular fa-plus"></i> Add User</button>
                    <br>
                    <br>
                    <h1>All User </h1>
                </div>
                <div class="col-sm-6" style=""></div>
            </div>
        </div>
    </section>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                $i = 0;
                                @endphp
                                <tbody>
                                    @foreach( $users as $user)
                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $user->name ?? ''}}</td>
                                        <td>{{ $user->email ?? ''}}</td>
                                        <td>{{ $user->role_name ?? ''}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#edit-user{{ $user->id }}" style="color: #7c5cc4"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                                                    @if ($user->id <= 1)
                                                        <a href="{{ route('user.destroy',$user->id) }}" id="delete" class="btn btn-primary dropdown-item" style="color: #7c5cc4; display:none;"><i class="fa-solid fa-trash"></i> Delete</a>
                                                        @elseif($user->id > 1)
                                                        
                                                        <a href="{{ route('user.destroy',$user->id) }}" id="delete" class="btn btn-primary dropdown-item" style="color: #7c5cc4;"><i class="fa-solid fa-trash"></i> Delete</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('user.edit_modal')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</section>
@endsection