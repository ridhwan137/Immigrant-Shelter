<?php
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta name="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/clientForm.css">

            <title>Need Shelter | ImmigrantShelter</title>

            <script src="https://kit.fontawesome.com/6010975c7b.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="fontawesome-free-6.1.1-web\css\all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>

        <body>
            <header class="header">
                <img src="img/logo.png" id="logo" alt="">

                <nav class="navbar" id="myNavBar">
                    <a href="index.php">Home</a>
                    <a href="aboutUs.php">About Us</a>
                    <a href="needShelter.php" class="active">Need Shelter</a>
                    <a href="contactUs.php">Contact</a>
                    <a href="shelterProvider.php">Shelter Provider Page</a>
                    <a href="javascript:void(0);" class="icon" onclick="menuBar()">
                        <i class="fa fa-bars"></i>
                    </a>
                </nav>
            </header>

            <div class="background-image">
                <div class="container">

                    <form action="sql/immigrantApplyShelter.php" method="POST">

                        <div class="input-group">
                            <label>Name:</label>
                            <input type="text" placeholder="Enter Full Name" id="contact-name" name="contact-name" onkeyup="validateName()">
                            <span id="name-error"></span>
                        </div>

                        <div class="input-group">
                            <label>Gender:</label>
                            <td><input type="radio" id="female" name="gender" value="female"> <label for="female">FEMALE</label>
                                <input type="radio" id="male" name="gender" value="male"> <label for="male">MALE</label>
                            </td>
                            <!-- <span id="gender-error"></span> -->
                        </div>

                        <div class="input-group">
                            <label>Age:</label>
                            <input type="text" placeholder="Enter Your Age" id="contact-age" name="contact-age" onkeyup="validateAge()">
                            <span id="age-error"></span>
                        </div>

                        <div class="input-group">
                            <label>Passport:</label>
                            <input type="text" placeholder="Enter Your Passport" id="contact-passport" name="contact-passport" onkeyup="validatePassport()">
                            <span id="passport-error"></span>
                        </div>

                        <div class="input-group">
                            <label>Email:</label>
                            <input type="email" placeholder="Enter Email Address" id="contact-email" name="contact-email" onkeyup="validateEmail()">
                            <span id="email-error"></span>
                        </div>
        
                        <div class="input-group">
                            <label>Phone No:</label>
                            <input type="tel" placeholder="123 456 7890" id="contact-phone" name="contact-phone" onkeyup="validatePhone()">
                            <span id="phone-error"></span>
                        </div>

                        <div class="input-group">
                            <label>Address:</label>
                            <textarea id="address" name="address" rows="3" cols="40" placeholder="Please Enter Your Full Address"></textarea>
                            <span id="address-error"></span>
                        </div>

                        <div class="input-group">
                            <label>Reason:</label>
                            <textarea id="reason" name="reason" rows="3" cols="40" placeholder="Please Enter Your Reason"></textarea>
                            <span id="reason-error"></span>
                        </div>

                        <br>
                        <div class="input-group">
                            <label>Vaccination Status:</label>
                            <select name="vaccination-status">
                                <OPTION value="Fully-vaccinate">Fully Vaccinated</OPTION>
                                <OPTION value="Not-vaccinate">Not Vaccinated Yet</OPTION>
                            </select>

                            <span id="vaccinationstatus-error"></span>
                        </div>
        
                        <button type='submit' name="apply-btn">Submit</button>
        
                    </form>
                </div>
            </div>

            <script src="../js/clientForm.js"></script>
            
        </body>
    </html>
<?php
?>