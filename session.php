<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["username"] = "anusreedineshan";
$_SESSION["email"] = "anusreedineshan0@gmail.com";
echo "Session variables are set.";
?>
</body>
</html>
