@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Secretários') }}</div>

                <div class="card-body">

                    @if ($data->id == "")
                        <form id="main" method="POST" action="{{ route('secretaries.store') }}" enctype="multipart/form-data">

                    @else
                        <form id="main" method="POST" action="{{ route('secretaries.update',$data) }}" enctype="multipart/form-data">
                        @method('PUT')
                    @endif

                        @csrf

                        <div class="row mb-3">
                            <label for="sec_name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Secretário:') }}</label>

                            <div class="col-md-6">
                                <input id="sec_name" type="text" class="form-control @error('sec_name') is-invalid @enderror"
                                        name="sec_name" value="{{ old('sec_name', $data->sec_name) }}"  autofocus>

                                @error('sec_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="sec_cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF do Secretário:') }}</label>

                            <div class="col-md-6">
                                <input id="sec_cpf" type="text" class="form-control @error('sec_cpf') is-invalid @enderror"
                                        name="sec_cpf" value="{{ old('sec_cpf', $data->sec_cpf) }}"  autofocus>

                                @error('sec_cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                        <div class="row mb-3">
                            <label for="sec_rg" class="col-md-4 col-form-label text-md-end">{{ __('RG do Secretário:') }}</label>

                            <div class="col-md-6">
                                <input id="sec_rg" type="text" class="form-control @error('sec_rg') is-invalid @enderror"
                                        name="sec_rg" value="{{ old('sec_rg', $data->sec_rg) }}"  autofocus>

                                @error('sec_rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sec_city" class="col-md-4 col-form-label text-md-end">{{ __('Cidade:') }}</label>

                            <div class="col-md-6">
                                <input id="sec_city" type="text" class="form-control @error('sec_city') is-invalid @enderror"
                                        name="sec_city" value="{{ old('sec_city', $data->sec_city) }}"  autofocus>

                                @error('sec_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sec_address" class="col-md-4 col-form-label text-md-end">{{ __('Endereço:') }}</label>

                            <div class="col-md-6">
                                <input id="sec_address" type="text" class="form-control @error('sec_address') is-invalid @enderror"
                                        name="sec_address" value="{{ old('sec_address', $data->sec_address) }}"  autofocus>

                                @error('sec_address')
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
                            <label for="sec_permi_lvl" class="col-md-4 col-form-label text-md-end">{{ __('Nível de Permissão:') }}</label>

                            <div class="col-md-6">
                                <input id="sec_permi_lvl" type="text" class="form-control @error('sec_permi_lvl') is-invalid @enderror"
                                        name="sec_permi_lvl" value="{{ old('sec_permi_lvl', $data->sec_permi_lvl) }}"  autofocus>

                                @error('sec_permi_lvl')
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

                                <a class="btn btn-secondary" href='{{route("secretaries.create")}}'>
                                    {{ __('Novos Secretários') }}
                                </a>


                                @if ($data->id != "")
                                <form name='delete' action="{{route('secretaries.destroy',$data)}}"
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
