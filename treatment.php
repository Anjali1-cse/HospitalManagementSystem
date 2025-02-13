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
    
    <a href="doctor-panel.php" class="btn btn-outline-light">Return to doctor panel</a>
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
include("dbconnection.php");
if(isset($_POST[te_submit]))
{
	if(isset($_GET[editid]))
	{
			$sql ="UPDATE treatment SET treatmenttype='$_POST[treatmenttype]',treatment_cost='$_POST[treatmentcost]',note='$_POST[textarea]',status='$_POST[select]' WHERE treatmentid='$_GET[editid]'";
		if($qsql = mysqli_query($con,$sql))
		{
			echo "<script>alert('treatment record updated successfully...');</script>";
		}
		else
		{
			echo mysqli_error($con);
		}	
	}
	else
	{
	$sql ="INSERT INTO treatment(treatmenttype,treatment_cost,note,status) values('$_POST[treatmenttype]','$_POST[treatmentcost]', '$_POST[textarea]','$_POST[select]')";
	if($qsql = mysqli_query($con,$sql))
	{
		echo "<script>alert('treatment record inserted successfully...');</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}

}
if(isset($_GET[editid]))
{
	$sql="SELECT * FROM treatment WHERE treatmentid='$_GET[editid]' ";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
	
}
?><center>
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">Add New treatment</li></ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <h1>Add new treatment record</h1>
    <form method="post" action="" name="frmtreat" onSubmit="return validateform()">
    <table width="472" border="3">
      <tbody>
        <tr>
          <td width="34%">Treatment Type</td>
          <td width="66%"><input type="text" name="treatmenttype" id="treatmenttype"  value="<?php echo $rsedit[treatmenttype]; ?>"/></td>
        </tr>
        <tr>
         <tr>
          <td width="34%">Treatment Cost</td>
          <td width="66%"><input type="text" name="treatmentcost" id="treatmentcost"  value="<?php echo $rsedit[treatment_cost]; ?>"/></td>
        </tr>
        <tr>
          <td>Note</td>
          <td><textarea name="textarea" id="textarea" cols="45" rows="5"><?php echo $rsedit[note] ; ?></textarea></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><p>
            <select name="select" id="select">
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
            </select>
          </p></td>
        </tr>
         
        <tr>
          <td colspan="2" align="center"><input type="submit" name="te_submit" id="te_submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
    <p>&nbsp;</p>
  </div>
</div>
</div>
 <div class="clear"></div>
  </div>
</div></center>
<?php
include("footers.php");
?>
<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform()
{
	if(document.frmtreat.treatmenttype.value == "")
	{
		alert("Treatment type should not be empty..");
		document.frmtreat.treatmenttype.focus();
		return false;
	}
	else if(!document.frmtreat.treatmenttype.value.match(alphaspaceExp))
	{
		alert("Treatment type not valid..");
		document.frmtreat.treatmenttype.focus();
		return false;
	}
	else if(document.frmtreat.select.value == "" )
	{
		alert("Kindly select the status..");
		document.frmtreat.select.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>