<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\RegController;
use App\Models\Register;
use Session;
class RegController extends LibController
{
function register(Request $req)
    {
        $info = new Info;
        $info->id=$req->input('id');
        $info->name=$req->input('name');
        $info->email=$req->input('email');
        $info->address=$req->input('address');
        $info->password=$req->input('password');
        $info->save();
        $req->session()->flash('status', 'Entered succesfully');

        return redirect ('list');
        //return view('register');
    }
}