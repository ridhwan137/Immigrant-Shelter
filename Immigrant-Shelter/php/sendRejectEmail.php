<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


include("sql/connectDB.php");






if(isset($_GET['reject_id'])){
    $reject_id = $_GET['reject_id'];


    //Query Update Status
    $sql = "UPDATE immigrant SET accountStatus = 'reject' WHERE immigrantID = '$reject_id'";

    if (mysqli_query($conn, $sql)) {
        // echo '<script>alert("Status updated successfully");window.location.href="../immigrantApplyingList.php"</script>';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }


    // Query Select user Information
    $query = "SELECT * FROM immigrant WHERE immigrantID = $reject_id";
    $result = mysqli_query($conn, $query);

    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        $row = mysqli_fetch_assoc($result);
            // Declaration 
        $name               = $row['immigrantName'];
        $email              = $row['immigrantEmail'];
    }

    // var_dump($name,$email);
    // exit();

}

// $fullname = $_POST['fullname'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hacktivist.net@gmail.com';                     //SMTP username
    $mail->Password   = 'rzagxbyptjtsizrt';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('hacktivist.net@gmail.com', 'immigrant shelter');
    $mail->addAddress($email, $fullname);     //Add a recipient
    $mail->addAddress('sheltermelaka@gmail.com');               //Name is optional
    $mail->addReplyTo('sheltermelaka@gmail.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reject Application';
    $mail->Body    = 'Your Application has been rejected ';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>alert("Message has been sent");window.location.href="immigrantApplyingList.php"</script>';

} catch (Exception $e) {
    echo '<script>alert("Message could not be sent.");window.location.href="immigrantApplyingList.php"</script>';
}