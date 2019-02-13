<?php
/**
 * Created by PhpStorm.
 * User: Hkerri
 * Date: 29/01/2019
 * Time: 15:26
 */



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Revive - update</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
    <link href="########" rel="stylesheet" type="text/css">
</head>
<body>
<!-- start bootstrap Nav -->
<nav class="navbar navbar-expand-md bg-light navbar-light">

    <!-- Brand -->
    <a class="navbar-brand" href="Index.php">Revive <i class="fas fa-recycle"></i></i></a> <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" data-target="#collapsibleNavbar" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button> <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav  ml-auto">

            <li class="nav -item">
                <a class="nav-link" href="welcome.php"><i class="fas fa-toolbox"></i>Back to Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php"><i class="fas fa-user-slash"></i>log out</a>
            </li>

        </ul>
    </div> <!-- end colapse -->
</nav> <!-- end nav -->
<hr> <!-- one line -->


<div style = "width:300px; border: solid 1px #333333; " align = "left">
<form action="collect.php" method="post" name="collect">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value=""></br>

           <label for="catagory">Catagory:</label>
           <input type="text" id="catagory" name="catagory" value=""></br>

          <label for="brand">Brand:</label>
           <input type="text" id="brand" name="brand" value=""></br>

           <label for="age">Age:</label>
           <input type="text" id="age" name="age" value=""></br>

        <input type="submit" name="submit" value="Add new product" />


    </form>


</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
</script>
</body>

</html>
