<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('students.index', compact('student'));
        /* return view('students.index')->with('title',$title); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $student = new Student;
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->age = $request->input('age');
        $student->gender = $request->input('gender');
        $student->save();
        return redirect('/students'); */
        
        $student = Student::create([
            'firstName'=>$request->input('firstName'),
            'lastName'=>$request->input('lastName'),
            'age'=>$request->input('age'),
            'gender'=>$request->input('gender')
        ]);

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('students.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return view('students.edit')->with('student', $student);

        /* dd($id);
        return view('students.create'); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::where('id',$id)
            ->update([
                'firstName'=>$request->input('firstName'),
                'lastName'=>$request->input('lastName'),
                'age'=>$request->input('age'),
                'gender'=>$request->input('gender')
        ]);

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/students');
    }
}
