@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Secretários') }}</div>

                <div class="card-body">

                    <form method="GET" action="{{ route('secretaries.list') }}">
                        @csrf



                        <div class="row mb-3">
                            <label for="sec_name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Secretário:') }}</label>

                            <div class="col-md-6">
                                <input id="sec_name" type="text" class="form-control"
                                        name="sec_name" value="{{ old('sec_name') }}" autofocus>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="sec_cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF do Secretário:') }}</label>

                            <div class="col-md-6">
                                <input id="sec_cpf" type="text" class="form-control"
                                        name="sec_cpf" value="{{ old('sec_cpf') }}">
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="sec_permi_lvl" class="col-md-4 col-form-label text-md-end">{{ __('Permissão do Secretário:') }}</label>

                            <div class="col-md-6">
                                <input id="sec_permi_lvl" type="text" class="form-control"
                                        name="sec_permi_lvl" value="{{ old('sec_permi_lvl') }}">
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>


                                <a class="btn btn-link" href="{{ route('secretaries.create') }}">
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
                            <th scope="col">{{__("Perm_lvl")}}</th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                            <tr>
                                <th scope="row">
                                    <a href="{{route("secretaries.edit",$item)}}" class="btn btn-primary">
                                        {{ __('Edit') }}
                                    </a>
                                </th>
                                <td>{{$item->sec_name}}</td>
                                <td>{{$item->sec_cpf}}</td>
                                <td>{{$item->sec_permi_lvl}}</td>
                                <td>
                                    <form action="{{route('secretaries.destroy',$item)}}" method="post">
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
