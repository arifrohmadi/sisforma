<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::get();
        return view('home.view', compact('title', 'content', 'users'));
    }

    public function show($id)
    {
        $users = \App\User::all();
        $showById = \App\Profile::find($id);

        return view('home.edit',compact('showById','users'));
    }

    public function update(Request $request, $id)
    {
        $validate = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'angkatan' => 'required'
        ],

        $after_update = [
                'alert' => 'Danger',
                'title' => 'Tunggu!',
                'text-1' => 'Ada kesalahan',
                'text-2' => 'Silakan coba lagi.'
            ]);
    
    if($validate->fails()){
            return redirect()->back()->with('after_update', $after_update);
        }

    $after_update = [
            'alert' => 'success',
            'title' => 'Good Job!',
            'text-1' => 'Update berhasil',
            'text-2' => '.'
        ];

     $data1 = [
        'name' => $request->name,
        'email' => $request->email,
        ];   
     
     $data2 = [
        
        'jenis_kelamin' => $request->jenis_kelamin,
        'pekerjaan' => $request->pekerjaan,
        'alamat' => $request->alamat,
        'telp' => $request->telp,
        'linkedin' => $request->linkedin,
        'angkatan' => $request->angkatan
    ]; 
    
    \App\User::where('id',$id)->update($data1);
    \App\Profile::where('id',$id)->update($data2);

    return redirect()->to('home')->with('after_update',$after_update);
    
    }       
}
