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
    <link href="########" rel="stylesheet" type="text/css">
</head>
<body>
<!-- start bootstrap Nav -->
<nav class="navbar navbar-expand-md bg-light navbar-light">

    <!-- Brand -->
    <a class="navbar-brand" href="Index.php">Revive <i class="fas fa-recycle"></i></i></a> <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" data-target="#collapsibleNavbar" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button> <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="far fa-user"></i>log on</a>
            </li>

        </ul>
    </div> <!-- end colapse -->
</nav> <!-- end nav -->
<hr> <!-- one line -->



<?php
	$search = "%".$_POST['search']."%";



	 if($stmt = $conn->prepare("SELECT name FROM products WHERE name LIKE ? OR catogory LIKE ?")) {
         $stmt->bind_param('ss', $search,$search);

// Execute the Statement
         $stmt->execute();
         // Bind Variables to Prepared Statement
         $stmt->bind_result($search);


         while ($stmt->fetch()) {
             // Because $username and $password are passed by reference, their value
             // changes on every iteration to reflect the current row
             echo $search . "</br>";


         }

     }
   $stmt->close();




?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
</script>
</body>
</html>