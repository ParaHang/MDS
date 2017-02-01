<?php include('headernew.php'); ?>
<div class="container-fluid">
      <div class="row-fluid">
      	<div class="col-md-8">
      		


<?php
$disea=$_SESSION['disease_diag'];
$disease=$_GET['dis'];
$_SESSION['drug']=$disease;
$con = mysqli_connect("localhost","root","","medical");
$result = mysqli_query($con,"SELECT * FROM `ques` WHERE disease='$disease'");
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);

		if( $num_row > 0 ) { 
		
		
			if ($disea=='Heartattack'){
		
					include ('disease_ques_heartattack.php');
			
		}else if($disea=='Pneumonia'){				
			include ('disease_ques_pneumonia.php');
			}
			else if($disea=='meningitis'){				
			include ('disease_ques_meningitis.php');
			}
			else if($disea=='leukemia'){				
			include ('disease_ques_leukemia.php');
			}else if($disea=='migrane'){				
			include ('disease_ques_migrane.php');
			}
				else if($disea=='Anemia'){				
			include ('disease_ques_Anemia.php');
			}
		


		 }


		 else
		 { 

				?> <script> window.location = 'drug_pres.php'</script>;	
				<?php

				}?>

				



      	</div>

            </div>
            </div>