<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\User;
use App\Models\admins2;
use App\Http\Controller\StudentController;
use Hash;
use Session;

class admincontrol extends Controller
{
    public function index2() {
        $data = admin::get();
        return view('admin-list', compact('data'));
    }
    public function loginregistrar() {
        return view('login-registrar');
    }
    public function logregistrars(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',


        ]); 
        $adm = admin::where('email', '=', $request->email)->first();
        if ($adm) {
            if(Hash::check($request->password, $adm->password)){
                $request->session()->put('loginId',$adm->id);
                return redirect('student-list');
            } else {
                return back()->with('failed', 'Password not matches');
            }
        } else {
            return back()->with('failed', 'This email is not registered!');
        }
    }

    
    public function regregister(){
        return view('register-registrar');

    }
    public function saveregistrar (Request $request){
        $request->validate([
            'id' => 'required|',
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:15',


        ]);

        $id = $request->id;
        $username = $request->username;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $password = $request->password;
        

        $adm = new Admin();
        $adm->id = $id;
        $adm->username = $username;
        $adm->firstname = $firstname;
        $adm->lastname = $lastname;
        $adm->email = $email;
        $adm->password = Hash::make($request-> password);
        $adm->save();

        return redirect()->back()->with('successs', 'Registrar Added Successfully!');

    }
    public function loginadmin() {
        return view('admins-login');
    }
}

