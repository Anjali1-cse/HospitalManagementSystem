<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="background:url('2nd.jpg'); background-size: cover;">
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="1st.jpeg" class="card-img-top">
            <div class="card-body">
              <center>
              <h4>Doctor Login</h4><br>
              <form class="form-group" method="post">
                <div class="row">
                  <div class="col-md-4"><label><b>Username: </b></label></div>
                  <div class="col-md-8"><input type="text" name="loginid" class="form-control" placeholder="enter username" required/></div><br><br>
                  <div class="col-md-4"><label><b>Password:</b> </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="enter password" required/></div><br><br><br>
                </div>
                <center><input type="submit" id="inputbtn" name="sign_submit" value="Login" class="btn btn-primary"></center>
      
                <p class="fl_left">Copyright &copy;2020 click here>> | <a href="adminregistation.php">Admin Login Panel</a> | <a href="doctor.php">Doctor Login Pansel</a></p>

              
              </form>
            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
         
      </div>
    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.8.2/dist/sweetalert2.all.min.js"></script>
 <script type="text/javascript">
$(document).ready(function(){
    Swal.fire({
  title: 'Welcome!',
  text: 'have a nice day!',
  imageUrl: '6.jpg',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
  animation: false
})
})
 </script>

     </body>
</html>
<?php
session_start();
$con=mysqli_connect("localhost","root","","newdb");
if(isset($_POST['sign_submit'])){
	$username=$_POST['loginid'];
	$password=$_POST['password'];
	$query="select * from doctor where loginid='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['loginid']=$username;
		header("Location:doctor-panel.php");
	}
	else
		header("Location:error.php");
}
