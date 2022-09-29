<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    session_destroy();
    $message = "Logout successfully!";
    $url = "../index.php";
    echo "<script type = 'text/javascript'>alert('$message');window.location = '$url'</script>";

?>