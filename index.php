<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login2.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login2.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="DE.css">
    
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">AGuide</h2>
            </div>
            
            <div class="menu">
                <ul>
                    
                    <li><a href="Rent-Housing.html" target="_black">HOUSING</a></li>
                    <li><a href="job.html" target="_black">JOB</a></li>
                    <li><a href="currencyconvertor.php" target="_black">CURRENCY CALCULATION</a></li>
                    <li><a href="Loan.html" target="_black">LOAN INFO</a></li>
					<li><a href="University.html" target="_black">UNIVERSITY</a></li>
                </ul>
            </div>
        </div> 
        <div class="content">
            <h1>  <br>Your ultimate guide to<span><br>Moving Abroad</span></h1><BR>
            <p class="par"><b>Welcome to our website, your ultimate guide to moving abroad!<br> 
			We understand that moving to a new country can be an exciting <br>yet daunting 
			experience, which is why we are here to help you <br>navigate the journey.</b>
			</p>
			  </div>
			  
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
      
    </div>
    
</body>
</html>