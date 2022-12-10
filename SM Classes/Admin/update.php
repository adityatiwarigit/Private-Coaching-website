<?php

include '../dbconfig.php';

$id= $_GET['id'];

if(isset ($_POST['update']))

{
    $name=mysqli_real_escape_string($conn,$_POST['name-inp']);
    $father=mysqli_real_escape_string($conn,$_POST['fathers-inp']);
    $mobile=mysqli_real_escape_string($conn,$_POST['mobile-inp']);
    $dob=mysqli_real_escape_string($conn,$_POST['dob-inp']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $age=mysqli_real_escape_string($conn,$_POST['age-inp']);
    $aadhar=mysqli_real_escape_string($conn,$_POST['aadhar-inp']);
    $email=mysqli_real_escape_string($conn,$_POST['email-inp']);
    $address=mysqli_real_escape_string($conn,$_POST['address-inp']);
    $upi=mysqli_real_escape_string($conn,$_POST['upi-inp']);
    $class=mysqli_real_escape_string($conn,$_POST['class-inp']);
    $lang=mysqli_real_escape_string($conn,$_POST['lang-inp']);
    $username=mysqli_real_escape_string($conn,$_POST['username-inp']);
    $pwd=mysqli_real_escape_string($conn,$_POST['pwd-inp']);
    $profile_link=mysqli_real_escape_string($conn,$_POST['profile_link-inp']);

    if($name!=='' && $father!=='' && $mobile!=='' && $dob!=='' && $gender!=='' && $age!=='' && $aadhar!=='' && $email!=='' && $address!=='' && $upi!=='' && $class!=='' && $lang!=='')
    {
        $sql_query= "UPDATE registration SET name='" . $name . "',fathersname='" . $father . "',contactno='" . $mobile . "',dob='" . $dob . "',gender='" . $gender . "',age='".$age."',aadhar='" . $aadhar . "',email='" . $email . "',address='" . $address . "',upi='" . $upi . "',profilephoto='" . $img . "',class='" . $class . "',language='" . $lang . "',username='".$username."',password='".$pwd."',profileimg_link='".$profile_link."' WHERE id= '" . $id . "' ;";
        $result = mysqli_query($conn, $sql_query);
        if($result)
        {
            header('location:Appliedregistration.php');
        }
        else
        {
            echo "Record Not Updated";
        }
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SM Classes</title>

    <style>
        * {
            font-family: Georgia, 'Times New Roman', Times, serif;
            padding: 0px;
            margin: 0px;
        }

        #header {
            background-color: black;
            text-align: right;
            padding: 4px 0px;
        }

        #header>a {
            text-decoration: none;
            color: white;
            font-size: 15px;
            margin-right: 30px;
            padding: 5px;
        }

        #logo {
            height: 180px;
            display: flex;
            white-space: nowrap;
            justify-content: space-between;
            background-image: url("../../SM Classes/assets/logo/logo1.jpg")
        }

        .left-align {
            padding: 0px;
        }

        .right-align {
            margin-right: 100px;
        }

        .right-align>h1 {
            color: lightcoral;
            margin-top: 30px;
            font-size: 55px;
            font-weight: bold;
        }

        .right-align p {
            color: lightcoral;
            font-size: 25px;
        }

        #menubar {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(2, 59, 28, 1) 100%, rgba(0, 212, 255, 1) 100%);
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 212px;
            left: 0;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(2, 59, 28, 1) 100%, rgba(0, 212, 255, 1) 100%);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 50px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 18px;
            padding-left: 30px;
            color: #818181;
            display: block;
            transition: 0.3s;

        }

        .sidenav a:hover {
            color: #f1f1f1;
            border: 1px solid #818181;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            padding: 6px 12px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        #web-content {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(2, 59, 28, 1) 100%, rgba(0, 212, 255, 1) 100%);
            padding: 0px 225px;
            padding-right: 150px;
            padding-bottom: 20px;
        }

        #web-content>h1
        {
            color: #8C8C8C;
            text-align: center;
            padding-bottom: 10px;
        }

        #form-container
        {
            border: 1px solid #8C8C8C;
            border-radius: 20px;
            padding: 80px 10px;
            text-align: center;
            color: #8C8C8C;
        }

        #web-content>h1:hover,#form-container>h1:hover
        {
            color: white;
        }
        form {
            padding: 40px;
            text-align: center;
        }

        form input {
            display: block;
            width: 98%;
            font-size: 25px;
            color: #8C8C8C;
            text-align: center;
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(2,59,28,1) 100%, rgba(0,212,255,1) 100%); 
            padding: 10px 5px;
            padding: 8px;
            margin: 10px;
            border: 1px solid black;
        }

        form input:hover
        {
            border: 1px solid white;
            color: white;
        }
        form button {
            align-items: center;
            font-size: 24px;
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(2,59,28,1) 100%, rgba(0,212,255,1) 100%); 
            padding: 10px 5px;
            color: white;
            padding: 5px;
            margin: 10px;
            border: 1px solid black;

        }

        form button:hover
        {
            border: 1px solid white;
            color: white;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <section id="header">
        <a href="privacy.html">Privacy Policy</a>
        <a href="tnc.html">Terms and Conditions</a>
    </section>

    <section id="logo">
        <div class="left-align">
            <img src="../../SM Classes/assets/logo/logo2.webp" alt="Logo" height="180px" width="220px" />
        </div>

        <div class="right-align">
            <h1>
                <marquee>S.M. COACHING CLASSES</marquee>
            </h1>
            <marquee>
                <p>Learn and Explore Everything. The best way to Learn anytime.</p>
            </marquee>
        </div>
    </section>

    <section id="web-content" class="container-fluid">
        <h1>Learn Anywhere and Everytime by just single click. </h1>
        <div id="form-container" class="container-fluid">
            <h1>Register Yourself For Life time accessible Courses.</h1>
            <?php
                $sql_query = "select * from registration where id='" . $id . "';";
                $result = mysqli_query($conn, $sql_query);
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <form method="post" action="">

                <input type="text" id="name-inp" value="<?php echo $row['name']?>" name="name-inp" placeholder="Enter Your Name" required>
                <br>

                <input type="text" id="fathers-inp"  value="<?php echo $row['fathersname']?>" name="fathers-inp" placeholder="Enter Your Father's Name"required>
                <br>

                <input type="int" id="mobile-inp"  value="<?php echo $row['contactno']?>" name="mobile-inp" placeholder="Enter Your 10 digit Contact no."required>
                <br>

                <label>Date of Birth</label>
                <input type="date" id="dob-inp"  value="<?php echo $row['dob']?>" name="dob-inp"required>
                <br>

                
                <input type="text" id="gender-inp" name="gender-inp"  value="<?php echo $row['gender']?>" placeholder="Enter users gender"required>
                <br>

                <input type="text" id="age-inp" name="age-inp"  value="<?php echo $row['age']?>" placeholder="Enter Your Age"required>
                <br>


                <input type="int" id="aadhar-inp" name="aadhar-inp"  value="<?php echo $row['aadhar']?>" placeholder="Enter Your Aadhar No."required>
                <br>

                <input type="email" id="email-inp" name="email-inp"  value="<?php echo $row['email']?>" placeholder="Enter Your email Address"required>
                <br>

                <input type="address" id="address-inp" name="address-inp"  value="<?php echo $row['address']?>" placeholder="Enter Your Complete Address"required>
                <br>

                <input type="email" id="upi-inp" name="upi-inp" value="<?php echo $row['upi']?>"  placeholder="Enter Your UPI id which you use to Pay for this Course"required>
                <br>

                <input type="int" id="class-inp" value="<?php echo $row['class']?>"  name="class-inp" placeholder="Class"required>
                <br>

                <input type="text" id="lang-inp"  value="<?php echo $row['language']?>" name="lang-inp" placeholder="Enter Your Medium(English/Hindi)"required>
                <br>


                <input type="text" id="lang-inp"  value="<?php echo $row['username']?>" name="username-inp" placeholder="Given Username"required>
                <br>

                <input type="text" id="lang-inp"  value="<?php echo $row['password']?>" name="pwd-inp" placeholder="Given Password"required>
                <br>

                <input type="text" id="lang-inp"  value="<?php echo $row['profileimg_link']?>" name="profile_link-inp" placeholder="Profile Img Link"required>
                <br>

                <button type="submit" name="update" id="update">Update</button>
                <button type="cancel" ><a href="Appliedregistration.php" style="text-decoration:none;color:white">Cancel</a></button>


            </form>
            <?php 
                }
            ?>
        </div>
    </section>

    <section id="footer"></section>
</body>

</html>