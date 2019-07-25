<?php
$servername ="localhost";
$username= "root";
$password="";
$dbname="loopy.lk";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection failed" .$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

}

$sql= "SELECT * FROM admin WHERE username= '$user'";

$result = $conn->query($sql);

if($result->num_rows> 0){
    $row=$result->fetch_assoc();

    if($row['username']==$user)

        if($row['password']==$pass){
            session_start();

            $_SESSION['uname']= $row['name'];
            header('location:..\..\Admin page\AdminPage.php');
        }else{
            echo "Password incorrect";
        }
}else {
    echo "Username incorrect";

}


?>