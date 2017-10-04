<?php
// session start
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h2>Session Test</h2>

<?php
// Set session variables
$_SESSION["class"] = "internyetski";
$_SESSION["species"] = "human";
echo "Session variables are set." . "<br>";
echo print_r($_SESSION);
?>

</body>
</html>