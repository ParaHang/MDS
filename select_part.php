<?php include('headernew.php'); ?>
<div class="container">
<div class="row">
<div class="col-md-4">

<div class="alert alert-success" role="alert">Please Select The Probable part </div>
<?php
$patient=$_SESSION['patient_id'];
   $result = mysqli_query($con,"SELECT DISTINCT Area FROM diseases");  
   while($rows=mysqli_fetch_array($result)) {
   	?>
   	

<center><a href="select_symptoms.php?Disease=<?php echo $rows['Area']; ?>"><?php echo $rows['Area']; ?></a></center>
<br>
<br>




   	<?php }
  mysqli_close($con);
?>



</div>
</div>
</div>