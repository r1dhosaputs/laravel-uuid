<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $data = Student::get();
        return view('student.index', compact('data'));
    }

    public function show(string $id)
    {
        $data = Student::findOrFail($id);
        return view('student.show', compact('data'));
    }
}
