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



</head>

<body>

  <style>
  body {
    padding:20%;
    background-image: url('https://lloydsauctions.imgix.net/wp-content/uploads/2019/02/bus1-1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
   
  }
.bookB {
  background-color: hsl(4, 90%, 17%) !important;
  border-style: solid 0px;
  color:white
}

.bookB:hover {
  background-color: 	hsl(4, 90%, 8%) !important;
  transition: all 1s ease;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  color:white
}
  
  </style>



  <!-- container section start -->
  <section id="container" class="">

 <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom" >

    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" style="font-style: italic;color:#E9FF33" href="#"><strong>JMS</strong> <span class="lite">BUS</span></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="">About us</a></li>
        <li><a href="">Contact</a></li>

      </ul>
    </div>
  </nav>
    </header> -->
    <!--header end-->

    <!--sidebar start-->


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

        <!-- page start-->








</br>
  <div class="container" >

    <div class="row justify-content-center">
        <div class="col-md-10">

             

                <div class="row" >
                @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
                    <form  action={{Route("getTrips")}} method="post" style="width: 50%;margin-left:60%; background-color:hsla(4, 90%, 4%, 0.5);
  border-radius: 25px;" class="panel-body" >
  @csrf
  <h1 style="text-align: center;color:black"><strong>Book Your Ticket</strong></h1>
                        <div class="panel-body" style="float: right ; width: 50%"  >

                        <label for="from" style="font-family:verdana;color:white" class="control-label col-lg-2">From</label>
                        <select name="toCity" id="toCity" class="form-control" style = "text-transform:capitalize;">

                            @foreach ($cities as $city)
                            <option value= {{$city->name}} > {{$city->name}} </option>
                            @endforeach

                        </select>
                        <br>

                        <label for="date" style="font-family:verdana;color:white" class="control-label col-lg-2" >Date</label>
                                <input type="date" name="fromDate" class="form-control" style="width:100%;float:left;" required>
                                <br>

                       
                                <br>
                        </div>
                        <div class="panel-body" style="float:left ; width: 50%"  >

                    <label for="to" style="font-family:verdana;color:white" class="control-label col-lg-2">To</label>
                    <select name="fromCity" id="fromCity" class="form-control" style = "text-transform:capitalize;" required>
                    @foreach ($cities as $city)
                        <option style = "text-transform:capitalize;" value= {{$city->name}} > {{$city->name}} </option>
                    @endforeach
                    </select>
                        <br>
                        <br>
                        <br>
                        <br>
                <label for="ticket" style="font-family:verdana;color:white;"   class="control-label col-lg-2" style="width: auto">Tickets</label>
                    <input type="number" class="form-control" name="number" value ="1" id="seats" min="1" style="width: 215%" required>
                    <br>

                        <br>
                <button type="submit"  class="btn bookB" style="width: 215%;"  >Book</button>
                                	</div>
                                    

                           </div>

                           

                      </div>
                  </div>
    </div>






    

</html>