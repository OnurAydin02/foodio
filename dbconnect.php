<?php
    define('DB_USER', "dogukan");
    define('DB_PASSWORD', "");
    define('DB_DATABASE', "foodio");
    define('DB_SERVER', "localhost");
    
    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

    if (mysqli_connect_errno()) {
        $response["messageType"] = "error";
        $response["messageHeader"] = "Failed to connect to database";
        $response["message"] = mysqli_connect_error();
        echo $message;
        return;
    }
    else{
	echo "Connected";
	}
?>
