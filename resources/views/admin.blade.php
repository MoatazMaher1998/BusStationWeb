<!DOCTYPE html>
<html lang="en">

<head>
<!--<script type = "text/javascript">
<!--
         function validate(form) {
      if( Form.fromCity.value == Form.toCity.value ) {
         alert( "Please provide your name!" );
         Form.fromCity.focus() ;
         return false;
      }
      </script> !-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="{{ url('css/bootstrap.min.css') }}"  rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ url('css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ url('css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{ url('css/style.css')  }}" rel="stylesheet">
  <link href="{{ url( 'css/style-responsive.css' ) }}" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
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
		  <ul class="sidebar-menu">
			       <div align="center" style="padding-up:2"> <h2 style="color: white" ><strong >Cities</strong></h2></div>

          <li class="">
            <a href="http://localhost/Laravel/Bus_Station/public/admin/government/hurghada" class="" >
                          <span>Hurghada</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="http://localhost/Laravel/Bus_Station/public/admin/government/sharmelsheikh" class="">
                          <span>Sharm El Sheikh</span>
		    </a>
          </li>
				
          <li class="sub-menu">
            <a href="http://localhost/Laravel/Bus_Station/public/admin/government/cairo" class="">
                          <span>Giza\Cairo</span>
            </a>
          
          </li>
          <li>
            <a class="" href="http://localhost/Laravel/Bus_Station/public/admin/government/alexandria">
                          <span>Alexandria</span>
            </a>
          </li>
          <li>
            <a class="" href="http://localhost/Laravel/Bus_Station/public/admin/government/dahab">
                          <span>Dahab</span>
            </a>

          </li>

          <li class="sub-menu">
            <a href="http://localhost/Laravel/Bus_Station/public/admin/government/sohag" class="">
                          <span>Sohag</span>
            </a>
            
          </li>

         
 		  <li class="sub-menu">
            <a href="http://localhost/Laravel/Bus_Station/public/admin/government/northcost" class="">
                          <span>North Cost</span>
            </a>
          </li>
 		  <li class="sub-menu">
            <a href="http://localhost/Laravel/Bus_Station/public/admin/government/luxor" class="">
                          <span>Luxor</span>
            </a>
          </li>				
 		  <li class="sub-menu">
            <a href="http://localhost/Laravel/Bus_Station/public/admin/government/qena" class="">
                          <span>Qena</span>
            </a>
          </li>
 		  <li class="sub-menu">
            <a href="http://localhost/Laravel/Bus_Station/public/admin/government/tanta" class="">
                          <span>Tanta</span>
            </a>
          </li>
 		  <li class="sub-menu">
            <a href="http://localhost/Laravel/Bus_Station/public/admin/government/matrouh" class="">
                          <span>Matrouh</span>
            </a>
          </li>
 		  <li class="sub-menu">
            <a href="http://localhost/Laravel/Bus_Station/public/admin/government/asyout" class="">
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

        <!-- page start-->
     
        <div class="row">
          
          <div class="col-sm-6 col-md-12">
            <section class="panel">
            <div style="padding-top: 20">
        <form class="panel-body"  style="width: 100%" action="admin/filter_search" method="post">
        @csrf
	          <div  style="float: left ; width: 30%" class="panel-body">
					<label for="onDate" class="control-label col-lg-2" style="width: auto">select the day:</label>
					<input type="date" name="date" class="form-control" width="50%" required>
					</div>
					
	          <div  style="float: left; width: 30%" class="panel-body" >
					<label for="onDate" class="control-label col-lg-2" style="width: auto">select class:</label>
					<select name="selectClass" class="form-control" required>
					<option>First</option>
					<option>Second</option>
          </select>
          </div>
					<div style="float: none" class="panel-body" >
									  <button type="submit" class="btn btn-primary" style="margin-top: 23px;margin-left: 50px">Search</button>

					</div>
					</form>
				</div>
              <header class="panel-heading">
               <h1>Trips Table for the selected city</h1>
              </header>
              <table class="table table-hover" style="overflow-x: auto">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Bus Id</th>
                    <th>Class</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Date</th>
					          <th>Time</th>
                    <th>Duration</th>
				        	  <th>Price</th>
				        	  <th>Available seats</th>
                  </tr>
                </thead>
                <tbody>
			
					<tr>
          @foreach ($info as $tripData)
                    <td>{{ $tripData->id }}</td>
                    <td>{{ $tripData->bus_id }}</td>
                    <td style = "text-transform:capitalize;">{{ $tripData->type }}</td>
                    <td style = "text-transform:capitalize;">{{ $tripData->from_city_name }}</td>
                    <td style = "text-transform:capitalize;">{{ $tripData->to_city_name }}</td>
                    <td>{{ $tripData->trip_date }}</td>
                    <td>{{ $tripData->time }}</td>
                    <td>{{ $tripData->duration }}</td>
                    <td>{{ $tripData->price }}</td>
                    <td>{{ $tripData->capacity }}</td>
                    </tr>
                  @endforeach
								   
				</tbody>
              </table>
            </section>
          </div>
        </div>
      
       
		  						  	<div align="center"><h1><strong>Add Trip</strong></h1></div>

        <div class="row">

<form action="{{route('add')}}" style="width: 100%" class="panel-body" method="post">
	          <div class="panel-body" style="float: left ; width: 50%"  >
            @csrf
			
					
			 	<label for="from" class="control-label col-lg-2">From</label>
				<select name="fromCity" id="fromCity"  class="form-control" >
				  <option value="hurghada">Hurghada</option>
				  <option value="sharmelsheikh">Sharm El Sheikh</option>
				  <option value="cairo">Giza\Cairo</option>
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
				  <option value="cairo">Giza\Cairo</option>
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
				<input type="date" class="form-control" name="date" required>
				<br>
				<label for="time" class="control-label col-lg-2">Time</label required>
				<input type="time" class="form-control" name = "time" required>
	          	<br>
	</div>
		          <div class="panel-body" style="float:left ; width: 50%"  >

	<label for="duration" class="control-label col-lg-2" style="width: auto">Duration (hr)</label>
				<input type="number" class="form-control" name="duration" id="duration" min="0" required> 
				 <br>
				<label for="class" class="control-label col-lg-2">Class</label>
				<select name="class" id="class" class="form-control" >
				<option value="first">First</option>
				<option value="second">Second</option>
				</select> 
				  <br>
				<label for="price" class="control-label col-lg-2" style="width: auto">Price (L.E)</label>
				<input type="number" class="form-control" name="price" id="price" min="0" required> 
				<br>
				<label for="seats" class="control-label col-lg-2" style="width: auto">Available seats</label>
				<input type="number" class="form-control" name="seats" id="seats" min="0" required>
				 <br>
	</div>
			    <div align="center"><button type="submit" class="btn btn-primary" style="width: 10%"  >Submit</button></div>
</form>
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
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</html>
