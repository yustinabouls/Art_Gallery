<?php

session_start();

include("connections.php");
include("functions.php");

$u_dat = check_log($cxn);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MenuBar.css">
</head>
<body>
<div id="home"></home>
    <div class="header">
        <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
        <a href="index.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
        <a href="TicketBooth.php">Ticket Booth</a>
        <a href="index.php">Collections</a>
        <a href="index.php">Event Schedule</a>
        <a href="calendar_index.php">Event Calendar</a>
        <a href="index.php">Locations</a>
        <?php
        if ($u_dat)
        {
            echo '<a href="moduser.php" style="margin: auto;">Account Details</a>';
            echo '<a href="logout.php" style="margin: auto;">Sign Out of ' .$u_dat['FN'] . '\'s Account</a>';
        }
        else
        {
            echo '<a href="login.php" style="margin: auto;">Sign In</a>';
            echo '<button type="button" style="text-align:center;"><a href="newuser.php">Sign Up</a></button>';
        }
        ?>
        </div>
        <!-- Use any element to open the sidenav -->
        <span onclick="openNav()"><h2 style="font-size:75px; padding-left: 15px;">≡</h2></span></div>
        </div>
        <script>
            /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            }
            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            }
         </script>
 
</body>
</html>