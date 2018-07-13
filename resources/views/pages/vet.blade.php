<!DOCTYPE html>
<html>
<head>
  <meta charset="uft-8">
  <meta name="viewreport" content="width=device-width">
  <meta name="viewreport" content="Functional">
  <meta name="keywords" content="website design">
  <meta name="author" content="shishi">
  <title>Web design </title>
   <link rel="stylesheet" href="/css/style1.css">
  </head>
  <head>
  <title>WlLDLIFE VETERINARY DOCTOR</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>



</head>
<body>

@include('partials.site-nav')


  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">WILDLIFE VETERINARY DOCTOR</span>
  </div>
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
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
  background: url('../assets/demos/welcome_card.jpg') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #e8491d;
}

form{
  color: black;
}
input[type=date]{

}

</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">

<form method = "post" action="{{route('checkups.store')}}">
  {{csrf_field()}}
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('name', 'Animal Name*', ['class' => 'mdl-textfield__label']) !!}
    {!! Form::select('name', $animals, old('name'), ['class' => 'mdl-textfield__select2', 'placeholder' => '', 'required' => '']) !!}
    <p class="help-block"></p>
    @if($errors->has('name'))
        <p class="help-block">
            {{ $errors->first('name') }}
        </p>
    @endif
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "status" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">animalStatus</label>
  </div>

<!--
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
<form method="post" action="#">
<input type="checkbox" name="Status" value="Healthy">Animal is healthy.<br>
<input type="checkbox" name="Status" value="Injured">Animal is injured.<br>
<input type="checkbox" name="Status" value="Deceased">Animal is deceased.
</form>
  </div>
-->

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name = "comments" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">vetComment</label>
  </div>

  <button name = "add" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
  Add
</button>

</form>

  </div>
  <div class="mdl-card__actions mdl-card--border">

  </div>
</div>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-2">
      <div class="page-content"><!-- Your content goes here -->

        <div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">

    <div class="panel-body table-responsive">
    		<table class="table table-bordered table-striped {{ count($checkups) > 0 ? 'datatable' : '' }} dt-select">
    				<thead>
    						<tr>
    								<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

    								<th>Animal name</th>
    								<th>Checkup Date</th>
    								<th>Comments</th>
    								<th>&nbsp;</th>

    						</tr>
    				</thead>

    				<tbody>
    						@if (count($checkups) > 0)
    								@foreach ($checkups as $checkup)
    										<tr data-entry-id="{{ $checkup->id }}">
    												<td></td>

    												<td>{{ str_replace(array('[[',']]'),'', $checkup->animal()->pluck('name')) }}</td>
    												<td>{{ $checkup->created_at }}</td>
    												<td>
    														{{ $checkup->comments }}
    												</td>

    												<td>
    														<a href="{{ route('checkups.edit',[$checkup->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
    														{!! Form::open(array(
    																'style' => 'display: inline-block;',
    																'method' => 'DELETE',
    																'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
    																'route' => ['checkups.destroy', $checkup->id])) !!}
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
  <?php

//       $servername = "localhost";
//       $username = "root";
//       $password = "";
//       $dbname = "national_park";
//
//       $conn = new mysqli($servername, $username, $password, $dbname);
//       // Check connection
//       if ($conn->connect_error) {
//           die("Connection failed: " . $conn->connect_error);
//       } else{
//
//       $sql = "SELECT * FROM vethistory";
//       $result = $conn->query($sql);
//
// echo "<table>
//             <thead>
//               <tr>
//               <th>id</th>
//                 <th>checkupDate</th>
//                 <th>animalID</th>
//                 <th>animalStatus</th>
//                 <th>vetComment</th>
//               </tr>
//             </thead>";
//
//
//       if ($result->num_rows > 0) {
//           // output data of each row
//           while($row = $result->fetch_assoc()) {
//               // echo "id: " . $row["id"]. " - First Name: " . $row["fname"]. " - Second Name: " . $row["sname"]. " Email " . $row["email"]. " - Password: " . $row["pass"]. "<br>";
//               echo "<tbody>
//             <tr>
//             <td>".$row['id']."</td>
//               <td>".$row['checkupDate']."</td>
//               <td>".$row['animalID']."</td>
//               <td>".$row['animalStatus']."</td>
//               <td>".$row['vetComment']."</td>
//             </tr>";
//           }
//           echo "</table>";
//       } else {
//           echo "0 results";
//       }
//
//       }

         ?>

  </div>
  <hr>


<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<!--  -->

  </div><hr>


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
// if (isset($_POST["add"])) {
// $checkupDate = $_POST["checkupDate"];
// $animalID = $_POST["animalID"];
// $animalStatus = $_POST["animalStatus"];
// $vetComment = $_POST["vetComment"];
//
//
//   $sql = "INSERT INTO vethistory (checkupDate, animalID, animalStatus, vetComment)
// VALUES ('$checkupDate', '$animalID', '$animalStatus', '$vetComment')" ;
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
// }
//

 ?>
