@extends('layouts.plantilla2')

@section('content')

<form style="margin-top: 600px">

    <input type="radio" id="step-1" name="step" checked />
    <input type="radio" id="step-2" name="step" />
    <input type="radio" id="step-3" name="step" />
    <input type="radio" id="step-4" name="step" />
    <div id="bubble-1" class="bubble" style="margin-top: 70px" data-toggle="modal" data-target="#exampleModal">
        <div>Ojos</div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document"  style="min-width: 50%">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Ojos</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-sm-12 " >
                <!------TABLA DE GRAFIA A------->
                <div class="table-responsive" >
                    <table class="table table-success table-striped text-center" id="table-id" style="border-radius: 20px;"> 
                        <thead>
                            <tr>
                                <th scope="col text-center">Escritura</th>
                                <th scope="col text-center">Significado</th>
                                <th scope="col text-center">Pronunciación</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
            <!---------BOTON DE CERRAR DE MODAL GRAFIA A--------->
            <div class="modal-footer">
              <button type="button" class="btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    <div id="magician">
      <div id="head">
        <div id="neck"></div>
        <div id="face">
          <div id="hair"></div>
          <div id="mouth"></div>
        </div>
        <div class="arrowed">
			<div class="arrow-3" style="height: 0px; width: 0px;
            border: 8px solid;
            border-color: 
                black
                black
                transparent
                transparent;
            transform: rotate(45deg);margin-top:40px;margin-left:10px"></div>
		</div>
        <div id="eyes"></div>
        <div id="hat">
          <div id="cover"></div>
          <div id="tophat"></div>
        </div>
      </div>
      <div id="bowtie"></div>
      <div id="body">
        <div id="chest"></div>
        <div id="arms"></div>
      </div>
      <div id="hands" ></div>
      <div id="wand"></div>
      <div id="shirt"></div>
      <div id="jacket">
        <div id="tail"></div>
      </div>
      <div id="pants"></div>
      <div id="shoes"></div>
    </div>
  
   
    
  </form>


  
@endsection