     <div class="modal fade" id="edit-user{{ $user->id }}">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title text-center">Edit User </h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <p class="text-danger">The field labels marked with * are required input fields.</p>
                     <form action="{{ route('user.update', $user->id)}}" method="POST">
                         @csrf
                         <div class="form-group">
                             <label>Name </label>
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                 </div>
                                 <input type="text" name="name" value="{{ $user->name ?? '' }}" class="form-control">
                             </div>
                         </div>
                         <div class="form-group">
                             <label>Email <span class="text-danger">*</span></label>
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                                 </div>
                                 <input type="email" name="email" value="{{ $user->email ?? '' }}" class="form-control">
                             </div>
                             @if($errors->has('email'))
                             <span class="text-danger">{{ $errors->first('email')}}</span>
                             @endif
                         </div>
                         <div class="form-group">
                             <label>Change Password <span class="text-danger">*</span></label>
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                 </div>
                                 <input type="password" name="password"  class="form-control">
                             </div>
                             @if($errors->has('password'))
                             <span class="text-danger">{{ $errors->first('password')}}</span>
                             @endif
                         </div>
                         <div class="form-group">
                             <label>Role <span class="text-danger">*</span></label>
                             <div class="input-group">
                                 <select class="form-control" name="role_id">
                                     @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{  $role->id  == $user->role_id ? 'Selected': '' }}>{{ $role->name ?? ''}} </option>
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
                                 <button type="submit" class="btn btn-primary">Update</button>
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

