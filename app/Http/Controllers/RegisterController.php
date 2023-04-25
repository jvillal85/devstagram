<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //modificamos
        $request->request->add(['username' => Str::slug($request->username)]);

        //validacion de ingreso de datos
        $this->validate($request, [
            'name' => 'required|min:3|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //funciones para autenticar usuario
        //auth()->attempt([
        //    'email'=> $request->email,
        //    'password'=> $request->password
        //]);
        //otra forma de autenticar
        auth()->attempt($request->only('email','password'));

        //redireccionamos al usuario
        return redirect()->route('posts.index');
    }
}
