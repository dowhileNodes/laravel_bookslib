<?php

namespace App\Http\Controllers;
use App\Http\Controllers\LibController;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller{


	//Ilagay ung registration ni user sa database
	function doRegister(Request $req){
		$register = new User;
        $register->fullname=$req->input('fullname');
        $register->email=$req->input('email');
		$register->password=$req->input('password');
        $register->save();
		return redirect ('redirectLogin');
	}

	//iredirect si user kay signup page
	function showRegisterView() {
        $data= User::all();
        return view('register');
    }

	//iredirect pabalik si user kay login at magpakita ng registration successful alert
	function redirectLogin(Request $req){
		$req->session()->flash('status', 'Registration successfull!');
        return view('login');
	}

	//temporary lang muna, para makita kung nagreregister ba
	function showUserList() {
        $data= User::all();
        return view('userlist', ["data" =>$data]);
    }
	
	function deleteUser($id){
        User::find($id)->delete();
        Session::flash('status', 'Deleted succesfully');
        return redirect ('showUserList');
    }
	
	
	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
