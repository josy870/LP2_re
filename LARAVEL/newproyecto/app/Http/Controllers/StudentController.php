<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:45',
            'lastname' => 'required|string|max:45',
            'code' => 'required|string|max:45|unique:students',
            'gender' => 'required|in:male,female,other',
            'document' => 'required|string|max:45|unique:students',
            'email' => 'required|string|email|max:45|unique:students',
            'cellphone' => 'required|string|max:45',
            'birthdate' => 'required|date',
        ]);

        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    public function show($id)
    {
        return Student::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'firstname' => 'sometimes|required|string|max:45',
            'lastname' => 'sometimes|required|string|max:45',
            'code' => 'sometimes|required|string|max:45|unique:students,code,' . $id,
            'gender' => 'sometimes|required|in:male,female,other',
            'document' => 'sometimes|required|string|max:45|unique:students,document,' . $id,
            'email' => 'sometimes|required|string|email|max:45|unique:students,email,' . $id,
            'cellphone' => 'sometimes|required|string|max:45',
            'birthdate' => 'sometimes|required|date',
        ]);

        $student->update($request->all());
        return response()->json($student, 200);
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return response()->json(null, 204);
    }
}
