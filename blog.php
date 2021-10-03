<?php
  session_start();

  $conn = mysqli_connect("localhost", "root", "", "suha");
  if (!$conn)
    die("Connection failed: " . mysqli_connect_error());

  if ( !isset( $_POST['submit2'] ) )
  {   
      
      $username      = $_POST['username'];
      $title   = $_POST['title'];
      $content     = $_POST['content'];
      

      echo $username;
      // Create a Data into our users Table
      try{
        $query = "INSERT INTO tabledb(username,title,content) VALUES ('$username','$title','$content') ON DUPLICATE KEY UPDATE title = '$title', content = '$content';";
        echo $query;
        if (mysqli_query($conn, $query))
          header('location:home.php');

      }catch (PDOException $ex)
      {
          echo $ex;
      }
      echo "DONE";     

  }

?>
