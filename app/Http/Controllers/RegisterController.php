<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
        //obtener campo en particular
        //dd($request->get('email'));
        $this->validate($request,[
            'name'=>'required|min:3|max:30',
            'username'=>'required|unique:users|min:3|max:20',
            'email'=>'unique:users|email|max:60',
            'password'=> 'required'
        ]);
    }
}
