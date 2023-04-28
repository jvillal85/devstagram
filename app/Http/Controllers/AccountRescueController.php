<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountRescueController extends Controller
{
    //acceder a vista para recuperar cuenta
    public function index(){
        if(!auth()){
            return view('auth.accountRescue');
        }
        //
        dd('Recuperar cuenta..');
    }

    public function store(){
        dd('Recuperar cuenta..');
    }
}
