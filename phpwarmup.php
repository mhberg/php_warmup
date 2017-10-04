<h2>Opgave 1</h2>
<p>Lav et loop der udskriver 1-10</p>
<?php
for ($i = 1; $i <=10; $i++){
echo $i . "<br>";
}
?>

<h2>Opgave 2</h2>
<p>Lav et loop i et loop der udskriver multiplikationstabel 1-10</p>
<?php

for ($i = 1; $i <=10; $i++){
	echo "<br>";
	for($j = 1; $j <=10; $j++){
	echo $i * $j . " "; 
  }
}
?>

<h2>Opgave 3</h2>
<p>Laes et navn ind fra en $_GET og udskriv en hilsen</p>
<p>Indsaet key/value i URL (name=?)</p>
<?php
echo "Velkommen " . $_GET['name'] . "!";
?>

<h2>Opgave 4</h2>
<p>Lav et multidimensionelt array der inderholder brugernavn og password</p>
<?php 
$users = array
(
array("user1", "password1"),
array("user2", "password2"),
array("user3", "password3"),
array("user4", "password4"), 
);

for($row = 0; $row<4; $row++){
echo "<p><b>User $row</b></p>";
for($col = 0; $col<2; $col++){
  echo $users[$row][$col];
 }
}
?>

<h2>Opgave 5</h2>
<p>Laes et navn og et kodeord fra $GET og skriv "logget ind", hvis navnet findes
i array'et, elles skriv "kan ikke logge ind".</p>
<?php
$name = $_GET['name'];
$password = $_GET['password'];

for($row = 0; $row<4; $row++){
if(($users[$row][0] == $name) && ($users[$row][1] == $password)){
	echo "User found and logged in!";
	break;
} else {
	echo "Couldn't find user!";
	break;
}
}
?>