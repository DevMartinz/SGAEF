@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Diretores') }}</div>

                <div class="card-body">

                    <form method="GET" action="{{ route('principals.list') }}">
                        @csrf



                        <div class="row mb-3">
                            <label for="p_name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Diretor:') }}</label>

                            <div class="col-md-6">
                                <input id="p_name" type="text" class="form-control"
                                        name="p_name" value="{{ old('p_name') }}" autofocus>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="p_cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF do Diretor:') }}</label>

                            <div class="col-md-6">
                                <input id="p_cpf" type="text" class="form-control"
                                        name="p_cpf" value="{{ old('p_cpf') }}">
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="p_hierarchy" class="col-md-4 col-form-label text-md-end">{{ __('Posição:') }}</label>

                            <div class="col-md-6">
                                <input id="p_hierarchy" type="text" class="form-control"
                                        name="p_hierarchy" value="{{ old('p_hierarchy') }}">
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>


                                <a class="btn btn-link" href="{{ route('principals.create') }}">
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
                            <th scope="col">{{__("Position")}}</th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                            <tr>
                                <th scope="row">
                                    <a href="{{route("principals.edit",$item)}}" class="btn btn-primary">
                                        {{ __('Edit') }}
                                    </a>
                                </th>
                                <td>{{$item->p_name}}</td>
                                <td>{{$item->p_cpf}}</td>
                                <td>{{$item->p_hierarchy}}</td>
                                <td>
                                    <form action="{{route('principals.destroy',$item)}}" method="post">
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
