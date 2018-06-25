<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<body>

<div class="content" align="center" style="padding: 40px">
 <h1>Let others know about the upcoming event in your area</h1> 

 <form action="index.php" method="POST">
  Name:<br><input type="text" name="name" placeholder="Name"><br><br>
  Update an event: <br><textarea cols="50" rows="20" name="event" ></textarea><br><br>

  <input type="submit" name="POST!">
  <input type="reset" name="RESET">
</form> 

 



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
    	<p><strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

    <p style="color: red"> <a href="index.php"> logout </a></p>
</div>
</body>
</html>