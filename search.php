<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:white;padding-top:100px;text-align:center;">
    
    <a href="doctor-panel.php" class="btn btn-outline-light">Return to doctor panel</a><a href="admin-panel.php" class="btn btn-outline-light">Return to admin panel</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
<?php
session_start();
include("headers.php");
include("func.php");
if(isset($_GET[delid]))
{
	$sql ="DELETE FROM appointment WHERE appointmentid='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('appointment record deleted successfully..');</script>";
	}
}
?>


<div class="wrapper col4">
  <div id="container">
 
<section class="container">
<h2>Search Patient - <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /></h2>


	<table class="order-table" style="width:100%;" border="3">
      <thead> 
        <tr>
        <td>appointmentid</td>
          <td>Patient Name</td>
          <td>father Name</td>
          <td>Mobile Number</td>
          <td>Departmentid</td>
          <td>appointmentdate</td>
          <td>appointmenttime</td>
          <td>doctorid</td>
          <td>Status</td>
          <td>Action</td>
        </tr>
<tbody>
          <?php
		$sql ="SELECT * FROM appointment";
		$qsql = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($qsql))
		{
			
			
        echo "<tr>
          <td>&nbsp;$rs[appointmentid]</td>
          <td>&nbsp;$rs[patientname]</td>
          <td>&nbsp;$rs[fathername]</td>
		   <td>&nbsp;$rs[contact]</td>
			<td>&nbsp;$rs[departmentid]</td>
			<td>&nbsp;$rs[appointmentdate]</td>
			 <td>&nbsp;$rs[appointmenttime]</td>
             <td>&nbsp;$rs[doctorid]</td>
          <td>$rs[status]</td>
           <td>&nbsp;
		   <a href='appointment.php?editid=$rs[appointmentid]'>Edit</a> | <a href='search.php?delid=$rs[appointmentid]'>Delete</a> </td>
        </tr>";
		}
		?>      </tbody>
    </table>
    <p>&nbsp;</p>
  </div>
</div>
</div>
 <div class="clear"></div>
  </div>
</div>
