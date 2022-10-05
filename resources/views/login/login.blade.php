@extends('layouts.plantilla')

@section('content')

<div class="container mt-4">
  <div class="row">
      <div class="col">

          <div class="overlay">
              
              <form action="{{ route('auth.authenticate') }}" method="post">

               @csrf

               <label for="">Email</label>
               <input type="email" name="email" id="email">
               <br>
               <label for="">Password</label>
               <input type="password" name="password" id="password">
               <br>

               <button type="submit">Iniciar sesion</button>
              </form>
              </div>
           
      </div>
  </div>
</div>
@endsection
