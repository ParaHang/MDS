<?php include('headernew.php'); ?>

 <script type="text/javascript"> 
      $(document).ready( function() {
        $('#deletesuccess').delay(1000).fadeOut();
      });
    </script>

<div class="row">
 <div class="col-md-12">
     <div id=deletesuccess ><center><h3>WELCOME TO MDS DOCTOR</h3></center> </div> 
     </div>
</div>


   <div class="container">
    <div class="row">
        <div class="col-md-8">
            <form role="form" action="patient_db.php" method="post" class="registration-form">
                            
                            <fieldset>
                              <div class="form-top">
                                <div class="form-top-left">
                                  <h3>Step 1 / 2</h3>
                                    <p>Enter Patients Infromation:</p>
                                </div>
                                <div class="form-top-right">
                                  <i class="fa fa-user"></i>
                                </div>
                                </div>
                                <div class="form-bottom">
                              <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Patients Name</label>
                                  <input type="text" name="name" placeholder="Patients Name" class="form-first-name form-control" id="name">
                                </div>
                                <div class="form-group">
                               <label for="username" class="col-sm-3 control-label">Patients Age</label>
                                  <input type="text" name="age" placeholder="Patients Age" class="form-last-name form-control" id="age">
                                </div>
                                <div class="form-group">
                                  <label for="username" class="col-sm-3 control-label">Patients Gender</label>
                                  <select class="form-control"name="gender" placeholder="Patients Gender"  id="gender">
    <option>Male</option>
    <option>Female</option>
      <option>Other</option>
  </select>
                                </div>
                                <div class="form-group">
                              <label for="username" class="col-sm-3 control-label">Patients Address</label>
                                  <input type="text" name="address" placeholder="Patients Address" class="form-last-name form-control" id="address">
                                </div>
                                <div class="form-group">
                               <label for="username" class="col-sm-3 control-label">Patients Contact Number</label>
                                  <input type="text" name="contact" placeholder="Patients Contact Number" class="form-last-name form-control" id="contact">
                                </div>
                                
                                <button type="button" class="btn btn-next">Next</button>
                            </div>
                          </fieldset>
                          
                          <fieldset>
                              <div class="form-top">
                                <div class="form-top-left">
                                  <h3>Step 2 / 2</h3>
                                    <p>Select the probable problem Area:</p>
                                </div>
                                <div class="form-top-right">
                                  <i class="fa fa-key"></i>
                                </div>
                                </div>
                                <div class="form-bottom">
                                <div class="radio">
  <label><input type="radio" name="optradio" class="form-control" id="form-email"  value="Blood" ><h3>Blood</h3></label>
</div>
<br>
<br>
<div class="radio">
  <label><input type="radio"name="optradio" class="form-control" value="Head" ><h3>Head</h3></label>
</div>
<br>
<br>
<div class="radio">
  <label><input type="radio"name="optradio" class="form-control" value="Neck" ><h3>Neck</h3></label>
</div>
<br><br>
<div class="radio">
  <label><input type="radio" name="optradio"  class="form-control"   value="Chest" ><h3>Chest</h3></label>
</div>
<br><br>
<div class="radio">
  <label><input type="radio" name="optradio" class="form-control" value="Arms" ><h3>Arms</h3></label>
</div>
<br><br>
<div class="radio">
  <label><input type="radio" name="optradio" class="form-control" value="Abdomen" ><h3>Abdomen</h3></label>
</div>
<br><br>
<div class="radio">
  <label><input type="radio" name="optradio"  class="form-control"  value="Pelvis" ><h3>Pelvis</h3></label>
</div>
<br><br>
<div class="radio">
  <label><input type="radio" name="optradio" class="form-control"  value="Legs" ><h3>Legs</h3></label>
</div>
                             
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="submit" class="btn">Submit</button>
                            </div>
                          </fieldset>
                          
                         
                        
                        </form>
        </div>

  
 
    <div class="col-md-4">
    <center><div class="alert alert-success" role="alert"><h1>Info of Your Patients</h1><</div>
</center>
      
        <table class="tabletable-hover table-striped">
  <thead class="thead-inverse ">

      <tr>
        <th class="warning">Patients name</th>
        <th>Contact</th>
        <th>Diagnosed Disease</th>
        <th>More Info</th>
      </tr>
    </thead>
    <tbody>

      <tr>
      <?php $result = mysqli_query($con,"SELECT * FROM `patient` WHERE `doc_id`=$session_id");  
   while($rows=mysqli_fetch_array($result)) {
    ?>
        <td><?php echo $rows['Name']; ?> </td>
        <td><?php echo $rows['Contact']; ?></td>
        <td><?php echo $rows['disease_diag']; ?></td>
        <td>  <a href="patient_info_all.php?patientid=<?php echo $rows['Id']; ?>">  <button type ="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-list" aria-hidden="true"> </span></button></a></td>
      </tr>
      <?php } ?>
    
    </tbody>
  </table>
</div>



    </div>


</div> 
    </div>