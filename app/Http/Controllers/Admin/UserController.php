<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Container;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Hash;
use Session;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('users.*', 'roles.name as role_name')->join('roles', 'users.role_id', 'roles.id')->get();
        $roles = Role::get();
       return view('user.index', compact('users','roles'));
    //    if(auth()->user()->hasRole('admin'))
    //    {
    //        $users = User::select('users.*', 'roles.name as role_name')->join('roles', 'users.role_id', 'roles.id')->get();
    //         $roles = Role::get();
    //         view('user.index', compact('users','roles'));
    //    }
    //    else{
    //          $user = User::where('id', auth()->user()->id)->first();
    //          view('user.user_profile', compact('user'));
    //    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:5, max:10',
            'role_id' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->save();
        $notification = array(
                'message' => 'User Added Successfully',
                'alert-type' => 'success'
            );
        $user->assignRole($request->role_id);

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'email' => 'required',
            'password' => 'required|min:5, max:10',
            'role_id' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->save();
        $notification = array(
                'message' => 'User Updated Successfully',
                'alert-type' => 'success'
            );
       //$user->assignRole($request->role_id);

        $user->syncRoles($request->role_id);
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete  = User::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function user_profile()
    {
        $id = Auth::id();
        $user = User::find($id);
       return view ('user.user_profile', compact('user'));
    }
    public function update_profile(Request $request, $id)
    {
         $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'old_password' =>'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password'
        ]);
        $user = User::find($id);
        $user->name  =  $request->name;
        $user->email =  $request->email;
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->old_password, $hashedPassword)){
            $user->password = bcrypt($request->new_password);
            $user->save();
            Session::flush();
            $notification = array(
                    'message' => 'Password Change Successfully',
                    'alert-type' => 'success'
                );
            return redirect('/login')->with($notification);

            }else{
                $notification = array(
                    'message' => 'Please Enter Your Valid  Old Password!',
                    'alert-type' => 'success'
                );
                  return back()->with($notification);
            }
       return view ('user.user_profile', compact('user'));
    }
}
