@extends('layouts.plantilla2')

@section('content')

<form style="margin-top: 600px">

    <input type="radio" id="step-1" name="step" checked />
    <input type="radio" id="step-2" name="step" />
    <input type="radio" id="step-3" name="step" />
    <input type="radio" id="step-4" name="step" />
    <div id="magician">
      <div id="head">
        <div id="neck"></div>
        <div id="face">
          <div id="hair"></div>
          <div id="mouth"></div>
        </div>
        <div id="eyes"></div>
      </div>
     
      <div id="body">
        <div id="chest"></div>
        <div id="arms"></div>
      </div>
      <div id="hands" ></div>
      
      
      
      <div id="pants"></div>
      <div id="shoes"></div>
    </div>
  
   
    
  </form>


  
@endsection