
<html>
<head>
	<title>WlLDLIFE MANAGER</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

 <link rel="stylesheet" href="/css/style1.css">

</head>
<body>
  <!--linking part-->
@include('partials.site-nav')

  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">WILDLIFE MANAGER</span>
  </div>
  <main class="mdl-layout__content">

<!-- 88888888888888888888888888888888888888888888888888888888888888888888888888 -->

    <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
      <div class="page-content"><!-- Your content goes here -->
      	<!-- Wide card with share menu button -->
<style>
.demo-card-wide.mdl-card {
  width: 510px;
  margin:auto;
}
.demo-card-wide > .mdl-card__title {
  color: #e8491d;
  height: 306px;

}
.demo-card-wide > .mdl-card__menu {
  color: #e8491d;
}

form{
	color: black;
}

#grid{
  display: grid;
  grid-template-columns: 50% 50%;
}

</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">

<form method = "post" action="{{route('animals.store')}}">
	{{csrf_field()}}
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "name" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">AnimalName</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "type" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">animalType</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "location" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">animalLocation</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "tracker_id" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">trackerID</label>
  </div>

  <button type="submit" name = "addAnimal" style="background-color: green;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
  Add
</button>

</form>

  </div>
  <div class="mdl-card__actions mdl-card--border">

  </div>
</div>
      </div>
    </section>

    <!-- 8888888888888888888888888888888888888888888888888888888888888888888888888888888 -->
    <section class="mdl-layout__tab-panel" id="fixed-tab-2">
      <div class="page-content"><!-- Your content goes here -->

      	<div id = "grid">

<!-- Blog entries -->
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">

  <?php

// 			$servername = "localhost";
// 			$username = "root";
// 			$password = "";
// 			$dbname = "national_park";
//
// 			$conn = new mysqli($servername, $username, $password, $dbname);
// 			// Check connection
// 			if ($conn->connect_error) {
// 			    die("Connection failed: " . $conn->connect_error);
//   			} else{
//
// 			$sql = "SELECT * FROM animal";
// 			$result = $conn->query($sql);
//
// echo "<table>
//             <thead>
//               <tr>
//                 <th>animalType</th>
//                 <th>animalID</th>
//                 <th>animalLocation</th>
//                 <th>trackerID</th>
//               </tr>
//             </thead>";
//
//
// 			if ($result->num_rows > 0) {
// 			    // output data of each row
// 			    while($row = $result->fetch_assoc()) {
// 			        // echo "id: " . $row["id"]. " - First Name: " . $row["fname"]. " - Second Name: " . $row["sname"]. " Email " . $row["email"]. " - Password: " . $row["pass"]. "<br>";
// 			        echo "<tbody>
//             <tr>
//               <td>".$row['animalType']."</td>
//               <td>".$row['animalID']."</td>
//               <td>".$row['animalLocation']."</td>
//               <td>".$row['trackerID']."</td>
//             </tr>";
// 			    }
// 			    echo "</table>";
// 			} else {
// 			    echo "0 results";
//  			}
//
// 			}

      	 ?>

  <!-- </div> -->
<!-- <div> -->
  <!-- About Card
  <div style="background-color: white;" class="w3-card w3-margin w3-margin-top">
  <form method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-left: 20px; background-color: white;">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4" name = "deleteAnimalID">
    <label class="mdl-textfield__label" for="sample4">Delete</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>

  <button name= "delete"   class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
  Delete
</button>

</form>
</div><hr>-->
<!-- END Introduction Menu -->
<!-- </div> -->

<div class="panel-body table-responsive">
		<table class="table table-bordered table-striped {{ count($animals) > 0 ? 'datatable' : '' }} dt-select">
				<thead>
						<tr>
								<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

								<th>Animal name</th>
								<th>Animal type</th>
								<th>Animal location</th>
								<th>Tracker id</th>
								<th>&nbsp;</th>

						</tr>
				</thead>

				<tbody>
						@if (count($animals) > 0)
								@foreach ($animals as $animal)
										<tr data-entry-id="{{ $animal->id }}">
												<td></td>

												<td>{{ $animal->name }}</td>
												<td>{{ $animal->type }}</td>
												<td>
														{{ $animal->location }}
												</td>
												<td>
														{{ $animal->tracker_id }}
												</td>
												<td>
														<a href="{{ route('animals.edit',[$animal->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
														{!! Form::open(array(
																'style' => 'display: inline-block;',
																'method' => 'DELETE',
																'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
																'route' => ['animals.destroy', $animal->id])) !!}
														{!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
														{!! Form::close() !!}
												</td>

										</tr>
								@endforeach
						@else
								<tr>
										<td colspan="9">@lang('global.app_no_entries_in_table')</td>
								</tr>
						@endif
				</tbody>
		</table>
</div>

</div>
</div>
</div>
</section>


  <!--for part 3-->

  <!-- 88888888888888888888888888888888888888888888888888888888888888888888888888888888888 -->

  <section class="mdl-layout__tab-panel" id="fixed-tab-3">
      <div class="page-content"><!-- Your content goes here -->
        <!-- Wide card with share menu button -->
<style>
.demo-card-wide.mdl-card {
  width: 510px;
  margin:auto; ;
}
.demo-card-wide > .mdl-card__title {
  color: #e8491d;
  height: 306px;
}
.demo-card-wide > .mdl-card__menu {
  color: #e8491d;
}

form{
  color: black;
}

</style>





<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">

<form method = "post">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "adoptedFrom" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">adoptedFrom</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "adoptedTo" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">adoptedTo</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "adoptionDate" type="date" id="sample3">
    <label class="mdl-textfield__label" for="sample3">adoptionDate</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "animalID" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">animalID</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "animalType" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">animalType</label>
  </div>

  <button name = "add" style="background-color: green;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
  Add
</button>

</form>

  </div>
  <div class="mdl-card__actions mdl-card--border">

  </div>
</div>
      </div>
    </section>
  <hr>


<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->

      </div>
    </section>
  </main>
</div>
</body>
</html>



<?php
	# code...

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "national_park";
//
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }else{
// if (isset($_POST["addAnimal"])) {
// $animalType = $_POST["animalType"];
// $animalLocation = $_POST["animalLocation"];
// $trackerID = $_POST["trackerID"];
//
//
// 	$sql = "INSERT INTO animal (animalType, animalLocation, trackerID)
// VALUES ('$animalType', '$animalLocation', '$trackerID')" ;
//
// if ($conn->query($sql) === TRUE) {
//     echo '<script language="javascript">';
// echo 'alert("successfully sent")';
// echo '</script>';
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// }
//
//
// if (isset($_POST["delete"])) {
//   $deleteAnimalID = $_POST["deleteAnimalID"];
//
//   $sql = "DELETE FROM animal
//   WHERE animalID = '$deleteAnimalID'";
//
//   if ($conn->query($sql) === TRUE) {
//     echo '<script language="ja vascript">';
//     echo 'alert("successfully deleted")';
//     echo '</script>';
//   }else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
//
// }
//
// }


 ?>

 <?php
  # code... for part 3

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "national_park";
//
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }else{
//
// if (isset($_POST["add"])) {
// $adoptedFrom = $_POST["adoptedFrom"];
// $adoptedTo = $_POST["adoptedTo"];
// $adoptionDate = $_POST["adoptionDate"];
// $animalID = $_POST["animalID"];
// $animalType = $_POST["animalType"];
//
//
//
//   $sql = "INSERT INTO wildlifeinterchange (adoptedFrom, adoptedTo, adoptionDate, animalID, animalType)
// VALUES ('$adoptedFrom', '$adoptedTo', '$adoptionDate', '$animalID', '$animalType')" ;
//
// if ($conn->query($sql) === TRUE) {
//     echo '<script language="javascript">';
//     echo 'alert("successfully sent")';
//     echo '</script>';
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// }


// if (isset($_POST["deleteAnimalID"])) {
//   $deleteAnimalID = $_POST["deleteAnimalID"];

//   $sql = "DELETE FROM wildlifeinterchange
//   WHERE animalID = '$deleteAnimalID'";

//   if ($conn->query($sql) === TRUE) {
//     echo '<script language="javascript">';
//     echo 'alert("successfully deleted")';
//     echo '</script>';
//   }else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }

// }

// }


 ?>
