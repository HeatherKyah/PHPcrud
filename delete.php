<?php
/**
 * Created by PhpStorm.
 * User: Hkerri
 * Date: 22/01/2019
 * Time: 13:09
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('includes/dbconx.php');


if(isset($_GET['id'])){

    $myID = $_GET['id'];

    $sql = "DELETE FROM products  WHERE id = ?";

    $stmt = $conn->prepare($sql); //prepare the sql statment for execution

    $stmt->bind_param("s", $myID); //binds vars to prepared statment

    $stmt->execute(); //executes the prepared query


    header("Location: edit.php");


    ?> <a href="edit.php">Retun</a>

    <?php

}else { echo "<p><a href='includes/error.php'></a></p>";}


?>
