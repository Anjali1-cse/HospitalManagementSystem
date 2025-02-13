<?php
session_start();
include("dbconnection.php");
?>


<div class="wrapper col4">
  <div id="container">
 


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
