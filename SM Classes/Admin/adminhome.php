<?php
include '../dbconfig.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SM Classes</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


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

        #web-content {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(2, 59, 28, 1) 100%, rgba(0, 212, 255, 1) 100%);
            padding: 87px 225px;
            padding-right: 150px;
            white-space: nowrap;
        }

        .chng-pwd {
            font-size: 20px;
            font-weight: bold;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(2, 59, 28, 1) 100%, rgba(0, 212, 255, 1) 100%);
            padding: 5px 20px;
            margin: 10px 15px;
        }

        .chng-pwd>a {
            text-decoration: none;
            color: white;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(2, 59, 28, 1) 100%, rgba(0, 212, 255, 1) 100%);
        }
        
        .chng-pwd>a:hover
        {
            color: blue;
        }
        .chng-pwd:hover
        {
            border:5px solid white;
        }

        #footer-content {

            display: flex;
            background-color: black;
            color: white;
            width: 100%;
            height: 10px;
            justify-content: center;
            align-items: center;
        }

        .footer-down {
            background-color: black;
        }

        .footer-line {
            background-color: black;
            color: white;
        }

        .footer-copyright {
            display: flex;
            flex-direction: column;
            font-weight: 400;
            font-size: 14px;
            margin-top: 15px;
            text-align: center;
            letter-spacing: .05em;
            background-color: black;
            color: white;
        }
    </style>


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
        <h1 style="text-align: center;padding-bottom:50px;font-size:100px;">Admin Panel</h1>
        <div class="conatainer-fluid">
            <button class="chng-pwd"><a href="Appliedregistration.php"> Show Registration</a></button>
            <button class="chng-pwd"><a href="AdminDemoClasses.php">Manage Demo classes</a></button>
            <button class="chng-pwd"><a href="AdminLectures.php">Manage Lectures</a></button>
            <button class="chng-pwd"><a href="AdminStudentQuery.php">Reply Student Doubts</a></button>
        </div>



    </section>


    <section id="footer" style="background-color:black;height:100px">
        <div class="footer-down" style="height:55px">
            <div class="footer-line">
                <hr style="margin-top:0px;">
            </div>
            <div class="footer-copyright">
                © 2022 SM Coaching Classes | All rights reserved.
            </div>
        </div>
    </section>
</body>

</html>