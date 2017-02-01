<?php
	include_once('database_connect.php');
	$sql = "SELECT symptom FROM disease";
	$result = $conn;->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "disease: " . $row["disease"] . "symptom: " . $row["symptom";
?>



<<!DOCTYPE html>
<html>
<head>
	<title>Symptoms Selection Form</title>
</head>
<body>
	<caption> Select Your Symptoms </caption>
	<table class = "table table-hover" >
	<tbody>
	<form method = "post" action = "SymptomClassification.php">

		<tr>
		<td></td>
		<td>Symptom </td>
		<td>
			<input type = "text" name = "symptom"></input>	
		</tr>
		<tr>
		<td></td>
		<td>Severity</td>
		<td>
			<input type = "text" name = "severity"></input>
	
		</tr>
	</form>
	</div>
</body>
</html>
