<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => [
            'login',
            'register'
        ]]);
    }

    public function index(){
        echo 'admin';
    }

    public function login(){
        return view('admin.login');
    }

    public function register(){
        echo 'register';
    }
}
