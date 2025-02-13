<?php
	include ("func.php");
	
	if(isset($_POST["sign_up"]))
	{
		
		$email = $_POST['user_email'];
		$pass  =$_POST['password'];
		$usrNm="";		$usrNm=$_POST['patientname'];
		$usemail="";	$usemail=$_POST['user_email'];
		$pswd="";		$pswd=$_POST['password'];
		$blood="";		$blood=$_POST['select2'];
		$gen="";		$gen=$_POST['gender'];
		$cont="";		$cont=$_POST['contacts'];
		
		$add="";		$add=$_POST['user_grp'];
		$dob="";		$dob=$_POST['dob'];
		
		$today = date("Y-m-d");
		$diff = date_diff(date_create($dob), date_create($today));
		$age=$diff->format('%y');
		
		
		$query="insert into patient_detail (patientname,email,password,place,contact,blood_group, dob, gender,tbl_age,time)
				values('$usrNm','$usemail','$pswd','$add','$cont','$blood','$dob','$gen','$age','$dt $tim')";
				$result=mysqli_query($con,$query);
				if($result){
				header("Location:index.php");
				echo "<script>alert('patient record inserted successfully...');</script>";
				}
	

     }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:grey;color:white;padding-top:100px;text-align:center;">
  <div class="container" style="margin-top:15px; margin-bottom:250px;">
				<div class="row">
		<div class="col-sm-8">
		 
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-grey">
						<div class="contact-caption clearfix"><div class="contact-heading text-center">
						<h3> SIGN UP</h3></div>
						</div>
						</div>
			<form class="form-group" method="post" action="" onSubmit="return validateform()">
				<div class="row">
					<div class="col-md-12">
					<div class="form-group">
						<input type="text" class="form-control" id="patientname" name="patientname" placeholder="Enter Patient Name" Required>
					</div> 
					</div>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="user_email" name="user_email"  placeholder="Enter Username/ Email-Id" Required>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" Required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="password" class="form-control" id="Confirmpassword" name="Confirmpassword" placeholder="Password" Required>
						</div>
					</div>
	
					
				</div>
				<div class="row">
				<div class="col-md-6">
				<select class="form-control" name="gender"Required>
				<option value="Male"> Male</option>
				<option value="Female">Female </option>
				<option>Others</option>
				</select>
				
				</div>
				
				<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" id="contacts" name="contacts"  placeholder="Enter Contact No"Required>
				</div>
				</div>
				</div>
				<div class="row">
				<div class="col-md-6">
				<select class="form-control" name="select2"Required>
				<option value="">blood group</option>
				<option value="A+"> A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
             </select>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="Date" class="form-control" id="dob" name="dob"  placeholder="Date of Birth"Required>
				</div>
				</div>
				

			
				<div class="col-md-12">
				<div class="form-group">
					<textarea class="form-control" id="user_grp" name="user_grp"  placeholder="Address"Required></textarea>
				</div>
				</div>
				
				
				</div>
				
										<div class="validation">
										</div>
										
						<div class="panel-footer">
						<button class="btn btn-lg btn-block btn-success"  name="sign_up"> Register</button>
							
						</div>
					
					<!-- /PRICE ITEM -->
					
					
		</div>
		
		</div>
		</form>    


		<div class="wrapper col5">
                <div id="footer">
                 <div id="copyright">
      <p class="fl_left">Copyright &copy;2020 click here>> | <a href="index.php"><b>Admin Login Panel</a> | <a href="index2.php">Doctor Login Panel</b></a></p>

      <br class="clear" />
    </div>
    <div class="clear"></div>
  </div>
</div>


<!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
		
		
		
		
			<div class="row">
				<h2>about us</h2>
				<h4>"FAITHFUL TO OUR TRADITION, WE PROVIDE THE HIGHEST POSSIBLE STANDARD OF CARE AND TREATMENT IN A PROFESSIONAL AND COMPASSIONATE MANNER TO EVERY PERSON WHO AVAILS OF OUR SERVICES".</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="img/item1.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>C</h1>
							</div>
							<h3>Children specialist</h3>
							<p>Creating Healthy tomorrows...for one child, All Children.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item2.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>W</h1>
							</div>

							<h3>Women specialist</h3>
							<p>Together, we are working toward a healthier community.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item3.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>M</h1>
							</div>
							<h3>Men specialist</h3>
							<p>Together, we are working toward a healthier community.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>Our services</h2>
				<h4>"THE BEST WAY TO FIND YOURSELF IS TO LOSE YOURSELF IN THE SERVICE OF OTHERS"</h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="img/service1.png" alt="">
							</div>
						</div>
						<h3>Heart problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="img/service2.png" alt="">
							</div>
						</div>
						<h3>Brain problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="img/service3.png" alt="">
							</div>
						</div>
						<h3>Knee problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="bone img-responsive" src="img/service4.png" alt="">
							</div>
						</div>
						<h3>Bones problem</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- team section -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2>our team</h2>
					<h4>Our team is comprised of highly experienced specialised doctors-all working together with you and your family to get you treated and back to your normal routine as quickly as possible.</h4>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member1.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr.Peter Dsilva, M.D.</h3>
						<p>A well-known Cardiologist.Cardiologists treat disease and injury of the heart and cardiovascular system. </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr.Joslita, M.D.</h3>
						<p>A well-known ENT specialist. ENT specialists,also known as Otolaryngologists,are medical doctors responsible for surgical and medical treatment of the ears,nose and throat, as well as the related head and nect areas. </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member2.jpg" alt="member-2">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member3.jpg" alt="member-3">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Joseph, M.D.</h3>
						<p>A well-known Optometrist. Optometrists typically perform vision tests and analyze results. </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Caitlin, M.D.</h3>
						<p>A well-known Pediatrician. Pediatricians provide medical care to infants, children,adolescents and young adults.  </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member4.jpg" alt="member-4">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member5.jpg" alt="member-5">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Michael, M.D.</h3>
						<p>A well-known Neurologist. Neurologists are experts at the diagnosis and treatment of neurological disorders, including stroke,dementia and neuromuscular diseases.</p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Hasina, M.D.</h3>
						<p>A well-known Dermatologist. Dermatologists diagnose and treat ailments of the largest organ of the human body and advise patients on achieving healthy and attractive skin. </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member6.jpg" alt="member-5">
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of team section -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;Mostafizur All right reserved</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 
	<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform()
{
	if(document.frmpatient.patientname.value == "")
	{
		alert("Patient name should not be empty..");
		document.frmpatient.patientname.focus();
		return false;
	}
else if(!document.frmpatient.patientname.value.match(alphaspaceExp))
	{
		alert("Patient name not valid..");
		document.frmpatient.patientname.focus();
		return false;
	}
	if(document.frmpatient.user_email.value == "")
	{
		alert("email should not be empty..");
		document.frmpatient.user_email.focus();
		return false;
	}
else if(!document.frmpatient.user_email.value.match(emailExp))
	{
		alert("email not valid..");
		document.frmpatient.user_email.focus();
		return false;
	}
	
	else if(document.frmpatient.address.value == "")
	{
		alert("Address should not be empty..");
		document.frmpatient.address.focus();
		return false;
	}
	else if(document.frmpatient.contacts.value == "")
	{
		alert("Mobile number should not be empty..");
		document.frmpatient.contacts.focus();
		return false;
	}
	else if(!document.frmpatient.contacts.value.match(numericExpression))
	{
		alert("Mobile number not valid..");
		document.frmpatient.contacts.focus();
		return false;
	}
	
	else if(document.frmpatient.password.value == "")
	{
		alert("Password should not be empty..");
		document.frmpatient.password.focus();
		return false;
	}
	else if(document.frmpatient.password.value.length < 8)
	{
		alert("Password length should be more than 8 characters...");
		document.frmpatient.password.focus();
		return false;
	}
	else if(document.frmpatient.password.value != document.frmpatient.confirmpassword.value )
	{
		alert("Password and confirm password should be equal..");
		document.frmpatient.confirmpassword.focus();
		return false;
	}
	else if(document.frmpatient.select2.value == "")
	{
		alert("Blood Group should not be empty..");
		document.frmpatient.select2.focus();
		return false;
	}
	else if(document.frmpatient.select3.value == "")
	{
		alert("Gender should not be empty..");
		document.frmpatient.select3.focus();
		return false;
	}
	else if(document.frmpatient.dateofbirth.value == "")
	{
		alert("Date Of Birth should not be empty..");
		document.frmpatient.dateofbirth.focus();
		return false;
	}
	else if(document.frmpatient.select.value == "" )
	{
		alert("Kindly select the status..");
		document.frmpatient.select.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>
 
 
 
 
  </body>
</html>