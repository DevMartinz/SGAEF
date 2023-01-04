@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Diretores') }}</div>

                <div class="card-body">

                    @if ($data->id == "")
                        <form id="main" method="POST" action="{{ route('principals.store') }}" enctype="multipart/form-data">

                    @else
                        <form id="main" method="POST" action="{{ route('principals.update',$data) }}" enctype="multipart/form-data">
                        @method('PUT')
                    @endif

                        @csrf

                        <div class="row mb-3">
                            <label for="p_name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Diretor:') }}</label>

                            <div class="col-md-6">
                                <input id="p_name" type="text" class="form-control @error('p_name') is-invalid @enderror"
                                        name="p_name" value="{{ old('p_name', $data->p_name) }}"  autofocus>

                                @error('p_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="p_cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF do Diretor:') }}</label>

                            <div class="col-md-6">
                                <input id="p_cpf" type="text" class="form-control @error('p_cpf') is-invalid @enderror"
                                        name="p_cpf" value="{{ old('p_cpf', $data->p_cpf) }}"  autofocus>

                                @error('p_cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                        <div class="row mb-3">
                            <label for="p_rg" class="col-md-4 col-form-label text-md-end">{{ __('RG do Diretor:') }}</label>

                            <div class="col-md-6">
                                <input id="p_rg" type="text" class="form-control @error('p_rg') is-invalid @enderror"
                                        name="p_rg" value="{{ old('p_rg', $data->p_rg) }}"  autofocus>

                                @error('p_rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="p_city" class="col-md-4 col-form-label text-md-end">{{ __('Cidade:') }}</label>

                            <div class="col-md-6">
                                <input id="p_city" type="text" class="form-control @error('p_city') is-invalid @enderror"
                                        name="p_city" value="{{ old('p_city', $data->p_city) }}"  autofocus>

                                @error('p_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="p_address" class="col-md-4 col-form-label text-md-end">{{ __('Endereço:') }}</label>

                            <div class="col-md-6">
                                <input id="p_address" type="text" class="form-control @error('p_address') is-invalid @enderror"
                                        name="p_address" value="{{ old('p_address', $data->p_address) }}"  autofocus>

                                @error('p_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="slug" class="col-md-4 col-form-label text-md-end">{{ __('Slug') }}</label>

                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control "
                                       readonly disabled value="{{ old('slug',$data->slug) }}"  >
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="p_hierarchy" class="col-md-4 col-form-label text-md-end">{{ __('Posição do Diretor:') }}</label>

                            <div class="col-md-6">
                                <input id="p_hierarchy" type="text" class="form-control @error('p_hierarchy') is-invalid @enderror"
                                        name="p_hierarchy" value="{{ old('p_hierarchy', $data->p_hierarchy) }}"  autofocus>

                                @error('p_hierarchy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </form>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" form="main">
                                    {{ __('Save') }}
                                </button>

                                <a class="btn btn-secondary" href='{{route("principals.create")}}'>
                                    {{ __('Novo Diretor') }}
                                </a>


                                @if ($data->id != "")
                                <form name='delete' action="{{route('principals.destroy',$data)}}"
                                    method="post"
                                    style='display: inline-block;'>
                                    @csrf
                                    @method("DELETE")
                                    <button type="button" onclick="confirmDeleteModal(this)" class="btn btn-danger">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
