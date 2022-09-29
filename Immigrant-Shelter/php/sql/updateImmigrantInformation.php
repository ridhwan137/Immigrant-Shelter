<?php

include("connectDB.php");


if(isset($_POST['update-btn'])){


    // Get value from form by the name declare at each input type

    $id    = $_POST['id'];
    $name  = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $reason = $_POST['reason'];
    $accountStatus = $_POST['accountStatus'];
    $dateApply = $_POST['dateApply'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $passport = $_POST['passport'];
    $address = $_POST['address'];
    $reason_extend = trim($_POST['reasonExtend']);
    $vaccination_status = $_POST['vaccination-status'];
    // $accountStatus = "pending";
    $dateIn = $_POST['dateIn'];
    $dateOut = $_POST['dateOut'];

    // reverse date (Y-m-d) to (d-m-Y)
    $dateInFormat = date("d-m-Y",strtotime($dateIn));
    $dateOutFormat = date("d-m-Y",strtotime($dateOut));

    // var_dump(
    // $id,
    // $phone,
    // $email,
    // $passport,
    // $address,
    // $reason_extend,
    // $vaccination_status,
    // $accountStatus,
    // $dateInFormat,
    // $dateOutFormat,
    // $name,
    // $gender,
    // $age,
    // $reason,
    // $dateApply,
    // );
    // exit();

    $sql = "UPDATE immigrant SET 
    immigrantName = '$name',
    immigrantGender = '$gender',
    immigrantAge = '$age',
    immigrantPhone = '$phone',
    immigrantEmail = '$email',
    immigrantPassportNo = '$passport',
    immigrantAddress = '$address',
    reasonExtend = '$reason_extend',
    immigrantVaccinationStatus = '$vaccination_status',
    immigrantReason = '$reason',
    accountStatus = '$accountStatus',
    dateApply = '$dateApply',
    dateChargeIn = '$dateInFormat',
    dateChargeOut = '$dateOutFormat'
    WHERE immigrantID = '$id'";


    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Status updated successfully");window.location.href="../immigrantApplyingList.php"</script>';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }


}
