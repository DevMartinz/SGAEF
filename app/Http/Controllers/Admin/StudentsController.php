<?php

namespace App\Http\Controllers\Admin;
use App\Models\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
        public function list(Request $request){
            $pagination = Students::orderBy("name");
    
            if (isset($request->name))
                $pagination->where("name","like","%$request->name%");
            if (isset($request->cpf))
                $pagination->where("cpf","like","%$request->cpf%");
            if (isset($request->class))
                $pagination->where("class",$request->class);
    
            #$pagination->dd();
            #$pagination->dump();
            return view("admin.students.index", ["list"=>$pagination->paginate(5)]);
        }
    
        public function create(){
            return view("admin.students.form",["data"=>new Students()]);
        }
    
    
        public function validator(Request $request){
    
            $rules = [
                'name' => 'required|max:250',
                'cpf' => 'required|max:11',
                'rg' => 'required|max:10',
                'city' => 'required|max:60',
                'address' => 'required|max:250',
                'class' => 'required|max:50',
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
    
           
}
