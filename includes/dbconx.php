<?php
/**
 * Created by PhpStorm.
 * User: Hkerri
 * Date: 21/01/2019
 * Time: 15:41
 */

$conn=mysqli_connect("localhost","heather","kerrigan","revive");
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . header("location: error.php"));
}