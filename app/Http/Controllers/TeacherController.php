<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    
    public function teacher_view()
    {
        $response = Http::get('http://127.0.0.1:3000/api/teachers');
        return view('pages/teacher_data')
        ->with('teachers', $response->json());
    }

    public function create_teacher_view(){
        return view('pages/create_teacher');
    }

    public function create_teacher(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required'
        ]);

        $response = Http::post('http://127.0.0.1:3000/api/teachers', [
            'name'=>$request->name,
            'age' => $request->age
        ]);

        return Redirect::to('/teachers');
    }

    public function edit_teacher_view($id){
        $response = Http::get("http://127.0.0.1:3000/api/teachers/$id");

        return view('pages/edit_teacher')
        ->with('teacher', $response->json());
    }

    public function edit_teacher(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'age' => 'required'
        ]);

        $response = Http::post("http://127.0.0.1:3000/api/teachers/$id", [
            'name'=>$request->name,
            'age' => $request->age
        ]);

        return Redirect::to('/teachers');
    }

    public function delete_teacher($id){
        $response = Http::delete("http://127.0.0.1:3000/api/teachers/$id");
        return Redirect::to('/teachers');
    }
}