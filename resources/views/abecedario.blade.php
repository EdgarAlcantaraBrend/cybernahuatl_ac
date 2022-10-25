@extends('layouts.plantilla2')

@section('content')
 
<section>
   
        <header>
            <button type="button" class="load">!Has click aqui!</button>
          </header>
          <br>
          <ul class="deck preload" >
            <div class="row">
                <div class="col-sm-3">
                    <!--------CARD DE GRAFIA A--->
                  <li class="card" style="width: 90%;border-style: solid;border-width:5px">
                      <div class="content" >
                        <button  data-toggle="modal" data-target="#exampleModal" style="background-color: #fff;border:none">
                          <img src="{{asset('img/grafias/letra_a.png')}}" alt="" >
                          <h4>GRAFIA A</h4>
                        </button>
                      </div>
                  </li>
                </div>
                
                <!--------MODAL DE GRAFIA A--->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document"  style="min-width: 90%">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Grafia A</h3>
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
                                          <th scope="col text-center">Imagen</th>
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
                <div class="col-sm-3">
                  <!--------CARD DE GRAFIA CH--->
                  <li class="card" style="width: 90%;border-style: solid;border-width:5px" >
                    <div class="content">
                      <button  data-toggle="modal" data-target="#exampleModal2" style="background-color: #fff;border:none">
                        <img src="{{asset('img/grafias/letra_ch.png')}}" alt=""  >
                        <h4 style="color: black">GRAFIA CH</h4>
                      </button>
                    </div>
                  </li>
                </div>
                <!--------MODAL DE GRAFIA CH--->
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document"  style="min-width: 90%">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Grafia CH</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-sm-12 " >
                          <!------TABLA DE GRAFIA CH------->
                          <div class="table-responsive" >
                              <table class="table table-success table-striped text-center" id="table-id" style="border-radius: 20px;"> 
                                  <thead>
                                      <tr>
                                          <th scope="col text-center">Escritura</th>
                                          <th scope="col text-center">Significado</th>
                                          <th scope="col text-center">Pronunciación</th>
                                          <th scope="col text-center">Imagen</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                      <!---------BOTON DE CERRAR DE MODAL GRAFIA CH--------->
                      <div class="modal-footer">
                        <button type="button" class="btn-danger" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <!--------CARD DE GRAFIA E--->
                    <li class="card" style="width: 90%;border-style: solid;border-width:5px">
                      <div class="content" >
                        <button  data-toggle="modal" data-target="#exampleModal3" style="background-color: #fff;border:none">
                          <img src="{{asset('img/grafias/letra_e.png')}}" alt="" >
                          <h4>GRAFIA E</h4>
                        </button>
                      </div>
                  </li>
                </div>
                <!--------MODAL DE GRAFIA E--->
                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document"  style="min-width: 90%">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Grafia E</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-sm-12 " >
                          <!------TABLA DE GRAFIA E------->
                          <div class="table-responsive" >
                              <table class="table table-success table-striped text-center" id="table-id" style="border-radius: 20px;"> 
                                  <thead>
                                      <tr>
                                          <th scope="col text-center">Escritura</th>
                                          <th scope="col text-center">Significado</th>
                                          <th scope="col text-center">Pronunciación</th>
                                          <th scope="col text-center">Imagen</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                      <!---------BOTON DE CERRAR DE MODAL GRAFIA E--------->
                      <div class="modal-footer">
                        <button type="button" class="btn-danger" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <!--------CARD DE GRAFIA H--->
                  <li class="card" style="width: 90%;border-style: solid;border-width:5px">
                    <div class="content" >
                      <button  data-toggle="modal" data-target="#exampleModal4" style="background-color: #fff;border:none">
                        <img src="{{asset('img/grafias/letra_h.png')}}" alt="" >
                        <h4>GRAFIA H</h4>
                      </button>
                    </div>
                  </li>
                </div>
                <!--------MODAL DE GRAFIA H--->
                <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document"  style="min-width: 90%">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Grafia H</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-sm-12 " >
                          <!------TABLA DE GRAFIA H------->
                          <div class="table-responsive" >
                              <table class="table table-success table-striped text-center" id="table-id" style="border-radius: 20px;"> 
                                  <thead>
                                      <tr>
                                          <th scope="col text-center">Escritura</th>
                                          <th scope="col text-center">Significado</th>
                                          <th scope="col text-center">Pronunciación</th>
                                          <th scope="col text-center">Imagen</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                      <!---------BOTON DE CERRAR DE MODAL GRAFIA H--------->
                      <div class="modal-footer">
                        <button type="button" class="btn-danger" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                  <!--------CARD DE GRAFIA I --->
                  <li class="card" style="width: 90%;border-style: solid;border-width:5px">
                    <div class="content" >
                      <button  data-toggle="modal" data-target="#exampleModal" style="background-color: #fff;border:none">
                        <img src="{{asset('img/grafias/letra_i.png')}}" alt="" >
                        <h4>GRAFIA A</h4>
                      </button>
                    </div>
                  </li>
                </div>
                <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document"  style="min-width: 90%">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Grafia I</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-sm-12 " >
                          <!------TABLA DE GRAFIA I------->
                          <div class="table-responsive" >
                              <table class="table table-success table-striped text-center" id="table-id" style="border-radius: 20px;"> 
                                  <thead>
                                      <tr>
                                          <th scope="col text-center">Escritura</th>
                                          <th scope="col text-center">Significado</th>
                                          <th scope="col text-center">Pronunciación</th>
                                          <th scope="col text-center">Imagen</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                      <!---------BOTON DE CERRAR DE MODAL GRAFIA I--------->
                      <div class="modal-footer">
                        <button type="button" class="btn-danger" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <!--------CARD DE GRAFIA  k--->
                    <li class="card" style="width: 90%;border-style: solid;border-width:5px">
                    <div class="content" >
                      <button  data-toggle="modal" data-target="#exampleModal6" style="background-color: #fff;border:none">
                        <img src="{{asset('img/grafias/letra_k.png')}}" alt="" >
                        <h4>GRAFIA A</h4>
                      </button>
                    </div>
                  </li>
                </div>
                <!--------MODAL DE GRAFIA A--->
                <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document"  style="min-width: 90%">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Grafia K</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-sm-12 " >
                          <!------TABLA DE GRAFIA K------->
                          <div class="table-responsive" >
                              <table class="table table-success table-striped text-center" id="table-id" style="border-radius: 20px;"> 
                                  <thead>
                                      <tr>
                                          <th scope="col text-center">Escritura</th>
                                          <th scope="col text-center">Significado</th>
                                          <th scope="col text-center">Pronunciación</th>
                                          <th scope="col text-center">Imagen</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                      <!---------BOTON DE CERRAR DE MODAL GRAFIA K--------->
                      <div class="modal-footer">
                        <button type="button" class="btn-danger" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <!--------CARD DE GRAFIA  kW--->
                  <li class="card" style="width: 90%;border-style: solid;border-width:5px">
                    <div class="content" >
                      <button  data-toggle="modal" data-target="#exampleModal7" style="background-color: #fff;border:none">
                        <img src="{{asset('img/grafias/letra_kw.png')}}" alt="" >
                        <h4>GRAFIA KW</h4>
                      </button>
                    </div>
                  </li>
                </div>
                <!--------MODAL DE GRAFIA KW--->
                <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document"  style="min-width: 90%">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Grafia KW</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-sm-12 " >
                          <!------TABLA DE GRAFIA KW------->
                          <div class="table-responsive" >
                              <table class="table table-success table-striped text-center" id="table-id" style="border-radius: 20px;"> 
                                  <thead>
                                      <tr>
                                          <th scope="col text-center">Escritura</th>
                                          <th scope="col text-center">Significado</th>
                                          <th scope="col text-center">Pronunciación</th>
                                          <th scope="col text-center">Imagen</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                      <!---------BOTON DE CERRAR DE MODAL GRAFIA KW--------->
                      <div class="modal-footer">
                        <button type="button" class="btn-danger" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <!--------CARD DE GRAFIA  kW--->
                  <li class="card" style="width: 90%;border-style: solid;border-width:5px">
                    <div class="content" >
                      <button  data-toggle="modal" data-target="#exampleModal8" style="background-color: #fff;border:none">
                        <img src="{{asset('img/grafias/letra_hw.png')}}" alt="" >
                        <h4>GRAFIA HW</h4>
                      </button>
                    </div>
                  </li>
                </div>
                <!--------MODAL DE GRAFIA A--->
                <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document"  style="min-width: 90%">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Grafia HW</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-sm-12 " >
                          <!------TABLA DE GRAFIA HW------->
                          <div class="table-responsive" >
                              <table class="table table-success table-striped text-center" id="table-id" style="border-radius: 20px;"> 
                                  <thead>
                                      <tr>
                                          <th scope="col text-center">Escritura</th>
                                          <th scope="col text-center">Significado</th>
                                          <th scope="col text-center">Pronunciación</th>
                                          <th scope="col text-center">Imagen</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                      <!---------BOTON DE CERRAR DE MODAL GRAFIA HW--------->
                      <div class="modal-footer">
                        <button type="button" class="btn-danger" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"> <li class="card" style="width: 300px">
                    <div class="content">9</div>
                  </li></div>
                <div class="col-sm-3"><li class="card" style="width: 300px">
                    <div class="content">10</div>
                  </li></div>
                <div class="col-sm-3"><li class="card" style="width: 300px">
                    <div class="content">11</div>
                  </li></div>
                <div class="col-sm-3"><li class="card" style="width: 300px">
                    <div class="content">12</div>
                  </li></div>
            </div>
            <div class="row">
                <div class="col-sm-3"> <li class="card" style="width: 300px">
                    <div class="content">13</div>
                  </li></div>
                <div class="col-sm-3"><li class="card" style="width: 300px">
                    <div class="content">14</div>
                  </li></div>
                <div class="col-sm-3"><li class="card" style="width: 300px">
                    <div class="content">15</div>
                  </li></div>
                <div class="col-sm-3"><li class="card" style="width: 300px">
                    <div class="content">16</div>
                  </li></div>
            </div>
            <div class="row">
                <div class="col-sm-3"> <li class="card" style="width: 300px">
                    <div class="content">17</div>
                  </li></div>
                <div class="col-sm-3"><li class="card" style="width: 300px">
                    <div class="content">18</div>
                  </li></div>
                <div class="col-sm-3"><li class="card" style="width: 300px">
                    <div class="content">19</div>
                  </li></div>
                <div class="col-sm-3"><li class="card" style="width: 300px">
                    <div class="content">20</div>
                  </li></div>
            </div>
           
            
            
            
            
          </ul>
    
  
   
  
@endsection