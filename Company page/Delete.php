<?php
    session_start();
    $servername ="localhost";
    $username= "root";
    $password="";
    $dbname="loopy.lk";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        die("Connection failed" .$conn->connect_error);
    }

    if (isset($_SESSION['id'])){

        $id = $_SESSION['id'];
        $sql2= "DELETE FROM company WHERE ID='$id';";

        if ($conn->query($sql2) == TRUE){
            echo "Delete";
            session_destroy();
            //header('location:..\ManageDetails.php'); //home page ekata link karanna
        }
    }
?>