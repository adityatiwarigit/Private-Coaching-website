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

        body {
            position: relative;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(2, 59, 28, 1) 100%, rgba(0, 212, 255, 1) 100%);
        }

        .sidenav {
            height: auto;
            width: 0;
            position: absolute;
            max-height: 810px;
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
            font-size: 20px;
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

    <section id="menubar">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="adminhome.php">Home</a>
            <a href="Appliedregistration.php">Manage Registration</a>
            <a href="managesyllabus.php">Manage Syllabus</a>
            <a href="AdminDemoClasses.php">Manage Demo Classes</a>
            <a href="AdminLectures.php">Manage Lectures</a>
            <a href="AdminStudentQuery.php">Student Doubts</a>
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
    </section>

    <section id="web-content" class="container-fluid">
        <h1>Admin Panel</h1>
        <div class="container-fluid">
            <table class="table"style="color:white;">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">username</th>
                        <th scope="col">Lecture</th>
                        <th scope="col">Query</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <?php
                $sql_query = "select * from studentquery;";
                $result = mysqli_query($conn, $sql_query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['lecture'] ?></td>
                            <td><?php echo $row['query'] ?></td>
                            <td><?php echo $row['answer'] ?></td>
                            <td><a href="" class="btn-btn-info">Edit</a></td>
                            <td><a href="" class="btn-btn-Danger">Delete</a></td>
                        </tr>
                    </tbody>

                <?php
                }
                ?>
            </table>
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