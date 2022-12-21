<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)	{
		return view("Students");
	}

    public function get(Students $students){
        return view("students",["students"=>$students]);
    }

}
