<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Students extends Controller
{
    public function index(){
        $students=DB::table('tbl_students')->get();
        $studentsWithClass=DB::table('tbl_students')
        ->join('tbl_classes','tbl_students.classId','=','tbl_classes.id')
        ->get();
        return view ('students',['allstudents'=>$students],['allstudentswithclassname'=>$studentsWithClass]);
        
    }
}
