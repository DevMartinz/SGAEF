<?php

namespace App\Http\Controllers\Admin;
use App\Models\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function list(Request $request){
        return view("admin.students.index", ["list"=>Post::paginate(3)]);
    }
    public function create(){
        return view("admin.students.form");
    }
    public function store(Request $request){
        Post::create($request->all());
        return redirect()->back()->with("success","Data saved!");
    }
    
}
