<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Blog extends Controller
{
   public function home(){
       return view('pages/index');
   }
   public function login(){
       return view('pages/login');
   }
   public function register(){
       return view('pages/register');
   }
   public function formblog(){
        // make blog deployment - method post, make CRUD features on the blog for registered user
        //validate post, store post - make migration, and print the post to the hompage 
   }

   //processing data from register form
   public function store(Request $request){
       //validate form
       $this -> validate ($request, [
           'name' => 'required|max:255',
           'surname' => 'required|max:255',
           'email' => 'required|email|max:255',
           'password' => 'required|confirmed',
           'channel-img' => 'image|max:2048'
       ]
       );
        //store user
        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'channel-img' => $request->channel-img
        ]);

        //loging in after registration
        auth()->attempt($request->only('name', 'password'));

        //redirecet to home page
        return redirect()->route('home');
   }

    //processing data from login form
    public function loginstore(Request $request){
       //validate form
       $this -> validate ($request, [
        'name' => 'required',
        'password' => 'required'
       ]);

       //loging in
       auth()->attempt($request->only('name', 'password'));

       //redirecting to home page
       return redirect()->route('home');
    }

   //funkcija listblogs() bi trebala da koristi foreach petlju kroz bazu i da vraca podatke u obliku slike, imena i naslova bloga

     public function listblogs(){

    }


    //log out
    public function logout(){
        auth()->logout();
        return redirect()->route('/');
    }
}
