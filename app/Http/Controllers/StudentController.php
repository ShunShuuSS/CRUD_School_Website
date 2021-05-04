<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index()
    {
        return Redirect::to('/students');
    }
    public function student_view()
    { 
        $response = Http::get('http://127.0.0.1:3000/api/students');
        return view('pages/student_data')
        ->with('students', $response->json());
    }

    public function create_student_view()
    {
        return view('pages/create_student');
    }

    public function create_student_post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required'
        ]);

        $response = Http::post('http://127.0.0.1:3000/api/students', [
            'name' => $request->name,
            'age' => $request->age
        ]); 
        return Redirect::to('/students');
    }

    public function edit_student_view($id)
    {
        $response = Http::get("http://127.0.0.1:3000/api/students/$id");
        return view('pages/edit_student')
        ->with('students', $response->json());
    }

    public function edit_student_post(Request $request, $id )
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
        ]);
        $response = Http::post("http://127.0.0.1:3000/api/students/$id", [
            'name' => $request->name,
            'age' => $request->age
        ]);
        return Redirect::to('/students');
    }

    public function delete_student($id)
    {
        $response = Http::delete("http://127.0.0.1:3000/api/students/$id");
        return Redirect::to('/students');
    } 
    // student view data list 
    // teacher view data list 
    // classroom view data list
    // create student
    // create teacher
    // create classroom
    // edit teacher
    // edit student
    // edit classroom
    
    
}
