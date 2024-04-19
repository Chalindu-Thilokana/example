<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {    
        

        $students = Student::all();
        
        return view("stu.home" , compact("students"));
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("stu.register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       //$student=Student::create($request->all());

         $student=Student::create([
             'Student_Name'=>$request->name,
             'Student_Grade'=>$request->grade,
              'birth_day'=>$request->birth,
              'Student_Parent_Name'=>$request->Parent,
             'Student_Address'=>$request->address,
             'phone_number'=>$request->phone,
              'other'=>$request->outher,
       
               ]); 
         return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $id)
    {
        //
        $student=Student::find($id);
      
        return view('stu.update', compact('student'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, $id)
    {
        //



        $student=Student::find($id);
        $student->update([
            'Student_Name'=>$request->name,
            'Student_Grade'=>$request->grade,
             'birth_day'=>$request->birth,
             'Student_Parent_Name'=>$request->Parent,
            'Student_Address'=>$request->address,
            'phone_number'=>$request->phone,
             'other'=>$request->outher,
      
              ]); 
        return view('stu.register');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, $id)
    {
        //
        $student=Student::find($id);

        $student->delete();
        return redirect()->back();
        
    }
}
