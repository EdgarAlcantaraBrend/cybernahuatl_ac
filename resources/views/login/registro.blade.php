@extends('layouts.plantilla')

@section('content')
<div class="banner"></div>
    <div id="inner-data">
        <h1 id="title">Crear nuevo usuario</h1>
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
            
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre: ') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico: ') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña: ') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            
            <div class="row mb-3">
                <label for="password_confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password_confirm" type="password" class="form-control" name="password_confirm" required autocomplete="new-password">
                </div>
            </div>

            
            <div class="row">
                <div class="col" style="margin-top: 16px">
                    <a class="nav-link"
                        href="{{ route('index')}}">
                        <span class="button rojo" style="text-align: center" data-toggle="modal" href="">Cancelar</span>
                    </a>
                </div>
                <div class="col" style="margin-top: 5px">
                    <button type="submit" class="button azul" style="text-align: center">
                        Registrar
                    </button>
                </div>
            </div>
        </form>
        
    </div>



@endsection
