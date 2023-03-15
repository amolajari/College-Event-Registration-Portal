<!DOCTYPE html>
<html>
<head>

	<title>Fest Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />	

</head>
<body>


<?php

include('../includes/database.php');

if(isset($_POST['submit']))
{

      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $clg=$_POST['selclg'];
      $selcont=$_POST['selcon'];
      $emailid=$_POST['emailid'];
      



      if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["selclg"]) || empty($_POST["selcon"]))    
      {
        echo '<script type="text/javascript">';
        echo ' alert("Please Fill the Details")';
        echo '</script>';
      }
      else
       {
                  
                $query="INSERT INTO `event_registration`.`reg_form` (`fname`, `lname`, `clg`, `selcont`, `emailid`)VALUES ('$fname', '$lname', '$clg', '$selcont', '$emailid');";
                $sql = mysqli_query($con,$query);
                                if($sql)
                                 {
                                    echo '<script type="text/javascript">';
                                    echo ' alert("Registration Successful!")';
                                    echo '</script>';
									
                                 }
                                 else
                                 {
                                    echo '<script type="text/javascript">';
                                    echo ' alert("Registration Failed!")';
                                    echo '</script>';
                                 }
                               
                                 $con->close();
          }
    }//main       
?>


		<header>
			<nav>
				<div class="row">
					<a href="../files/main.html">
					<img src="images/logo.svg" class="logo">
					</a>
					<ul class="main-nav" id="check-class">
						<li><a href="../files/main.html">HOME</a></li>
						<!-- <li><a href="../files/gallary.html">GALLERY</a></li> -->
			
					</ul>
					</a>
				</div>	
			</nav>
		</header>

<!-- FORM CODE -->

			<div class="container">

			  <form action="regform.php" method = "post">
				<br>	
				<h3>Regestration Form:</h3>
				<br>
			  <div class="row">
			    <div class="col-25">
			      <label for="fname">Name</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="fname" name="fname" placeholder="Your First Name..">
			    </div>
			  </div>

			  <div class="row">
			    <div class="col-25">
			      <label for="lname">Last Name</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="lname" name="lname" placeholder="Your Last Name..">
			    </div>
			  </div>

			  <div class="row">
			    <div class="col-25">
			      <label for="clg">College Name</label>
			    </div>
			    <div class="col-75">
			      <!-- <select id="clg" name="selclg" >
			 
						<option selected disabled value="">select college</option>
						<option></option>
						<option></option>
						<option></option>
						<option></option>
						
										
			      </select> -->
			      <input type="text" id="clg" name="selclg" placeholder="Your College Name..">
			    </div>
			  </div>

			  <div class="row">
			    <div class="col-25">
			      <label for="selcont">Select Contest</label>
			    </div>
			    <div class="col-75">
			      <select id="selcont" name="selcon" >
			 
						<option selected disabled value="">select Contest</option>
						<option>Quiz (Non-Technical)</option>
						<option>Paper Presentation</option>
						<option>Poster Presentation</option>
						
			      </select>
			    </div>
			  </div>

			  <div class="row">
			    <div class="col-25">
			      <label for="emailid">Email-id</label>
			    </div>
			    <div class="col-75">
			      <input type="email" id="emailid" name="emailid" placeholder="Your email-id...">
			    </div>
			  </div>

			  <div class="row">
			    <input type="submit" name = "submit" value="Submit">
			  </div>
			  </form>
			</div>

</body>
</html>