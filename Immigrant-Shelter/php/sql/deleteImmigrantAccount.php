<?php

include("connectDB.php");

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // sql to delete a record
    $sql = "DELETE FROM immigrant WHERE immigrantID = $delete_id";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Record deleted successfully");window.location.href="../updatedShelteredImmigrant.php"</script>';
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
