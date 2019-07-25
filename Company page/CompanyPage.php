<html>
<head>
    <?php session_start() ?>
    <title>
        Company Page
    </title>
    <link rel="stylesheet" type="text/css" href="CompanyPage.css">
</head>

<body>
<!-- Top navigation -->
<div class="nav">

    <h2>Loopy.lk</h2>

    <!-- Centered link -->
    <div class="image">
        <img src="../Images/logo.gif" class="logoimg" >
    </div>

    <!-- Left-aligned links (default) -->
    <a href="../main.php" class="home"><div> <img src="../Images/home.png"> </div>Home</a>
    <a href="../about.php" class="about"><div> <img src="../Images/aboutus.png"> </div>About</a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
        <a href="../Contactus.php" class="contact"><div> <img src="../Images/contactus.png"> </div> Contact</a>
        <a href="#" class="login"><?php echo"<div> <img  src='logos/..".$_SESSION['image']."' ></div> ";  ?> <?php echo $_SESSION['uname']?>
        <!--<a href="#" class="login"><div> <img src="../Images/useriamge.png"> </div> <?php echo $_SESSION['uname']?></a>-->
        <a href="../Logout.php" class="reg"><div> <img src="../Images/Log%20out.png"> </div>LogOut</a>

    </div>

</div>

<div class="header" >
    <h1> Welcome <?php echo $_SESSION['uname']?> ....!!!</h1>
    <p>This is only for Admin of this system and Users that have registered in our system</p>
</div>

<br>
<center>
    <div class="row">
        <div class="column">
            <h2>Edit My Details</h2>


            <div class="container">
                <img src="../Images/Edit.png"  class="image" style="width:80%">
                <div class="middle">
                    <div class="text"><a href="Edit%20Company%20Details/EditCompanyDetails.php">Edit Details</a></div>
                </div>
            </div>
        </div>
        <div class="column">
            <h2>Deactivate</h2>


            <div class="container">
                <img src="../Images/deactivate.png"  class="image" style="width:80%">
                <div class="middle">
                    <div class="text"><a href="Delete.php">Deactivate</a></div>
                </div>
            </div>
        </div>

    </div> </center>

<footer>
    Contact US
</footer>








</body>
</html>