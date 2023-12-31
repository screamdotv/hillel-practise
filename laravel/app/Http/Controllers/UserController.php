<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        
        return view('user.index', [
            'users' => $users,
        ]);
    }

    public function item($id){
        $user = User::findOrFail($id);
        
        return view('user.item', [
            'user' => $user,
        ]);
    }
}
