<?php
include("sql/connectDB.php");
// include("sql/session.php");
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Record of Approval Page</title>

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
                       <div class="col mb-4">
                        <button type="button" class="btn btn-primary" style="margin-left:40%"   onclick="window.location.href='recordOfApproval.php'">All</button>
                        <button type="button" class="btn btn-primary" style="margin-left:10px;" onclick="window.location.href='recordOfApprovalReject.php'">Reject</button>
                        <button type="button" class="btn btn-primary" style="margin-left:10px;" onclick="window.location.href='recordOfApprovalAccept.php'">Accept</button>
                       </div>

                       <table class="table table-dark table-hover" style="text-align:center">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Passport</th>
                                    <th scope="col">Vaccination Status</th>
                                    <th scope="col">Reason</th>
                                    <th scope="col">Approved Status</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php

                            $counter = 0;

                            // Query
                            $query = "SELECT * FROM immigrant WHERE `accountStatus` = 'reject'";
                            $result = mysqli_query($conn, $query);

                            $resultCheck = mysqli_num_rows($result);

                            if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {

                                    $counter++;

                                    // Declaration 
                                    $id                 = $row['immigrantID'];
                                    $name               = $row['immigrantName'];
                                    $passportNo         = $row['immigrantPassportNo'];
                                    $vaccination_status = $row['immigrantVaccinationStatus'];
                                    $reason             = $row['immigrantReason'];
                                    $accountStatus      = $row['accountStatus'];
                            ?>
                                    <tr>
                                        <th scope="row"><?= $counter ?></th>
                                        <td> <?= $name ?></td>
                                        <td> <?= $passportNo ?></td>
                                        <td> <?= $vaccination_status ?></td>
                                        <td> <?= $reason ?> </td>
                                        <td> <?= $accountStatus ?></td>

                                        <!-- <td>
                                            <button type="button" class="btn btn-primary"><?= $accountStatus?></button>
                                        </td> -->
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </body>
    </html>
<?php
?>