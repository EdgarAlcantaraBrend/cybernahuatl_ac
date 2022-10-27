@extends('layouts.plantilla2')

@section('content')
 
<h2>Alfabeto Nahualt</h2><br>
  <span style="text-align: center"><h5>El alfabeto es un signo gráfico o conjunto de ellos con que se representa un sonido o una palabra en la escritura.</h5></span>
    <div class="content-all">
        <div class="content-carrousel">

          
            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraA.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraCH.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraE.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraH.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraHW.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraI.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraK.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraKW.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraL.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraM.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraN.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraO.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraP.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraS.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraT.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraTL.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraTS.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraW.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraX.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModal">
              <img src="{{asset('img/grafias/letraY.png')}}">
            </button></figure>


           
        </div>
    </div>
    <div class="alert"  role="alert" style="margin-top: 34%;  background-color:  #ccc">
      Haz click en la letra!!!!
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

  
   
  
@endsection