<?php
session_start();
$user=$_SESSION['l_id'];
$con = new mysqli("localhost","root","","student_php");
$sql="SELECT * FROM `std_table` WHERE std_id=$user";
$res=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<head><title>STUDENT DETAILS</title>
</head>
<body>
<form > 
<br><br>
<h1 align="center" >DETAILS</h1>
 <table align="center" bgcolor="pink" width="40%">
<?php 
           while ($row=mysqli_fetch_assoc($res)) {
            ?>
             <tr>
            <td>Register No:</td>
            <td ><input type="text" value="<?php echo $row['reg_no']; ?>" readonly></td>
            </tr>
            <tr>
            <td>Name</td>
            <td><input type="text" value="<?php echo $row['name']; ?>" readonly></td>
            </tr>
            <tr>
            <td>Gender</td>
            <td height="40"><input type="text" value="<?php echo $row['gender']; ?>" readonly></td>
             </tr>
            <tr>
            <td>DOB</td>
            <td height="40"><input type="text" value="<?php echo $row['dob']; ?>" readonly></td>
             </tr>
            <tr>
            <td>Phone</td>
            <td><input type="text" value="<?php echo $row['phone']; ?>" readonly></td>
            </tr>
            <tr>
            <td>Course</td>
            <td><input type="text" value="<?php echo $row['course']; ?>" readonly></td>
             </tr>
            <tr>
             <td>Sem</td>
            <td><input type="text" value="<?php echo $row['semester']; ?>" readonly></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="text" value="<?php echo $row['email']; ?>" readonly></td>
            </tr>

          <?php
          }
          ?>
          <tr>
               <center><a href="std_home.php">Back To Home</a><br><br></td></center>
          </tr>
</table>
</form>
</body>
</html>