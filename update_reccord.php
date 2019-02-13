<?php
/**
 * Created by PhpStorm.
 * User: Hkerri
 * Date: 03/02/2019
 * Time: 17:58
 */

require('includes/dbconx.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);


if(isset($_POST['id'])){
    $recordID = $_POST['id'];
    echo $recordID;

    $name = $_POST['name'];
    $catagory = $_POST['catagory'];
    $brand = $_POST['brand'];
    $age = $_POST['age'];

    $stmt = $conn->prepare("UPDATE products SET name = ?, catogory = ?, brand = ?, Age = ? WHERE ID=?");

    $stmt->bind_param("ssssi", $name, $catagory, $brand, $age, $recordID);

    $stmt->execute();
    $stmt->close();
    $conn->close();

    header('Location: edit.php' );
}

else{
    header('Location: includes/error.php');
}

?>
