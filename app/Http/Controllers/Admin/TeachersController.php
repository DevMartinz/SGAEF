<?php

namespace App\Http\Controllers\Admin;
use App\Models\Teachers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeachersController extends Controller
{
    public function list(Request $request){
        $pagination = Teachers::orderBy("name");

        if (isset($request->name))
            $pagination->where("name","like","%$request->name%");
        if (isset($request->cpf))
            $pagination->where("cpf","like","%$request->cpf%");
        if (isset($request->class))
            $pagination->where("class","like","%$request->class%");

        #$pagination->dd();
        #$pagination->dump();
        return view("admin.teachers.index", ["list"=>$pagination->paginate(5)]);
    }

    public function create(){
        return view("admin.teachers.form",["data"=>new Teachers()]);
    }


    public function validator(Request $request){

        $rules = [
            'name' => 'required|max:250',
            'cpf' => 'required|max:11',
            'rg' => 'required|max:10',
            'city' => 'required|max:60',
            'address' => 'required|max:250',
            's_subjects' => 'required|max:80',
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
        $obj = Teachers::create($data);
        return redirect(route("teachers.edit", $obj))->with("success",__("Dados Salvos com sucesso!"));
    }

    public function destroy(Teachers $teachers){
        $teachers->delete();
        return redirect(route("teachers.list"))->with("success",__("Dados apagados com sucesso!"));
    }

    public function edit(Teachers $teachers){
        return view("admin.teachers.form",["data"=>$teachers]);
    }

    public function update(Teachers $teachers, Request $request) {
        $validated = $this->validator($request)->validate();
        $data = $this->armazenaDados($request);
        $teachers->update($data);
        return redirect()->back()->with("success",__("Data updated!"));
    }

       
}
