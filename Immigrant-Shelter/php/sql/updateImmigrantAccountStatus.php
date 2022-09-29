<?php

include("connectDB.php");

if(isset($_GET['reject_id'])){
    $reject_id = $_GET['reject_id'];

    $sql = "UPDATE immigrant SET accountStatus = 'reject' WHERE immigrantID = '$reject_id'";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Status updated successfully");window.location.href="../immigrantApplyingList.php"</script>';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

}

if(isset($_GET['accept_id'])){
    $accept_id = $_GET['accept_id'];

    $sql = "UPDATE immigrant SET accountStatus = 'accept' WHERE immigrantID = '$accept_id'";

    if (mysqli_query($conn, $sql)) {
        // echo '<script>alert("Status updated successfully");window.location.href="../immigrantApplyingList.php"</script>';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

}
