<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class CustomAurthController extends Controller
{
    public function login(){
        return view('aurth.Login');
    }
    public function registration(){
      return view('aurth.Registration');
    }
    public function registerUser(Request $request){
      $request->validate([
        'name'=> 'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:8|max:12'
      ]);

      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $res = $user->save();
      if($res){
          return back()->with('success','You have registered successfully');
      }else{
          return back()->with('fail','something wrong');
      }
    }
    public function loginuser(Request $request){
      $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:8|max:12'
      ]);

      $user = User::where('email','=',$request->email)->first();
      if($user){
        if(Hash::check($request->password,$user->password)){
          $request->session()->put('loginId',$user->id);
          return redirect('dashboard');
        }else{
          return back()->with('fail','OOps wrong password input!');
        }
      }else{
        return back()->with('fail','This email is not registered!');
      }


    }

}
