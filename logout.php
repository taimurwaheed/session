<?php

// start the session and get the data

session_start();
session_unset();
session_destroy();

echo "You have been Logged out";

?>