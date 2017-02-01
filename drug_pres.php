<?php include('headernew.php'); ?>
<div class="container">
      <div class="row">

      <div class="col-md-4">
</div>

      	<div class="col-md-4">
      		 <div class="well">

<?php 
$patient=$_SESSION['patient_id'];
$con = mysqli_connect("localhost","root","","medical");
$resultnew = mysqli_query($con,"SELECT * FROM `patient` WHERE Id=$patient");
			$rownew = mysqli_fetch_array($resultnew);
		?>
<center><div class="alert alert-warning" role="alert">Prescribed drug for <strong><?php echo $rownew['Name']; ?></strong> are </strong> </div>
</center>
<?php


$dise=$_SESSION['drug'];
$result = mysqli_query($con,"SELECT * FROM `drug` WHERE disease='$dise'");
		
	

  while($row=mysqli_fetch_assoc($result)) {
 ?>

<H4><?php echo $row['drug_name']; ?>  </H4>


<?php }
  mysqli_close($con);
?>






				

</div>

      	</div>
        <div class="col-md-4">
</div>

            </div>
            </div>