@extends('layouts.plantilla2')

@section('content')

<!---<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>            
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>            
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>
<div class="svg"></div>-->


<!---<div class="row">
    
    
    <div class="box small-12 large-12 columns" style="text-align: center">
      <div class="box-model jagger">
        <div class="inner">
          <div class="post">
            
            
            <a href="#" class="btn">View all heroes</a>
          </div>
          <div class="image-holder">
            <img src="http://icons.iconarchive.com/icons/diversity-avatars/avatars/256/mick-jagger-icon.png" width="280" />
          </div>
        </div>
      </div>
    </div>
  
  </div>--->


  <form id="cont">

    <input type="radio" id="step-1" name="step" checked />
    <input type="radio" id="step-2" name="step" />
    <input type="radio" id="step-3" name="step" />
    <input type="radio" id="step-4" name="step" />
    
    <div id="bubble-1" class="bubble">
      <div>En esta sección aprenderas los numeros en nahuatl</div>
      <label for="step-2">!Has click aqui!</label>
    </div>
    
    <div id="bubble-2" class="bubble right">
      <div>Empecemos, has click sobre un número para saber su información</div>
      <label for="step-3">Finalizar</label>
    </div>
    
    <div id="bubble-3" class="bubble">
      <div>!Muy bien!, has aprendido los numeros basicos en la lengua nahuatl!</div>
      <p></p>
      <label for="step-4">Volver a mostrar numeros</label>
    </div>
    
    <div id="bubble-4" class="bubble right">
      <div>Ok, aqui tienes nuevamente los numeros en nahuatl, recuerda que tienes que dar click sobre un numero para saber su información</div>
      <input type="reset" value="Finalizar" id="reset" />
    </div>
  
    <div id="magician">
      
        <div class="box small-12 large-12 columns" style="text-align: center">
            <div class="box-model jagger">
              <div class="inner">
                <div class="post">
                </div>
                <div class="image-holder">
                  <img src="https://icons.iconarchive.com/icons/google/noto-emoji-people-profession/512/10219-man-teacher-light-skin-tone-icon.png" width="280" />
                </div>
              </div>
            </div>
          </div>
      
      
    </div>
  
    <div class="cards" id="cards-1" style="width: 60%">
      <div class="row" >
        <div id="card-1" class="card red">
            <h2>1</h2>
        </div>
        <div id="card-2" class="card">
            <h2>2</h2>
        </div>
        <div id="card-3" class="card">
            <h2>3</h2>
        </div>
        <div id="card-4" class="card">
            <h2>4</h2>
        </div>
        <div id="card-5" class="card">
            <h2>5</h2>
        </div>
        <div id="card-6" class="card">
            <h2>6</h2>
        </div>
        <div id="card-7" class="card">
            <h2>7</h2>
        </div>
        <div id="card-8" class="card">
            <h2>8</h2>
        </div>
        <div id="card-1" class="card red">
            <h2>9</h2>
        </div>
        <div id="card-2" class="card">
            <h2>10</h2>
        </div>
        <div class="row" style="margin-top: 50px">
            <div id="card-3" class="card">
                <h2>11</h2>
            </div>
            <div id="card-4" class="card">
                <h2>12</h2>
            </div>
            <div id="card-5" class="card">
                <h2>13</h2>
            </div>
            <div id="card-6" class="card">
                <h2>14</h2>
            </div>
            <div id="card-7" class="card">
                <h2>15</h2>
            </div>
            <div id="card-8" class="card">
                <h2>16</h2>
            </div>
            <div id="card-9" class="card">
                <h2>17</h2>
            </div>
            <div id="card-10" class="card">
                <h2>18</h2>
            </div>
            <div id="card-11" class="card">
                <h2>19</h2>
            </div>
            <div id="card-11" class="card">
                <h2>20</h2>
            </div>
        </div>
        
      </div>
      
    </div>
    
    
  </form>

@endsection