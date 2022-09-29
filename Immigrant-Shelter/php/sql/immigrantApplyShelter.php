<?php

include("connectDB.php");

session_start();

if(isset($_POST['apply-btn'])){

    $name = trim($_POST['contact-name']);
    $phone = $_POST['contact-phone'];
    $email = $_POST['contact-email'];
    $age = $_POST['contact-age'];
    $passport = $_POST['contact-passport'];
    $address = $_POST['address'];
    $reason = $_POST['reason'];
    $vaccination_status = $_POST['vaccination-status'];
    $gender = $_POST['gender'];
    $accountStatus = "pending";
    $todayDate = date("d-m-Y");
    // $todayDate = date("Y-m-d");

    $sql = "INSERT INTO immigrant (immigrantName, immigrantPhone, immigrantAge, immigrantPassportNo, immigrantEmail, immigrantAddress,immigrantGender,immigrantVaccinationStatus, immigrantReason , accountStatus, dateApply) VALUES ('$name','$phone','$age','$passport','$email','$address','$gender','$vaccination_status','$reason','$accountStatus','$todayDate')";
    
    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
        echo '<script>alert("New record created successfully");window.location.href="../index.php"</script>';
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
