<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SesionsController extends Controller {

    public function create(){

        return view('auth.login');
}

public function store() {

    if(auth()->attempt(request(['email', 'password'])) ==false){
return back()->withErrors([
    'mesage'=> 'the email or password incorrect,please try again',
]);
}
return redirect()->to('/');
}

public function destroy(){
auth()->logout();
return redirect()->to('/');
}
}