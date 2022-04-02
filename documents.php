<?php
session_start();



$email = $_SESSION["email"];
$r_id = $_SESSION["r_id"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="../assets/logo/fav-icon.png">

    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="menu pt-5">
                <div class="nav-top">
                    <a href="index.html" class="nav-brand">
                        <img src="../assets/logo/logo.png" alt="Application">
                    </a>
                </div>
                <div class="nav">
                    <ul>
                        <li>
                            <a class="menu-link active" href="../index.html">
                                <i class="fa-solid fa-house"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="#">
                                <i class="fa-solid fa-wallet"></i>
                                <span>Wallet</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="#">
                                <i class="fa-solid fa-user"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="#">
                                <i class="fa-solid fa-gear"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu-clear" style="width: 124px;"></div>
            <div class="container-cs p-5">
                <div class="top-bar d-flex justify-content-between wrap-sm">
                    <div class="lft">
                        <h2 class="mb-0 h2-cs">Vendor Registration Form</h2>
                        <p class="mb-0 p-cs">Submit the form below to become a vendor on Let’s Ride</p>
                    </div>
                                   
<?php

$conn = mysqli_connect('localhost' , 'root' , '' , 'lets_ride') or die ('Connect Failed');
$sql1 = "SELECT * from restaurant where restaurant_id = '{$r_id}'";
$result1 = mysqli_query($conn , $sql1) or die ("Regsiter  Failed");
$a = mysqli_num_rows($result1);

if($a > 0)
{
   while($row = mysqli_fetch_assoc($result1))
    {
        $business_name = $row['business_name'];
        $office_address = $row['office_address'];  
    }
}

?>

            <div class="rgt d-flex align-items-center wrap-sm">
                <div class="me-4">
                    <h6 class="mb-0 fw-bold"><?php echo $business_name?></h6>
                    <small><?php echo $office_address?></small>
                        </div>
                        <div class="profile-top-icon">
                            <img src="../assets/img/profile.png" alt="profile">
                        </div>
                    </div>
                </div>
                <br>
                <div class="top-cards gap-2 d-flex wrap-sm">
                    <div class="col-md-3">
                        <div class="card shadow-cs p-4 d-flex flex-row align-items-center justify-content-between ">
                            <div>
                                <h4>Vendor Category</h4>
                                <p>Category</p>
                            </div>
                            <div class="card-icon crd-icon-1">
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-cs p-4 d-flex flex-row align-items-center justify-content-between ">
                            <div>
                                <h4>Business</h4>
                                <p>Add Business / Location</p>
                            </div>
                            <div class="card-icon crd-icon-2">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-cs p-4 d-flex flex-row align-items-center justify-content-between">
                            <div>
                                <h4 class="text-danger">Not Verified</h4>
                                <p>Admin Verify</p>
                            </div>
                            <div class="card-icon crd-icon-5">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="main-cs d-flex wrap-sm flex-column overflow-hidden">
                <div class="head-sec d-flex wrap-sm bg-black">
                    <a class="tab-link" href="profile.php">Profile</a>
                    <a class="tab-link " href="category.php">Category</a>
                    <a class="tab-link active" href="documents.php">Documents</a>
                    <a class="tab-link" href="service.php">Service</a>
                    <a class="tab-link" href="settings.php">Settings</a>
                </div>
                    <div class="body-sec d-flex wrap-sm p-4">
                        <div class="lft p-2 pe-5">
                            <form action="#" method = "POST"  enctype="multipart/form-data">

                                <div class="title-line d-flex">
                                    <span class="pe-2">Documents* (If Any)</span>
                                    <hr>
                                    <span class="ps-2">
                                        <input type="checkbox" class="me-2">
                                        Admin Verified
                                    </span>
                                </div>
                                <div class="w-100 d-flex justify-content-between">
                                    <div class="w-33">
                                        <label class="text-light-cs no-translate">Upload Acra*</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <!-- <div class="d-flex justify-content-between mb-1">
                                                    <small class="text-light-cs">Acra.pdf</small>
                                                    <small>68%</small>
                                                </div>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->

                                                <input type="file" name = "acra_cert" required>
                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-33">
                                        <div class="form-cs form-control position-relative w-100 mt-4">
                                            <label class="position-absolute start-0 text-light-cs">UEN*</label>
                                            <input placeholder="Enter UEN" name = "UEN" class="border-0 w-100 h-100" type="text">
                                        </div>
                                    </div>
                                    <div class="w-33">
                                        <div class="form-cs form-control position-relative w-100 mt-4">
                                            <label class="position-absolute start-0 text-light-cs">Expiry*</label>
                                            <input onfocus="(this.type='date')" value="2022-03-27"
                                                class="border-0 w-100 h-100" name = "acra_exp" type="date">
                                        </div>
                                    </div>
                                </div>

                                <div class="title-line d-flex mt-4  ">
                                    <span class="pe-2">All Documents / Checklists</span>
                                    <hr>
                                    <span class="ps-2">
                                        <input type="checkbox" class="me-2">
                                        Admin Verified
                                    </span>
                                </div>
                              

                                <div class="w-100 d-flex">
                                    <div class="w-50 me-3">
                                        <label class="text-light-cs no-translate">Agreement Certificate</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <!-- <div class="d-flex justify-content-between mb-1">
                                                    <small class="text-light-cs">Acra.pdf</small>
                                                    <small>68%</small>
                                                </div>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->

                                                <input type="file" name = "agreement_cert" required>

                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-33">
                                        <div class="form-cs form-control position-relative w-100 mt-4">
                                            <label class="position-absolute start-0 text-light-cs">Expiry*</label>
                                            <input onfocus="(this.type='date')" value="2022-03-27"
                                                class="border-0 w-100 h-100" name = "agreement_exp" type="date">
                                        </div>
                                    </div>
                                </div>

                                <div class="w-100 d-flex">
                                    <div class="w-50 me-3">
                                        <label class="text-light-cs no-translate">Halal Muise Certificate</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <!-- <div class="d-flex justify-content-between mb-1">
                                                    <small class="text-light-cs">Acra.pdf</small>
                                                    <small>68%</small>
                                                </div>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->

                                                <input type="file" name = "halal_cert" required>

                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-33">
                                        <div class="form-cs form-control position-relative w-100 mt-4">
                                            <label class="position-absolute start-0 text-light-cs">Expiry*</label>
                                            <input onfocus="(this.type='date')" value="2022-03-27"
                                                class="border-0 w-100 h-100" name = "halal_exp" type="date">
                                        </div>
                                    </div>
                                </div>

                                <div class="w-100 d-flex">
                                    <div class="w-50 me-3">
                                        <label class="text-light-cs no-translate">Food Hygeine Certificate</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <!-- <div class="d-flex justify-content-between mb-1">
                                                    <small class="text-light-cs">Acra.pdf</small>
                                                    <small>68%</small>
                                                </div>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->

                                                <input type="file" name = "food_cert" required>

                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-33">
                                        <div class="form-cs form-control position-relative w-100 mt-4">
                                            <label class="position-absolute start-0 text-light-cs">Expiry*</label>
                                            <input onfocus="(this.type='date')" value="2022-03-27"
                                                class="border-0 w-100 h-100" name = "food_exp" type="date">
                                        </div>
                                    </div>
                                </div>

                                <div class="w-100 d-flex">
                                    <div class="w-50 me-3">
                                        <label class="text-light-cs no-translate">Local Food Stall Based(NEA)*</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <!-- <div class="d-flex justify-content-between mb-1">
                                                    <small class="text-light-cs">Acra.pdf</small>
                                                    <small>68%</small>
                                                </div>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->

                                                <input type="file" name = "lfa_cert" required>

                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-33">
                                        <div class="form-cs form-control position-relative w-100 mt-4">
                                            <label class="position-absolute start-0 text-light-cs">Expiry*</label>
                                            <input onfocus="(this.type='date')" value="2022-03-27"
                                                class="border-0 w-100 h-100" name = "lfa_exp" type="date">
                                        </div>
                                    </div>
                                </div>

                                <div class="w-100 d-flex">
                                    <div class="w-50 me-3">
                                        <label class="text-light-cs no-translate">SFA/NEA License*</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <!-- <div class="d-flex justify-content-between mb-1">
                                                    <small class="text-light-cs">Acra.pdf</small>
                                                    <small>68%</small>
                                                </div>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->

                                                <input type="file" name = "sfa_cert" required>

                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-33">
                                        <div class="form-cs form-control position-relative w-100 mt-4">
                                            <label class="position-absolute start-0 text-light-cs">Expiry*</label>
                                            <input onfocus="(this.type='date')" value="2022-03-27"
                                                class="border-0 w-100 h-100" name = "sfa_exp"  type="date">
                                        </div>
                                    </div>
                                </div>

                           
                                </div>
                                <div class="rgt p-4 position-relative">
                                    <div class="title-line d-flex">
                                        <span>Other Certificates (If Any)</span>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="d-flex w-100 justify-content-center flex-column align-items-center">
                                        <div onclick="$('#cert').trigger('click');" class="card-icon crd-icon-5 mb-2">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                        <a href="#" onclick="$('#cert').trigger('click');" class="text-light-cs">Upload If
                                            any...</a>
                                    </div>
                                    <input type="file" name = "others" id="cert" class="d-none">
                                   
                                    <div class="d-flex justify-content-end position-absolute bottom-0">
                                    <br><br>
                                        <button class="btn btn-red btn-md-cs me-2" name = "sbt" >Save</button>
                                        <a href="service.php" class="btn btn-default btn-md-cs">Next</a>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</body>

<script src="../assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="../assets/fontawesome-free-6.1.1-web/js/all.min.js"></script>

<script src="../assets/js/jquery-3.6.0.min.js"></script>

</html>


<?php
    if(isset($_POST['sbt'])){
    $acra_cert = $_POST['acra_cert'];
    $UEN = $_POST['UEN'];
    $acra_exp = $_POST['acra_exp'];
    $agreement_cert = $_POST['agreement_cert'];
    $agreement_exp = $_POST['agreement_exp'];
    $halal_cert = $_POST['halal_cert'];
    $halal_exp = $_POST['halal_exp'];
    $food_cert = $_POST['food_cert'];
    $food_exp = $_POST['food_exp'];
    $lfa_cert = $_POST['lfa_cert'];
    $lfa_exp = $_POST['lfa_exp']; 
    $sfa_cert = $_POST['sfa_cert'];
    $sfa_exp = $_POST['sfa_exp'];
    $others = $_POST['others'];


    
   $acra_cert = $_FILES['acra_cert']['name'];
   $acra_cert_tmp = $_FILES['acra_cert']['tmp_name'];
   $des = "images/".$acra_cert;
   move_uploaded_file($acra_cert_tmp , $des); 


   
   $agreement_cert = $_FILES['agreement_cert']['name'];
   $agreement_cert_tmp = $_FILES['agreement_cert']['tmp_name'];
   $des = "images/".$agreement_cert;
   move_uploaded_file($agreement_cert_tmp , $des); 


   
   $halal_cert = $_FILES['halal_cert']['name'];
   $halal_cert_tmp = $_FILES['halal_cert']['tmp_name'];
   $des = "images/".$halal_cert;
   move_uploaded_file($halal_cert_tmp , $des); 

   
   $food_cert = $_FILES['food_cert']['name'];
   $food_cert_tmp = $_FILES['food_cert']['tmp_name'];
   $des = "images/".$food_cert;
   move_uploaded_file($food_cert_tmp , $des); 

   
   $lfa_cert = $_FILES['lfa_cert']['name'];
   $lfa_cert_tmp = $_FILES['lfa_cert']['tmp_name'];
   $des = "images/".$lfa_cert;
   move_uploaded_file($lfa_cert_tmp , $des); 

   $sfa_cert = $_FILES['sfa_cert']['name'];
   $sfa_cert_tmp = $_FILES['sfa_cert']['tmp_name'];
   $des = "images/".$sfa_cert;
   move_uploaded_file($sfa_cert_tmp , $des); 


   
   $others = $_FILES['others']['name'];
   $others_temp = $_FILES['others']['tmp_name'];
   $des = "images/".$others;
   move_uploaded_file($others_temp , $des); 

    $conn = mysqli_connect('localhost' , 'root' , '' , 'lets_ride') or die ('Connect Failed');
    $sql = "UPDATE restaurant SET acra_cert = '{$acra_cert}' , uen = '{$UEN}' , acra_exp = '{$acra_exp}' , agreement_cert = '{$agreement_cert}' , agreement_exp = '{$agreement_exp}' ,  halal_cert = '{$halal_cert}' ,  halal_exp = '{$halal_exp}' , food_cert = '{$food_cert}' ,  food_exp = '{$food_exp}' , lfa_cert = '{$lfa_cert}' ,  lfa_exp = '{$lfa_exp}' ,  sfa_cert = '{$sfa_cert}' ,  sfa_exp = '{$sfa_exp}' , others = '{$others}' where restaurant_id = '{$r_id}'";

    $result = mysqli_query($conn , $sql) or die ("Regsiter _______________________ Failed");

    if($result)
    {
        echo "<script>alert('Saved')</script>";
       

    }
    else 
    { 
        echo "<script>alert('Failed')</script>";
    }

}

?>