<?php
include 'F:\xampp\htdocs\lets_ride\connect.php';

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
                        <h2 class="mb-0 h2-cs">BE A USER</h2>
                        <p class="mb-0 p-cs">Upload all documents to get verified!</p>
                    </div>
                    <div class="rgt w-100">
                        <div class="top-cards d-flex justify-content-end wrap-sm ">
                            <div class="col-md-3">
                                <div
                                    class="card shadow-cs p-4 d-flex flex-row align-items-center justify-content-between">
                                    <div>
                                        <h4 class="text-success">Verified</h4>
                                        <p>Admin Verify</p>
                                    </div>
                                    <div class="card-icon crd-icon-1">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="main-cs p-4 d-flex wrap-sm flex-column">
                    <div class="head-sec d-flex wrap-sm">
                        <div class="lft p-2 pe-5">
                            <div class="d-flex justify-content-between">
                                <h4 class="title">
                                    User Profile
                                </h4>
                            </div>
                        </div>
                        <div class="rgt p-2">
                        </div>

                    </div>
                    <div class="body-sec d-flex wrap-sm p-4">
                        <div class="lft p-2 pe-5">
                            <div class="title-line d-flex">
                                <span class="pe-2">Profile Details</span>
                                <hr>
                                <span class="ps-2">
                                    <input type="checkbox" class="me-2">
                                    Admin Verified
                                </span>
                            </div>
                            <br>
                           

                            <form action="#" method="post" enctype="multipart/form-data">

                            <div class="profile flex-row align-items-end justify-content-start">
                                <div class="profile-img position-relative">
                                    <img onclick="$('#uploaduser').trigger('click');" class="profile-bordered"
                                        src="../assets/img/profile.png" width="100%" alt="Profile">
                                    <div class="upload-icon position-absolute end-0">
                                        <i onclick="$('#uploaduser').trigger('click');" class="fa-solid fa-camera"></i>
                                    </div>
                                </div>
                                <a onclick="$('#uploaduser').trigger('click');" href="#" class="pt-2 ms-2">Upload
                                    Profile Logo</a>
                            </div>
                            <input type="file" id="uploaduser" name="image" class="d-none">


                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">User Name</label>
                                        <input placeholder="Enter Your Name..." name="user" class="border-0 w-100 h-100"
                                            type="text">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Address</label>
                                        <input placeholder="Enter Your Address*" name="user_address" class="border-0 w-100 h-100"
                                            type="text">
                                    </div>

                                    <div
                                        class="form-title-cs w-100 d-flex wrap-sm justify-content-between align-items-center mt-4">
                                        <p class="mb-0">Add Card Details</p>
                                        <hr>
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Card Holder Name</label>
                                        <input placeholder="Enter Card Holder Name..." name="card_username" class="border-0 w-100 h-100"
                                            type="text">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Card Number</label>
                                        <input placeholder="xxxx xxxx xxxx xxxx" name="card_number" class="border-0 w-100 h-100"
                                            type="password">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Pin Code</label>
                                        <input placeholder="xxxx" name="pincode" class="border-0 w-100 h-100" type="password">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Expiry*</label>
                                        <input value="2022-03-27" name="card_expirydate" class="border-0 w-100 h-100" type="date">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">CVV</label>
                                        <input placeholder="Enter CVV..." name="CVV" class="border-0 w-100 h-100" type="text">
                                    </div>

                                    <div class="form-cs form-control position-relative w-50 mt-4">
                                        <label class="position-absolute start-0 text-light-cs">Zip/Postal Code</label>
                                        <input placeholder="Enter Zip Code..." name="zipcode" class="border-0 w-100 h-100" type="text">
                                    </div>

                                    <div class="d-flex justify-content-end">
                        <button class="btn btn-default btn-lg-cs" name="sbt">Save</button>
                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="rgt p-4">
                            <div class="profile">
                                <div class="profile-img position-relative">
                                    <img onclick="$('#uploaduserexist').trigger('click');"
                                        src="../assets/img/profile-img.png" width="100%" alt="Profile">
                                    <div class="upload-icon position-absolute end-0">
                                        <i onclick="$('#uploaduserexist').trigger('click');"
                                            class="fa-solid fa-camera"></i>
                                    </div>
                                </div>
                                <input type="file" class="d-none" id="uploaduserexist">
                                <p class="mb-0 mt-2">John Smith</p>
                                <p class="text-center text-light-cs">10 Paya Lebar Rd, #B1-14 PLQ Mall, Singapore 409057
                                </p>
                            </div>
                            <br>
                            <h6>Card Details</h6>
                            <div class="debit-card p-4 w-100">
                                <div
                                    class="inner-card w-100 h-100 d-flex justify-content-center align-items-center flex-column">
                                    <div class="d-flex justify-content-between w-100">
                                        <img src="../assets/img/visa.png" width="40" height="20" alt="..">
                                        <h6>Bank Name</h6>
                                    </div>
                                    <h6 class="mb-0">5329 3290 9023 4552</h6>
                                    <small class="text-end w-100 text-light my-1">VALID TRHU</small>
                                    <div class="d-flex justify-content-between w-100">
                                        <h6>JOHN SMITH</h6>
                                        <p class="mb-0">12/22</p>
                                    </div>
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
    
if(isset($_POST['sbt'])){
      $user = $_POST['user'];
      $user_address = $_POST['user_address'];
      $card_username = $_POST['card_username'];
      $card_number = $_POST['card_number']; 
      $card_expirydate = $_POST['card_expirydate'];
      $CVV = $_POST['CVV'];
      $pincode = $_POST['pincode'];
      $zipcode = $_POST['zipcode']; 
 
     $filename = $_FILES['image']['name'];
     $filesize = $_FILES['image']['size'];
     $filetmp = $_FILES['image']['tmp_name'];
     $des = "images/".$filename;
     move_uploaded_file($filetmp , $des); 

    $conn = mysqli_connect('localhost' , 'root' , '' , 'lets_ride') or die ('Connect Failed');
      $sql = "INSERT INTO users(customer_name ,customer_image, customer_address , card_username, card_number, CVV, pincode, zipcode ) VALUES ('{$user}', '{$filename}', '{$user_address}' , '{$card_username}' , '{$card_number}' , '{$CVV}' , '{$pincode}' , '{$zipcode}' )";
      $result = mysqli_query($conn , $sql) or die ("Regsiter _______________________ Failed");
      echo "<script>alert('{$result}')</script>";

      if($result)
      {
          echo "<script>alert('User Profile Updated Successfully!')</script>";
      }
      else {
         
          echo "<script>alert('User Profile Updated Failed')</script>";
      }

  }
     
      // header ("location: http://localhost/project/lawyer-view.php");
      


?>

<script src="../assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="../assets/fontawesome-free-6.1.1-web/js/all.min.js"></script>

<script src="../assets/js/jquery-3.6.0.min.js"></script>

</html>