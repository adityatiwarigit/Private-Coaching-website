<?php

include 'dbconfig.php';

session_start();

if (isset($_GET['logout'])) {
    session_destroy();

    header('Location:index.php');
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
            background-image: url("../SM Classes/assets/logo/logo1.jpg")
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

        body {
            position: relative;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(2, 59, 28, 1) 100%, rgba(0, 212, 255, 1) 100%);
        }

        .sidenav {
            height: 100%;
            max-height: 1910px;
            width: 0;
            position: absolute;
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

        #web-content>h1 {
            color: #8C8C8C;
            text-align: center;
            padding-bottom: 10px;
        }

        #eight>h2 {
            color: #8C8C8C;
            text-align: center;
            padding: 70px 0px;
            padding-bottom: 10px;
        }

        #web-content>h1:hover,
        #eight>h2:hover {
            color: #f1f1f1;
        }

        #eight p {
            color: #8C8C8C;
        }

        #instruction {
            padding-top: 100px;
            padding-bottom: 200px;
        }

        #instruction h4 {
            color: #8C8C8C;
        }

        .rgstr {
            font-size: 20px;
            font-weight: bold;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(2, 59, 28, 1) 100%, rgba(0, 212, 255, 1) 100%);
            padding: 10px 5px;
        }

        .rgstr>a {
            text-decoration: none;
            color: white;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(2, 59, 28, 1) 100%, rgba(0, 212, 255, 1) 100%);
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <section id="header">
        <a href="privacy.html">Privacy Policy</a>
        <a href="tnc.html">Terms and Conditions</a>
    </section>

    <section id="logo">
        <div class="left-align">
            <img src="../SM Classes/assets/logo/logo2.webp" alt="Logo" height="180px" width="220px" />
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

    <section id="menubar">
        <?php if (!isset($_SESSION['username'])) {
        ?>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.php">Home</a>
                <a href="syllabus.php">Syllabus</a>
                <a href="8rth.php">8rth Class Session</a>
                <a href="9th.php">9th Class Session</a>
                <a href="10th.php">10th Class session</a>
                <a href="11th.php">11th Class session</a>
                <a href="12th.php">12th Class session</a>
                <a href="about.php">About us!</a>
                <a href="contact.php">Contact us!</a>
                <a href="login.php">Login</a>
            </div>

            <span style="font-size:40px;cursor:pointer;padding-left:20px;font-weight:bold;color:antiquewhite" onclick="openNav()">&#9776;</span>

            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "220px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>
        <?php
        } else {
        ?>


            <div id="mySidenav" class="sidenav" style="font-size:16px;">

                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="dashboard.php">My Dashboard</a>
                <a href="../SM Classes/lectures/lecture1.php">Lecture 1</a>
                <a href="/SM Classes/lectures/lecture2.php">Lecture 2</a>
                <a href="/SM Classes/lectures/lecture3.php">Lecture 3</a>
                <a href="/SM Classes/lectures/lecture4.php">Lecture 4</a>
                <a href="/SM Classes/lectures/lecture5.php">Lecture 5</a>
                <a href="/SM Classes/lectures/lecture6.php">Lecture 6</a>
                <a href="/SM Classes/lectures/lecture7.php">Lecture 7</a>
                <a href="/SM Classes/lectures/lecture8.php">Lecture 8</a>
                <a href="/SM Classes/lectures/lecture9.php">Lecture 9</a>
                <a href="/SM Classes/lectures/lecture10.php">Lecture 10</a>
                <a href="12th.php?logout=true">Log Out</a>
            </div>

            <span style="font-size:40px;cursor:pointer;padding-left:20px;font-weight:bold;color:antiquewhite" onclick="openNav()">&#9776;</span>

            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "220px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>

        <?php
        }
        ?>
    </section>


    <section id="web-content" class="container-fluid">
        <h1>Learn Anywhere and Everytime by just single click. </h1>
        <div id="eight" class="container-fluid">
            <?php
            $sql_query = "select id,class,video_link,Discription,language from democlasses where class = '12';";
            $result = mysqli_query($conn, $sql_query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <h2>This the Demo Session For Class 12th <?php echo $row['language'] ?> Medium Students.</h2>
                <div>
                    <video width="1100" height="400" controls>
                        <source src="../SM Classes/assets/demo video/8rth class/english/<?php echo $row['video_link'] ?>" alt="<?php echo $row['id'] ?>">
                    </video>
                </div>
                <p>Class: <?php echo $row['class'] ?><br>Discription:<?php echo $row['Discription'] ?></p>
                <p>Here You Got 1 free Demo session for 1 hour.For more you Have to login By apply for registration.</p>
            <?php
            }
            ?>
        </div>
        <div id="instruction" class="container-fluid">
            <div style="text-align:center;padding-bottom:50px;">
                <button class="rgstr"><a href="registration.php">Apply Registration</a></button>
            </div>
            <h4>Before Registering yourself you may pay Rs 200/- and submit the Screenshot on registration form.</h4>
            <h4>You will get username and Password within 1 hour.</h4>
        </div>
    </section>

    <section id="footer" style="background-color:black;height:100px">
        <div class="footer-down" style="height:55px">
            <div class="footer-line">
                <hr>
            </div>
            <div class="footer-copyright">
                © 2022 SM Coaching Classes | All rights reserved.
            </div>
        </div>
    </section>
</body>

</html>