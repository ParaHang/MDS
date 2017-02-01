 
<?php include('headernew.php'); ?>

<div class="container">
<div class="row"> 
 <div class="col-md-12">
 <center><div class="alert alert-success" role="alert"><h2>Please Choose the symptoms and wheather the sympotms is Low, Medium or High </h2></div>
</center>
 </div>
 </div>


 <div class="row"> 
 <div class="col-md-4">
 </div>
 <div class="col-md-4">
 <div class="well">
<?php
$con = mysqli_connect("localhost","root","","medical");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>


 


<?php
$part=$_SESSION['part'];

$patient=$_SESSION['patient_id'];


   $result = mysqli_query($con,"SELECT DISTINCT Symptom FROM diseases WHERE Area='$part'");  





    
   while($rows=mysqli_fetch_array($result)) {
   	?>

<center><H4><?php echo $rows['Symptom']; ?> : </H4>
<form id="symptom" method="post" action="classification.php">
		<select type="text" name="severity[]" placeholder="Severity" required>	
			<option value="very low" selected >Very Low</option>
			<option value="low">low</option>
			<option value="moderate">Moderate</option>
			<option value="high">High</option>
			<option value="very high">Very High</option>
		</select></center>




<?php }
  mysqli_close($con);
?>


<center> <button type="submit" class="btn btn-success btn-sm">
                                Submit</button></center>
</form>
</center>
</div>


 <div class="col-md-4">
 </div>
</div>
</div>
</div>



