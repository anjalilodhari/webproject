

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dar Listing & Directory</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Anjali and Lucky" content="webproject">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
  <!--bootstrap-->  
  <link rel="stylesheet" href="bootstrap.min.css">
	<!--css-->
	<link rel="stylesheet" type="text/css" href="homep1.css">
  <!--css2-->
  <link rel="stylesheet" type="text/css" href="style2.css">

  <link rel="stylesheet" type="text/css" href="mod.css">

  
	

</head>
<body>

<div class="header">
	<h1>Dar Listing & Directory + Events </h1>
</div>	


<div class="navbar" >
  <a id="myBtn" class="right" >About</a>

  <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h6>ABOUT</h6>
    <p>This website gives you adresses in darrrrr....the modal is finalllyyyyyy workinnnngggg!!!!</p>
  </div>

</div>

   <a href="login.php" class="right"> sign in </a>
   <a href="register.php" class="right">Register</a> 
</div>

<div class="main">
<div class="search">
	
	Search:<br>
	<input id="searchh" class="search-text" type="text" name="search" onkeyup="myFunction()" placeholder="Search for categories" >
  
    
</div>

<!--categories-->


<section class="main-block">
   
  <div class="container">

    <h5 align="center">CATEGORIES</h5>
   
		<table class="table" id="table" align="center">

			<tr>
				<td><a href="categories\automotives.html"> Automotive </a></td>
				<td><a href="#"> Beauty & Spa </a></td>
				<td><a href="categories\hotels.html">Hotel </a></td>
			</tr>
			<tr>
				<td><a href="categories\restaurant.html"> Restaurant </a></td>
				<td><a href="#"> Coffee </a></td>
				<td><a href="#"> Shopping </a></td>
			</tr>
			<tr>
				<td><a href="#"> Club & Bar </a></td>
				<td><a href="categories\hospitals.html"> Hospitals </a></td>
				<td><a href="#"> Destinations </a></td>
			</tr>

		</table>



    <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("searchh");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
  </div>
</div>
</section>

<div class="lastt" align="center">
  <h6><a href="login.php">NEW CATEGORY/PLACE +</a></h6>
</div>

<hr color="black" height="3px">

<div class="upevent" align="center">
  <h5>UPCOMING EVENTS</h5>
    <?php
 if($_POST){
    $name = $_POST['name'];
    $comment = $_POST['event'];
    $handle = fopen("events.html","a");
    fwrite($handle, "<b>" . $name . "</b>:<br>" . $comment . "<br><br>");
    fclose($handle);
}

 ?>

<?php include "events.html"; ?>
</div>
</div>

    <!--//END CATEGORIES -->


<footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; 2018 Listing. All rights reserved</p>
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>