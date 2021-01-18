<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\LibController;
use App\Models\Info;
use Session;
class LibController extends Controller
{
    function index()
    {
        return view('login');
    }
    function list() 
    {
        $data= Info::all();
        return view('list', ["data" =>$data]);
    }
	

	function login() 
    {
        $data= Info::all();
        return view('login', ["data" =>$data]);
    }
	
    function add(Request $req)
    {
        //return $req->input();
        $info = new Info;
        $info->id=$req->input('id');
        $info->name=$req->input('name');
        $info->email=$req->input('email');
        $info->address=$req->input('address');
        $info->save();
        $req->session()->flash('status', 'Entered succesfully');

        return redirect ('list');
    }
	
    function delete($id)
    {
        Info::find($id)->delete();
        Session::flash('status', 'Deleted succesfully');

        return redirect ('list');
    }
	
    function edit($id)
    {
        $data= Info::find($id);
        return view('edit',['data'=>$data]);
    }
	
    function update(Request $req)
    {
        //return $req->input();
        $info = Info::find($req->id);
        $info->id=$req->input('id');
        $info->name=$req->input('name');
        $info->email=$req->input('email');
        $info->address=$req->input('address');
        $info->save();
        $req->session()->flash('status', 'Updated succesfully');
        return redirect ('list');
    }
	
    function login2(Request $req)
    {
        //$info = new Info;
        //$info->id=$req->input('id');
        //$info->email=$req->input('email');
        //$info->password=$req->input('password');
        //$info->save();
        //$req->session()->flash('status', 'Login succesfully');

        return redirect ('list');
    }
}
