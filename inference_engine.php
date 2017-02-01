


<?php
$con = mysqli_connect("localhost","root","","medical");



//script
include('script.php'); 
	
	$disease=$_SESSION['disease'];
//query
$query = mysqli_query($con,"SELECT DISTINCT Symptom FROM diseases");  

//array define
$symptom = array(); 	

while($row = mysqli_fetch_assoc($query)){

	// add each row returned into an array
	$symptom[] = $row;

}

function calculation($disease, $output_array, $symptom){

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
	$query = mysqli_query($con,"SELECT * FROM diseases");
	
	while($row = mysqli_fetch_assoc($query)){
		
		if ( $symptom[$i]['Symptom'] == $row['Symptom']) {
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
$centroid = (20*$no+50*$maybe+100*$yes)/($no+$maybe+$yes);
echo "The confidence level for ". $disease. " is  : " . $centroid . "%";

}

