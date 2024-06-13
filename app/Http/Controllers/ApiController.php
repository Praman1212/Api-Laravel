<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function viewPage(){
        return view('index');
    }
    public function index()
    {
        $student = Student::all();
        $data = [
            'status' => 200,
            'student' => $student
        ];
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        try {
            $student = $request->only([
                'name',
                'email',
                'phone'
            ]);

            $student_data = Student::create($student);

            $data = [
                'status' => 200,
                'student' => $student_data
            ];

            return response()->json($data, 200);
        } 
        catch (\Exception $e) {

            return response()->json([
                'status' => 500,
                'error' => 'Server error: ' . $e->getMessage(),
            ], 500);
        }
    }
}
