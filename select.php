 
<?php include('headernew.php'); ?>

<div class="container">
 <div class="row"> 
 <div class="col-md-12">
<?php
$con = mysqli_connect("localhost","root","","medical");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>


 
<center><div class="alert alert-success" role="alert">Please Choose the symptoms and wheather the sympotms is Low, Medium or High </div>
</center>

<?php

$disease=$_GET['Disease'];
$_SESSION['disease']=$disease;
$patient=$_SESSION['patient_id'];
//query
$result = mysqli_query($con,"SELECT DISTINCT Symptom FROM diseases WHERE Area='$disease'");  
?>

<form id="symptom" method="post" action="SymptomClassification.php">
<?php
		while($rows=mysqli_fetch_array($result)) {
    ?>
    <input type="checkbox" name="symptom[]" value='$rows['Symptom']'><br/>
<?php }
  mysqli_close($con);
?>


<center> <button type="submit" class="btn btn-success btn-sm">
                                Submit</button></center>
</form>
</center>

</div>
</div>
</div>

