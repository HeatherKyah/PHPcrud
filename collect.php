<?php
/**
 * Created by PhpStorm.
 * User: Hkerri
 * Date: 04/02/2019
 * Time: 13:22
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


require('includes/dbconx.php');

    if(isset($_POST['submit'])){
    if (!empty($_POST['name'])) {


        $name = $_POST['name'];
        $catagory = $_POST['catagory'];
        $brand = $_POST['brand'];
        $age = $_POST['age'];
        $sql = "INSERT INTO products(name, catogory, brand, Age)VALUES (?,?,?,?)";


        $stmt = $conn->prepare($sql); //prep sql statment for execution

        $stmt->bind_param("ssss", $name, $catagory, $brand, $age);
        $stmt->execute();

        header("location: index.php");

        $conn->close();
        die('Insert all fields');

    }else {

        //for frield contains no value
        die ('No username included!'); //kill database connection

    }
    }