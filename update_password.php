 <?php
 include('connect.php');
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysqli_query("update doc set pass = '$new_password' where id = '$session_id'")or die(mysql_error());
 ?>