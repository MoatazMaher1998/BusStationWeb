<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  
  <link href="{{ url('/bootstrap.min.css') }}"  rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ url('/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ url('/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ url('/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{ url('/style.css')  }}" rel="stylesheet">
  <link href="{{ url( '/style-responsive.css' ) }}" rel="stylesheet" />
</head>

<body>
	
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
      </div>

      <!--logo start-->
      <a href="" class="logo" style="font-style: italic"><strong>JMS</strong> <span class="lite">BUS</span></a>
      <!--logo end-->

     
    
    </header>
    <!--header end-->

    <!--sidebar start-->
<aside>
	
      <div id="sidebar" class="nav-collapse ">
		  
        <!-- sidebar menu start-->
		  <ul class="sidebar-menu">;
			       <div align="center" style="padding-up:2"> <h2 style="color: white" ><strong >Cities</strong></h2></div>

          <li class="">
            <a class="" href="" >
                          <span>Hurghada</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="" class="">
                          <span>Sharm El Sheikh</span>
		    </a>
          </li>
				
          <li class="sub-menu">
            <a href="" class="">
                          <span>Giza\Cairo</span>
            </a>
          
          </li>
          <li>
            <a class="" href="">
                          <span>Alexandria</span>
            </a>
          </li>
          <li>
            <a class="" href="">
                          <span>Dahab</span>
            </a>

          </li>

          <li class="sub-menu">
            <a href="" class="">
                          <span>Sohag</span>
            </a>
            
          </li>

         
 		  <li class="sub-menu">
            <a href="" class="">
                          <span>North Cost</span>
            </a>
          </li>
 		  <li class="sub-menu">
            <a href="" class="">
                          <span>Luxor</span>
            </a>
          </li>				
 		  <li class="sub-menu">
            <a href="" class="">
                          <span>Qena</span>
            </a>
          </li>
 		  <li class="sub-menu">
            <a href="" class="">
                          <span>Tanta</span>
            </a>
          </li>
 		  <li class="sub-menu">
            <a href="" class="">
                          <span>Matrouh</span>
            </a>
          </li>
 		  <li class="sub-menu">
            <a href="" class="">
                          <span>Asyout</span>
            </a>
          </li>
				
				
				
				
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
		  						  	<div align="center"><h1><strong>Add Trip</strong></h1></div>

        <div class="row">

<form action="" style="width: 100%" class="panel-body">
	          <div class="panel-body" style="float: left ; width: 50%"  >

			
					
			 	<label for="from" class="control-label col-lg-2">From</label>
				<select name="fromCity" id="fromCity" class="form-control" >
				  <option value="hurghada">Hurghada</option>
				  <option value="sharmelsheikh">Sharm El Sheikh</option>
				  <option value="giza\cairo">Giza\Cairo</option>
				  <option value="alexandria">Alexandria</option>
				  <option value="dahab">Dahab</option>
				  <option value="sohag">Sohag</option>
				  <option value="northcost">North Cost</option>
				  <option value="luxor">Luxor</option>
				  <option value="qena">Qena</option>
				  <option value="tanta">Tanta</option>
				  <option value="matrouh">Matrouh</option>
				  <option value="asyout">Asyout</option>
				</select>
				<br>
				
				<label for="to" class="control-label col-lg-2">To</label>
				<select name="toCity" id="toCity" class="form-control" >
				  <option value="hurghada">Hurghada</option>
				  <option value="sharmelsheikh">Sharm El Sheikh</option>
				  <option value="giza\cairo">Giza\Cairo</option>
				  <option value="alexandria">Alexandria</option>
				  <option value="dahab">Dahab</option>
				  <option value="sohag">Sohag</option>
				  <option value="northcost">North Cost</option>
				  <option value="luxor">Luxor</option>
				  <option value="qena">Qena</option>
				  <option value="tanta">Tanta</option>
				  <option value="matrouh">Matrouh</option>
				  <option value="asyout">Asyout</option>
				</select>
				<br>
				
				<label for="date" class="control-label col-lg-2">Date</label>
				<input type="date" class="form-control">
				<br>
				<label for="time" class="control-label col-lg-2">Time</label>
				<input type="time" class="form-control">
	          	<br>
	</div>
		          <div class="panel-body" style="float:left ; width: 50%"  >

	<label for="duration" class="control-label col-lg-2" style="width: auto">Duration (hr)</label>
				<input type="number" class="form-control" name="duration" id="duration" min="0" > 
				 <br>
				<label for="class" class="control-label col-lg-2">Class</label>
				<select name="class" id="class" class="form-control">
				<option value="first">First</option>
				<option value="second">Second</option>
				</select> 
				  <br>
				<label for="price" class="control-label col-lg-2" style="width: auto">Price (L.E)</label>
				<input type="number" class="form-control" name="price" id="price" min="0"> 
				<br>
				<label for="seats" class="control-label col-lg-2" style="width: auto">Available seats</label>
				<input type="number" class="form-control" name="seats" id="seats" min="0">
				 <br>
	</div>
			    <div align="center"><button type="submit" class="btn btn-primary" style="width: 10%"  >Submit</button></div>
</form>
		  </div>
        <!-- page start-->
     
        <div class="row">
          
          <div class="col-sm-6 col-md-12">
            <section class="panel">
              <header class="panel-heading">
               <h1>Trips Table for the selected city</h1>
              </header>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Date</th>
					<th>Class</th>
					  <th>Time</th>
					  <th>Price</th>
					  <th>Available seats</th>
                  </tr>
                </thead>
                <tbody>
			
					<tr>
					  <td>	</td>
					  <td>	</td>
					  <td>	</td>
					  <td>	</td>
					  <td>	</td>
					  <td>	</td>
					  <td>	</td>
					  <td>	</td>
				   </tr>
				</tbody>
              </table>
            </section>
          </div>
        </div>
      
       
      
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
        
         
      </div>
    </div>
  </section></body>

</html>
