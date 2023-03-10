@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Alunos') }}</div>

                <div class="card-body">

                    <form method="GET" action="{{ route('students.list') }}">
                        @csrf



                        <div class="row mb-3">
                            <label for="std_name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Aluno:') }}</label>

                            <div class="col-md-6">
                                <input id="std_name" type="text" class="form-control"
                                        name="std_name" value="{{ old('std_name') }}" autofocus>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="std_cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF do Aluno:') }}</label>

                            <div class="col-md-6">
                                <input id="std_cpf" type="text" class="form-control"
                                        name="std_cpf" value="{{ old('std_cpf') }}">
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="std_class" class="col-md-4 col-form-label text-md-end">{{ __('Turma do Aluno:') }}</label>

                            <div class="col-md-6">
                                <input id="std_class" type="text" class="form-control"
                                        name="std_class" value="{{ old('std_class') }}">
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>


                                <a class="btn btn-link" href="{{ route('students.create') }}">
                                    {{ __('Cadastrar novo') }}
                                </a>
                            </div>
                        </div>
                    </form>


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col"> </th>
                            <th scope="col">{{__("Name")}}</th>
                            <th scope="col">{{__("Cpf")}}</th>
                            <th scope="col">{{__("Class")}}</th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                            <tr>
                                <th scope="row">
                                    <a href="{{route("students.edit",$item)}}" class="btn btn-primary">
                                        {{ __('Edit') }}
                                    </a>
                                </th>
                                <td>{{$item->std_name}}</td>
                                <td>{{$item->std_cpf}}</td>
                                <td>{{$item->std_class}}</td>
                                <td>
                                    <form action="{{route('students.destroy',$item)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="button" onclick="confirmDeleteModal(this)"  class="btn btn-danger">
                                            {{ __('Delete') }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div class="d-flex justify-content-center">
                            {{ $list->links() }}
                      </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
