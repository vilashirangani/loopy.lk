<html>
<head>
    <?php session_start() ?>
    <title>
        Delete Admin
    </title>
    <link rel="stylesheet" type="text/css" href="DeleteAdmin.css">
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
    <a href="../../../about.php" class="about"><div> <img src="../../../Images/aboutus.png"> </div>About</a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
        <a href="../../../Contactus.php" class="contact"><div> <img src="../../../Images/contactus.png"> </div> Contact</a>
        <a href="../../AdminPage.php" class="login"><div> <img src="../../../Images/useriamge.png"> </div> <?php echo $_SESSION['uname']?></a>
        <a href="../../../Logout.php" class="reg"><div> <img src="../../../Images/Log%20out.png"> </div>LogOut</a>

    </div>

</div>

<div class="header" >
    <h1> Welcome <?php echo $_SESSION['uname']?> ....!!!</h1>
    <h1 style="color: lightskyblue"> Remove Admin</h1>
</div>

    <br>


<?php
$sql= "SELECT * FROM admin;";
$result= $conn->query($sql);
echo "<table align='center' class='datatable'>
          <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Telephone number</th>
            <th>Mobile number</th>
            <th>age</th>
          </tr>      ";
if ($result->num_rows>0) {

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                    
                    <td>$row[name]</td>
                    <td>$row[email]</td> 
                    <td>$row[address]</td>
                    <td>$row[tel_no]</td>
                    <td>$row[mob_no]</td>
                    <td>$row[age]</td>
                    <td><button type='button'><a href='DeleteAdminrow.php?id=$row[id]'>Delete</a></button> </td>
                 </tr>";
    }
    echo "</table>";
}
?>



<footer>
    Contact US
</footer>








</body>
</html>