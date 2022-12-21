@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Professores') }}</div>

                <div class="card-body">

                    <form method="GET" action="{{ route('teachers.list') }}">
                        @csrf



                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Professor:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control"
                                        name="name" value="{{ old('name') }}" autofocus>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF do Professor:') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control"
                                        name="cpf" value="{{ old('cpf') }}">
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="s_subjects" class="col-md-4 col-form-label text-md-end">{{ __('Disciplina do Professor:') }}</label>

                            <div class="col-md-6">
                                <input id="s_subjects" type="text" class="form-control"
                                        name="s_subjects" value="{{ old('s_subjects') }}">
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>


                                <a class="btn btn-link" href="{{ route('teachers.create') }}">
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
                            <th scope="col">{{__("Disciplina")}}</th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                            <tr>
                                <th scope="row">
                                    <a href="{{route("teachers.edit",$item)}}" class="btn btn-primary">
                                        {{ __('Edit') }}
                                    </a>
                                </th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->cpf}}</td>
                                <td>{{$item->s_subjects}}</td>
                                <td>
                                    <form action="{{route('teachers.destroy',$item)}}" method="post">
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
