<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountRescueController extends Controller
{
    //acceder a vista para recuperar cuenta
    public function index(){
        return view('auth.accountRescue');
    }

    public function store(){
        dd('Recuperar cuenta..');
    }
}
