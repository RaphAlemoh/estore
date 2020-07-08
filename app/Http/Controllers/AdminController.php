<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
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

    public function settings(){
        return view('admin.settings');
    }

    public function checkPwd(Request $request){
            $current_pwd = $request->get('current_pwd');
            $check_password = Auth::user();
            if(Hash::check($current_pwd, $check_password->password)){
                echo "true";
            }else{
                echo "false";
            }            
    }
    
    public function updatePwd(Request $request){
        if($request->isMethod('post')) {
            $this->validate($request, [
                'current_pwd' => ['required', 'string', 'min:6'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ]);
    
            $data = $request->all();
            $check_email = User::select('email')->where('email', Auth::user()->email)->first();
            $check_password = Hash::check($data['current_pwd'], Auth::user()->password);
            if($check_password && $check_email){
                $password = bcrypt($data['password']);
                $updatePassword = User::where('email', $check_email['email'])->update(['password' => $password]);
                if($updatePassword){
                    return redirect('/admin/settings')->with('flash_message_success', 'Password Updated successfully');
                }else{
                    return redirect('/admin/settings')->with('flash_message_success', 'Password Update not successfully');
                }
            }
        }else{
            return view('admin.settings');
        }
    
    }


    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message', 'Logged Out');

    }
}
