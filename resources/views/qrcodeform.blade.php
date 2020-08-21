<!DOCTYPE html> <html> 
    <head>
        <meta charset="utf-8">
       
        <title>jms-qrcodeform</title>
  


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
    <style>
       body {
    padding:20%;
    background-image: url('https://lloydsauctions.imgix.net/wp-content/uploads/2019/02/bus1-1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    color: white;
   
  }
    </style>
     
    <body><section id="container" class="">

<nav class="navbar navbar-inverse navbar-fixed-top navbar-custom" >

   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" style="font-style: italic;color:#E9FF33" href="http://localhost/Bus_Station_Sprint_3/public/"><strong>JMS</strong> <span class="lite">BUS</span></a>
     </div>
     <ul class="nav navbar-nav navbar-right">
       <li class="active"><a href="http://localhost/Bus_Station_Sprint_3/public/">Home</a></li>
       <li><a href="http://localhost/Bus_Station_Sprint_3/public/aboutus">About us</a></li>
       <li><a href="http://localhost/Bus_Station_Sprint_3/public/Contactus">Contact</a></li>
       <li><a href="http://localhost/Bus_Station_Sprint_3/public/terms">terms</a></li>
       <li><a href="http://localhost/Bus_Station_Sprint_3/public/qrcodeform">Qrcode</a></li>


     </ul>
   </div>
 </nav>
   </header> -->
   <br>
   <br><br>
    <form action={{Route("qrcodeform")}} method="post" class="container">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">SSN</label>
    <input type="number" name="ssn"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ssn" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Trip_id</label>
    <input type="number" name="trip_id"class="form-control" id="exampleInputPassword1" placeholder="trip_id" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </body>
</html>