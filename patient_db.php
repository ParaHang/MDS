<?php include('headernew.php'); ?>
<?php

$con = mysqli_connect("localhost","amulya","amulya","medical");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$docid=$_SESSION['id'];
  $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $part = $_POST['optradio'];
$_SESSION['part']=$part;
     
mysqli_query($con,"INSERT INTO `patient`(`Id`,`doc_id`, `Name`, `Gender`, `Address`, `Contact`, `Age`, `symptoms`, `disease_diag`) VALUES ('','$docid','$name','$gender','$address','$contact',$age,'','')");
$patient=mysqli_insert_id($con);
	$_SESSION['patient_id']=$patient;

 mysqli_query($con,"INSERT INTO `patient_info`(`patient_id`, `prob_area`, `selected_symptoms`, `diagnosed_disease`, `confi_per`, `drug_pres`) VALUES ($patient,'$part','','','','')");

?>
       

<script> window.location = 'select_symptoms.php'</script>

