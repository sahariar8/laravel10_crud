<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view("student.index",["students" => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'roll'=>'required|numeric',
            'email'=> 'required|email',
            'address'=> 'required|string',
        ]);


        $newStudent = Student::create($data);
        return redirect()->route('students')->with('success','Student Add Successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Student $Student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $Student)
    {
        return view('student.edit',['student'=> $Student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $Student)
    {
        $data = $request->validate([
            'name'=>'required',
            'roll'=>'required|numeric',
            'email'=> 'required|email',
            'address'=> 'required|string',
        ]);

        $Student->update($data);
        return redirect()->route('students')->with('success','Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $Student)
    {
      $Student->delete();
      return redirect()->route('students')->with('success1','Student Deleted Successfully');
    }
}
