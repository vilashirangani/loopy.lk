<?php
    $servername ="localhost";
    $username= "root";
    $password="";
    $dbname="loopy.lk";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        die("Connection failed" .$conn->connect_error);
    }

    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];

        $sql2= "DELETE FROM company WHERE ID='$id';";

        if ($conn->query($sql2) == TRUE){
            header('location:..\ManageDetails.php');
        }
    }
?>