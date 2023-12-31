<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        // $students = DB::select("select * from students");
        // return view('students.index', ['students' => $students]);

        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function redirect() {
        return view('students.add');
    }

    public function store(Request $request) {
        // $firstname = $request->input('firstname');
        // $middlename = $request->input('middlename');
        // $lastname = $request->input('lastname');
        // $gender = $request->input('gender');
        // $course = $request->input('course');

        // DB::insert('insert into students (firstname, middlename, lastname, gender, course) values (?, ?, ?, ?, ?)', [$firstname, $middlename, $lastname, $gender, $course]);

        Student::create($request->all());
        return redirect()->route('students.index');
    }

    public function destroy($id) {
        // DB::table('students')->where('id', $id)->delete();

        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index');
    }

    public function edit($id) {
        $student = DB::table('students')->find($id);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id) {

        // $firstname = $request->input('firstname');
        // $middlename = $request->input('middlename');
        // $lastname = $request->input('lastname');
        // $gender = $request->input('gender');
        // $course = $request->input('course');


        // DB::table('students')
        //     ->where('id', $id)
        //     ->update([
        //         'firstname' => $firstname,
        //         'middlename' => $middlename,
        //         'lastname' => $lastname,
        //         'gender' => $gender,
        //         'course' => $course,
        //     ]);

        $student = Student::findorFail($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

}
