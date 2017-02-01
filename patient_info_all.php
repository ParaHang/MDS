<?php include('headernew.php'); ?>
<?php $patientid=$_GET['patientid'];?>

   <div class="container">
    <div class="row">
       
           

  
 
    <div class="col-md-12">
    <div class="well">
         <center><h1>Your patients</h1></center>

         <table class="table table-inverse">
<thead>
      <tr>
      <th>Patients Id</th>
        <th>Patients name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Age</th>
        <th>Problem Area</th>
       
        <th>Contact</th>

        <th>Diagnosed Disease</th>
              <th>Confidence Percent</th>
                    <th>Drug Suggested</th>
      
      </tr>
    </thead>
    <tbody>

      <tr>
      <?php $result = mysqli_query($con,"SELECT * FROM `patient`,`patient_info` WHERE  Id=$patientid AND patient_id=$patientid");  
   while($rows=mysqli_fetch_array($result)) {
    ?>
    <td><?php echo $rows['Id']; ?> </td>
        <td><?php echo $rows['Name']; ?> </td>
           <td><?php echo $rows['Gender']; ?></td>
        <td><?php echo $rows['Address']; ?></td>
         <td><?php echo $rows['Age']; ?></td>
           <td><?php echo $rows['prob_area']; ?></td>
           
        <td><?php echo $rows['Contact']; ?></td>
        <td><?php echo $rows['diagnosed_disease']; ?></td>
         <td><?php echo $rows['confi_per']; ?></td>
         <td><?php echo $rows['drug_pres']; ?></td>
       
      </tr>
      <?php } ?>
    
    </tbody>
  </table>
</div>
</div> 
</div>
</div>
  
