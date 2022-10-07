@extends('layouts.plantilla')

@section('content')
<link href="{{asset('css/login.css') }}" rel="stylesheet">
<div id="wrapper">
  <div id="left">
    <div id="signin">
      <form action="{{ route('auth.authenticate') }}" method="post">
        @csrf
        <div>
          <label>Email</label>
          <input type="text" name="email" id="email" class="text-input" >
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" id="password"  class="text-input" >
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
