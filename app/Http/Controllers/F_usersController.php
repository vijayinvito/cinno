<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\F_user;

class F_usersController extends Controller
{
    
    public function register(Request $req)
    {
        
        $validation = Validator::make($req->all(),[
            'company_name' => 'required|unique:frontend_users',
            'city' => 'required',
            'state' => 'required',
            'phone' => 'required|unique:frontend_users',
            'email' => 'required|unique:frontend_users',
            'password' => 'same:confirm_password'
        ]);
        
        if($validation->fails())
        {
            return back()->withErrors($validation)->withInput();
        }
        else
        {
            $insertdata = array(
                'company_name' => $req->company_name,
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'address' => $req->address,
                'city' => $req->city,
                'state' => $req->state,
                'zip' => $req->zip,
                'phone' => $req->phone,
                'email' => $req->email,
                'password' => Hash::make($req->password),
            );
            if(F_user::insert($insertdata))
            {
                // return redirect()->route('f_dashboard', ['login' => 'yes','data' => $req ]);
                $req->session()->put('data', $insertdata);
                return redirect('f_dashboard');
            }
            else
            {
                return back()->withInput();
            }

        }
    }


    public function signin(Request $req)
    {
        $find = F_user::where([
                ['email',$req->email],
            ])->first();
        
        if($find)
        {
            $pass = Hash::check($req->password, $find->password);
            if($pass)
            {
            $req->session()->put('data', $find);
            return redirect('f_dashboard');
            }
            else
            {
                return redirect()->back()->with('error', 'Incorrect credentials');   
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Invalid User');
        }
    }
}
