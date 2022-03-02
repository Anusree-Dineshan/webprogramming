<?php
	$con = new mysqli("localhost","root","","student_php");
	if(isset($_POST['sub']))
	{
		$nm = $_POST['na'];
    		$reg = $_POST['re'];
    		$ph = $_POST['ph'];
    		$dob = $_POST['db'];
    		$g = $_POST['g'];
    		$cou = $_POST['co'];
    		$se = $_POST['sem'];
    		
 		$u = $_POST['em'];
   		$p = $_POST['pa'];
		
		$sql = "INSERT INTO `std_table`(`reg_no`, `name`, `gender`, `dob`, `course`, `semester`, `phone`, `email`, `password`) VALUES ('$reg','$nm','$g','$dob','$cou','$se','$ph','$u','$p')";

		$res = $con->query($sql);
if($res){
      ?>
      <script>
      alert('Registration Completed')
      </script>
      <?php
      
      header("location:/Student_Management/student_login.php");
    }
    else{
      echo "failed";
    }

		
	}


?>


<html>
<head><title>Registration</title>
</head>
<body>
<form method="POST"> 


<table cellpadding="2" width="60%" bgcolor="pink" align="center" height="60%" cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b>STUDENT REGISTRATION FORM</b></font></center>
</td>
</tr>

<tr>
<td>Register No </td>
<td><input type="text" name="re" ></td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" name="na" ></td>
</tr>
<tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="g" value="male" >Male
<input type="radio" name="g" value="Female" >Female</td>
</tr>
<tr>
<td>DOB</td>
<td><input type="text" name="db"></td>
</tr>
<tr>
<td>Phone No</td>
<td><input type="text" name="ph"></td>
</tr>
<tr>
<td>Course</td>
<td><select name="co">
<option value="-1" selected>select..</option>
<option value="B.Tech">B.TECH</option>
<option value="MCA">MCA</option>
<option value="MBA">MBA</option>
<option value="BCA">BCA</option>
</select></td>
</tr>
<tr>
<td>Semester</td>
<td><input type="text" name="sem"></td>
</tr>
</tr>
<tr>
<td>Email Id</td>
<td><input type="text" name="em"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pa"></td>
</tr>
<tr>
<tr>
<td><input type="reset"></td>
<td colspan="2"><input type="submit" value="Submit Form" name="sub" /></td>
</tr>
</table>
</form>
</body>
</html>