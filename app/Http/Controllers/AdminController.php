<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
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

    public function login(Request $request)
    {
        if ( Auth::check() ) {
            return redirect()->intended('home');
        }

        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        $credentials = ['email' => $request->email, 'password' => $request->password];

        if (Auth::attempt($credentials)) {

            return redirect()->intended('admin-home');
        } else {
            return redirect()->back()->with("msg", "Acesso negado para estas credenciais");
        }
    }

    public function home()
    {
        return view('admin-home');
    }

    public function new()
    {
        return view('admin-new');
    }

    public function newPost(Request $request)
    {

        Storage::disk('local')->put($request->img, 'Contents');

        $image_path = asset("storage/$request->img");
        DB::insert("insert into posts (title,category,image,description,github) values('$request->title', '$request->category', '$image_path', '$request->description', '$request->github')");
        
        return redirect()->back()->with("msg", "Salvo com sucesso");
    }
}
