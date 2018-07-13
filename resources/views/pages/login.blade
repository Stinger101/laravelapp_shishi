<?php


$username=$_POST['username'];
$password=$_POST['pass'];
$password=md5($password);
$conn=new mysqli('localhost', 'root', '', 'national_park');
$sql="SELECT * FROM users WHERE email = '$username' and password='$password'";
$result=$conn->query($sql);

	if ($result->num_rows > 0) {
		    // output data of each row

		    while($row = $result->fetch_assoc()) {

	    	  if ($row["type"] == "vet") {
	    	# code...vet
				header("Location: http://localhost/wild/vet.php");
				session_start();
				$_SESSION["id"] = $row["id"];
		    }elseif ($row["type"] == "tracker") {
		    	# code...tracker
		    	header("Location: http://localhost/wild/tracking.php");
		    	session_start();
		    	$_SESSION["id"] = $row["id"];
		    }else{
				// manager
				header("Location: http://localhost/wild/manager.php");
				session_start();
				$_SESSION["id"] = $row["id"];
		    }
	//echo '<script type="text/javascript">location:"wildlife.html"</script>';
	//echo("welcome");
	//header("Location: manager.php");
}}else{
	//echo "0 results"
echo("<script type='text/javascript'>alert('Enter correct details');document.location='login.html'</script>");
}
