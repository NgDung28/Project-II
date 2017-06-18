<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(){

        return view('admin.users.add');
    }

    public function editUser(){
        return view('admin.users.edit');
    }

    public function getlistUser(){
        return view('admin.users.list');
    }
}
