<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
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
<title>Booking page</title>

<script>
var temp=[];
function Turnoff(id,y) {
	var a = document.getElementById(id);
    a.className = "bus2";
	for(var k =0;k < y ;k++){
	var x = document.getElementById('select' + k);
	for (var i=0; i<x.length; i++) {
    if (x.options[i].value == id)
        x.remove(i);
	}
}}
	function reserve(i){
		if(temp[i] != document.getElementById('select' + i).value && temp[i] != null){
			var m = document.getElementById(temp[i]);
			m.className = "bus1";
			}
		var a = document.getElementById( document.getElementById('select' + i).value);
		temp[i] = document.getElementById('select' + i).value;
    	a.className = "bus3";
	}
	
	
function validate(max){
	for (var i=0; i<max; i++) {
	var a = document.getElementById('select' + i);
	a.style.background = "white";
	for (var j=0 ; j<max ;j++){
	if(j==i || a.value==""){continue;}
	var b = document.getElementById('select' + j);
	b.style.background = "white";
	if(a.value == b.value){
		a.style.background = "#FFCCCC";
		b.style.background = "#FFCCCC"
		alert("Same Chair Reserved Twice!");
		return false;
	}
	
	}
	}
	if(a.value == "" || b.value == ""){
		alert("Please Fill All Passengers");
		return false;}
	if(document.getElementById("phone").value.length < 11){
		alert("Invalid Phone Number");
		document.getElementById("phone").style.background = "#FFCCCC";
		return false;
	}
	if(document.getElementById("ssn").value.length < 14){
		alert("Invalid SSN Number");
		document.getElementById("ssn").style.background = "#FFCCCC";
		return false;
	}
		return true;
	
}
	

</script>
</head>

<body>

<style>
  body {
   /* padding:20%;*/
	background:#203646 ;

    background-image: url('https://lloydsauctions.imgix.net/wp-content/uploads/2019/02/bus1-1.jpg'); 
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
	
	li.bus1 {
    list-style-type: none;
    position: relative;    /* It's needed for setting position to absolute in the next rule. */
		
}

li.bus1::before {
    content: '■';
    font-size: 3em;      /* Adjust this value so that it appears what size you want. */
	color: #007AFF;
	
}
	
li.bus2 {
    list-style-type: none;
    position: relative;    /* It's needed for setting position to absolute in the next rule. */
		
}

li.bus2::before {
    content: '■';
    font-size: 3em;      /* Adjust this value so that it appears what size you want. */
	color: aliceblue;
	
}
	
li.bus3 {
    list-style-type: none;
    position: relative;    /* It's needed for setting position to absolute in the next rule. */
		
}

li.bus3::before {
    content: '■';
    font-size: 3em;      /* Adjust this value so that it appears what size you want. */
	color: #FED189;
	
}

	</style>
	  <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
		  
		  </div>
      </div>

      <!--logo start-->
      <a href="#" class="logo" style="font-style: italic"><strong>JMS</strong> <span class="lite">BUS</span></a>
      <!--logo end-->
		   <ul class="nav navbar-nav navbar-right">
        <li id="home" class="active"><a href="#">Home</a></li>
        <li><a href="">About us</a></li>
        <li><a href="">Contact</a></li>

      </ul>
		  
    </header>
	<br>
	
	<section id="container">
		<section class="wrapper">
 <div style="width: 100% ">
	 
 <div style="width: 70% ; float: left ">
 <h2 style="color: #05A0DF ; margin-top: -5px"><strong>Booking</strong></h2><br>
	<form id="booking" method="POST" onsubmit="return validate({{$seats}})" action="ticket" class="panel-body" style=" background-color:hsla(0,0%,0%,0.80); border-radius: 25px ; width: 100% ; float: left onsubmit=">
	@foreach ($tripinfo  as $trip)
		<input type="hidden" name="trip_id"  class="control-label col-lg-2" style="width: auto" value={{$trip->id}}></input>
		@csrf
	@endforeach
	<input type="hidden" name="seats"  class="control-label col-lg-2" style="width: auto" value={{$seats}}></input>
		<div style="float: left ; width: 40% ; margin-right: 5%">
		<label class="control-label" style="color: #FED189 ; font-size: 20px"><strong>Name</strong></label>
		<input class="form-control"  name="first_name" type="text" required>	<br>
		<label class="control-label" name="ssn" style="color: #FED189 ; font-size: 20px"><strong>SSN</strong></label>
		<input class="form-control"  name="ssn" id="ssn" type="text" minlength="14" maxlength="14" required>	<br>
		<label class="control-label"  style="color: #FED189 ; font-size: 20px"><strong>E-mail</strong></label>
		<input class="form-control" name="email" type="email" required>	<br>
			</div>

		<div style="float:left; width: 40% ; margin-right: 5%">
		<label class="control-label" style="color: #FED189 ; font-size: 20px ; width: auto"><strong>Phone</strong></label>
		<input class="form-control" type="tel" name="phone" id="phone" maxlength="11" minlength="11" required>	<br>
		<label class="control-label" style="color: #FED189 ; font-size: 20px"><strong>Nationality</strong></label>
		<input class="form-control" type="text" name=" nationality" required>	<br>
		<label class="control-label" style="color: #FED189 ; font-size: 20px"><strong>Age</strong></label>
		<input class="form-control" type="text" name=" age" required>	<br>
		
			</div>
	 <div style="width: 100% ; float: left">
	 <label class="control-label" style="color: #FED189 ; font-size: 20px"><strong>Seat code</strong></label><br>
		 
		@for ($i = 0; $i < $seats; $i++)
		<div style="float: left ; margin: 10px">
		<select class="form-control" style="width: auto" name = "select{{$i}}" id="select{{$i}}" onchange ="reserve({{$i}});" >
		<option value="" selected></option>
		<option value="A1">A1</option>
		<option value="A2">A2</option>
		<option value="A3">A3</option>
		<option value="A4">A4</option>
		<option value="B1">B1</option>
		<option value="B2">B2</option>
		<option value="B3">B3</option>
		<option value="B4">B4</option>
		<option value="C1">C1</option>
		<option value="C2">C2</option>
		<option value="C3">C3</option>
		<option value="C4">C4</option>
		<option value="D1">D1</option>
		<option value="D2">D2</option>
		<option value="D3">D3</option>
		<option value="D4">D4</option>
		<option value="E1">E1</option>
		<option value="E2">E2</option>
		<option value="E3">E3</option>
		<option value="E4">E4</option>
		<option value="F1">F1</option>
		<option value="F2">F2</option>
		<option value="G1">G1</option>
		<option value="G2">G2</option>
		<option value="H1">H1</option>
		<option value="H2">H2</option>
		<option value="H3">H3</option>
		<option value="H4">H4</option>
		<option value="I1">I1</option>
		<option value="I2">I2</option>
		<option value="I3">I3</option>
		<option value="I4">I4</option>
		<option value="J1">J1</option>
		<option value="J2">J2</option>
		<option value="J3">J3</option>
		<option value="J4">J4</option>
		<option value="K1">K1</option>
		<option value="K2">K2</option>
		<option value="K3">K3</option>
		<option value="K4">K4</option>
		<option value="K5">K5</option>
		</select>
	 	 </div>

		@endfor
		 
	 
	
	 </div>
	 
		<br>
		<div style="width: 100%">

					<h2 style="color: aliceblue ; float: left ; margin-top: 50px;margin-right: 100px ; padding: 10px">Choose seats<br>

					<li class="bus1" style="font-size: 15px ; color: aliceblue ; padding-left: : 5px ; margin: 10px ; float: left" >Available</li>
          			<li class="bus2" style="font-size: 15px ; color: aliceblue ; padding-left: : 10px ; margin: 10px ; float: left" >Unavailable</li>
          			<li class="bus3" style="font-size: 15px ; color: aliceblue ; padding-left: : 10px ; margin: 10px
											; float: left" >Booked</li>

			</h2><br>

		</div>
	<!--	 <input type="checkbox" class="form-control " disabled name="a1">
			<label for="a1" >A1</label>  
-->
	 <div align="center" style="color: aliceblue ; margin: 20px" class="table-responsive">
		 <table cellpadding="5px" style="border: solid">
			 <tr>
				 <td><li class="bus1" style="font-size: 15px" id="A4">A4</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="B4">B4</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="C4">C4</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="D4">D4</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="E4">E4</li></td>
				 <td></td>
				 <td></td>
				 <td><li class="bus1" style="font-size: 15px" id="H4">H4</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="I4">I4</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="J4">J4</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="K4">K4</li></td>
			 </tr>
			 <tr>
				 <td><li class="bus1" style="font-size: 15px" id="A3">A3</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="B3">B3</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="C3">C3</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="D3">D3</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="E3">E3</li></td>
				 <td></td>
				 <td></td>
				 <td><li class="bus1" style="font-size: 15px" id="H3">H3</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="I3">I3</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="J3">J3</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="K3">K3</li></td>
			 </tr>
			 <tr>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td><li class="bus1" style="font-size: 15px" id="K5">K5</li></td>
			 </tr>
			 <tr>
				 <td><li class="bus1" style="font-size: 15px" id="A2">A2</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="B2">B2</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="C2">C2</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="D2">D2</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="E2">E2</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="F2">F2</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="G2">G2</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="H2">H2</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="I2">I2</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="J2">j2</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="K2">K2</li></td>
			 </tr>
			 <tr>
				 <td><li class="bus1" style="font-size: 15px" id="A1">A1</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="B1">B1</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="C1">C1</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="D1">D1</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="E1">E1</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="F1">F1</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="G1">G1</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="H1">H1</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="I1">I1</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="J1">J1</li></td>
				 <td><li class="bus1" style="font-size: 15px" id="K1">K1</li></td>
			 </tr>
			
		 		 
			 </table>
		</div>
					   </form>

	</div>
	 
			
	 
	 			<div id="ticket" class="ticket" style="width: 25% ;height: auto ; color: white; font-size: 16px ; background-color: hsla(0,0%,0%,0.83);border-radius: 25px ; margin: 5px; position: fixed ;left: 73%">
				 @foreach ($tripinfo  as $trip)
					<div>
					<h4 style="margin: 20px ; color: #FED189">Trip ID : {{$trip->id}}</h4>
			</div>
	 	 			<hr>
			<div>
									<h4 style="margin: 20px"> Number of Passengers : {{$seats}} </h4>

			</div>
					<hr>
			<div>
									<h4 style="margin: 20px">Date :  {{$trip->trip_date}} </h4>
					<hr>
									<h4 style="margin: 20px;text-transform:capitalize;">From : {{$trip->from_city_name}}</h4>
					<hr>
									<h4 style="margin: 20px;text-transform:capitalize;" >To :  {{$trip->to_city_name}}</h4>
				
			</div>
					<hr>
			<div>
								<h4 style="margin: 20px">Total</h4>
								<h3 style="margin: 20px">{{$trip->price}} L.E</h3>
								<h5 style="margin: 20px">Tax Included</h5>


			</div>
			@endforeach
			
			<div align="center"  >
				<button type="submit" form="booking" class="btn btn-primary" style=" width: 70%	 ; height: 30% ; margin: 20px "><h4><strong>Book now!</strong></h4></button>
			</div>
		</div>

<script>
var ticket = document.querySelector('#ticket');
var footer = document.querySelector('#footer');

function checkOffset() {
  function getRectTop(el){
    var rect = el.getBoundingClientRect();
    return rect.top;
  }
  
  if((getRectTop(ticket) + document.body.scrollTop) + ticket.offsetHeight >= (getRectTop(footer) + document.body.scrollTop) - 10)
    ticket.style.position = 'absolute';
  if(document.body.scrollTop + window.innerHeight < (getRectTop(footer) + document.body.scrollTop))
    ticket.style.position = 'fixed'; // restore when you scroll up
  
  ticket.innerHTML = document.body.scrollTop + window.innerHeight;
}

document.addEventListener("scroll", function(){
  checkOffset();
});	
	
</script>


		@foreach ($chairs  as $reserved)
		<script type="text/javascript">
			 var chair_id = <?php echo(json_encode($reserved->chair_id)); ?>;
			 var i = <?php echo(json_encode($seats)); ?>;
			Turnoff(chair_id,i);
		
		</script>
		@endforeach
	 
 <div style="width: 70% ; color: white; float:left ; font-size: 16px ; background-color: hsla(0,0%,0%,0.83);border-radius: 25px ; margin-top:  20px ; padding: 25px">
		<h2 style="color: aliceblue">Travel Instructions</h2><br>

			
			<li>Checking the date, time, and the bus route of the trip is the responsibility of the passenger.</li><br>

			<li>Children above four years must buy a full ticket. We don't sell half tickets.</li><br>

			<li>The passenger has the right to carry two medium-sized suitcases, and if he has more than that, he will pay an extra fee.</li><br>

			<li>Please keep the ticket and show it upon request.</li><br>

			<li>In case the company causes loss of any baggage, the maximum compensation is 100 EGP, and the company is not responsible for what is inside 			the bags.</li><br>
				
			<li>The company is not responsible for the baggage accompanied by the passenger inside the bus salon and will not be compensated.</li><br>

			<li>It is forbidden to take or transport animals, birds, fish, flammable, or liquid materials.</li>
		</div>

	</div>
			
	</section>
	</section>
	<footer id="footer" class="panel-footer" style="background-color: #1A2732 ; height: 150px ">
		<div align="center" style="padding-left:50%">
	      <a href="" class="logo" style="font-style: italic"><strong>JMS</strong> <span class="lite">BUS</span></a><br>
		</div>
		<br>

					<h5 style="color: aliceblue ; margin-top: 50px" align="center"> © 2020 ALL COPYRIGHTS RESERVED - JMS BUS</h5>

	</footer>
</body>
</html>
