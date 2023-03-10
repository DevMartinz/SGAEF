@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Alunos') }}</div>

                <div class="card-body">

                    @if ($data->id == "")
                        <form id="main" method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">

                    @else
                        <form id="main" method="POST" action="{{ route('students.update',$data) }}" enctype="multipart/form-data">
                        @method('PUT')
                    @endif

                        @csrf

                        <div class="row mb-3">
                            <label for="std_name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Aluno:') }}</label>

                            <div class="col-md-6">
                                <input id="std_name" type="text" class="form-control @error('std_name') is-invalid @enderror"
                                        name="std_name" value="{{ old('std_name', $data->std_name) }}"  autofocus>

                                @error('std_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="std_cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF do Aluno:') }}</label>

                            <div class="col-md-6">
                                <input id="std_cpf" type="text" class="form-control @error('std_cpf') is-invalid @enderror"
                                        name="std_cpf" value="{{ old('std_cpf', $data->std_cpf) }}"  autofocus>

                                @error('std_cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                        <div class="row mb-3">
                            <label for="std_rg" class="col-md-4 col-form-label text-md-end">{{ __('RG do Aluno:') }}</label>

                            <div class="col-md-6">
                                <input id="std_rg" type="text" class="form-control @error('std_rg') is-invalid @enderror"
                                        name="std_rg" value="{{ old('std_rg', $data->std_rg) }}"  autofocus>

                                @error('std_rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="std_city" class="col-md-4 col-form-label text-md-end">{{ __('Cidade:') }}</label>

                            <div class="col-md-6">
                                <input id="std_city" type="text" class="form-control @error('std_city') is-invalid @enderror"
                                        name="std_city" value="{{ old('std_city', $data->std_city) }}"  autofocus>

                                @error('std_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="std_address" class="col-md-4 col-form-label text-md-end">{{ __('Endere??o:') }}</label>

                            <div class="col-md-6">
                                <input id="std_address" type="text" class="form-control @error('std_address') is-invalid @enderror"
                                        name="std_address" value="{{ old('std_address', $data->std_address) }}"  autofocus>

                                @error('std_address')
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
                            <label for="std_class" class="col-md-4 col-form-label text-md-end">{{ __('Turma do Aluno:') }}</label>

                            <div class="col-md-6">
                                <input id="std_class" type="text" class="form-control @error('std_class') is-invalid @enderror"
                                        name="std_class" value="{{ old('std_class', $data->std_class) }}"  autofocus>

                                @error('std_class')
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

                                <a class="btn btn-secondary" href='{{route("students.create")}}'>
                                    {{ __('Novos Alunos') }}
                                </a>


                                @if ($data->id != "")
                                <form name='delete' action="{{route('students.destroy',$data)}}"
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
