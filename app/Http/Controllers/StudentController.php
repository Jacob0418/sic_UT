<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::all();
        $students = Student::paginate(10);
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('students.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name_student' => 'required|max:50',
            'lastname_student' => 'required|max:50',
            'id_student' => 'required|unique:students|max:8',
            'birthday' => 'required',
            'comments' => 'required'
        ]);

        $student = new Student();
        $student -> name_student = $request -> input('name_student');
        $student -> lastname_student = $request -> input('lastname_student');
        $student -> id_student = $request -> input('id_student');
        $student -> birthday = $request -> input('birthday');
        $student -> comments = $request -> input('comments');
        $student -> save();
        return redirect('estudiantes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        // dd($student);
        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'name_student' => 'required|max:50',
            'lastname_student' => 'required|max:50',
            'id_student' => 'required|max:8|unique:students,id_student,'.$id.'',
            'birthday' => 'required',
            'comments' => 'required'
        ]);

        $student = Student::find($id);
        $student -> name_student = $request -> input('name_student');
        $student -> lastname_student = $request -> input('lastname_student');
        $student -> id_student = $request -> input('id_student');
        $student -> birthday = $request -> input('birthday');
        $student -> comments = $request -> input('comments');
        $student -> save();
        return redirect('estudiantes')->with('notificacion', 'Estudiante actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student -> delete();

        return redirect('estudiantes');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
