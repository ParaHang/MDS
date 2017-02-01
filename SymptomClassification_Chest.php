 

<div class="container">
 <div class="row"> 

 <div class="col-md-12">
<?php
$patient=$_SESSION['patient_id'];

	$output_array = [];   


	

   // This is where your output will be stored.
	foreach ($_POST as $k => $v){
	    array_push($output_array, $v);

	}
	
   /*if ($_POST) {
	    echo '<pre>';
	    echo htmlspecialchars(print_r($_POST, true));
	    echo '</pre>';
	}*/

$part=$_SESSION['part'];
//echo $output_array[0][2];
$con = mysqli_connect("localhost","root","","medical");	
//query
$queryy = mysqli_query($con,"SELECT DISTINCT Symptom FROM diseases where  Area='$part'");  
	
//array define
$symptom = array(); 	

while($row = mysqli_fetch_assoc($queryy)){

	// add each row returned into an array
	$symptom[] = $row;

}

function calculation($disease, $output_array, $symptom,$part){

$con = mysqli_connect("localhost","root","","medical");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$yes = 0;
$maybe = 0;
$no = 0;

for ($i=0; $i <  count($symptom); $i++) { 
	$query = mysqli_query($con,"SELECT * FROM diseases where  Area='$part'");
	
	while($row = mysqli_fetch_assoc($query)){
		
		if ( $disease == $row['Disease'] AND $symptom[$i]['Symptom'] == $row['Symptom']) {
			$temp = $row[$output_array[0][$i]];
			
			switch ($temp) {
				case 'no':
					$no++;
					break;
				case 'maybe':
					$maybe++;
					break;
				case 'yes':
					 $yes++;
					break;
				
				default:
					exit(0);
					break;
			}
		}
	$temp = 'null';
	
}
}
echo "yes=" .$yes;
echo "maybe =" .$maybe;
echo "no = " .$no;
$centroid = (20*$no+50*$maybe+100*$yes)/($no+$maybe+$yes);?>

<?phppecho round($centroid,2);
?><h3 id="main"> <?php echo nl2br("\nThe confidence level for ". $disease. " is  : " . round($centroid,2) . "%\n"); ?> </h3>
<?php return round($centroid,2);

}
$cc=calculation("common cold", $output_array, $symptom,$part);
$fl=calculation("flu", $output_array, $symptom,$part);
$pa=calculation("Pneumonia", $output_array, $symptom,$part);
$ht=calculation("Heartattack", $output_array, $symptom,$part);
   if($cc > $fl && $cc>$pa && $cc>$ht)
   {
   	mysqli_query($con,"INSERT INTO `patient_info`(`patient_id`, `prob_area`, `selected_symptoms`, `diagnosed_disease`, `confi_per`, `drug_pres`) VALUES ($patient,'$part','all','common cold','$cc','')");
   	  $disea='common cold';
   	   $_SESSION['disease_diag']=$disea;
   }
   else if ($fl > $cc && $fl>$pa && $fl>$ht){
   mysqli_query($con,"INSERT INTO `patient_info`(`patient_id`, `prob_area`, `selected_symptoms`, `diagnosed_disease`, `confi_per`, `drug_pres`) VALUES ($patient,'$part','all','flu','$fl','')");
     $disea='Flu';
      $_SESSION['disease_diag']=$disea;
   }
   else if ($pa> $cc && $pa>$fl && $pa>$ht){
   mysqli_query($con,"INSERT INTO `patient_info`(`patient_id`, `prob_area`, `selected_symptoms`, `diagnosed_disease`, `confi_per`, `drug_pres`) VALUES ($patient,'$part','all','Pneumonia','$pa','')");
   $disea='Pneumonia';
    $_SESSION['disease_diag']=$disea;
   }
    else if ($ht> $cc && $ht>$fl && $ht>$pa){
   mysqli_query($con,"INSERT INTO `patient_info`(`patient_id`, `prob_area`, `selected_symptoms`, `diagnosed_disease`, `confi_per`, `drug_pres`) VALUES ($patient,'$part','all','Heartattack','$pa','')");
   $disea='Heartattack';
   $_SESSION['disease_diag']=$disea;
   }
?>
<?php 
$resultnew = mysqli_query($con,"SELECT * FROM `patient` WHERE Id=$patient");
			$rownew = mysqli_fetch_assoc($resultnew);
			
			
$resultss = mysqli_query($con,"SELECT * FROM `patient_info` WHERE patient_id=$patient");
		$rowss = mysqli_fetch_array($resultss);?>
<center><div class="alert alert-warning" role="alert"><h3>The Diagnosed disease of <strong><?php echo $rownew['Name']; ?></strong> maybe <strong> <?php echo $disea; ?></strong>
</h3> </div>
</center>

<a href="disease_ques.php?dis=<?php echo $disea; ?>"><center><button  class="btn btn-success btn-sm">
                                Next</button></center></a>


</div>

</div>
</div>