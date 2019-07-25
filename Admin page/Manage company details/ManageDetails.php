<html>
<head>
    <?php session_start() ?>
    <title>
        Admin page
    </title>
    <link rel="stylesheet" type="text/css" href="ManageDetails.css">
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
        <img src="../../Images/logo.gif" class="logoimg" >
    </div>

    <!-- Left-aligned links (default) -->
    <a href="../../main.php" class="home"><div> <img src="../../Images/home.png"> </div>Home</a>
    <a href="../../about.php" class="about"><div> <img src="../../Images/aboutus.png"> </div>About</a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
        <a href="../../Contactus.php" class="contact"><div> <img src="../../Images/contactus.png"> </div> Contact</a>
        <a href="../../loginmain.php" class="login"><div> <img src="../../Images/useriamge.png"> </div> <?php echo $_SESSION['uname']?></a>
        <a href="../../Logout.php" class="reg"><div> <img src="../../Images/Log%20out.png"> </div>LogOut</a>

    </div>

</div>

<div class="header" >
    <h1> Welcome <?php echo $_SESSION['uname']?> ....!!!</h1>
    <h1 style="color: lightskyblue"> Manage Company Details</h1>
</div>

    <br>

<?php

$sql= "SELECT * FROM company;";
$result= $conn->query($sql);
echo "<table  align='center' class='datatable'>
          <tr>
            <th>Id</th>
            <th>Buisness Name</th>
            <th>Email</th>
            <th>Category</th>
            <th>Location Keyword</th>
            <th>Address</th>
            <th>Telephone number</th>
            <th>Mobile number</th>
            <th>Location Link</th>
          </tr>      ";
if ($result->num_rows>0) {

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[bussiness_name]</td>
                    <td>$row[email]</td> 
                    <td>$row[categorey]</td>
                    <td>$row[location_keyword]</td> 
                    <td>$row[address]</td>
                    <td>$row[tel_no]</td>
                    <td>$row[mob_no]</td>
                    <td>$row[location_link]</td>
                    <td><button type='button'><a href='Edit/EditData.php? id=$row[id]'>Edit</a> </button> </td>
                    <td><button type='button'><a href='Edit/Delete.php?id=$row[id]'>Delete</a></button> </td>
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