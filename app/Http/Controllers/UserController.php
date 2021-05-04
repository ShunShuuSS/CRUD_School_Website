<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function user_view()
    {
        $response = Http::get('http://127.0.0.1:3000/api/users');
        return view("pages/user_data")
        ->with('users', $response->json());
    }

    public function user_login_view()
    {
        $response = Http::get('http://127.0.0.1:3000/api/users');
        return view("pages/login_user")
        ->with('loginuser', $response->json());
    }

    public function user_login_post(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $response = Http::post("http://127.0.0.1:3000/api/users/login",[
            'email' => $request->email,
            'password' => $request->password
        ]);

        return $response;
    }

    public function user_register_view()
    {
        return view("pages/register_user");
    }

    public function user_register_post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $response = Http::post('http://127.0.0.1:3000/api/users/register',
        [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        return redirect::to('/users');
    }

    public function user_edit_view()
    {
        $response = Http::get("http://127.0.0.1:3000/api/users");
        return view("pages/edit_user")
        ->with('users', $response->json());
    }

    public function user_edit_post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $response = Http::post("http://127.0.0.1:3000/api/users/edit",
        [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return $response;
    }

    public function user_delete_view()
    {
        return view("pages/delete_user");
    }

    public function user_delete_post(Request $request)
    {
        $response = Http::post('http://127.0.0.1:3000/api/users/delete',
        [
            'email' => $request->email
        ]);

        return $response;
    }
}