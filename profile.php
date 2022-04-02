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
                    <a class="tab-link active" href="profile.php">Profile</a>
                    <a class="tab-link " href="category.php">Category</a>
                    <a class="tab-link" href="documents.php">Documents</a>
                    <a class="tab-link" href="service.php">Service</a>
                    <a class="tab-link" href="settings.php">Settings</a>
                </div>
                    <div class="body-sec d-flex flex-column wrap-sm p-4">
                    <form action= "#" method = "POST"  enctype="multipart/form-data"> 
                        <div class="profile-page">
                            <div class="cover d-flex justify-content-center align-items-center">
                                <a style="z-index: 1;" class="upload position-absolute m-3 bottom-0 end-0 text-white"
                                    href="" onclick="$('#imgUpload').trigger('click');">
                                    <input type="file" name = "restaurant_image" id="imgUpload" class="d-none" src = "../assets/img/camera_icon.png">
                                    
                                </a>
                            </div>
                            <div class="profile flex-row align-items-end justify-content-start">
                                <div class="profile-img position-relative ms-5">
                                    <img onclick="$('#imgUpload').trigger('click');" class="profile-bordered"
                                        src="../assets/img/profile.png" width="100%" alt="Profile">
                                    <div onclick="$('#imgUpload').trigger('click');"
                                        class="upload-icon position-absolute end-0">
                                        <i class="fa-solid fa-camera"></i>
                                       
                                    </div>
                                </div>
                                <a href="#" class="pt-4" onclick="$('#imgUpload').trigger('click');">Upload
                                    Company Logo</a>
                            </div>


                        </div>
                        
                       
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-red btn-md-cs me-2" name = "sbt">Save</button>
                            <a href="category.php" class="btn btn-default btn-md-cs">Next</a>
                        </div>
                        </form>
                        
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</body>

<?php


if(isset($_POST['sbt'])){
   echo $image = $_POST['restaurant_image'];

   $restaurant_image = $_FILES['restaurant_image']['name'];
   $filetmp = $_FILES['restaurant_image']['tmp_name'];
   $des = "images/".$restaurant_image;
   move_uploaded_file($filetmp , $des); 


    $conn = mysqli_connect('localhost' , 'root' , '' , 'lets_ride') or die ('Connect Failed');
    echo $sql = "UPDATE restaurant set restaurant_image = '{$restaurant_image}' where restaurant_id = '{$r_id}')";
    $result = mysqli_query($conn , $sql) or die ("Regsiter _______________________ Failed");

    if($result)
    {
        echo "<script>alert('Completed')</script>";
    }
    else {
       
        echo "<script>alert('Failed')</script>";
    }

}


?>


<script src="../assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="../assets/fontawesome-free-6.1.1-web/js/all.min.js"></script>

<script src="../assets/js/jquery-3.6.0.min.js"></script>

</html>