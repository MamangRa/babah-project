<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function home()
    // {
    //     return view('admin.login');
    // }
    public function index()
    {
        if(!Session::get('login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin/admin');
        }
    }
    public function login(){
        return view('admin/login');
    }
    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = admin::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama',$data->nama);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('admin/admin');
            }
            else{
                return redirect('admin/login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('admin/login')->with('alert','Password atau Email, Salah!');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('admin/login')->with('alert','Kamu sudah logout');
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
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
