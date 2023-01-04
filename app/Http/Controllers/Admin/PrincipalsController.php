<?php

namespace App\Http\Controllers\Admin;
use App\Models\Principals;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PrincipalsController extends Controller
{
    public function home(Principals $principals){
      return view("admin.principals.home");
    }

    public function list(Request $request){
        $pagination = Principals::orderBy("p_name");

        if (isset($request->p_name))
            $pagination->where("p_name","like","%$request->p_name%");
        if (isset($request->p_cpf))
            $pagination->where("p_cpf","like","%$request->p_cpf%");
        if (isset($request->p_hierarchy))
            $pagination->where("p_hierarchy","like","%$request->p_hierarchy%");

        #$pagination->dd();
        #$pagination->dump();
        return view("admin.principals.index", ["list"=>$pagination->paginate(5)]);
    }

    public function create(){
        return view("admin.principals.form",["data"=>new Principals()]);
    }


    public function validator(Request $request){

        $rules = [
            'p_name' => 'required|max:250',
            'p_cpf' => 'required|max:11',
            'p_rg' => 'required|max:10',
            'p_city' => 'required|max:60',
            'p_address' => 'required|max:250',
            'p_hierarchy' => 'required|max:50',
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
        $obj = Principals::create($data);
        return redirect(route("principals.edit", $obj))->with("success",__("Dados Salvos com sucesso!"));
    }

    public function destroy(Principals $principals){
        $principals->delete();
        return redirect(route("principals.list"))->with("success",__("Dados apagados com sucesso!"));
    }

    public function edit(Principals $principals){
        return view("admin.principals.form",["data"=>$principals]);
    }

    public function update(Principals $principals, Request $request) {
        $validated = $this->validator($request)->validate();
        $data = $this->armazenaDados($request);
        $principals->update($data);
        return redirect()->back()->with("success",__("Data updated!"));
    }

    public function service_call(Principals $principals){
        return view("admin.principals.service_call");
      }
    public function classes(Principals $principals){
        return view("admin.principals.classes");
      }    
    public function members(Principals $principals){
        return view("admin.principals.members");
      }   
}
