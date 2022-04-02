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
                    <a class="tab-link" href="documents.php">Documents</a>
                    <a class="tab-link active" href="service.php">Service</a>
                    <a class="tab-link" href="settings.php">Settings</a>
                </div>

                <form action="" method = "POST" >

                    <div class="body-sec d-flex wrap-sm p-4">
                        <div class="lft p-2 pe-5">
                            <div class="title-line d-flex">
                                <span class="pe-2">Select any two services:</span>
                                <hr>
                                <span class="ps-2">
                                    <input type="checkbox" class="me-2">
                                    Admin Verified
                                </span>
                            </div>
                            <br><br>
                            <label class="check-cs">Home Based Business (HBB)
                                <input type="checkbox" name = "hbb">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-cs">Halal Muis Certified (HMC)
                                <input type="checkbox" name = "hmc">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-cs">100% Malay-owned establishment
                                <input type="checkbox" name = "malay">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-cs">Local Food Stall Based
                                <input type="checkbox" name = "lfs">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-cs">Retail / Shop
                                <input type="checkbox" name = "retail">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-cs">ISO22000 Certified
                                <input type="checkbox" name = "iso">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-cs">Restaurant
                                <input type="checkbox" name = "restaurant">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="rgt p-4 position-relative">
                            <div class="title-line d-flex">
                                <span>Important Note*</span>
                            </div>
                            <hr>
                            <br>
                            <ul>
                                <li class="text-light-cs small mb-2">
                                    Only Halal Muis Certified will have halal logo in every image of your product.
                                </li>
                                <li class="text-light-cs small mb-2">
                                    10% applied to Lets Ride Commission after 6 months trial version
                                </li>
                                <li class="text-light-cs small mb-2">
                                    We will set the advertisement cost for highlight in our app for (sponsoring)
                                </li>
                            </ul>
                            <br>
                            <div class="d-flex justify-content-end position-absolute bottom-0">
                                <button  class="btn btn-red btn-md-cs me-2" name = "sbt">Save</button>
                                <a href="settings.php" class="btn btn-default btn-md-cs">Next</a>
                            </div>
                        </div>
                    </div>

                </form>
                
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

        if(isset($_POST['hbb']))
        { $hbb = "Yes"; }
        if(isset($_POST['hmc']))
        { $hmc = "Yes";}
        if(isset($_POST['malay']))
        { $malay = "Yes"; }
        if(isset($_POST['iso']))
        { $iso = "Yes"; }
        if(isset($_POST['retail']))
        { $retail = "Yes"; }
        if(isset($_POST['lfs']))
        { $lfs = "Yes"; }
        if(isset($_POST['restaurant']))
        { $restaurant = "Yes"; }



        

    $conn = mysqli_connect('localhost' , 'root' , '' , 'lets_ride') or die ('Connect Failed');
    echo $sql = "UPDATE restaurant SET HBB = '{$hbb}', HMS = '{$hmc}', malay_owned = '{$malay}' , iso_certfied = '{$iso}', lfs = '{$lfs}', retail_shop = '{$retail}', restaurant = '{$restaurant}' where restaurant_id = '{$r_id}'";

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
