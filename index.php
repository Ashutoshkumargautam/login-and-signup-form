<?php
include("auth.php");
if ($_SESSION['username'] == "root"){
header ("Location: root.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Welcome | Student</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>
<body>
<div class="form">
<h1 >Welcome<mark> <?php echo $_SESSION['username']; ?></mark></h1>
<h2><mark>Happy learning to you</mark></h2>
<p class="login-lost">Go Back to <a href="../index.php">Home</a></p>
<p><a href="http://royalbusygroup.epizy.com/student-panel/">Student Dashboard</a></p>
<p><a href="http://royalbusygroup.epizy.com/teach%20now/">Become Teacher Now</a></p>
<!--
<h1><p><a href="forum/index.php">QnA FORUM</a></p></h1>-->
<a href="logout.php">Logout</a>
</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
