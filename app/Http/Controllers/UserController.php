<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "index ali";
    }
    public function show(){
        return "show ali";
    }  
    // public function index(){
    //     return view('users.index');
    // }
    public function store( Request $request){
        // return  view('users.index');
        // $token = $request->session()->token();
        // $token = csrf_token();
        // return ($token);     
        return $request;              
    }
}
