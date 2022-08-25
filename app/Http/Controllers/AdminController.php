<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Session;

class AdminController extends Controller
{
    

    public function login()
    {
        return view('1001a.login');
    }

    public function loginProcess(Request $request)
    {
        $admin = Admin::where('adminID', '=', $request->username)->first();
        if($customer) {
            if(Hash::check($request->password, $admin->adminPass)) {
                $request->session()->put('loginID', $admin->adminID);
                return redirect('admin');
            } else {
                return back()->with('fail', 'Password not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered!');
        }        
    }

    public function logout()
    {
        if(Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('products');
        }
    }
}
