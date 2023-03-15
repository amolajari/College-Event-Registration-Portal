<!DOCTYPE html>
<html>
<head>
	<title>Fest Registration Portal</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
        .tablecontainer{
          background: rgb(255 255 255 / 100%);
          color: #fff;	
          border-radius: 5px;
          padding: 4px 4px;
          position: absolute;
          top: 45%;
          left: 40%;	
          transform: translate(-38%,-35%);
        }
      table{
        border-collapse: collapse;
        width: 100%;
        color: black;
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        text-align: left;
            
      }

      th{
        background-color: #190A3B;
        color: white; 
        text-align: left;
        padding: 10px 40px;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;        
      }


  button {
    background-color: #f44336;
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    transform: translate(40%,-0%);
  }
  </style>
</head>
<body>
		<header>
			<nav>
				<div class="row clearfix">
					<!-- <a href="../files/main.html">
					<img src="images/logo.svg" class="logo">
					</a> -->
					<ul class="main-nav" id="check-class">
						<li><a href="../files/main.html">HOME</a></li>
						
						
					</ul>
					</a>
				</div>
			</nav>
		</header>



<div class="tablecontainer">
  
<table>            
                <tr>          
                  <th scope="col">Registration No. &emsp; </th>
                  <th scope="col">First Name &emsp;</th>
                  <th scope="col">Last Name &emsp;</th>
                  <th scope="col">College Name &emsp;</th>
                  <th scope="col">Contest Participated &emsp;</th>
                  <th scope="col">Email ID</th>
                  <th scope="col">DELETE</th> 
                </tr>
    <?php
			include('../includes/database.php');
 
        $sql="SELECT * FROM `reg_form`";
        $query_run = mysqli_query($con,$sql);
    ?>
    
    <?php
        if(mysqli_num_rows($query_run) > 0)
          {
            while($row= mysqli_fetch_assoc($query_run))
              {
    ?>
                
                <tr>            
                <td> <?php  echo $row['regno'];?></td>
                <td> <?php  echo $row['fname']; ?></td>
                <td> <?php  echo $row['lname']; ?></td>
                <td> <?php  echo $row['clg']; ?></td>
                <td> <?php  echo $row['selcont']; ?></td>
                <td> <?php  echo $row['emailid']; ?></td>

                <td>
                <form action="deldata.php" method="POST">
                <input type="hidden" name="regno" value="<?php  echo $row['regno']; ?>">
                <button type="submit" name="remove">DELETE</button> 
                </form>  
                </td>

                </tr>
               
    <?php
              }
            }
          else
            {
              echo "No Record Found !";
            }
    ?>
                
    </table>

</div>








</body>
</html>