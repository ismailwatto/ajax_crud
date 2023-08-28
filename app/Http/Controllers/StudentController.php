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
        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->course = $request->course;
        $student->save();
        return response()->json(['res'=>'student created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
        $students = Student::all();
        return response()->json(['students' => $students]);
    }    
    /**
     * Show the form for editing the specified resoce.
     */
    public function edit($id)
    {
        $students=Student::where('id',$id)->get();
        return redirect('student.update',['students'=>$students]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->course = $request->course;
        $student->save();
        return response()->json(['result'=>'student updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $students=Student::where('id',$id)->delete();
        return response()->json(['result'=>'student deleted successfully']);
    }
}
