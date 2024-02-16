<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class User extends Controller
{
    public function create()
    {
        return view('User.create');
    }
    public function login()
    {
        return view('User.login');
    }
    public function index()
    {
        return view('User.index');
    }
}
