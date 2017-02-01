              <?php include('script.php'); ?>
        <?php include('connect.php'); ?>
    <center>  <div class="jumbotron">
  <h1>Medical Diagnosis System</h1>
  <p>Using Fuzzy and Probablisic Model</p>
</div></center>
<div class="col-md-8">

<center><form id="login_form1" class="form-horizontal" method="post" action="patient_db.php" >
                        <h3 class="form-signin-heading"><i class="icon-lock"></i> MDS Patient</h3>
                        <input type="text" class="input-block-level" id="fname" name="name" placeholder="Username" required>
                        <input type="text" class="input-block-level" id="mname" name="age" placeholder="age" required>
                        <input type="text" class="input-block-level" id="lname" name="gender" placeholder="gender" required>
                         <input type="text" class="input-block-level" id="email" name="address" placeholder="address" required>
                        <input type="text" class="input-block-level" id="nmc" name="contact" placeholder="contact" required>
                          <input type="text" class="input-block-level" id="user" name="name" placeholder="Username" required>
                            <input type="text" class="input-block-level" id="pass" name="name" placeholder="Username" required>

                     
                        <button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Submit</button>
                        </form></center>
                                                        <script type="text/javascript">
                                                        $(document).ready(function(){
                                                            $('#signin').tooltip('show');
                                                            $('#signin').tooltip('hide');
                                                        });
                                                        </script>       


</div>