
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
	<title>Inicio</title>
  
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grafias.css') }}">
    <title>Inicio</title>
  </head>
  
  <body>

    <div class="container-full">
  
      <!-- Nav -->
      <nav class="navbar navbar-inverse navbar-static-top" style="background-color: #1c342d"" >
        <div class="container margin-left-nav">
          <div class="row">
            <div class="col-md-2" style="margin-left:-20px">
              <!-- Navbar brand (Brainiac) y botón colapsable -->
              <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                <a class="navbar-brand"  id="2" href="" style="color: #fff;margin-left: 50px">CYBERNAHUATL</a>
              </div>
            </div>
            
            <div class="col-md-10">
              <div class="navbar-collapse collapse" id="navbar-main" >
  
                <!-- Navbar botones -->
                <ul class="nav navbar-nav horizontal mar-left">
                  <li><a href="{{ route('welcome')}}" style="text-align: center;width: 150px;color:#fff">Inicio</a></li>
                  <li><a href="{{ route('abecedario')}}" style="text-align: center;width: 150px;color:#fff">Alfabeto</a></li>
                  <li><a href="contacto.html" style="text-align: center;width: 200px;color:#fff">Partes del cuerpo</a></li>
                  <li><a href="contacto.html" style="text-align: center;width: 150px;color:#fff">Numeración</a></li>
                  <li><a href="contacto.html" style="text-align: center;width: 150px;color:#fff">Contacto</a></li>
                </ul>
  
                <!-- Navbar derecho (Registro, Login) -->
                <ul class="nav navbar-nav navbar-right horizontal">
  
                    
                  <!-- Inicio de sesión -->
                  <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="sesion" style="color:#fff">Cerrar sesión </a>
                  </li>
                </ul>
              </div>
            </div>
  
  
          </div>
        </div>
      </nav>
    </div>
  
  
    <section class="container-full" >
      
      <!-- Main page -->
      <div class="row" id="full-page" >
  
        <!-- Sidebar -->
        <div class="col-md-2" >
          <div class="profile-sidebar" style="background-color: #712130">
  
            <!-- User picture -->
            <div class="profile-userpic">
              <img src="{{asset('img/logo_2_2.png')}}" class="img-responsive img-circle border" alt="foto">
            </div>
  
            
            <!-- Sidebar menu -->
            <nav class="profile-menu" >
              <ul class="nav navbar vertical">
                <li>
                  <a href="{{ route('perfil')}}" style="color:#fff"><i class="glyphicon glyphicon-user" style="color:#fff"></i> Perfil</a>
                </li>
                <li>
                  <a href="{{ route('cursos')}}" style="color:#fff"><i class=" fas fa fa-regular fa-graduation-cap" style="color:#fff"></i>Cursos</a>
                </li>
                <li>
                  <a href="#" style="color:#fff"><i class="glyphicon glyphicon-star" style="color:#fff"></i> Profesores</a>
                </li>
                <li>
                  <a href="#" style="color:#fff"><i class="glyphicon glyphicon-flag" style="color:#fff"></i> Ayuda</a>
                </li>
              </ul>
            </nav>
          </div>
          
        </div>
        <br>
        <br><br><br>
        <div class="container" >
            
                
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center">
                    <h1 style="font-family: 'Cormorant Garamond', serif;" style="margin-left: 60px;font-size: 23vmin;">
                        GRAFÍA: O
                    </h1>
                </div>
                <div class="col"></div>
                
            <br><br>
            
            <div class="header_wrap">
              <div class="num_rows">
              
                      <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
                           <select class  ="form-control" name="state" id="maxRows">
                               
                               
                               <option value="10">10</option>
                               <option value="15">15</option>
                               <option value="20">20</option>
                               <option value="50">50</option>
                               <option value="70">70</option>
                               <option value="100">100</option>
                  <option value="5000">Show ALL Rows</option>
                              </select>
                           
                        </div>
              </div>
              <div class="tb_search">
      <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
              </div>
            </div>
            <div class="container-fluid:100%">
                <div class="row" >
        
                    <div class="col-sm-12 " >
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
            </div>
            
      <!--		Start Pagination -->
                  <div class='pagination-container'>
                      <nav>
                        <ul class="pagination">
                         <!--	Here the JS Function Will Add the Rows -->
                        </ul>
                      </nav>
                  </div>
            <div class="rows_count" style="margin-top:-50px">Showing 11 to 20 of 91 entries</div>
      
      </div> <!-- 		End of Container -->
      
      
      
      <!--  Developed By Yasser Mas -->

<html>
<script>
      getPagination('#table-id');
	$('#maxRows').trigger('change');
	function getPagination (table){

		  $('#maxRows').on('change',function(){
		  	$('.pagination').html('');						// reset pagination div
		  	var trnum = 0 ;									// reset tr counter 
		  	var maxRows = parseInt($(this).val());			// get Max Rows from select option
        
		  	var totalRows = $(table+' tbody tr').length;		// numbers of rows 
			 $(table+' tr:gt(0)').each(function(){			// each TR in  table and not the header
			 	trnum++;									// Start Counter 
			 	if (trnum > maxRows ){						// if tr number gt maxRows
			 		
			 		$(this).hide();							// fade it out 
			 	}if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
			 });											//  was fade out to fade it in 
			 if (totalRows > maxRows){						// if tr total rows gt max rows option
			 	var pagenum = Math.ceil(totalRows/maxRows);	// ceil total(rows/maxrows) to get ..  
			 												//	numbers of pages 
			 	for (var i = 1; i <= pagenum ;){			// for each page append pagination li 
			 	$('.pagination').append('<li data-page="'+i+'">\
								      <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
								    </li>').show();
			 	}											// end for i 
     
         
			} 												// end if row count > max rows
			$('.pagination li:first-child').addClass('active'); // add active class to the first li 
        
        
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
       showig_rows_count(maxRows, 1, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

        $('.pagination li').on('click',function(e){		// on click each page
        e.preventDefault();
				var pageNum = $(this).attr('data-page');	// get it's number
				var trIndex = 0 ;							// reset tr counter
				$('.pagination li').removeClass('active');	// remove active class from all li 
				$(this).addClass('active');					// add active class to the clicked 
        
        
        //SHOWING ROWS NUMBER OUT OF TOTAL
       showig_rows_count(maxRows, pageNum, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL
        
        
        
				 $(table+' tr:gt(0)').each(function(){		// each tr in table not the header
				 	trIndex++;								// tr index counter 
				 	// if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
				 	if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
				 		$(this).hide();		
				 	}else {$(this).show();} 				//else fade in 
				 }); 										// end of for each tr in table
					});										// end of on click pagination list
		});
											// end of on select change 
		 
								// END OF PAGINATION 
    
	}	


			

// SI SETTING
$(function(){
	// Just to append id number for each row  
default_index();
					
});

//ROWS SHOWING FUNCTION
function showig_rows_count(maxRows, pageNum, totalRows) {
   //Default rows showing
        var end_index = maxRows*pageNum;
        var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
        var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';               
        $('.rows_count').html(string);
}

// CREATING INDEX
function default_index() {
  $('table tr:eq(0)').prepend('<th> ID </th>')

					var id = 0;

					$('table tr:gt(0)').each(function(){	
						id++
						$(this).prepend('<td>'+id+'</td>');
					});
}

// All Table search script
function FilterkeyWord_all_table() {
  
// Count td if you want to search on all table instead of specific column

  var count = $('.table').children('tbody').children('tr:first-child').children('td').length; 

        // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("search_input_all");
  var input_value =     document.getElementById("search_input_all").value;
        filter = input.value.toLowerCase();
  if(input_value !=''){
        table = document.getElementById("table-id");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) {
          
          var flag = 0;
           
          for(j = 0; j < count; j++){
            td = tr[i].getElementsByTagName("td")[j];
            if (td) {
             
                var td_text = td.innerHTML;  
                if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                //var td_text = td.innerHTML;  
                //td.innerHTML = 'shaban';
                  flag = 1;
                } else {
                  //DO NOTHING
                }
              }
            }
          if(flag==1){
                     tr[i].style.display = "";
          }else {
             tr[i].style.display = "none";
          }
        }
    }else {
      //RESET TABLE
      $('#maxRows').trigger('change');
    }
}
</script>