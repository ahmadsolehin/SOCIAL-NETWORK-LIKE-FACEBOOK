<?php
$db_conx = mysqli_connect("localhost", "sex", "fuckyou", "suck");
// Check the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
	//echo "Successful database connection";
}
?>
