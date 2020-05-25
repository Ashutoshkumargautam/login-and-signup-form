<!--PHP login System by WEBDEVTRICK (https://webdevtrick.com) -->
<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome User</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<h1 >Welcome <?php echo $_SESSION['username']; ?>!</h1>
<h2><strong>Welcome Admin see what is going on with website</strong></h2>

  <p class="login-lost">Go Back to <a href="../index.php">Home</a></p>

  <h1><a href="http://royalbusygroup.epizy.com/admin-panel/">Admin-Panel</h1></a>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
