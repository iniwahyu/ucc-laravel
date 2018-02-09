<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }else{
            return '<script>alert("Username Password Salah");</script>';
        }

    }
    
    function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    function register(Request $request){
        $user = new User();
        $user->name       = $request->input('name');
        $user->email      = $request->input('email');
        $user->password   = bcrypt($request->input('password')) ;
        
        $email          = $request->email;
        $name           = $request->name;
        $password       = $request->password;
        $passconfirm    = $request->passconfirm;
        if($email == null || $name == null || $password == null){
            
            return "Form masih kurang, silahkan isi ulang <a href='register'>Kembali</a>"; 
        }

        $data = User::where('name', $name)->first();
        if($data != null){
            return "Username sudah ada <a href='register'>Kembali</a>";
        }

        $dataemail = User::where('email', $email)->first();
        if($dataemail != null){
            return "Email tidak boleh sama <a href='register'>Kembali</a>";
        }
        
        
        // if($password != $passconfirm){
        //     return "Password tidak sama <a href='register'>Kembali</a>";
        // }

        

        // Auth::user
        // Auth::loginUsingId($user->id);

        // $datapassword = User::find($user);
        // $hasher = app('hash');
        // if ($hasher->check('passwordToCheck', $user->password)) {
        //     return "Sukses";
        // }else{
        //     return "Password tidak sama <a href='register'>Kembali</a>";
        // }
        
        $user->save();
        
        $id = $user->id;
        Auth::loginUsingId($id);

        return redirect('/');
  
    }

    // function peserta(){
    //     return view ('peserta');
    // }

}
