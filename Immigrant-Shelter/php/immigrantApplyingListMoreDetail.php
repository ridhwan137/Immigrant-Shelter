<?php
include("sql/connectDB.php");
// include("sql/session.php");
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Immigrant Applying List Page</title>

            <link rel="stylesheet" type="text/css" href="../css/immigrantApplyingList.css">

            <!-- Bootstrap CSS + JS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </head>

        <body>
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #ff5d22">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <a href="immigrantApplyingList.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="fs-5 d-none d-sm-inline">Shelter Provider Menu</span>
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <li class="nav-item border border-light border-2 rounded" style="margin-top: 80%;">
                                    <a href="immigrantApplyingList.php" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline" style="color: #fff; padding:12px;">Immigrant Applying List</span>
                                    </a>
                                </li>
                                <li class="border border-light border-2 rounded" style="margin-top: 20%; padding:0 25px 0 10px;">
                                    <a href="updatedShelteredImmigrant.php" class="nav-link px-0 align-middle text-center">
                                        <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline" style="color: #fff; padding:5px;">Sheltered Immigrant</span></a>
                                </li>
                                <li class="border border-light border-2 rounded" style="margin-top: 20%;">
                                    <a href="recordOfApproval.php" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline" style="color: #fff; padding:27px;">Record of Approval</span> </a>
                                </li>
                                <li class="border border-light border-2 rounded" style="margin-top: 20%;">
                                    <a href="index.php" class="nav-link px-0 align-middle" onclick="return confirm('Are you sure want to logout?')">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline" style="color: #fff; padding:65px;">Log Out</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col py-3">
                        <h3 class="mb-4">Immigrant List</h3>

                        <?php
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                        }
                        
                        // Query
                        $query = "SELECT * FROM immigrant WHERE immigrantID = $id";
                        $result = mysqli_query($conn, $query);

                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {

                            $row = mysqli_fetch_assoc($result);
                                // Declaration 
                            // $id                 = $row['immigrantID'];
                            $dateApply          = $row ['dateApply'];
                            $name               = $row['immigrantName'];
                            $gender             = $row['immigrantGender'];
                            $age                = $row['immigrantAge'];
                            $passport           = $row['immigrantPassportNo'];
                            $email              = $row['immigrantEmail'];
                            $phone              = $row['immigrantPhone'];
                            $address            = $row['immigrantAddress'];
                            $vaccination_status = $row['immigrantVaccinationStatus'];
                            $reason             = $row['immigrantReason'];

                        }

                        ?>

                        <div class="card">
                            <div class="card-body position-center">
                                <p>Date Apply: <?=$dateApply?> </p>
                                <p>Name: <?=$name?> </p>
                                <p>Gender: <?=$gender?> </p>
                                <p>Age: <?=$age?></p>
                                <p>Passport: <?=$passport?></p>
                                <p>Email: <?=$email?></p>
                                <p>Phone: <?=$phone?></p>
                                <p>Address: <?=$address?></p>
                                <p>Vaccination Status: <?=$vaccination_status?></p>
                                <p>Reason: <?=$reason?></p>

                                <button type="button" class="btn btn-primary" onclick="window.location.href='sendRejectEmail.php?reject_id=<?=$id?>'">Reject</button>
                                <button type="button" class="btn btn-primary" onclick="window.location.href='sendAcceptEmail.php?accept_id=<?=$id?>'">Accept</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </body>
    </html>
<?php
?>