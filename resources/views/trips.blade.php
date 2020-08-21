<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title></title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <script>
function myFunction() {
    document.getElementById("no").disabled = !document.getElementById("no").disabled;
    document.getElementById("from").disabled = !document.getElementById("from").disabled;
    document.getElementById("to").disabled = !document.getElementById("to").disabled;
    document.getElementById("date").disabled = !document.getElementById("date").disabled;
    document.getElementById("search").disabled = !document.getElementById("search").disabled;
}
</script>





<style>
body {
  padding:20%;
  background-image: url('https://lloydsauctions.imgix.net/wp-content/uploads/2019/02/bus1-1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;

}
</style>

  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
      <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom" >

         <div class="container-fluid">
           <div class="navbar-header">
             <a class="navbar-brand" style="font-style: italic;color:#E9FF33" href="#"><strong>JMS</strong> <span class="lite">BUS</span></a>
           </div>
           <ul class="nav navbar-nav navbar-right">
             <li class="active"><a href="#">Home</a></li>
             <li><a href="about">About us</a></li>
             <li><a href="contact">Contact</a></li>
             <li><a href="question">Genearl Question</a></li>

           </ul>
         </div>
       </nav>




    <!--header end-->

    <!--sidebar start-->


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

        <!-- page start-->

        <div class="row">

          <div class="col-sm-6 col-md-10">
            <section class="panel">
				<div style="padding-top: 20">
				<form class="panel-body"  action={{Route("getTrips")}}  method="post" style="width: 100% ">
        @csrf         
        <div  style="float: left ; width: 50%" class="panel-body">
        <label for="onDate" class="control-label col-lg-2" style="width: auto">From:</label>
        <select name="fromCity" disabled="disabled" id="from" class="form-control" style = "text-transform:capitalize;"    required>
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
        </div>

        <div  style="float: left ; width: 50%" class="panel-body">
      <label for="onDate" class="control-label col-lg-2" style="width: auto">To:</label>
      <select name="toCity" disabled="disabled" id="to" class="form-control" style = "text-transform:capitalize;"    required>
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
      </div>


	          <div  style="float: left; width: 50%" class="panel-body" >
					<label for="onDate" class="control-label col-lg-2" style="width: auto">Number of tickets:</label>

            <input type="number" disabled="disabled" class="form-control" name="number" value ="1" id="no" min="1"  required>
        </div>


      <div  style="float: left ; width: 50%" class="panel-body">
    <label for="onDate" class="control-label col-lg-2" style="width: auto">Date:</label>
    <input type="date" name="fromDate" disabled="disabled" id="date" class="form-control" width="50%">
    </div>

          <div style="float: left;width:25%" class="panel-body" >
            <a class="btn btn-primary" style="width: 200px" onclick="myFunction()"   role="button">Click for update</a>
					</div>

          <div style="float: left;width:25%"  class="panel-body" >
            <button name="search"  class="btn btn-primary" style="width: 200px"  type="submit">Search</button>
					</div>


					</form>
				</div>
<hr style="height:10px;border-width:0;color:gray;background-color:gray">
              <header class="panel-heading">
               <h1>Available Trips</h1>
              </header>

              <div class="container">
  <div class="row">
    <div class="col-10">
      <table style="border:none; margin:20px" width="100%">
        
      <tr> 
      @foreach ($trips  as $trip)


      <th colspan="3">
      <span>Departure from </span><span>{{$trip->from_city_name}}</span>
      </th>
      <th colspan="3">
      <span>Arrive to </span><span>{{$trip->to_city_name}}</span>
      </th>

      </tr>
          <tr>
                 <th style="color:navy"><span style="font-size:1.5em">{{date("g:i a", strtotime($trip->time))}}</th>
            <th style="color: green;">{{$trip->bus_type}}</th>
            <th><i class="fa fa-bus"></i>{{$trip->trip_date}}</th>
            <th style="color:navy"><span style="font-size:1.5em"> {{date("g:i a", strtotime(date_format($trip->times,'H:i')))}}</span></th>

            <th style="color:orange"><span style="font-size:2em">{{$trip->price}}</span><span >EG</span></th>
            <th>
            <form  method="POST" action="book">
            @csrf
            <input type="hidden" name="trip_id"  class="control-label col-lg-2" style="width: auto" value={{$trip->id}}></input>
            <input type="hidden" name="seats"  class="control-label col-lg-2" style="width: auto" value={{$Seats}}></input>
            <input  style="text-align:center;width:60%"  class="btn btn-primary" type='submit'  ></input>
           
            </form>
            </th>
            
          </tr>
          @endforeach
      </table>
    </div>
  </div>
</div>

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
