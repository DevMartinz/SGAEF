<?php

namespace App\Http\Controllers\Admin;
use App\Models\Secretaries;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SecretariesController extends Controller
{
    public function home(Secretaries $secretaries){
      return view("admin.secretaries.home");
    }

    public function list(Request $request){
        $pagination = Secretaries::orderBy("sec_name");

        if (isset($request->sec_name))
            $pagination->where("sec_name","like","%$request->sec_name%");
        if (isset($request->sec_cpf))
            $pagination->where("sec_cpf","like","%$request->sec_cpf%");
        if (isset($request->sec_permi_lvl))
            $pagination->where("sec_permi_lvl","like","%$request->sec_permi_lvl%");

        #$pagination->dd();
        #$pagination->dump();
        return view("admin.secretaries.index", ["list"=>$pagination->paginate(5)]);
    }

    public function create(){
        return view("admin.secretaries.form",["data"=>new Secretaries()]);
    }


    public function validator(Request $request){

        $rules = [
            'sec_name' => 'required|max:250',
            'sec_cpf' => 'required|max:11',
            'sec_rg' => 'required|max:10',
            'sec_city' => 'required|max:60',
            'sec_address' => 'required|max:250',
            'sec_permi_lvl' => 'required|max:50',
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
        $obj = Secretaries::create($data);
        return redirect(route("secretaries.edit", $obj))->with("success",__("Dados Salvos com sucesso!"));
    }

    public function destroy(Secretaries $secretaries){
        $secretaries->delete();
        return redirect(route("secretaries.list"))->with("success",__("Dados apagados com sucesso!"));
    }

    public function edit(Secretaries $secretaries){
        return view("admin.secretaries.form",["data"=>$secretaries]);
    }

    public function update(Secretaries $secretaries, Request $request) {
        $validated = $this->validator($request)->validate();
        $data = $this->armazenaDados($request);
        $secretaries->update($data);
        return redirect()->back()->with("success",__("Data updated!"));
    }

    public function service_call(Secretaries $secretaries){
        return view("admin.secretaries.service_call");
      }

    public function classes(Secretaries $secretaries){
        return view("admin.secretaries.classes");
      }

    public function members(Secretaries $secretaries){
        return view("admin.secretaries.members");
      }
}