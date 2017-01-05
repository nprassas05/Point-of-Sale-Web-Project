<?php

/* end current session and redirect user to the login page */
session_unset();
session_destroy();
header("location:login.php");
exit;

?>
