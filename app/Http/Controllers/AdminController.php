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
            return redirect()->intended('admin-home');
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
        $posts = DB::select('select * from posts');
        return view('admin-home', ['posts' => $posts]);
    }

    public function new()
    {
        return view('admin-new');
    }

    public function newPost(Request $request)
    {

        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $extension = $request->img->extension();
        $request->image->storeAs('/public', $request->img.".".$extension);
                $url = Storage::url($request->img.".".$extension);
                $file = File::create([
                   'name' => $validated['img'],
                    'url' => $url,
                ]);


        $image_path = asset("/storage/$request->img");
        DB::insert("insert into posts (title,category,image,description,github) values('$request->title', '$request->category', '$url', '$request->description', '$request->github')");
        
        redirect()->back()->with("msg", "Salvo com sucesso");

        $posts = DB::select('select * from posts');
        return view('admin-home', ['posts' => $posts]);
    }
}
