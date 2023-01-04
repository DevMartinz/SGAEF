@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Professores') }}</div>

                <div class="card-body">

                    @if ($data->id == "")
                        <form id="main" method="POST" action="{{ route('teachers.store') }}" enctype="multipart/form-data">

                    @else
                        <form id="main" method="POST" action="{{ route('teachers.update',$data) }}" enctype="multipart/form-data">
                        @method('PUT')
                    @endif

                        @csrf

                        <div class="row mb-3">
                            <label for="t_name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Professor:') }}</label>

                            <div class="col-md-6">
                                <input id="t_name" type="text" class="form-control @error('t_name') is-invalid @enderror"
                                        name="t_name" value="{{ old('t_name', $data->t_name) }}"  autofocus>

                                @error('t_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="t_cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF do Professor:') }}</label>

                            <div class="col-md-6">
                                <input id="t_cpf" type="text" class="form-control @error('t_name') is-invalid @enderror"
                                        name="t_cpf" value="{{ old('t_cpf', $data->t_cpf) }}"  autofocus>

                                @error('t_cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                        <div class="row mb-3">
                            <label for="t_rg" class="col-md-4 col-form-label text-md-end">{{ __('RG do Professor:') }}</label>

                            <div class="col-md-6">
                                <input id="t_rg" type="text" class="form-control @error('t_rg') is-invalid @enderror"
                                        name="t_rg" value="{{ old('t_rg', $data->t_rg) }}"  autofocus>

                                @error('t_rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="t_city" class="col-md-4 col-form-label text-md-end">{{ __('Cidade:') }}</label>

                            <div class="col-md-6">
                                <input id="t_city" type="text" class="form-control @error('t_city') is-invalid @enderror"
                                        name="t_city" value="{{ old('t_city', $data->t_city) }}"  autofocus>

                                @error('t_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="t_address" class="col-md-4 col-form-label text-md-end">{{ __('Endereço:') }}</label>

                            <div class="col-md-6">
                                <input id="t_address" type="text" class="form-control @error('t_address') is-invalid @enderror"
                                        name="t_address" value="{{ old('t_address', $data->t_address) }}"  autofocus>

                                @error('t_address')
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
                            <label for="t_s_subjects" class="col-md-4 col-form-label text-md-end">{{ __('Disciplina do Professor:') }}</label>

                            <div class="col-md-6">
                                <input id="t_s_subjects" type="text" class="form-control @error('t_s_subjects') is-invalid @enderror"
                                        name="t_s_subjects" value="{{ old('t_s_subjects', $data->t_s_subjects) }}"  autofocus>

                                @error('t_s_subjects')
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

                                <a class="btn btn-secondary" href='{{route("teachers.create")}}'>
                                    {{ __('Novos Professores') }}
                                </a>


                                @if ($data->id != "")
                                <form name='delete' action="{{route('teachers.destroy',$data)}}"
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
