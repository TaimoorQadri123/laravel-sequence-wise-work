<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function selectStudents(){
        $students =['aqsa','sana','javed','taha'];
        return view('student',compact('students'));
    }
    public function insertData(){
        
    }
}
