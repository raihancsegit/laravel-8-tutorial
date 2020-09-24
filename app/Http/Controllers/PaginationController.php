<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PaginationController extends Controller
{
    public function alluser(){
        $users = User::paginate(10);
        return view('users',compact('users'));
    }
}
