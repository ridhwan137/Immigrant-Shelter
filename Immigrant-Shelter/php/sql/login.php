<?php

include("connectDB.php");

session_start();


if(isset($_POST['login-btn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // var_dump($email);
        // var_dump($password);
        // exit();

    $query = "SELECT * FROM shelter_provider WHERE shelterEmail = '$email' AND shelterPassword = '$password'";
    $result = mysqli_query($conn, $query);

    // var_dump($result);
    // exit();

    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        $row = mysqli_fetch_assoc($result);

        $_SESSION['id'] = $row['id'];

        header("location: ../immigrantApplyingList.php");
    }

    else{
        echo '<script>alert("Invalid Email or Password!!!");window.location.href="../shelterProvider.php"</script>';
    }

}



?>