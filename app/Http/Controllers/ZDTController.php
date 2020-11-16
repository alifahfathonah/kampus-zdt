<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ZDTController extends Controller
{
    public function index()
    {
    	$title = 'Kampus Ngoding Santai Berkualitas';

    	return view('home', compact('title'));
    }

    public function register()
    {
    	$title = 'Daftar';

    	return view('auth.register', compact('title'));
    }

    public function register_proses(Request $req)
    {
        $this->validate($req, [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'nama' => $req->nama,
            'email' => $req->email,
            'password' => \Hash::make($req->password)
        ]);

        return redirect('/masuk')->with('sukses_register', 'Selamat anda telah berhasil register! Silahkan pilih program ya kak :)');
    }

    public function login()
    {
    	$title = 'Masuk';

    	return view('auth.login', compact('title'));
    }

    public function login_proses(Request $req)
    {
        $this->validate($req, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt(['email' => $req->email, 'password' => $req->password]))
        {
            return redirect('/');
        }else{
            return redirect('/masuk')->with('gagal_masuk', 'Email dan password anda salah!');
        }

    }

    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }
}
