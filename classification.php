<?php include('headernew.php');
$part=$_SESSION['part']; 


if($part=='Chest'){

include('SymptomClassification_Chest.php');
}
else if($part=='Head'){
	include('SymptomClassification_Head.php');
}
else if($part=='Blood'){
include('SymptomClassification_Blood.php');
	
}

 ?>
