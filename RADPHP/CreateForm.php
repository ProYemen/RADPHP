<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Form </title>
    </head>
    <body>
        <?php
        echo "<iframe>";
        require './lib/conMysql.php';
        echo "</iframe>";
        $result = mysqli_query($con, "SHOW TABLES;");
        echo "<form method='post' action=''>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<p><a href='#'>Create " . $row[0] . " Form </a></p><p><label> "
            . "Name Form :</label><input type='text' name='.$row[0].' required />"
            . "<input type='checkbox'  name ='.$row[0].' />"
            . "</p>";
        }
        echo "<input type='submit'  value ='Create' name ='cform' />"
                . "</form>";
        mysqli_close($con);
        ?>
    </body>
</html>
