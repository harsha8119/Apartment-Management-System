<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: selection.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Apartment Management System</h2>
</div>
<div class="box1"><h3 style="color: teal; font-size:30px">Welcome to home page</h3>
</div>
<div class="content">
  	<!-- notification message -->
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

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p><h3>Welcome <strong><?php echo $_SESSION['username']; ?></h3></strong></p><br>
        <p><h4></p>
        <br><br><br>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<!-- <div class="container"> -->
            <div class="input-form">
                <h5 style="color:white; font-size:20px">What are you looking for?</h5>
                <form action="" id="input-form">
            
                    <div class="input-select">
                        <label for="room" class="Label">Room Type</label><br>
                        <input type="checkbox" name="skills" id="b1" value="bhk1">1 BHK
                        <input type="checkbox" name="skills" id="b2 " value="bhk2">2 BHK
                        <input type="checkbox" name="skills" id="b3 " value="bhk3">3 BHK
                        <input type="checkbox" name="skills" id="b4 " value="bhk4">4 BHK<br><br>
                    </div>
                    <div class="input-select">
                        <label for="furnished" class="Label">Furnished</label><br>
                        <input type="radio" id="yes" value="yes" name="furnished">Fully- Furnished
                        <input type="radio" id="no" value="no" name="furnished">Non- Furnished<br><br>
                    </div>
                    <div class="buttons">
                        <button type="button" id="add-btn">REGISTER</button>
                        <button type="button" id="delete-btn">DELETE</button>
                    </div>
                </form>
            </div>

            <div class="line"></div>
            <div class="table">
                <h3 style="color: white">Registered User</h3>
                <div class="scroll">
                    <table id="display">
                        <tr>
                            <th style="color: white">Description</th>
                            <th style="color: white">Profile</th>
                        </tr>
                    </table>
                </div>
            </div>
           
        </div>
        <script src="main.js"></script>

</body>
</html>