<html>
<head>
    <?php session_start() ?>
    <title>
        Admin page
    </title>
    <link rel="stylesheet" type="text/css" href="AddAdmin.css">
    <?php
    $servername ="localhost";
    $username= "root";
    $password="";
    $dbname="loopy.lk";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        die("Connection failed" .$conn->connect_error);
    }


    ?>
</head>

<body>
<!-- Top navigation -->
<div class="nav">

    <h2>Loopy.lk</h2>

    <!-- Centered link -->
    <div class="image">
        <img src="../../../Images/logo.gif" class="logoimg" >
    </div>

    <!-- Left-aligned links (default) -->
    <a href="../../../main.php" class="home"><div> <img src="../../../Images/home.png"> </div>Home</a>
    <a href="../../../about.php" class="about"><div> <img src="../../Images/aboutus.png"> </div>About</a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
        <a href="../../../Contactus.php" class="contact"><div> <img src="../../../Images/contactus.png"> </div> Contact</a>
        <a href="../../AdminPage.php" class="login"><div> <img src="../../../Images/useriamge.png"> </div> <?php echo $_SESSION['uname']?></a>
        <a href="../../../Logout.php" class="reg"><div> <img src="../../../Images/Log%20out.png"> </div>LogOut</a>

    </div>

</div>

<div class="header" >
    <h1> Welcome <?php echo $_SESSION['uname']?> ....!!!</h1>
    <h1 style="color: lightskyblue"> Register new Admin</h1>
</div>

    <br>
<form class="form" method="post" onsubmit=" return validateform()">



<div class="input-group">
    <lable>User Name</lable>
    <input type="text" name="username">
</div>
<div class="input-group">
    <lable>Email</lable><br>
    <input type="text" name="email">
</div>
<div class="input-group">
    <lable>Password</lable>
    <input type="password" name="password" id="pass1">
</div>
<div class="input-group">
    <lable>Confirm Password</lable>
    <input type="password" name="password_2" id="pass2">
</div>


<div class="input-group">
    <lable>Admin Name</lable>
    <input type="text" name="name">
</div>
<div class="input-group">
    <lable>Address</lable>
    <input type="text" name="address"></div>
<div class="input-group">
    <lable>Telephone Numbers</lable>
    <input type="text" name="tel_no">
</div>
<div class="input-group">
    <lable>Mobile Numbers</lable>
    <input type="text" name="mob_no">
</div>
<div class="input-group">
    <lable> Admin Age</lable>
    <input type="text" name="age">
</div>

<div class="input-group">
    <button type="submit" name="register" class="btn">Register</button>
</div>

</form>

<script>
    function validateform() {
        var x= document.getElementById('pass1').value;
        var y = document.getElementById('pass2').value;
        if(x != y){
            alert("Paswords does not match");
            return false;
        }else{
            return true;
        }

    }
</script>

<?php
if (isset($_POST['register'])){
    $id ="";
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $tel_no=$_POST['tel_no'];
    $mob_no=$_POST['mob_no'];
    $age=$_POST['age'];

    $sql="INSERT INTO admin VALUES ('$id','$username','$email','$password','$name','$address','$tel_no','$mob_no','$age')";

    if($conn->query($sql) != TRUE){
        echo "error".$conn->error;
    }

}
?>


<footer>
    Contact US
</footer>








</body>
</html>