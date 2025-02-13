
<?php 
include('func.php');
include('headers.php');
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Global Hospital</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="viewdoctortimings.php"><i class="fa fa-user-plus" aria-hidden="true"></i>doctor time-table</a>
      </li>
    
       </ul>
    
	   <form class="form-inline my-2 my-lg-0" method="post" action="adminaccount.php">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="adminaccount">
    </form>
  

	   <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="view the patient list">
    </form>
  
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
 <div class="jumbotron" id="ab1"></div>
   <div class="container-fluid" style="margin-top:50px;">
    <div class="row">
  <div class="col-md-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Appointment</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">doctorlist & doctortime </a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Treatment detail</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">payment status</a>
       <a class="list-group-item list-group-item-action" id="list-attend-list" data-toggle="list" href="#list-attend" role="tab" aria-controls="settings">aboutus</a>
    </div><br>
  </div>
  <div class="col-md-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <div class="wrapper col2">
         <div id="breadcrumb">
         <ul>
      <li class="first">Add New Appointment</li></ul>
     </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <h1>Add new Appointment record</h1>
   <form method="post" action="" name="frmappnt" onSubmit="return validateform1()">
    <input type="hidden" name="select2" value="Offline" > 
    <table width="490" border="3">                
    <tr>
          <td>Patient name</td>
          <td><input type="text" name="patientname" id="patientname" style="width:300px;height:30px;"><?php echo $rsedit[patientname]; ?></textarea></td>
         
        </tr>	
        <tr>
          <td>Father name</td>
          <td><input type="text" name="fathername" id="fathername" style="width:300px;height:30px;"><?php echo $rsedit[fathername]; ?></textarea></td>
         
        </tr>	
        <tr>
          <td>contact</td>
          <td><input type="text" name="contact" id="contact" style="width:300px;height:30px;"><?php echo $rsedit[contact]; ?></textarea></td>
         
        </tr>        
        <tr>
           <td>Department</td>
          <td><select name="select5" id="select5">
           <option value="">Select</option>
            <?php
		  	$sqldepartment= "SELECT * FROM department WHERE status='Active'";
			$qsqldepartment = mysqli_query($con,$sqldepartment);
			while($rsdepartment=mysqli_fetch_array($qsqldepartment))
			{
				if($rsdepartment[departmentid] == $rsedit[departmentid])
				{
	echo "<option value='$rsdepartment[departmentid]' selected>$rsdepartment[departmentname]</option>";
				}
				else
				{
  echo "<option value='$rsdepartment[departmentid]'>$rsdepartment[departmentname]</option>";
				}
				
			}
		  ?>
          </select></td>
       
        </tr>
        <tr>
          <td>Appointment Date</td>
          <td><input type="date" name="appointmentdate" id="appointmentdate" value="<?php echo $rsedit[appointmentdate]; ?>" /></td>
        </tr>
        <tr>
          <td>Appointment Time</td>
          <td><input type="time" name="time" id="time" value="<?php echo $rsedit[appointmenttime]; ?>" /></td>
        </tr>
        <?php
		if(isset($_SESSION[doctorid]))
		{
			echo "<input type='hidden' name='select6' value='$_SESSION[doctorid]' >";
		}
		else
		{
		?>
        <tr>
          <td>Doctor</td>
          <td>
          <select name="select6" id="select6">
            <option value="">Select</option>
            <?php
          	$sqldoctor= "SELECT * FROM doctor INNER JOIN department ON department.departmentid=doctor.departmentid WHERE doctor.status='Active'";
			$qsqldoctor = mysqli_query($con,$sqldoctor);
			while($rsdoctor = mysqli_fetch_array($qsqldoctor))
			{
				if($rsdoctor[doctorid] == $rsedit[doctorid])
				{
				echo "<option value='$rsdoctor[doctorid]' selected>$rsdoctor[doctorname] ( $rsdoctor[departmentname] ) </option>";
				}
				else
				{
				echo "<option value='$rsdoctor[doctorid]'>$rsdoctor[doctorname] ( $rsdoctor[departmentname] )</option>";				
				}
			}
		  ?>
          </select></td>
         
        </tr>
        <?php
		}
		?>
         <tr>
          <td>Appointment reason</td>
          <td><textarea name="appreason" id="appreason" style="width:300px;height:100px;"><?php echo $rsedit[app_reason]; ?></textarea></td>
         
        </tr>		        
        <tr>
          <td>Status</td>
          <td><select name="select" id="select">
         
          <option value="">Select</option>
          <?php
		  $arr = array("Active","Inactive");
		  foreach($arr as $val)
		  {
			  if($val == $rsedit[status])
			  {
			  echo "<option value='$val' selected>$val</option>";
			  }
			  else
			  {
				  echo "<option value='$val'>$val</option>";			  
			  }
		  }
		  ?>
           </select></td>
        </tr>	
        <tr>
          <td colspan="2" align="center"><input type="submit" name="app_submit" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
    <p>&nbsp;</p>
  </div>
</div>

 <div class="clear"></div>
  </div>

      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <div class="wrapper col2">
  <div id="breadcrumb">View  Doctor  </div>
</div>
<div class="wrapper col4">
  <div id="container">
  <section class="container">
<h2>Search Doctor - <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /></h2>


	<table  class="order-table" border="3">
     <thead>
        <tr>
		<th>Doctor ID</th>
          <th>Doctor Name</th>
          <th>Mobile Number</th>
          <th>Department</th>
          <th>Consultancy Charge</th>
          <th>Education</th>
          <th>Experience</th>
          <th>Status</th>
          
        </tr>
        <tbody>
          <?php
		$sql ="SELECT * FROM doctor";
		$qsql = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($qsql))
		{
			
			$sqldept = "SELECT * FROM department WHERE departmentid='$rs[departmentid]'";
			$qsqldept = mysqli_query($con,$sqldept);
			$rsdept = mysqli_fetch_array($qsqldept);
		echo "<tr>
		<td>&nbsp;$rs[doctorid]</td>
          <td>&nbsp;$rs[doctorname]</td>
          <td>&nbsp;$rs[mobileno]</td>
		   <td>&nbsp;$rsdept[departmentname]</td>
			<td>&nbsp;$rs[consultancy_charge]</td>
			 <td>&nbsp;$rs[education]</td>
			<td>&nbsp;$rs[experience]</td>
          <td>$rs[status]</td>
           
        </tr>";
		}
		?>      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
  </tr>
</tbody>
</table>
</section>
<h1>&nbsp;</h1>
<p>&nbsp;</p>
</div>
</div>

<div class="clear"></div>
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first"><h5>View Doctor Timings</h5></li>
	</ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">

<section class="container">
<h2>Search Doctor - <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /></h2>


	<table class="order-table" style="width:80%;" border="3">
      <thead>
    
        <tr>
        <th>Doctor Id</th>
          <th>Doctor</th>
          <th>Timings available</th>
		  <th> available day</th>
          <th>Status</th>
          
        </tr>
        <tbody>
          <?php
		$sql ="SELECT * FROM doctor_timings";
		$qsql = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($qsql))
		{
			$sqldoctor = "SELECT * FROM doctor WHERE doctorid='$rs[doctorid]'";
			$qsqldoctor = mysqli_query($con,$sqldoctor);
			$rsdoctor = mysqli_fetch_array($qsqldoctor);
			
        echo "<tr>
        <td>&nbsp;$rs[doctorid]</td>
          <td>&nbsp;$rsdoctor[doctorname]</td>
		  <td>&nbsp;$rs[start_time] - $rs[end_time]</td>
		  <td>&nbsp;$rs[available_day]</td>
          <td>&nbsp;$rs[status]</td>
          </tr>";
		}
		?>
        
        <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    
    </tr>
</tbody>
</table>
</section>
<h1>&nbsp;</h1>
<p>&nbsp;</p>
</div>
</div>
<div class="clear"></div>


      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
	  <?php
session_start();
include("dbconnection.php");
?>
		 <table width="692" border="3">
        <tbody>
          <tr>
            <td width="71">Treatment type</td>
            <td width="78">Doctor</td>
            <td width="82">Treatment Description</td>
            <td width="103">Uploads</td>
            <td width="43">Treatment date</td>
            <td width="43">Treatment time</td>
            <td width="54">Status</td>
        
          </tr>
          <?php
		$sql ="SELECT * FROM treatment_records ";
		$qsql = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($qsql))
		{
			$sqlpat = "SELECT * FROM patient_detail WHERE patientid='$rs[patientid]'";
			$qsqlpat = mysqli_query($con,$sqlpat);
			$rspat = mysqli_fetch_array($qsqlpat);
			
			$sqldoc= "SELECT * FROM doctor WHERE doctorid='$rs[doctorid]'";
			$qsqldoc = mysqli_query($con,$sqldoc);
			$rsdoc = mysqli_fetch_array($qsqldoc);
			
			$sqltreatment= "SELECT * FROM treatment WHERE treatmentid='$rs[treatmentid]'";
			$qsqltreatment = mysqli_query($con,$sqltreatment);
			$rstreatment = mysqli_fetch_array($qsqltreatment);
			
        echo "<tr>
          <td>&nbsp;$rstreatment[treatmenttype]</td>
		    <td>&nbsp;$rsdoc[doctorname]</td>
			<td>&nbsp;$rs[treatment_description]</td>
			<td>&nbsp;<a href='treatmentfiles/$rs[uploads]'>Download</a></td>
			 <td>&nbsp;$rs[treatment_date]</td>
			  <td>&nbsp;$rs[treatment_time]</td>
			    <td>&nbsp;$rs[status]</td>
          
		  ";}
		?>
        </tbody>
      </table>
	
	</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <h1>payment update</h1>
   <form method="post" action="" name="frmappnt" onSubmit="return validateform1()">
    <input type="hidden" name="select2" value="Offline" > 
    <table width="490" border="3">                
    <tr>
          <td>contact</td>
          <td><input type="text" name="contact" id="contact" style="width:300px;height:30px;"><?php echo $rsedit[contact]; ?></textarea></td>
         
        </tr>  
		     
		<tr>
          <td>Status</td>
          <td><select name="select" id="select">
         
          <option value="">Select</option>
          <?php
		  $arr = array("paid","paid later");
		  foreach($arr as $val)
		  {
			  if($val == $rsedit[status])
			  {
			  echo "<option value='$val' selected>$val</option>";
			  }
			  else
			  {
				  echo "<option value='$val'>$val</option>";			  
			  }
		  }
		  ?>
           </select></td>
        </tr>	
        <tr>
          <td colspan="2" align="center"><input type="submit" name="update_data"  class="btn btn-primary" value="update"/></td>
        </tr>
    
	   </table>
    
      </form>
      </div>
       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <h1>About global Hospital</h1>
      <p align="justify">Shri Kshetra Dharmasthala has immensely contributed to the spiritual, economic and social development of Karnataka.  It is imparting education to thousands of students all over Karnataka through its �SDM Educational Society� wing. SDM College of Medical sciences & Hospital in Dharwad, apart from providing quality medical education, is creating a revolution in health care scenario of Northern Karnataka.  It is a brain child of Dr. D. Veerendra Heggade, Rev. President of SDM Educational Society.  Way back in year 2001, a group of people from Dharwad approached Dr. Heggade and requested him to start a Hospital.  Dr. Heggade, understanding the health care needs of this part of harayana decided to start a Hospital with a Medical College attached to it.  On March 3rd, 2002, Mr. S. M. Krishna, the then Chief Minister laid the foundation stone for the Hospital building..</p>
      <p align="justify">SDM Hospital is located on the highway connecting Hubli and Dharwad.  It is spread over 65 acres of land, in a serene atmosphere. This campus, apart from Medical College and Hospital, houses Nursing Institute, Physiotherapy College, Students Hostels, Staff Quarters and abodes for patient�s relatives.</p>
      <p align="justify">�Royal treatment for common man� has been the mission statement of SDM Hospital. Every person who has taken treatment in this Hospital would certainly feel this.  The clean environment and humble services of staff have been making plenty of people recover their health every day. Hospital is also fostering quality research in medical field.  Regular workshops and conferences are being conducted to enhance the knowledge of doctors working within the Hospital and also those within twin cities. For the community, Hospital conducts regular free health camps, family planning camps, cataract camps, spirometry camps etc.  Within very short span since its inception, under the able leadership of Dr. Niranjan Kumar, Medical Director, this Hospital has made a prominent name in the medical map of India. </p>
      <div class="homecontent">
        <ul>
          <li>
           <h2>Super Specialty Hospital</h2>
            <p class="imgholder"><img src="images/spciality.jpg" alt="" style="width:286px;height:100px;"  /></p>
          </li>
          <li class="last">
            <h2>24X7 services</h2>
            <p class="imgholder"><img src="images/24x7.png" alt="" style="width:286px;height:100px;"   /></p>
          </li>
        </ul>
        <div class="clear"></div>
      </div>
      <p><strong>Directors message:</strong><br />
      Keeping in with the prime objective of the SDME Society of providing value based education and social service, the SDM College of Medical Sciences &amp; Hospital, Dharwad was established in the year 2003 to address the ever growing demand by the society for quality health care professionals delivering quality health care through quality infrastructure at an affordable cost to alleviate human suffering through healing hands.</p>
    </div>
    <div id="column">
      <div id="featured">
        <ul>
          <li>
            <h2>Our Services</h2>
            <p class="imgholder"><img src="images/SDM-Image-5.png" alt="" style="width:240px;height:90px;" /></p>
          </li>
          <li role="menuitem">S D M Super Specialty Hospital</li>
          <li aria-haspopup="Sidebar1_Menu2:submenu:36" role="menuitem">Diagnostic Services</li>
          <li role="menuitem">Consultation</li>
          <li role="menuitem">In Patient Services</li>
          <li role="menuitem">Health Checkup Packages</li>
          <li role="menuitem">24 X 7 Services</li>
          <li role="menuitem">Physiotherapy Services</li>
          <li role="menuitem"><a href=""  tabindex="-1">Dialysis</a></li>
          <li role="menuitem"><a href=""  tabindex="-1">Insurance Schemes</a></li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!--Sweet alert js-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.8.2/dist/sweetalert2.all.min.js"></script>
   <script type="text/javascript">
  $(document).ready(function(){
      Swal.fire({
    title: "Welcome!",
    text: "be healthy and strong",
    imageUrl: "6.jpg",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
    animation: false
  })
  })
   </script>

<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform2()
{
	if(document.frmbill.treatment.value == "")
	{
		alert("Treatment Type should not be empty..");
		document.frmbill.treatment.focus();
		return false;
	}
	else if(!document.frmbill.treatment.value.match(alphaspaceExp))
	{
		alert("Treatment Type not valid..");
		document.frmbill.treatment.focus();
		return false;
	}
	else if(document.frmbill.date.value == "")
	{
		alert("Billing Date should not be empty..");
		document.frmbill.date.focus();
		return false;
	}
	else if(document.frmbill.time.value == "")
	{
		alert("Billing Time should not be empty..");
		document.frmbill.time.focus();
		return false;
	}
	else if(document.frmbill.amount.value == "")
	{
		alert("Amount should not be empty..");
		document.frmbill.amount.focus();
		return false;
	}
	else if(!document.frmbill.amount.value.match(numericExpression))
	{
		alert("Amount not valid..");
		document.frmbill.amount.focus();
		return false;
	}
	else if(document.frmbill.discount.value == "")
	{
		alert("Discount should not be empty..");
		document.frmbill.discount.focus();
		return false;
	}
	else if(!document.frmbill.discount.value.match(numericExpression))
	{
		alert("Discount  not valid..");
		document.frmbill.discount.focus();
		return false;
	}
	else if(document.frmbill.tax.value == "")
	{
		alert("Tax Amount should not be empty..");
		document.frmbill.tax.focus();
		return false;
	}
	else if(!document.frmbill.tax.value.match(numericExpression))
	{
		alert("Tax Amount not valid..");
		document.frmbill.tax.focus();
		return false;
	}
	else if(document.frmbill.bill.value == "")
	{
		alert("Bill Amount should not be empty..");
		document.frmbill.bill.focus();
		return false;
	}
	else if(!document.frmbill.bill.value.match(numericExpression))
	{
		alert("Bill Amount not valid..");
		document.frmbill.bill.focus();
		return false;
	}
	else if(document.frmbill.textarea.value == "")
	{
		alert("Discount Reason should not be empty..");
		document.frmbill.textarea.focus();
		return false;
	}
	else if(!document.frmbill.textarea.value.match(alphaspaceExp))
	{
		alert("Discount Reason  not valid..");
		document.frmbill.textarea.focus();
		return false;
	}
	else if(document.frmbill.paid.value == "")
	{
		alert("Paid Amount should not be empty..");
		document.frmbill.paid.focus();
		return false;
	}
	else if(!document.frmbill.paid.value.match(numericExpression))
	{
		alert("Paid Amount not valid..");
		document.frmbill.paid.focus();
		return false;
	}
	else if(document.frmbill.Dtime.value == "")
	{
		alert("Discharge Time should not be empty..");
		document.frmbill.Dtime.focus();
		return false;
	}
	else if(document.frmbill.Ddate.value == "")
	{
		alert("Discharge Date should not be empty..");
		document.frmbill.Ddate.focus();
		return false;
	}
	else
	{
		return true;
	}
	
}
</script>



<script type="application/javascript">

function validateform1()
{
	if(document.frmappnt.patientname.value == "")
	{
		alert("Patient name should not be empty..");
		document.frmappnt.patientname.focus();
		return false;
	}
	
	else if(document.frmappnt.fathername.value == "")
	{
		alert("Room type should not be empty..");
		document.frmappnt.fathername.focus();
		return false;
	}
	else if(document.frmappnt.select5.value == "")
	{
		alert("Department name should not be empty..");
		document.frmappnt.select5.focus();
		return false;
	}
	else if(document.frmappnt.appointmentdate.value == "")
	{
		alert("Appointment date should not be empty..");
		document.frmappnt.appointmentdate.focus();
		return false;
	}
	else if(document.frmappnt.time.value == "")
	{
		alert("Appointment time should not be empty..");
		document.frmappnt.time.focus();
		return false;
	}
	else if(document.frmappnt.select6.value == "")
	{
		alert("Doctor name should not be empty..");
		document.frmappnt.select6.focus();
		return false;
	}
	else if(document.frmappnt.select.value == "" )
	{
		alert("Kindly select the status..");
		document.frmappnt.select.focus();
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