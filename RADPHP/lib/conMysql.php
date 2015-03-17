<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connection Established</title>
    </head>
    <body>
        <?php
        // Create connection
        $con = mysqli_connect("localhost", "root", "root", "acc_abcd");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else{
            mysqli_set_charset($con, "utf8");
            //echo "<p><a href='../index.php'>Connection Done ...</a></p>";
        }
        ?>
    </body>
</html>
