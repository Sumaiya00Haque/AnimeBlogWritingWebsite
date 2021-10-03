<?php session_start(); ?>
<!DOCTYPE html>

<html>

	<head>
		<title>Anime World</title>
		<!--bootstrap styleesheet-->
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
		<link rel="stylesheet" href="style1.css">  

	</head>
	<body>
		<section class="vh-100 gradient-custom">
	    <form class="container w-50 mx-auto " action="blog.php" method="post">
		
			 <div class="login-box">
		     <div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Enter User Name </label>
					<input type="text" name="username"  id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $_SESSION['username']; ?>">
		        </div>
		        <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Enter Title</label>
					<input type="text"  name="title"  id="exampleInputPassword1">
		        </div>
		        <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Content</label>
					<input type="textarea" name="content" id="exampleInputPassword1">
		        </div>
		       
		       <div class="mb-3 form-check">
		          <input type="checkbox" id="exampleCheck1">
		          <label class="form-check-label" for="exampleCheck1">Check me out</label>
		        </div>
		        <input type="submit" value = "SUBMIT1"/>
		       
			</div>
	      </form>
		</section>
	</body>
<!--Bootstrap Script-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </bodlpL




</lpL> 
</html>
