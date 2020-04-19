<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use App\User;

class AdminController extends Controller
{
    public function login(Request $request){
            if($request->isMethod('post')) {
                $this->validate($request, [
                    'email' => 'required|string|max:255',
                    'password' => 'required|string|max:255',
                ]);
                $data = $request->all();
                if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
                    return redirect('admin/dashboard');
                }else{
                    return redirect('/admin')->with('error_message', 'Invalid Username or Password');
                }
            }
        return view('admin.login');
    }


    public function dashboard(){
        return view('admin.dashboard');
    }

    
    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message', 'Logged Out');

    }
}
