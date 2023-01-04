<?php

namespace App\Http\Controllers\Admin;
use App\Models\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
        public function home(Students $students){
          return view("admin.students.home");
        }

        public function list(Request $request){
            $pagination = Students::orderBy("std_name");
    
            if (isset($request->std_name))
                $pagination->where("std_name","like","%$request->std_name%");
            if (isset($request->std_cpf))
                $pagination->where("std_cpf","like","%$request->std_cpf%");
            if (isset($request->std_class))
                $pagination->where("std_class","like","%$request->std_class%");
    
            #$pagination->dd();
            #$pagination->dump();
            return view("admin.students.index", ["list"=>$pagination->paginate(5)]);
        }
    
        public function create(){
            return view("admin.students.form",["data"=>new Students()]);
        }
    
    
        public function validator(Request $request){
    
            $rules = [
                'std_name' => 'required|max:250',
                'std_cpf' => 'required|max:11',
                'std_rg' => 'required|max:10',
                'std_city' => 'required|max:60',
                'std_address' => 'required|max:250',
                'std_class' => 'required|max:50',
            ];
    
            return Validator::make($request->all(), $rules);
        }
    
        private function armazenaDados(Request $request){

            $data = $request->all();
            return $data;
        }
        public function store(Request $request){
    
            $validated = $this->validator($request)->validate();
            $data = $this->armazenaDados($request);
            $obj = Students::create($data);
            return redirect(route("students.edit", $obj))->with("success",__("Dados Salvos com sucesso!"));
        }
    
        public function destroy(Students $students){
            $students->delete();
            return redirect(route("students.list"))->with("success",__("Dados apagados com sucesso!"));
        }
    
        public function edit(Students $students){
            return view("admin.students.form",["data"=>$students]);
        }
    
        public function update(Students $students, Request $request) {
            $validated = $this->validator($request)->validate();
            $data = $this->armazenaDados($request);
            $students->update($data);
            return redirect()->back()->with("success",__("Data updated!"));
        }

        public function school_grades(Students $students){
            return view("admin.students.school_grades");
          }

        public function missing_school(Students $students){
            return view("admin.students.missing_school");
          }
    
           
}
