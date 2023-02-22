<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\User;

class RegisterController extends Controller{

public function create(){

    return view('auth.register');
}

 public Function store() {

    $this->validate(request(),[ 
        'name'=> 'required',
        'email'=> 'required|email',
        'password'=> 'required|confirmed',

    ]);


    $user=User::create(request(['name', 'email', 'password']));
    auth()->login($user);
    return redirect()->to('/');
}
}