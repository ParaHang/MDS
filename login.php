        
<?php

$con = mysqli_connect("localhost","amulya","amulya","medical");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];


			
			$result = mysqli_query($con,"SELECT * FROM `doc` WHERE user='$username' AND pass='$password'");
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);

		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['id'];
		?>
			

		<script> window.location = 'patient_info.php'</script>;	
	
		
		
		
		 
		 <?php

		 }else{ 

				echo 'Your Username or Password Did not match Please try again';

				?>

				<script> var delay=3000; //1 second

					setTimeout(function() {
  //your code to be executed after 1 second
						window.location = 'index.php'}, delay); </script>
				<?php

		}	
				
	?>