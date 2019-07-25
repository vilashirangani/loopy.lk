<html>
<head>
    <title>
        Company Registration
    </title>
    <link rel="stylesheet" type="text/css" href="register.css">
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
<div class="nav">

    <h2>Loopy.lk</h2>

    <!-- Centered link -->
    <div class="image">
        <img src="Images/logo.gif" class="logoimg" >
    </div>

    <!-- Left-aligned links (default) -->
    <a href="main.php" class="home"><div> <img src="Images/home.png"> </div>Home</a>
    <a href="about.php" class="about"><div> <img src="Images/aboutus.png"> </div>About</a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
        <a href="Contactus.php" class="contact"><div> <img src="Images/contactus.png"> </div> Contact</a>
        <a href="loginmain.php" class="login"><div> <img src="Images/useriamge.png"> </div>Login</a>
        <a href="register.php" class="reg"><div> <img src="Images/Log%20out.png"> </div>Register</a>

    </div>

</div>

<div class="header" >
    <h1> Buisness Registration</h1>
    <p>Join With US......!!!!!!!!</p>
</div>

<form class="form" method="post" action="register.php " onsubmit=" return validateform()" enctype="multipart/form-data">
    <div class="input-group">
        <lable>User Name</lable>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <lable>Email</lable><br>
        <input type="text" name="email">
    </div>
    <div class="input-group">
        <lable>Password</lable><br>
        <input type="password" name="password" id="pass1">
    </div>
    <div class="input-group">
        <lable>Confirm Password</lable>
        <input type="password" name="password2" id="pass2">
    </div>
    <div class="input-group">
        <label>Categorey</label> <select name="category" class="admin_input">

            <option value="Agricultue">Agriculrure</option>
            <option value="Architecture">Archi</option>
            <option value="Angular">Angular</option>
            <option value="Bussiness">Bussiness</option>
            <option value="Batman">Batman</option>
            <option value="Bumblebee">Bublebee</option>
            <option value="Batista">Batista</option>
            <option value="Car Sales">Car Sales</option>
            <option value="Carpenter">Carpenter</option>
            <option value="Elephant">Elephant</option>
        </select>

    </div>


    <div class="input-group">
        <label>Location Keyword</label><select name="location_keyword" class="admin_input">
                
                <option value="Anuradapura">Anuradapura</option>
                <option value="Ampara">Ampara</option>
                <option value="Balangoda">Balangoda</option>
                <option value="Batapola">Batapola</option>
                <option value="Beruwala">Beruwala</option>
                <option value="Colombo">Colombo</option>
                <option value="Colombo 1">Colombo 1</option>
                <option value="Colombo 2">Colombo 2</option>
                <option value="Dambulla">Dambulla</option>
                <option value="Deniyaya">Deniyaya</option>
                <option value="Danthure">Danthure</option>
                <option value="Eheliyagoda">Eheliyagoda</option>
                <option value="Embilipitiya">Embilipitiya</option>
                <option value="Elpitiya">Elpitiya</option>
                <option value="Welimada">Welimada</option>
                <option value="Wellawaya">Wellawaya</option>
        </select>
    </div>

    <div class="input-group">
        <lable>Bussiness Name</lable>
        <input type="text" name="bussiness_name">
    </div>
    <div class="input-group">
        <lable>Address</lable><br>
        <input type="text" name="address">
        <div class="input-group">
            <lable>Telephone Numbers</lable>
            <input type="text" name="tel_no">
        </div>
        <div class="input-group">
            <lable>Mobile No</lable><br>
            <input type="text" name="mob_no">
        </div>
        <div class="input-group">
            <lable>Location Link</lable>
            <input placeholder="add the location link of the place of your business" type="text" name="location_link">
        </div>

        <div class="input-group">
                <lable>Input Image of Company Logo</lable>
                <!--<input type="hidden" name="size" value="1000000"> -->
                <div>
                    <input type="file" name="imagee" >
                </div>
            </div>

        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>


       
</form>

</div>

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
    $category=$_POST['category'];
    $location_keyword=$_POST['location_keyword'];
    $bussiness_name=$_POST['bussiness_name'];
    $address=$_POST['address'];
    $tel_no=$_POST['tel_no'];
    $mob_no=$_POST['mob_no'];
    $location_link=$_POST['location_link'];
    $image=$_FILES['imagee']['name'];

    $sql="INSERT INTO company VALUES ('$id','$username','$email','$password','$category','$location_keyword','$bussiness_name','$address','$tel_no','$mob_no','$location_link','$image')";

    $target="logos/..".$_FILES['imagee']['name'];

    move_uploaded_file($_FILES['imagee']['tmp_name'],$target);

    if($conn->query($sql) != TRUE){
        echo "error".$conn->error;
    }

}
?>


<footer>
    UCSC Group 3
</footer>









</body>
</html>