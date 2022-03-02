<?php
session_start();
$con = new mysqli("localhost","root","","student_php");


if(isset($_POST['sub']))
{
  if (!$con) 
   {
      echo "Connection failed";
   } 

else
  {  
$u = $_POST['em'];
$p = $_POST['pa'];
     $sql="SELECT * FROM `std_table` WHERE email='$u' and password='$p'";

     $res = $con->query($sql); 

     if(mysqli_num_rows($res)>0)
     {
        $rows = mysqli_fetch_array($res); 
        $id=$rows[0];
        $_SESSION['l_id']=$id;
        header("location:/Studentmngmt/std_details.php");
      }

    else
    {
      ?>
      <script>
      alert('invalid user')
      </script>
      <?php
      
      header("refresh:1; url=std_log.php");
    }

  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<form method="POST" > 
<h1 align="center">WELCOME TO STUDENT LOGIN</h1>
<table cellpadding="2" width="60%" bgcolor="pink" align="center" height="60%" cellspacing="2">

 <br><br>
 <table align="center" bgcolor="pink" cellpadding="2" width="60%" bgcolor="pink" align="center" height="60%" cellspacing="2">

 <tr>
       <td>Email</td>
        <td><input type="email" required placeholder="Username" name="em"></td>
</tr>
       <tr>
        <td>Password</td>
        <td ><input type="Password" required placeholder="Password" name="pa"></td>
</tr>
<tr>
<td></td>
<td >
 <input type="submit" value=" LOGIN" name="sub">
</td>
</tr>
 <tr>
<td></td>
<td >
<a href="std_home.php">Back To Home</a><br><br>
</td>
</tr>
</table>
</form>
</body>
</html>