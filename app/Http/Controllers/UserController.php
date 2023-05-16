<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Admin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = Admin::orderBy('created_at', 'DESC')->paginate(5); //instead SQL select * from categories
        return view('admin.all_user')->with('users', $users);
    }

    public function add_user()
    {
        return view('admin.add_user');
    }
    public function getedituser($user_id)
    {
        $user = Admin::find($user_id);
        return view('admin.edit_user', ['user' => $user]);
    }
    public function deleteuser($user_id)
    {
        $user = Admin::find($user_id);
        $user->delete();
        Toastr::success('Success', 'Xóa thành công!');
        return redirect('admin/all-user');
    }
    public function postedituser(Request $request)
    {
        $user = Admin::find($request->user_id);
        $user->admin_name = $request->user_name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->admin_phone = $request->user_phone;
        $user->save();
        // Alert::success('Success Title', 'Success Message');
        Toastr::success('Success', 'Chỉnh sửa thành công!');
        // @include('sweetalert::alert')
        return redirect('admin/all-user');
    }
    public function add_user_button(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'email' => 'required|email|unique:tbl_admin,email',
            'password' => 'required|min:8|max:32',
            'user_phone' => 'required|numeric'
        ]);
        $user = new Admin();
        $user->admin_name = $request->user_name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->admin_phone = $request->user_phone;
        $user->save();
        Toastr::success('Success', 'Thêm user thành công!');
        // @include('sweetalert::alert')
        return redirect('admin/all-user');
    }
    function finduser(Request $request)
    {
        $search = $request->get('search_query');
        if ($search != '') {
            $users = Admin::where(function ($query) use ($search) {
                $query->where('admin_name', 'like', '%' . $search . '%');
            })->paginate(5);
            $users->appends(['search_query' => $search]);
        } else {
            $users = Admin::orderBy('created_at', 'DESC')->paginate(5);
        }
        return view('admin.all_user')->with('users', $users);
    }
    
}
