<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\ContactUs;
use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;


class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function dologin(Request $request)
    {
        $data = $request -> validate([              //global helpar method
            'email'=> 'required | email',
            'password'=> 'required | string',
        ]);

        if(!auth()->guard('admin')-> attempt(['email'=> $data['email'],'password'=> $data['password']]))
        {
            return back();
        }
        else
        {
            return redirect(route('admin.settings.index'));

        }
    }

    public function logout()
        {
            auth()->guard('admin')-> logout() ;
            return redirect(route('admin.login'));

        }


}
