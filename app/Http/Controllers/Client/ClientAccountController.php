<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class ClientAccountController extends Controller
{
    public function index(Request $request)
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        $cus = Customer::find($request->customer_id);
        return view('client.accountInfo', ['customer' => $cus])->with(compact(
            'categoryASC',
            'brandASC'
        ));
    }

    public function passwordChange(Request $request)
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        $cus = Customer::find($request->customer_id);
        return view('client.accountPasswordChange', ['customer' => $cus])->with(compact(
            'categoryASC',
            'brandASC',
        ));
    }

    public function savechange(Request $request)
    {
        $cus = Customer::find($request->customer_id);
        if ($request->hasFile('account_avatar')) {
            $file = $request->file('account_avatar');
            $filename = $file->getClientOriginalName('account_avatar');
            $file->move('frontend/img/account', $filename);
            $cus->customer_avatar = '' . $filename;;
        }
        $cus->customer_name = $request->customer_name;
        $cus->customer_username = $request->customer_username;
        $cus->email = $request->email;
        $cus->customer_phone = $request->customer_phone;
        $cus->save();
        Toastr::success('Success', 'Chỉnh sửa thông tin thành công!');
        return back();
    }

    public function savechangepassword(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:8|max:32',
            'new_passwordConfirm' => 'required|same:new_password',
        ]);
        Alert::success('Đăng nhập thành công', 'Bạn giờ đây có thể mua hàng.');
        $cus = Customer::find($request->customer_id);
        $cus->password = \Hash::make($request->new_password);
        $cus->save();
        return back();
    }



    // $cus->save();
    // // Alert::success('Success Title', 'Success Message');
    // Toastr::success('Success', 'Chỉnh sửa thành công!');
    // // @include('sweetalert::alert')
    // return redirect('admin/all-customer');

}
