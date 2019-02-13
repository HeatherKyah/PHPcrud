<?php
/**
 * Created by PhpStorm.
 * User: Hkerri
 * Date: 29/01/2019
 * Time: 15:26
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
require('includes/dbconx.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Revive - Home</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- start bootstrap Nav -->
<nav class="navbar navbar-expand-md bg-light navbar-light">

    <!-- Brand -->
    <a class="navbar-brand" href="Index.php">Revive <i class="fas fa-recycle"></i></i></a> <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" data-target="#collapsibleNavbar" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button> <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav  ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="far fa-user"></i>log on</a>
            </li>

        </ul>
    </div> <!-- end colapse -->
</nav> <!-- end nav -->
<hr> <!-- one line -->



<table>
    <th>ID</th><th>Name</th><th>Catagory</th><th>Brand</th><th>Age</th>

    <form action="search.php" method="POST">
        <input type="text" id="search" name="search">

        <input type="submit" name="submit" value="Search" />
    </form>


    <?php

    if($stmt = $conn->prepare("SELECT ID, name, catogory, brand, Age FROM products"))
    {
        $stmt->bind_result($id, $name, $catagory, $brand, $age);
        $stmt->execute();

        while ($stmt->fetch()) {

            //becasue $username and $password are passed by refrence,
            //their value changes on every iteration to reflect current row

            echo "<tr><td>".$id."</td>".
                "<td>".$name. "</td>".
                "<td>".$catagory. "</td>".
                "<td>".$brand."</td>".
                "<td>".$age."</td>";

                " </tr> ";



        }
        $stmt->close();
    }
    else{
        echo "no data returned";
    }
    ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
</script>
</body>
</html>