<?php

namespace App\Http\Controllers\Admin;
use App\Models\Employees;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeesController extends Controller
{
    public function list(Request $request){
        $pagination = Employees::orderBy("name");

        if (isset($request->name))
            $pagination->where("name","like","%$request->name%");
        if (isset($request->cpf))
            $pagination->where("cpf","like","%$request->cpf%");
        if (isset($request->class))
            $pagination->where("class","like","%$request->class%");

        #$pagination->dd();
        #$pagination->dump();
        return view("admin.employees.index", ["list"=>$pagination->paginate(5)]);
    }

    public function create(){
        return view("admin.employees.form",["data"=>new Employees()]);
    }


    public function validator(Request $request){

        $rules = [
            'name' => 'required|max:250',
            'cpf' => 'required|max:11',
            'rg' => 'required|max:10',
            'city' => 'required|max:60',
            'address' => 'required|max:250',
            'position' => 'required|max:70',
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
        $obj = Employees::create($data);
        return redirect(route("employees.edit", $obj))->with("success",__("Dados Salvos com sucesso!"));
    }

    public function destroy(Employees $employees){
        $employees->delete();
        return redirect(route("employees.list"))->with("success",__("Dados apagados com sucesso!"));
    }

    public function edit(Employees $employees){
        return view("admin.employees.form",["data"=>$employees]);
    }

    public function update(Employees $employees, Request $request) {
        $validated = $this->validator($request)->validate();
        $data = $this->armazenaDados($request);
        $employees->update($data);
        return redirect()->back()->with("success",__("Data updated!"));
    }

       
}
