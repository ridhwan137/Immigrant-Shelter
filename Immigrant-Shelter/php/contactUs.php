<?php
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta name="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/contactUsStyle.css">
            
            <title>About Us | ImmigrantShelter</title>
            
            <script src="https://kit.fontawesome.com/6010975c7b.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="fontawesome-free-6.1.1-web\css\all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
        </head>

        <body>

            <header class="header">
                <img src="img/logo.png" id="logo" alt="">

                <nav class="navbar" id="myNavBar">
                    <a href="index.php">Home</a>
                    <a href="aboutUs.php">About Us</a>
                    <a href="needShelter.php">Need Shelter</a>
                    <a href="contactUs.php" class="active">Contact</a>
                    <a href="shelterProvider.php">Shelter Provider Page</a>
                    <a href="javascript:void(0);" class="icon" onclick="menuBar()">
                        <i class="fa fa-bars"></i>
                    </a>
                </nav>

            </header>

            <section class="contact">
                <div class="menu">
                    <div class="content">
                        <h2>Contact Us</h2>
                        <p>You may reach out to us using the form below, as well as through social media or email.</p>
                    </div>
                    <div class="container">
                        <div class="contactInfo">
                            <div class="box">
                                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="text">
                                    <h3>Address</h3>
                                    <p>Jalan Hang Tuah Jaya, 76100 Durian Tunggal, Melaka</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                                <div class="text">
                                    <h3>Phone</h3>
                                    <p>+60125789830</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                                <div class="text">
                                    <h3>Email</h3>
                                    <p>sheltermelaka@gmail.com</p>   
                                </div>
                            </div>
                        </div>
                        <div class="contactForm">
                            <form action="send.php" method="post">
                                <h2>Send Message</h2>
                                <div class="inputBox">
                                    <input type="text" id="fname" name="fullname" placeholder="Your name..">
                                    
                                </div>
                                <div class="inputBox">
                                  
                                    <input type="text" id="email" name="email" placeholder="Your email..">
                                  
                                </div>
                                <div class="inputBox">
                                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                                   
                                </div>
                                <div class="inputBox">
                                    <input type="submit" name="" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </body>

    </html>
<?php
?>