<?php
	session_start();

	$conn = mysqli_connect("localhost", "root", "", "suha");
	if (!$conn)
		die("Connection failed: " . mysqli_connect_error());

	$sql = "INSERT INTO usertable (name, password)
			   VALUES ('$_POST[user]', '$_POST[password]')";

	$sqlExist = "select * from usertable where name = '$_POST[user]'";
	$result = mysqli_query($conn, $sqlExist);

	if (mysqli_num_rows($result)==0)
	{
		if (mysqli_query($conn, $sql))
		{
			$_SESSION['Pass'] = "REGISTRATION SUCCESSFUL";
			header('location:login.php');
		}
		else
		{
			$_SESSION['PassErr'] = "REGISTRATION FAILED";
			header('location:reg.php');
		}
	}
	else
	{
		$_SESSION['PassErr'] = "USER ALREADY EXIST";
		header('location:reg.php');
	}
  mysqli_close($conn);
?>
