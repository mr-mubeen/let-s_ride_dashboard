<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style = "background: linear-gradient(to right, #ff5050 0%, #ff99cc 100%)">
    
<div style = "margin-left: 700px; margin-top: 300px; ">
    <form action="" style = "width: 900px; height: 300px; " method = "post">

    <h2 style = "color: white; "><b><u> Driver Login Form </U></b></h2>
    <div class="form-cs position-relative w-50 mt-4">
        
        <input  class="form-control"  placeholder="Enter Your Email" name="email" class="border-0 w-100 h-100" type="text">
    </div>

    <div class="form-cs  position-relative w-50 mt-4">
        
        <input  class="form-control"  placeholder="Enter Your Password" name="password" class="border-0 w-100 h-100" type="password">
    </div>

<br>
    <button name = "sbt" class= "btn  btn-lg btn-dark" style = "width: 450px"> Login </button>

    </form>
</div>
</body>
</html>


<?php
session_start();
    if(isset($_POST['sbt'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $conn = mysqli_connect('localhost' , 'root' , '' , 'lets_ride') or die ('Connect Failed');
    echo $sql = "SELECT * FROM rider where rider_email = '{$email}' and rider_password = '{$password}'";
    $result = mysqli_query($conn , $sql) or die ("Regsiter  Failed");
    $a = mysqli_num_rows($result);
    
    if($a > 0)
    {
       while($row = mysqli_fetch_assoc($result))
        {
            

            $_SESSION["email"] = $row['rider_email'];
            $_SESSION["password"] = $row['rider_password'];  
            $_SESSION["rider_id"] = $row['rider_id'];  

        
        }
        echo "<script>alert('Login')</script>";
        header ("location: http://localhost/lets_ride/driver/driver.php");
    }

    else 
    { 
        echo "<script>alert('Failed')</script>";
    }

}

?>