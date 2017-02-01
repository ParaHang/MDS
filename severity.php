 <?php include('headernew.php'); ?>
<div class="container">
<div class="row"> 
<div class="col-md-12">
<?php
$patient=$_SESSION['patient_id'];

$symptom = [];   

   // This is where your output will be stored.
	foreach ($_POST as $k => $v){
	    array_push($symptom, $v);

	}

$part=$_SESSION['disease'];