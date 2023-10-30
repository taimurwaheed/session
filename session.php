<?php
// what is sessions
// used to manage information across different pages

// verify your login
session_start();

$_SESSION['username'] = "Taimur";
$_SESSION['Passowrd'] = "12345";

echo "We have saved your data";

?>
