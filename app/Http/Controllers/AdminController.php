<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index'); 
    }

    public function login()
    {
        return view('admin.login');
    }

    public function addLogin(Request $request){
        if(auth()->check() && auth()->user()->admin == 1)
      {
        return redirect('/admin/index');   
       }
    }
}
