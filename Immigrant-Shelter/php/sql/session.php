<?php
    session_start();

    if (empty($_SESSION['email'])){
        header("location: ../sql/logout.php");
    }

?>