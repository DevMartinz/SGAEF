@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Funcionários') }}</div>

                <div class="card-body">

                    @if ($data->id == "")
                        <form id="main" method="POST" action="{{ route('employees.store') }}" enctype="multipart/form-data">

                    @else
                        <form id="main" method="POST" action="{{ route('employees.update',$data) }}" enctype="multipart/form-data">
                        @method('PUT')
                    @endif

                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do funcionário:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name', $data->name) }}"  autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF do Funcionário:') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="cpf" value="{{ old('cpf', $data->cpf) }}"  autofocus>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                        <div class="row mb-3">
                            <label for="rg" class="col-md-4 col-form-label text-md-end">{{ __('RG do Funcionário:') }}</label>

                            <div class="col-md-6">
                                <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror"
                                        name="rg" value="{{ old('rg', $data->rg) }}"  autofocus>

                                @error('rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('Cidade:') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                        name="city" value="{{ old('city', $data->city) }}"  autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Endereço:') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                        name="address" value="{{ old('address', $data->address) }}"  autofocus>

                                @error('address')
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
                            <label for="position" class="col-md-4 col-form-label text-md-end">{{ __('Cargo do Funcionário:') }}</label>

                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control @error('position') is-invalid @enderror"
                                        name="position" value="{{ old('position', $data->position) }}"  autofocus>

                                @error('position')
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

                                <a class="btn btn-secondary" href='{{route("employees.create")}}'>
                                    {{ __('Novos Funcionários') }}
                                </a>


                                @if ($data->id != "")
                                <form name='delete' action="{{route('employees.destroy',$data)}}"
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
