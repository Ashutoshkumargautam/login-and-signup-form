<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE HTML>  
<html>
<head>
<title>tony</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>  
<?php
$servername = "localhost";
$username = "u999002100_user_db1";
$password = "user_db@123";
$dbname = "u999002100_user_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// define variables and set to empty values
$title = $detail = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["title"]) && empty($_POST["title2"]) && empty($_POST["title3"])) {
    $nameErr = "Title is required";
  } else {
    $title = test_input($_POST["title"]);
	$title2 = test_input($_POST["title2"]);
	$title3 = test_input($_POST["title3"]);
  }
  if (empty($_POST["detail"]) && empty($_POST["detail2"]) && empty($_POST["detail3"])) {
    $lnameErr = "Detail is required";
  } else {
    $detail = test_input($_POST["detail"]);
	$detail2 = test_input($_POST["detail2"]);
	$detail3 = test_input($_POST["detail3"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO Fnews (title, detail) VALUES (?, ?)");
$stmt->bind_param("ss", $title, $detail);

// set parameters and execute
$title = $title;
$detail = $detail;
$stmt->execute();
//------------------------------------------------------------------------------------
$stmt = $conn->prepare("INSERT INTO Snews (title, detail) VALUES (?, ?)");
$stmt->bind_param("ss", $title2, $detail2);

// set parameters and execute
$title2= $title2;
$detail2 = $detail2;
$stmt->execute();

//-------------------------------------------------------------------------------------
$stmt = $conn->prepare("INSERT INTO Tnews (title, detail) VALUES (?, ?)");
$stmt->bind_param("ss", $title3, $detail3);

// set parameters and execute
$title3 = $title3;
$detail3 = $detail3;
$stmt->execute();

$stmt->close();
$conn->close();

?>


<h2>Add First News Slide</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Title: <input type="text" name="title" value="<?php echo $title;?>">
  <br><br>
  Detail: <input type="text" name="detail" value="<?php echo $detail;?>">
  <br><br>
<h2>Add second News slide</h2>
  Title: <input type="text" name="title2" value="<?php echo $title2;?>">
  <br><br>
  Detail: <input type="text" name="detail2" value="<?php echo $detail2;?>">
  <br><br>
<h2>Add Third news Slide</h2>
  Title: <input type="text" name="title3" value="<?php echo $title3;?>">
  <br><br>
  Detail: <input type="text" name="detail3" value="<?php echo $detail3;?>">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<br>

<p class="login-lost">Go Back to <a href="../index.php">Home</a></p>
  
<?php
echo "<h2>Your Input:</h2>";
echo $title;
echo "<br>";
echo $title2;
echo "<br>";
echo $title3;
echo "<br>";
?>

</body>
</html>
