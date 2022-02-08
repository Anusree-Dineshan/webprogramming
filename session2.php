<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Echo session variables that were set on previous page
echo "username is " . $_SESSION["username"] . ".<br>";
echo "email is " . $_SESSION["email"] . ".";
?>
</body>
</html>
