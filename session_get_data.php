<?php
// start the session and get the data

session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome ".$_SESSION['username'];
    echo "<br> Your Password is ".$_SESSION['Passowrd'];
    
    echo "<br>";
}
else {
    echo "Please Login to Continue";
}

?>