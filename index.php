<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>

<DOCTYPE!>
    <html>
        <title>User</title>
        <head>
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
            <link rel="stylesheet" href="user.css">
            <style>
                table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width: 100%;
                }
                
                td, th {
                  border: 1px solid #dddddd;
                  text-align: left;
                  padding: 8px;
                }
                
                tr:nth-child(even) {
                  background-color: #dddddd;
                }
                </style>
        </head>
        <body>

            <input type="checkbox" id="menu">

            <nav>
                <label>Blue-Web</label>

                <ul>
                    <label for="menu" class="menu-bar">Blue-Web
                    <a href="logout.php">Logout</a>
                </label>
                </ul>
            </nav>
            <class class="side-menu">
                <center>
                    <img src="profile.jpeg">
                    <br><br>

                    <h1><?php echo $row["name"]; ?></h1>
                </center>
                <br>
<a href="blueweb.html"><i class="uil uil-label"></i><span>Home</span></a>
                <a href="poster.php"><i class="uil uil-user-circle"></i><span>Workers</span></a>
                <a href="messages.html"><i class="uil uil-envelopes"></i><span>Messages</span></a>
                <a href="record.html"><i class="uil uil-label"></i><span>Records</span></a>
                <a href="about.html"><i class="uil uil-mobile-android"></i><span>Phone number</span></a>
                <a href="logout.php"><i class="uil uil-setting"></i><span>Log-out</span></a>
         
            </class>
           
        </body>
    </html>
