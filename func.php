<?php
include("headers.php");
session_start();
$con=mysqli_connect("localhost","root","","newdb");
if(isset($_POST['admin_submit'])){
	$username=$_POST['email'];
	$password=$_POST['password'];
	$query="select * from patient_detail where email='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['email']=$username;
		header("Location:admin-panel.php");
	}
	else
		header("Location:error.php");
}


  if(isset($_POST[doc_submit]))
{
	if(isset($_GET[editid]))
	{
			$sql ="UPDATE doctor SET doctorname='$_POST[doctorname]',mobileno='$_POST[mobilenumber]',departmentid='$_POST[select3]',loginid='$_POST[loginid]',password='$_POST[password]',status='$_POST[select]',education='$_POST[education]',experience='$_POST[experience]',consultancy_charge='$_POST[consultancy_charge]' WHERE doctorid='$_GET[editid]'";
		if($qsql = mysqli_query($con,$sql))
		{
			echo "<script>alert('doctor record updated successfully...');</script>";
		}
		else
		{
			echo mysqli_error($con);
		}	
	}
	else
	{
	$sql ="INSERT INTO doctor(doctorname,mobileno,departmentid,loginid,password,status,education,experience,consultancy_charge) values('$_POST[doctorname]','$_POST[mobilenumber]','$_POST[select3]','$_POST[loginid]','$_POST[password]','Active','$_POST[education]','$_POST[experience]','$_POST[consultancy_charge]')";
	if($qsql = mysqli_query($con,$sql))
	{
		echo "<script>alert('Doctor record inserted successfully...');</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
}
if(isset($_GET[editid]))
{
	$sql="SELECT * FROM doctor WHERE doctorid='$_GET[editid]' ";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
	
}


if(isset($_POST[dep_submit]))
{
	if(isset($_GET[editid]))
	{
			$sql ="UPDATE department SET departmentname='$_POST[departmentname]',description='$_POST[textarea]',status='$_POST[select]' WHERE departmentid='$_GET[editid]'";
		if($qsql = mysqli_query($con,$sql))
		{
			echo "<script>alert('department record updated successfully...');</script>";
		}
		else
		{
			echo mysqli_error($con);
		}	
	}
	else
	{
	$sql ="INSERT INTO department(departmentname,description,status) values('$_POST[departmentname]','$_POST[textarea]','$_POST[select]')";
	if($qsql = mysqli_query($con,$sql))
	{
		echo "<script>alert('Department record inserted successfully...');</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
}
if(isset($_GET[editid]))
{
	$sql="SELECT * FROM department WHERE departmentid='$_GET[editid]' ";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
	
}

if(isset($_POST[app_submit]))
{
		if(isset($_GET[editid]))
		{
			$sql ="UPDATE appointment SET departmentid='$_POST[select5]',appointmentdate='$_POST[appointmentdate]',appointmenttime='$_POST[time]',doctorid='$_POST[select6]',status='$_POST[select]' WHERE appointmentid='$_GET[editid]'";
			if($qsql = mysqli_query($con,$sql))
			{
				echo "<script>alert('appointment record updated successfully...');</script>";
			}
			else
			{
				echo mysqli_error($con);
			}	
		}
		else
		{
			
			
			$sql ="INSERT INTO appointment(patientname,fathername,contact, departmentid, appointmentdate, appointmenttime, doctorid, status, app_reason)
			 values('$_POST[patientname]', '$_POST[fathername]','$_POST[contact]','$_POST[select5]','$_POST[appointmentdate]','$_POST[time]','$_POST[select6]','$_POST[select]','$_POST[appreason]')";
			if($qsql = mysqli_query($con,$sql))
			{
				
				
				echo "<script>alert('Appointment record inserted successfully...');</script>";
				
			}
			else
			{
				echo mysqli_error($con);
			}
		}
}


if(isset($_POST[ bill_submit]))
{
	$servicetypeid= $_POST[servicetypeid];
	$billtype = "Service Charge";
	include("insertbillingrecord.php");
}

if(isset($_POST[ ser_submit]))
{
	if(isset($_GET[editid]))
	{
			$sql ="UPDATE service_type SET service_type='$_POST[servicetype]',servicecharge='$_POST[servicecharge]',description='$_POST[textarea]',status= '$_POST[select]' WHERE service_type_id='$_GET[editid]'";
		if($qsql = mysqli_query($con,$sql))
		{
			echo "<script>alert('servicetype record updated successfully...');</script>";
		}
		else
		{
			echo mysqli_error($con);
		}	
	}
	else
	{
	$sql ="INSERT INTO service_type(service_type,servicecharge,description,status) values('$_POST[servicetype]','$_POST[servicecharge]','$_POST[textarea]','$_POST[select]')";
	if($qsql = mysqli_query($con,$sql))
	{
		echo "<script>alert('servicetype record inserted successfully...');</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
}
if(isset($_GET[editid]))
{
	$sql="SELECT * FROM service_type WHERE service_type_id='$_GET[editid]' ";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
	
}
   
if(isset($_POST['update_data']))
{
	$contact=$_POST['contact'];
	$status=$_POST['status'];
	$query="update doctoapp set payment='$status' where contact='$contact';";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:updated.php");
}


?>


  
