 
<?php
$con = mysqli_connect("localhost","root","","medical");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 
<H1>Please Choose the symptoms and weather the sympotms is Low, Medium or High</H1>

<?php

$result = mysqli_query($con,"SELECT DISTINCT Symptom FROM diseases");  
while($rows=mysqli_fetch_array($result)) {

?>

<H4><?php echo $rows['Symptom']; ?> : </H4>
<form id="symptom" method="post" action="SymptomClassification.php">
		<select type="text" name="severity[]" placeholder="Severity" required>	
			<option value="very low" selected >Very Low</option>
			<option value="low">low</option>
			<option value="moderate">Moderate</option>
			<option value="high">High</option>
			<option value="very high">Very High</option>
		</select>

<?php }
  mysqli_close($con);
?>


<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if(isset($_POST['submit'])){
$selected_val = $_POST['symptom'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
?>





