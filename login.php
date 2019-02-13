<?php
include("includes/config.php");

session_start();
$_SESSION['username'] = 'myusername';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT username FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['login_user'] = $myusername;

        header("location: welcome.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}

include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
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
    <a class="navbar-brand" href="Index.php">Revive <i class="fas fa-recycle"></i>></i></a> <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" data-target="#collapsibleNavbar" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button> <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        </ul>
    </div> <!-- end colapse -->
</nav> <!-- end nav -->
<hr> <!-- one line -->


<div align = "center">
    <div style = "width:300px; border: solid 1px #333333; " align = "left">
        <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
        <div style = "margin:30px">

            <form action = "" method = "post">
                <label>UserName  :</label><input type = "text" name = "username" id="username" class = "box"/><br /><br />
                <label>Password  :</label><input type = "password" name = "password" id="password" class = "box" /><br/><br />
                <input type = "submit" value = " Submit "/><br />
            </form>

            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

        </div>

    </div>

</div>

</body>
</html>