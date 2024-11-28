<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


	
<style>
body {
  font-family: "Lato", sans-serif;
}

input {
	border-style: solid;
	border-color: black;
	
}

div {
	padding: 5px 5px 5px 5px;
	font-family : Arial;
	font-size: 11px;
}

span {
	margin: 5px 5px 5px 5px;
	
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="?id=1">Employee profile</a>
  <a href="?id=2">Employee Listing</a>
</div>

<div class="row" align="center">
	<h2>Employee Records</h2>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Main Menu</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<body>
	<div class="container">
		<br><br>
		
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			
				<?php
					if (isset($_GET['id'])) 
					{
						if ($_GET['id']==1) {
							include("profile.php");
						} else 	if ($_GET['id']==2) {						
							include("details.php");
						}
					}
					
				?>
			
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>	
</body>
</html> 
