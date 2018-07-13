<!DOCTYPE html>
<html>
<head>
	<meta charset="uft-8">
	<meta name="viewreport" content="width=device-width">
	<meta name="viewreport" content="Functional">
	<meta name="keywords" content="website design">
	<meta name="author" content="shishi">
	<title>Tracking </title>
  <link rel="stylesheet" href="http://localhost/wild/style1.css">
  
  <style>

table {
    font-family: verdana, sans-serif;
    border-collapse: collapse;
    width: 75%;
}

td, th {
    border: 2px solid #5c5c3d;
    text-align: left;
    padding: 7px;
}

tr:nth-child(even) {
    background-color: #5c5c3d;
}

/*drop down styling starts here*/


.dropbtn {
    background-color: #434323;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #727240;
}

/*end of drop down menu*/
</style>



</head>
<body>
		<header>
<div class="container">
<div id="branding">
	<h1> <span class="highlight">Nairobi National Park </span> Wildlife</h1>
</div>
<nav>
	
	<ul>
		<li ><a href="wildlife.html">home</a></li> 

        <li ><a href="about.html">about</a></li>

        <li><a href="services.html">services</a></li>

        <li class="current"><a href="tracking.php">tracking</a></li>
	</ul>
</nav>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">



        </header>

<!--beginning of drop down-->
<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="services.html">Link 1</a>
    <a href="#">Link 2</a>
    
  </div>
</div>

<!--end of drop down menu-->
        
        	<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "national_park";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT animalID, animalStatus, vetComment FROM vethistory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>status</th><th>VetComment</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["animalID"]. "</td><td>" . $row["animalStatus"]. " </td><td>" . $row["vetComment"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 


        </body>
</html>