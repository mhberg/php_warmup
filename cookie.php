<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "username";
setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
?>
<html>
<body>
<h2>Cookie</h2>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
	echo "Duration is set for 1 day!";
}
?>
<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
</body>
</html>