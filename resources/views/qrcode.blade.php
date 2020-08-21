<!DOCTYPE html>
<html >
    <head>
    
     

        <link rel="shortcut icon" href="img/favicon.png">

<title>jms-qrcode</title>

<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- bootstrap theme -->
<link href="css/bootstrap-theme.css" rel="stylesheet">
<!--external css-->
<!-- font icon -->
<link href="css/elegant-icons-style.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />
<!-- Custom styles -->

<style>
   

  body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}



.about-section {
  padding: 50px;
  text-align: center;
 
 
}



.para {
    
    padding: 20px;
    font-size: 16px;
    line-height: 40px;
    margin-bottom: 32px;
    width: 80%;
    margin-left:40px;
}

h2{
    text-align: center;
}






        </style>
    </head>
    <body>
    <section id="container" class="">

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
   </header> 
       
    

   
    <div >
    
    <div class="about-section">
  <h1>your chair(s) id {{$phpt=$ticketinfo}}</h1>
  <p>trip information: 	from:{{$tripinfo -> from_city_name}} to:{{$tripinfo->to_city_name}}  duration: {{$tripinfo->duration}}
  time:{{$tripinfo->time}} price:{{$tripinfo->price}}</p>
  <br>
  <p>bus information: id of bus: {{$businfo->id}} type of bus: {{$businfo->type}}</p>
</div>

    <br>
    <div class="about-section">
    {!! QrCode::size(250)->generate($phpt); !!}
    
    </div>
    
</div> 
    </body>
</html>