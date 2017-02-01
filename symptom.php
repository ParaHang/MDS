<<!DOCTYPE html>
<html>
<head>
	<title>Symptom</title>
</head>
<body>
	<form id="symptom" method="post" action="SymptomClassification.php">
		<input type="text" name="symptom[][name]" placeholder="Symptom" required>
		<input type="text" name="symptom[][severity]" placeholder="Severity" required>
		<input type="text" name="symptom[][name]" placeholder="Symptom" required>
		<input type="text" name="symptom[][severity]" placeholder="Severity" required>
		
		<button id="signin" name="Evaluate" type="submit" value="Evaluate">Sign in</button>	
	</form>
</body>
</html>