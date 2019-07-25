<html>
    <head>
        <link rel="stylesheet" href="search.css" type="text/css">
    </head>
    <body>
        <div class="navi">

  <!-- Centered link -->
  <div class="image">
    <img src="logo.gif" style="width:8px height:8px">
  </div>
  
  <!-- Left-aligned links (default) -->
  <a href="main.php" class="home">Home</a>
  <a href="about.php" class="about">About</a>
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="contact.php" class="contact">Contact</a>
    <a href="login/loginmain.php" class="login">Login</a>
  </div>
</div>

		<div class="header">
			
		<center><form method="POST" action="search.php" id="searchForm" class="form">
    <div class="input-group">
         <select name="categorey" class="admin_input">
          <option value = 0 selected placeholder="Location"> None(Category)</option>
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

    <div class="input-group">
        <select name="locationk" class="admin_input">
        <option value = 0 selected placeholder="Location"> None(Location)</option>
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
      



        
            <input type="text" id="searchBox" name="search" placeholder="search name...">
         <br><br></div><div>
            <input type="submit" name="submit" value="search" class="btn">
        </div></div>

        </form>
    </center>

  </div>

    <div class="resultdiv">
    	<h2>Your Search Results</h2><hr>

        <?php

        	$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "loopy.lk";

			$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            // 3. use returned data (if any)

      
        	if(isset($_POST['submit'])){
            
    		
    		$cleanSearch = $_POST['search'];
    		
        	
        	$real_search ="%".$cleanSearch."%";
          
        	$locationk = $_POST["locationk"];
          
        	$categorey=$_POST["categorey"];
        	//echo $locationk;

        	

			if ($locationk == '0' && $categorey == "0")
			{
				$sql = "SELECT bussiness_name,email, address, tel_no,mob_no,image, location_link,categorey FROM company WHERE bussiness_name LIKE '$real_search'";
			
			}
			elseif($categorey == '0'){
				$sql = "SELECT bussiness_name,email, address, tel_no,mob_no,image, location_link ,categorey FROM company WHERE (bussiness_name LIKE '$real_search' and location_keyword LIKE '$locationk')";
			}
			elseif ($locationk == '0') {
				$sql = "SELECT bussiness_name,email, address, tel_no,mob_no,image, location_link,categorey FROM company WHERE (bussiness_name LIKE '$real_search' and categorey LIKE '$categorey')";
			}
			else{
				//echo"no results to found";
				$sql = "SELECT bussiness_name,email, address, tel_no,mob_no,image, location_link,categorey FROM company WHERE (bussiness_name LIKE '$real_search' and location_keyword LIKE '$locationk' and categorey LIKE '$categorey')";

			}
      //echo"$sql";

			/*echo "<h1><center>No Results To Found</center></h1>";*/	
   			 $result=mysqli_query($connection,$sql);

   			 if($real_search==""){
   			 	echo"No results found";
   			 }
   			 else{
            	while($row = mysqli_fetch_assoc($result)) {



                // output data from each row
                echo"<img class='comp_img' src='logos/..".$row['image']."' "; 
                echo "<center>";
                
                echo"<center><h2 style='color:#006080' 'text-align:center'>".$row['bussiness_name']."</h2>";

                

                
                echo"<h4><span style='color:#4d94ff' 'text-align:center'>Category  :  </span> ".$row['categorey']."</h4>";
                
                echo"<h4><span style='color:#4d94ff' 'text-align:center'>Email  :  </span> ".$row['email']."</h4>";
                
                echo"<h4><span style='color:#4d94ff' 'text-align:left'>Address  :  </span>  ".$row['address']."</h4>";
                echo"<h4><span style='color:#4d94ff'>Telephone No  :  </span> ".$row['tel_no']."</h3>";
                echo "</ul>";
                echo"<h4><span style='color:#4d94ff'>Mobile No  :  </span>".$row['mob_no']."</h2>";
                echo"<center><h4><a href='".$row['location_link']."'>Location Link on Google MAps</a></h4></center>";
                echo "</center>";
                echo "<hr/>";
                echo "<div>";
            }

            }
        
        
            
            mysqli_free_result($result);}
        ?>
    </div>

    
    </body>

</html>
<?php
    // 5. Close database connection
    mysqli_close($connection);
?>


		
	


	


