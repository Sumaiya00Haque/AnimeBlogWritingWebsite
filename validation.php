<?php
	session_start();

	$conn = mysqli_connect("localhost", "root", "", "suha");
	if (!$conn)
		die("Connection failed: " . mysqli_connect_error());

  $sql = "select name, password from usertable where name = '$_POST[user]' and password = '$_POST[password]'";
  $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)==1)
  {
    $_SESSION['username'] = $_POST['user'];
    header('location:Dashboard.php');
  }
	else
  {
    $_SESSION['PassErr'] = "<b>USERNAME</b> OR <b>PASSWORD</b> WRONG";
    header('location:login.php');
  }
  mysqli_close($conn);
?>
