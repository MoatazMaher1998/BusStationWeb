<!DOCTYPE html>
 <html >
    <head>
        
        <title>jms-contactus</title>
        <style>
        body {
    padding:20%;
    background-image: url('https://lloydsauctions.imgix.net/wp-content/uploads/2019/02/bus1-1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    color: white;
   
  }

  body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
 
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
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
    <div class="about-section">
  <h1>Trip id for your trip it can be used to show qr code with ssn</h1>
  <h3>{{$trip_id}}</h3>
  <a href="http://localhost/Bus_Station_Sprint_3/public/">Home</a>
 
  
</div>

<div>

  
    </body>
</html>