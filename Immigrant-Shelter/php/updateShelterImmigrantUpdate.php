<?php
include("sql/connectDB.php");
// include("sql/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated Sheltered Immigrant Page</title>

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
                <div class="card" style="padding:10px;">


                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                    }

                    // Query
                    $query = "SELECT * FROM immigrant WHERE immigrantID = $id";
                    $result = mysqli_query($conn, $query);

                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {

                        $row = mysqli_fetch_assoc($result);
                        // Declaration 
                        $id                         = $row['immigrantID'];
                        $name                       = $row['immigrantName'];
                        $gender                     = $row['immigrantGender'];
                        $age                        = $row['immigrantAge'];
                        $passport                   = $row['immigrantPassportNo'];
                        $email                      = $row['immigrantEmail'];
                        $phone                      = $row['immigrantPhone'];
                        $address                    = $row['immigrantAddress'];
                        $vaccination_status         = $row['immigrantVaccinationStatus'];
                        $reason_extend              = $row['reasonExtend'];

                        $reason                     = $row ['immigrantReason'];
                        $accountStatus              = $row ['accountStatus'];
                        $dateApply                  = $row ['dateApply'];
                    }

                    ?>
                    <form action="sql/updateImmigrantInformation.php?id=<?=$id?>" method="post">
                        <input type="hidden" name="id" value="<?= $id?>">

                        <input type="hidden" name="reason" value="<?= $reason ?>">
                        <input type="hidden" name="accountStatus" value="<?=$accountStatus?>">
                        <input type="hidden" name="dateApply" value="<?= $dateApply ?>">

                        <div class="mt-3">
                            <label for="exampleInputEmail1" class="form-label">Name: <?=$name?></label>
                            <input type="hidden" name="name" value="<?=$name?>">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputEmail1" class="form-label">Gender: <?=$gender?></label>
                            <input type="hidden" name="gender" value="<?= $gender?>">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputEmail1" class="form-label">Age: <?=$age?></label>
                            <input type="hidden" name="age" value="<?= $age?>">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputPassword1" class="form-label">Passport:</label>
                            <input type="text" class="form-control" name="passport" value="<?=$passport?>">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputPassword1" class="form-label">Email:</label>
                            <input type="text" class="form-control" name="email" value="<?=$email?>">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputPassword1" class="form-label">Phone: </label>
                            <input type="text" class="form-control" name="phone" value="<?=$phone?>">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputPassword1" class="form-label">Address: </label>
                            <input type="text" class="form-control" name="address" value="<?=$address?>">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputPassword1" class="form-label">Vaccination Status: </label>
                            <select name="vaccination-status">
                                <OPTION value="Fully-vaccinate">Fully Vaccinated</OPTION>
                                <OPTION value="Not-vaccinate">Not Vaccinated Yet</OPTION>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputPassword1" class="form-label">Reason Extend: </label>
                            <input type="text" class="form-control" name="reasonExtend" value="<?=$reason_extend?>">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputPassword1" class="form-label">Date Charged In:</label>
                            <input type="date" class="form-control" name="dateIn">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputPassword1" class="form-label">Date Charged Out:</label>
                            <input type="date" class="form-control" name="dateOut">
                        </div>
                        <button type="submit" name="update-btn" class="btn btn-primary mt-4">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
?>