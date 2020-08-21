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

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
   
      <div>
    <a href="#addTrip">
							<button  type="submit" class="btn btn-default tooltips" title="Register new admin" style="width: auto; float: right;margin-right:10px ;margin-top:14px">Add Trips</button>
		</a>
</div>

 <form name="register" action="register" method = "POST">
 @csrf
		<input type="submit" value=" register"class="btn btn-default tooltips" style="width: auto; float: right;margin-right:10px ;margin-top:14px">
    <A HREF="javascript:document.register.submit()"></A> 
  </form> 
  <form name="alltrips" method = "POST" action="admin_all_trips" class="panel-body">
            @csrf
            <button type="submit" class="btn btn-default tooltips" title="Register new admin" style="width: auto; float: right;margin-right:10px">Show all Trips</button>
            <A HREF="javascript:document.alltrips.submit()"></A> 
          </form>

    </header>
    <!--header end-->

    <!--sidebar start-->
<aside>
	
      <div id="sidebar" class="nav-collapse ">
		  
        <!-- sidebar menu start-->
		  <ul class="sidebar-menu">
			       <div align="center" style="padding-up:2"> <h2 style="color: white" ><strong >Cities</strong></h2></div>

          <li class="">
           <form name="submitForm" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="hurghada">
            <A HREF="javascript:document.submitForm.submit()">Hurghada</A>  
            </form> 
          </li>
          <li class="sub-menu">
          <form name="submitForm1" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="sharmelsheikh">
            <A HREF="javascript:document.submitForm1.submit()">Sharm El Sheikh</A>  
            </form> 
          </li>
				
          <li class="sub-menu">
          <form name="submitForm2" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="cairo">
            <A HREF="javascript:document.submitForm2.submit()">Cairo / Giza</A>  
            </form>
          </li>
          <li>
          <form name="submitForm3" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="alexandria">
            <A HREF="javascript:document.submitForm3.submit()">Alexandria</A>  
            </form> 
          </li>
          <li>
          <form name="submitForm4" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="dahab">
            <A HREF="javascript:document.submitForm4.submit()">Dahab</A>  
            </form> 
          </li>

          <li class="sub-menu">
          <form name="submitForm5" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="sohag">
            <A HREF="javascript:document.submitForm5.submit()">Sohag</A>  
            </form> 
            
          </li>

         
 		  <li class="sub-menu">
       <form name="submitForm6" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="northcost">
            <A HREF="javascript:document.submitForm6.submit()">North Cost</A>  
            </form> 
          </li>
 		  <li class="sub-menu">
       <form name="submitForm7" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="luxor">
            <A HREF="javascript:document.submitForm7.submit()">Luxor</A>  
            </form> 
          </li>				
 		  <li class="sub-menu">
       <form name="submitForm8" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="qena">
            <A HREF="javascript:document.submitForm8.submit()">Qena</A>  
            </form> 
          </li>
 		  <li class="sub-menu">
       <form name="submitForm9" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="tanta">
            <A HREF="javascript:document.submitForm9.submit()">Tanta</A>  
            </form> 
          </li>
 		  <li class="sub-menu">
       <form name="submitForm10" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="matrouh">
            <A HREF="javascript:document.submitForm10.submit()">Matrouh</A>  
            </form> 
          </li>
 		  <li class="sub-menu">
       <form name="submitForm11" method="POST" action="admin_filter">
            @csrf
            <input type="hidden" name="city" value="asyout">
            <A HREF="javascript:document.submitForm11.submit()">Asyout</A>  
            </form> 
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
        <form class="panel-body"  style="width: 100%" action="filter_search" method="post">
        @csrf
	           <div  style="float: left; width: 15%" class="panel-body" >
             <label for="onDate" class="control-label col-lg-2" style="width: auto">From:</label>
             <select name="fromCity" class="form-control" required>
          
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
          </select>
          </div>
          <div  style="float: left; width: 15%" class="panel-body" >
          <label for="onDate" class="control-label col-lg-2" style="width: auto">To:</label>
          <select name="toCity" class="form-control" required>
          
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
          </select>
          </div>
	        <div  style="float: left ; width: 20%" class="panel-body">
					<label for="onDate" class="control-label col-lg-2" style="width: auto">From day:</label>
					<input type="date" name="fromDay" class="form-control" width="50%" required>
					</div>
          <div  style="float: left ; width: 20%" class="panel-body">
					<label for="onDate" class="control-label col-lg-2" style="width: auto">From day:</label>
					<input type="date" name="toDay" class="form-control" width="50%" required>
          	</div>
					
	          <div  style="float: left; width: 15%" class="panel-body" >
					<label for="onDate" class="control-label col-lg-2" style="width: auto">select class:</label>
					<select name="busClass" class="form-control" required>
					<option>First</option>
					<option>Second</option>
          </select>
          </div>
					
          <div  style="float: left; width: 15%" class="panel-body" >
          <label for="onDate" class="control-label col-lg-2" style="width: auto ;color:white">search</label>
          <input type="submit" value="Search" class="btn btn-primary" style="width: 90% ; margin-left: 10px ; font-size: 15px">
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
                    <td>
                    <form action="deleteTrip" method="post" onSubmit="return confirm('Are you sure?')">
                      @csrf
                      <input type="hidden" name="id_number" value={{$tripData->id}}>
                        <input type="submit" value="x"  style="border:none;background-color:white" >
                      </form>
                    </td>
                    </tr>
                  @endforeach
								   
				</tbody>
              </table>
            </section>
          </div>
        </div>
      
       
		  						  	<div align="center" id="addTrip"><h1><strong>Add Trip</strong></h1></div>

        <div class="row">

<form action="{{route('Add_Trip')}}" style="width: 100%" class="panel-body" method="post">
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
