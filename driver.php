<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver</title>
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
                        <h2 class="mb-0 h2-cs">Driver</h2>
                        <p class="mb-0 p-cs">Upload all documents to get verified!</p>
                    </div>
                    <div class="rgt d-flex align-items-center wrap-sm">
                        <div class="search me-4">
                            <input placeholder="Search by contact / email" type="search" name="search" id="search">
                            <i class="fa-solid fa-magnifying-glass position-absolute end-0"></i>
                        </div>
                        <div class="date-corner">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>Date: 09/01/2021</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="top-cards gap-2 d-flex wrap-sm">
                    <div class="col-md-3">
                        <div class="card shadow-cs p-4 d-flex flex-row align-items-center justify-content-between ">
                            <div>
                                <h4>Vehicle</h4>
                                <p>Add Vehicles</p>
                            </div>
                            <div class="card-icon crd-icon-1">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-cs p-4 d-flex flex-row align-items-center justify-content-between ">
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
                <div class="main-cs p-4 d-flex wrap-sm flex-column">
                    <div class="head-sec d-flex wrap-sm">
                        <div class="lft p-2 pe-5">
                            <div class="d-flex justify-content-between">
                                <h4 class="title">
                                    Upload Documents
                                </h4>
                            </div>
                        </div>
                        <div class="rgt p-2">
                            <h4 class="title">
                                Profile Details
                            </h4>
                        </div>

                    </div>
                    <div class="body-sec d-flex wrap-sm p-4">
                        <div class="lft p-2 pe-5">
                            <form action="#" method ="post" enctype="multipart/form-data">
                                <div class="title-line d-flex">
                                    <span class="pe-2">Vehicle Details</span>
                                    <hr>
                                    <span class="ps-2">
                                        <input type="checkbox" class="me-2">
                                        Admin Verified
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="w-50">
                                        <label class="text-light-cs no-translate">Driving License Front</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <div class="d-flex justify-content-between mb-1">

                                                <input type="file" name = "driving_lisence_front">
                                                    <!-- <small class="text-light-cs">document_front.jpeg</small>
                                                    <small>40%</small> -->
                                                </div>
                                                <!-- <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-50">
                                        <label class="text-light-cs no-translate">Driving License Back</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <div class="d-flex justify-content-between mb-1">

                                                <input type="file" name = "driving_lisence_back">
                                                    <!-- <small class="text-light-cs">document_front.jpeg</small>
                                                    <small>40%</small> -->
                                                </div>
                                                <!-- <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="title-line d-flex">
                                        <span class="pe-2">All Documents Uploads & Checklist*</span>
                                        <hr>
                                        <span class="ps-2">
                                            <input type="checkbox" class="me-2">
                                            Admin Verified
                                        </span>
                                    </div>

                                    <div class="w-50">
                                        <label class="text-light-cs no-translate">Insurance</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <div class="d-flex justify-content-between mb-1">

                                                <input type="file" name = "insurance">
                                                    <!-- <small class="text-light-cs">document_front.jpeg</small>
                                                    <small>40%</small> -->
                                                </div>
                                                <!-- <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="w-50">
                                        <label class="text-light-cs no-translate">Rental Agreement</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <div class="d-flex justify-content-between mb-1">

                                                <input type="file" name = "rental_agreement">
                                                    <!-- <small class="text-light-cs">document_front.jpeg</small>
                                                    <small>40%</small> -->
                                                </div>
                                                <!-- <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="w-50">
                                        <label class="text-light-cs no-translate">S & P Agreement</label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <!-- <small class="text-light-cs">document_front.jpeg</small>
                                                    <small>40%</small> --><div class="w-60">
                                                <div class="d-flex justify-content-between mb-1">

                                                <input type="file" name = "SP_Agreement">
                                                    <!-- <small class="text-light-cs">document_front.jpeg</small>
                                                    <small>40%</small> -->
                                                </div>
                                                <!-- <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                                </div>
                                                <!-- <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <div class="card-icon card-icon-sm crd-icon-2">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-50">
                                        <label class="text-light-cs no-translate"></label>
                                        <div class="form-cs form-control position-relative w-100">
                                            <div class="w-20 d-flex justify-content-center img-sm">
                                                <img src="../assets/img/doc.png" alt="..">
                                            </div>
                                            <div class="w-60">
                                                <a href="#" onclick="$('#fileUpload').trigger('click');"
                                                    class="text-black mb-0">Upload Attachment</a>
                                            </div>
                                            <div class="w-20 d-flex justify-content-center">
                                                <a href="#" onclick="$('#fileUpload').trigger('click');">
                                                    <i class="fa-solid fa-link text-dark"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="file" id="fileUpload" name="others" class="d-none">
                                    <div class="form-cs w-100">
                                        <p class="mb-0 text-light-cs w-100">Do you have commercial insurance?</p>
                                        <div class="radio-cs d-flex align-items-center">
                                            <input type="radio" name="radio" id="Yes" />
                                            <label class="no-translate" for="Yes">Yes</label>
                                            <input type="radio" name="radio" id="No" />
                                            <label class="no-translate" for="No">No</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-end">
                                <button class="btn btn-default btn-lg-cs" name = "sbt">Submit Profile</button>
                            </div>
                            
                            </form>
                            
                        </div>
                        <div class="rgt p-2 d-flex wrap-sm justify-content-center flex-column">


                            <div class="title-line d-flex">
                                <span class="pe-2">Vehicle Details</span>
                                <hr>
                                <span class="ps-2">
                                    <input type="checkbox" class="me-2">
                                    Admin Verified
                                </span>
                            </div>
                            <br>
                            <div class="cover d-flex justify-content-center align-items-center w-100 position-relative"
                                style="height: 30vh;">
                                <img src="../assets/img/cover.png" class="position-absolute h-100 w-100" alt="..">
                                <a style="z-index: 1;" class="upload position-absolute m-3 bottom-0 start-0 text-white"
                                    href="#" onclick="$('#coverUpload').trigger('click');">
                                    <i class="fa fa-camera text-light-cs"></i>
                                </a>
                            </div>
                            <input type="file" name = "vehicle_image" id="coverUpload" class="d-none">

                            <br><br><br><br>
                            <p class="text-light-cs" style="font-size: 10px;"><b>Note:</b> Full view of vehicle along
                                with a
                                visible number plate*
                            </p>
                            <div class="form-cs form-control position-relative w-100">
                                <label class="position-absolute start-0 text-light-cs">PABs</label>
                                <input placeholder="UL 2272 (472)" name="PAB" class="border-0 w-100 h-100" type="text">
                            </div>
                            <br>
                            <div class="d-flex gap-2 w-100">
                                <div class="form-cs form-control position-relative w-50">
                                    <label class="position-absolute start-0 text-light-cs">Vehicle Brand</label>
                                    <input placeholder="Audi" name = "vehicle_brand" class="border-0 w-100 h-100" type="text">
                                </div>
                                <div class="form-cs form-control position-relative w-50">
                                    <label class="position-absolute start-0 text-light-cs">Vehicle Type</label>
                                    <input placeholder="Stream" name = "vehicle_type" class="border-0 w-100 h-100" type="text">
                                </div>
                            </div>
                            <br>
                            <div class="d-flex gap-2 w-100">
                                <div class="form-cs form-control position-relative w-50">
                                    <label class="position-absolute start-0 text-light-cs">Vehicle Number</label>
                                    <input placeholder="Sjj 1234 S" name = "vehicle_number" class="border-0 w-100 h-100" type="text">
                                </div>
                                <div class="form-cs form-control position-relative w-50">
                                    <label class="position-absolute start-0 text-light-cs">Vehicle Color</label>
                                    <input placeholder="Black" name = "vehicle_color" class="border-0 w-100 h-100" type="text">
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
$conn = mysqli_connect('localhost' , 'root' , '' , 'lets_ride') or die ('Connect Failed');

if(isset($_POST['sbt'])){
    $vehicle_image = $_POST['vehicle_image'];
    $PAB = $_POST['PAB'];
    $vehicle_brand = $_POST['vehicle_brand'];
    $vehicle_type = $_POST['vehicle_type'];
    $vehicle_number = $_POST['vehicle_number'];
    $vehicle_color = $_POST['vehicle_color'];
    $driving_lisence_front = $_POST['driving_lisence_front'];
    $driving_lisence_back = $_POST['driving_lisence_back'];
    $insurance = $_POST['insurance'];
    $rental_agreement = $_POST['rental_agreement']; 
    $sp_agreement = $_POST['sp_agreement'];
    $others = $_POST['others'];
   

   $driving_lisence_front = $_FILES['driving_lisence_front']['name'];
   $filesize = $_FILES['driving_lisence_front']['size'];
   $filetmp = $_FILES['driving_lisence_front']['tmp_name'];
   $des = "images/".$driving_lisence_front;
   move_uploaded_file($filetmp , $des); 


   
   $driving_lisence_back = $_FILES['driving_lisence_back']['name'];
   $filesize = $_FILES['driving_lisence_back']['size'];
   $filetmp = $_FILES['driving_lisence_back']['tmp_name'];
   $des = "images/".$driving_lisence_back;
   move_uploaded_file($filetmp , $des); 


   
   $insurance = $_FILES['insurance']['name'];
   $filesize = $_FILES['insurance']['size'];
   $filetmp = $_FILES['insurance']['tmp_name'];
   $des = "images/".$insurance;
   move_uploaded_file($filetmp , $des); 

   
   $rental_agreement = $_FILES['rental_agreement']['name'];
   $filesize = $_FILES['rental_agreement']['size'];
   $filetmp = $_FILES['rental_agreement']['tmp_name'];
   $des = "images/".$rental_agreement;
   move_uploaded_file($filetmp , $des); 

   
   $sp_agreement = $_FILES['sp_agreement']['name'];
   $filesize = $_FILES['sp_agreement']['size'];
   $filetmp = $_FILES['sp_agreement']['tmp_name'];
   $des = "images/".$sp_agreement;
   move_uploaded_file($filetmp , $des); 

   
   $others = $_FILES['others']['name'];
   $filesize = $_FILES['others']['size'];
   $filetmp = $_FILES['others']['tmp_name'];
   $des = "images/".$others;
   move_uploaded_file($filetmp , $des); 



    $conn = mysqli_connect('localhost' , 'root' , '' , 'lets_ride') or die ('Connect Failed');
    $sql = "INSERT INTO rider($vehicle_image  ,$PAB , $vehicle_brand  , $vehicle_type , $vehicle_number , $vehicle_color , $driving_lisence_front , $driving_lisence_back , $insurance , $rental_agreement , $sp_agreement ,$others   ) VALUES ('{$vehicle_image }' ,'{$PAB}' , '{$vehicle_brand}'  , '{$vehicle_type}' , '{$vehicle_number}' , '{$vehicle_color}' , '{$driving_lisence_front}' , '{$driving_lisence_back}' , '{$insurance}' , '{$rental_agreement}' , '{$sp_agreement}' ,'{$others}' )";
    $result = mysqli_query($conn , $sql) or die ("Regsiter _______________________ Failed");
    echo "<script>alert('{$result}')</script>";

    if($result)
    {
        echo "<script>alert('Driver Profile Updated Successfully!')</script>";
    }
    else {
       
        echo "<script>alert('Driver Profile Updated Failed')</script>";
    }

}


?>

<script src="../assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="../assets/fontawesome-free-6.1.1-web/js/all.min.js"></script>

<script src="../assets/js/jquery-3.6.0.min.js"></script>

</html>