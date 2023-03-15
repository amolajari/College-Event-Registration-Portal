<!DOCTYPE html>
<html>
<head>

	<title>Festival Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />	

	<style type="text/css">
        .logincontainer{
          background: rgb(255 255 255 / 80%);
          color: #fff;	
          border-radius: 5px;
          padding: 20px 100px;
          position: absolute;
          top: 45%;
          left: 40%;	
          transform: translate(-35%,-35%);
        }

  #submit{
    background-color: #f44336;
    border: none;
    color: white;
    padding: 8px 80px 8px 31px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
	transform: translate(72%,26%);
  }

  input, select, textarea {
    /* border: 2px solid black; */
    border-radius: 4px;
    outline: none;
    font-size: 14px;
    width: 99.5%;
    margin: 9px 40px;
    padding: 9px;
    border: none;
}
  </style>
</head>
<body>

<!-- PHP code -->
<?php

include('../includes/database.php');

if(isset($_POST['submit']))
{

      $adminuser=$_POST['user'];
      $adminpass=$_POST['pass'];
     

      if(empty($_POST["user"]) || empty($_POST["pass"]))    
      {
        echo '<script type="text/javascript">';
        echo ' alert("Please Fill the Details")';
        echo '</script>';
      }
      else
       {      
                $query= "SELECT * FROM `login`";
                $sql = mysqli_query($con,$query);
			
				while($row = mysqli_fetch_assoc($sql))
            	  {
                	$user= $row['user'];
                	$pass= $row['pass'];
                
               		 if($user == $adminuser && $pass == $adminpass){
						echo '<script type="text/javascript">';
						echo ' alert("Registration Successful!")';
						echo '</script>';
						header('Location: admin.php');

                  	}
					else
					  {
						 echo '<script type="text/javascript">';
						 echo ' alert("Registration Failed!")';
						 echo '</script>';
					  }
				
				  $con->close();
          }
            
	   }  

}//main       

?>
<!-- PHP ends -->

		<header>
			<nav>
				<div class="row">
					<!-- <a href="../files/main.html">
					<img src="images/logo.svg" class="logo">
					</a> -->
					<ul class="main-nav" id="check-class">
						<li><a href="../files/main.html">HOME</a></li>
						<!-- <li><a href="../files/gallary.html">GALLERY</a></li> -->
			
					</ul>
					</a>
				</div>	
			</nav>
		</header>

		
<!-- FORM -->
			<div class="logincontainer">

			  <form action="adminlogin.php" method = "post">
				<br>
				<h3>Admin Login:</h3>
				<br>
			  <div class="row">
			    <div class="col-25">
			      <label for="user">Username&emsp;</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="user" name="user" placeholder="username">
			    </div>
			  </div>

			  <div class="row">
			    <div class="col-25">
			      <label for="pass">Password&emsp;</label>
			    </div>
			    <div class="col-75">
			      <input type="password" id="pass" name="pass" placeholder="password">
			    </div>
			  </div>

			  <div class="row">
			    <input type="submit" name = "submit" id = "submit" value="Submit">
			  </div>
			  </form>
			</div>

</body>
</html>