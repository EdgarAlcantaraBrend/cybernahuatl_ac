@extends('layouts.plantilla')

@section('content')
<link href="{{asset('css/login.css') }}" rel="stylesheet">
<div id="wrapper">
  <div id="left">
    <div id="signin">
      <form action="{{ route('auth.authenticate') }}" method="post">
        @csrf
        <div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <label>Email</label>
          <input type="email" name="email" id="email" class="text-input"  required  placeholder="name@example.com" autocomplete="off">
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" id="password"  class="text-input" required placeholder="password" >
        </div>
        <button type="submit" class="primary-btn">Iniciar Sesion</button>
      </form>
      <div class="links">
        <a href="#">Forgot Password</a>
      </div>
    </div>
  </div>
  <div id="right">
    <div id="showcase">
      <div class="showcase-content">
        <h1 class="showcase-text">
         Cursos en Nahualt gratuitamente
        </h1>
        <a href="{{route('auth.register') }}" class="secondary-btn">Create una cuenta :) </a>
      </div>
    </div>
  </div>
</div>


@endsection
