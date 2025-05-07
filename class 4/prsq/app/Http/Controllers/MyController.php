<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class MyController extends Controller
{
    //
    public function selectStudents(){
        $students =['aqsa','sana','javed','taha'];
        return view('student',compact('students'));
    }
    public function insertData(Request $req){
        $student = new Student();

        // $req->validate([
        //     "name"=>"required|[a-zA-A]{4,1}",
        //     "email"=>"required|email|unique:students,email",
        //     "password"=>"required",

        // ]);
        $req->validate([
            "name" => "required|regex:/^[a-zA-Z]{3,10}$/",
            "email" => "required|email|unique:students,email",
            "password" => "required|regex: /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%&])[A-Za-z\d!@#$%&]{8,14}$/",
        ]);
        
        $student->name = $req->name ;
        $student->email = $req->email ;
        $student->password = $req->password ;
        $student->save();
        return redirect('/');

    }
}
