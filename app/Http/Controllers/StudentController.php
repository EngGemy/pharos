<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index(){
    $students = Student::all();
      //return all students
      return view('student.index',compact('students'));
  }
  public function create(){

      return view('student.create');
  }
  public function store(Request $request){
      $student = $request->validate([
         'name' => "required|max:50",
         'grade' => "required",
      ]);
//   Student::create($student);
      $student = Student::create([
         'name' => $request->input('name') ,
         'address' => $request->input('address') ,
         'grade' => $request->input('grade') ,
         'student_rank' => $request->input('student_rank') ,
      ]);
      return redirect()->route('student.index');
  }

  public function show($id){
      $student = Student::findOrFail($id);
      return view('student.show',compact('student'));
  }


  public function edit($id){
      $student = Student::findOrFail($id);
      return view('student.edit',compact('student'));
  }

  public function update(Request $request,$id){


      $student = $request->validate([
          'name' => "required|max:50",
          'grade' => "required",
      ]);
      $student = Student::findOrFail($id);
//   Student::create($student);

        $student->name = $request->input('name');
        $student->address = $request->input("address");
        $student->grade = $request->input("grade");
        $student->student_rank = $request->input("student_rank");

      $student->update();
      return redirect()->route('student.index');
  }

  public function  destory($id){
    $student =   Student::findOrFail($id);

    $student->delete();
      return redirect()->route('student.index');


  }

}
