<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class ClassroomController extends Controller
{
    public function classroom_view()
    {
        $response = Http::get('http://127.0.0.1:3000/api/classrooms');
        return view('pages/classroom_data')
        ->with('classrooms', $response->json());
    }

    public function create_classroom_view()
    {
        return view('pages/create_classroom');
    }

    public function create_classroom_post(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $response = Http::post('http://127.0.0.1:3000/api/classrooms', [
            'name'=> $request->name,
            'description' => $request->description
        ]);
        return Redirect::to('/classrooms');
    }

    public function edit_classroom_view($id)
    {
        $response = Http::get("http://127.0.0.1:3000/api/classrooms/$id");
        return view('pages/edit_classroom')
        ->with('classrooms', $response->json());
    }

    public function edit_classroom_post(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $response = Http::post("http://127.0.0.1:3000/api/classrooms/$id", [
            'name'=> $request->name,
            'description' => $request->description
        ]);
        return Redirect::to('/classrooms');
    }

    public function delete_classroom($id)
    {
        $response = Http::delete("http://127.0.0.1:3000/api/classrooms/$id");
        return Redirect::to('/classrooms');
    }
}
