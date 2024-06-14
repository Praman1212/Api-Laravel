<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function viewPage()
    {
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



    public function show($id)
    {
        $student = Student::find($id);
        if ($student) {
            $data = [
                'status' => 200,
                'student' => $student
            ];
            return response()->json($data);
        } else {
            $data = [
                'status' => 500,
                'message' => 'Something went wrong'
            ];
            return response()->json($data);
        }
    }
    public function edit($id)
    {
        $student = Student::find($id);
        if ($student) {
            $data = [
                'status' => 200,
                'student' => $student
            ];
            return response()->json($data);
        } else {
            $data = [
                'status' => 500,
                'message' => 'Something went wrong'
            ];
            return response()->json($data);
        }
    }


    public function store(Request $request)
    {


        try {
            $student = $request->only([
                'name',
                'email',
                'phone',
                'password',
                'is_active',
                'image',
                'ckeditor'
            ]);

            $student_data = Student::create($student);

            $data = [
                'status' => 200,
                'student' => $student_data
            ];

            return response()->json($data, 200);
        } catch (\Exception $e) {

            return response()->json([
                'status' => 500,
                'error' => 'Server error: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function update(Request $request, $id)
    {
        $data = $request->only([
            'name',
            'email',
            'phone',
            'password',
            'is_active',
            'image',
            'ckeditor'
        ]);
        if($data){
            $student_update = Student::find($id)->update($data);

            $student = [
                'status' => 200,
                'student_update' => $student_update
            ];
    
            return response()->json($student);

        }
        else{
            $student = [
                'status'=> 500,
                'message'=> 'Something went wrong'
            ];
            return response()->json($student);
        }
       
    }
}
