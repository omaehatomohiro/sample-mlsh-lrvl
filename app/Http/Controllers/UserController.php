<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function add(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();
        return redirect('/');
    }

    public function test1(){
        $user = User::first();
        $user->name = 'ok';
        //$user->save();
        
        /**
         * update only meliesearch db
         */
        $user->searchable();
        return redirect('/');
    }

    public function update(){

    }
}
