<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loopy.lk";


$conn= new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
function renderform($id,$buisness_name,$email,$category, $location_keyword,$address, $tel_no, $mob_no, $location_link,$conn){



?>

<html>
<head>
    <?php
    session_start();
    ob_start();
    ?>
    <title>
        Admin page
    </title>
    <link rel="stylesheet" type="text/css" href="EditData.css">

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
    <a href="../../../about.php" class="about"><div> <img src="../../../Images/aboutus.png"> </div>About</a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
        <a href="../../../Contactus.php" class="contact"><div> <img src="../../../Images/contactus.png"> </div> Contact</a>
        <a href="../../../loginmain.php" class="login"><div> <img src="../../../Images/useriamge.png"> </div> <?php echo $_SESSION['uname']?></a>
        <a href="../../../Logout.php" class="reg"><div> <img src="../../../Images/Log%20out.png"> </div>LogOut</a>

    </div>

</div>

<div class="header1" >
    <h1> Welcome <?php echo $_SESSION['uname']?> ....!!!</h1>
    <h1 style="color: lightskyblue"> Register new Admin</h1>
</div>

    <br>
<form class="form" method="POST">
    <div class="input-group">
        <lable>Bussiness Name</lable>
        <input type="text" name="bussiness_name" placeholder="<?php echo $buisness_name ?>">
    </div>
    <div class="input-group">
        <lable>Email</lable>
        <br>
        <input type="text" name="email" placeholder="<?php echo $email ?>">
    </div>

    <div class="input-group">
        <label>Categorey</label> <select name="category" class="admin_input" placeholder="<?php echo $category ?>">
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
        <label>Location Keyword</label><select name="location_keyword" class="admin_input" placeholder="<?php echo $location_keyword ?>">
            <option value="Agricultue">Anuradapura</option>
            <option value="Architecture">Ampara</option>
            <option value="Angular">Balangoda</option>
            <option value="Bussiness">Batapola</option>
            <option value="Batman">Beruwala</option>
            <option value="Bumblebee">Colombo</option>
            <option value="Batista">Colombo 1</option>
            <option value="Car Sales">Colombo 2</option>
            <option value="Carpenter">Dambulla</option>
            <option value="Elephant">Deniyaya</option>
            <option value="Batman">Danthure</option>
            <option value="Bumblebee">Eheliyagoda</option>
            <option value="Batista">Embilipitiya</option>
            <option value="Car Sales">Elpitiya</option>
            <option value="Carpenter">Welimada</option>
            <option value="Elephant">Wellawaya</option>
        </select>
    </div>


    <div class="input-group">
        <lable>Address</lable>
        <input type="text" name="address" placeholder="<?php echo $address ?>">
        <div class="input-group">
            <lable>Telephone Numbers</lable>
            <input type="text" name="tel_no" placeholder="<?php echo $tel_no ?>">
        </div>
        <div class="input-group">
            <lable>Mobile Number</lable>
            <input type="text" name="mob_no" placeholder="<?php echo $mob_no ?>">
        </div>
        <div class="input-group">
            <lable>Location Link</lable>
            <input type="text" name="location_link" placeholder="<?php echo $location_link ?>">
        </div>

        <div class="input-group">
            <button type="submit" name="edit" class="btn">Save</button>
        </div>
    </div>

</form>

<?php


if(isset($_POST['edit'])){
    if(is_numeric($_GET["id"])){
        $id= $_GET['id'];
        $buisness_name=$_POST['bussiness_name'];
        $email= $_POST['email'];
        $category= $_POST['category'];
        $location_keyword=$_POST['location_keyword'];
        $address=$_POST['address'];
        $tel_no=$_POST['tel_no'];
        $mob_no=$_POST['mob_no'];
        $location_link=$_POST['location_link'];

        if($id !='' || $buisness_name!='' || $email !="" || $category !="" || $location_keyword !="" || $address !="" || $tel_no !="" || $mob_no !="" || $location_link !="" ){
            $sql= "UPDATE company SET bussiness_name='$buisness_name', email='$email', categorey='$category', location_keyword='$location_keyword', address='$address', tel_no='$tel_no', mob_no='$mob_no', location_link='$location_link' where id=$id";
            if($conn->query($sql) == TRUE){
                header('location:..\ManageDetails.php');
                ob_end_flush();
            }else{
                echo "Error" . $conn->error;
            }
        }
    }
}
}

if(isset($_GET['id'])&& is_numeric($_GET['id'])&& $_GET['id']>0) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM company WHERE id=$id;";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        while ($row = $result->fetch_assoc()) {
            $buisness_name = $row['bussiness_name'];
            $email = $row['email'];
            $category = $row['categorey'];
            $location_keyword = $row['location_keyword'];
            $address = $row['address'];
            $tel_no = $row['tel_no'];
            $mob_no = $row['mob_no'];
            $location_link = $row['location_link'];
        }

        renderform($id,$buisness_name,$email,$category, $location_keyword,$address, $tel_no, $mob_no, $location_link, $conn);

    }else{
        echo 'error';
    }
}
?>


<footer>
    Contact US
</footer>








</body>
</html>