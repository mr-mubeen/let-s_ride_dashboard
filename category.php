<?php


session_start();

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
                <div class="rgt d-flex align-items-center wrap-sm">
                    <div class="me-4">
                        <h6 class="mb-0 fw-bold">Shah Rukh Khan</h6>
                        <small>10 Paya Lebar Rd, #B1-14 PLQ Mall, Singapore 409057</small>
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
                    <a class="tab-link" href="profile.html">Profile</a>
                    <a class="tab-link active" href="category.html">Category</a>
                    <a class="tab-link" href="documents.html">Documents</a>
                    <a class="tab-link" href="service.html">Service</a>
                    <a class="tab-link" href="settings.html">Settings</a>
                </div>
                <div class="body-sec d-flex wrap-sm p-4">
                    <div class="lft p-2 pe-5">
                        <form action="" method = "POST">

                                <div class="title-line d-flex">
                                    <span class="pe-2">Category</span>
                                    <hr>
                                    <span class="ps-2">
                                        <input type="checkbox" class="me-2">
                                        Admin Verified
                                    </span>
                                </div>

                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Business Name*</label>
                                        <input placeholder="Enter Business Name..." class="border-0 w-100 h-100"
                                            type="text" name = "business_name">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Date of Join*</label>
                                        <input value="2022-03-27" name = "DOJ" class="border-0 w-100 h-100" type="date">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">No/Block*</label>
                                        <input name = "block" placeholder="Enter your business No/Block" class="border-0 w-100 h-100"
                                            type="text">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Unit*</label>
                                        <input name = "unit" placeholder="Enter your business Unit" class="border-0 w-100 h-100"
                                            type="text">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Office Address*</label>
                                        <input name = "office_address" placeholder="Enter your office address..." class="border-0 w-100 h-100"
                                            type="text">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Postal Code*</label>
                                        <input name = "postal_code" placeholder="Enter postal code" class="border-0 w-100 h-100" type="text">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                <button href="#" name = "sbt" class="btn btn-red btn-md-cs me-2">Save</button>
                                <a href="documents.php" class="btn btn-default btn-md-cs">Next</a>
                            </div>


                            </form>
                    </div>
                    <div class="rgt p-4">
                        <h5 class="title w-100 mt-2">
                            Business Information
                        </h5>
                        <hr>

                        <?php



                            // session_start();
                            // $email = $_SESSION["email"];
                            $r_id = 7;

                            $conn = mysqli_connect('localhost' , 'root' , '' , 'lets_ride') or die ('Connect Failed');

                            $sql1 = "SELECT *  from restaurant where restaurant_id = '{$r_id}'";
                            $result1 = mysqli_query($conn , $sql1) or die ("Regsiter  Failed");
                            $a = mysqli_num_rows($result1);
                            
                            if($a > 0)
                            {
                            while($row = mysqli_fetch_assoc($result1))
                                {
                                
                                    $business_name1 = $row['business_name'];
                                    $DOJ1 = $row['DOJ']; 
                                    $block1 = $row['block']; 
                                    $unit1 = $row['unit']; 
                                    $office_address1 = $row['office_address']; 
                                    $postal_code1 = $row['postal_code'];  
                
                                }
                            
                            }
                            else {
                                $business_name1 = "0";
                                $DOJ1 = "0";
                                $block1 = "0";
                                $unit1 = "0"; 
                                $office_address1 = "0";
                                $postal_code1 = "0";
                            }
        
                        ?>
                        <div class="d-flex flex-wrap ">
                            <div class="info w-50 my-2">
                                <p class="mb-0 small">Business Name: </p>
                                <h6 class="fw-bold"><?php echo $business_name1?></h6>
                            </div>
                            <div class="info w-50 my-2">
                                <p class="mb-0 small">No/Block: </p>
                                <h6 class="fw-bold"><?php echo $block1?></h6>
                            </div>
                            <div class="info w-50 my-2">
                                <p class="mb-0 small">Joining Date: </p>
                                <h6 class="fw-bold"><?php echo $DOJ1?></h6>
                            </div>
                            <div class="info w-50 my-2">
                                <p class="mb-0 small">Unit: </p>
                                <h6 class="fw-bold"><?php echo $unit1?></h6>
                            </div>
                        
                            <div class="info w-50 my-2">
                                <p class="mb-0 small">Postal Code: </p>
                                <h6 class="fw-bold"><?php echo $postal_code1?></h6>
                            </div>
                            <div class="my-2">
                                <p class="mb-0 small text-light-cs">Business Address:</p>
                                <h6><?php echo $office_address1?></h6>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>
</body>


<?php

 $email = $_SESSION["email"];
 echo $r_id = $_SESSION["r_id"];

    if(isset($_POST['sbt'])){
    $business_name = $_POST['business_name'];
    $DOJ = $_POST['DOJ'];
    $block = $_POST['block'];
    $unit = $_POST['unit']; 
    $office_address = $_POST['office_address'];
    $postal_code = $_POST['postal_code'];

    $conn = mysqli_connect('localhost' , 'root' , '' , 'lets_ride') or die ('Connect Failed');
    $sql = "UPDATE restaurant SET business_name = '$business_name' ,DOJ = '$DOJ', block = '$block' , unit = '$unit' , office_address = '$office_address' , postal_code = '$postal_code' where restaurant_id = '{$r_id}'";

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

<script src="../assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="../assets/fontawesome-free-6.1.1-web/js/all.min.js"></script>

<script src="../assets/js/jquery-3.6.0.min.js"></script>

</html>