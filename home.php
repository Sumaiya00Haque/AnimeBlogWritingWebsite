<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Anime World</title>
	<!--bootstrap styleesheet-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

</head>
<body class="bg-dark bg-gradien">
<!--HEADER START-->
	<header>
		<div class="banner">
			<nav class="navbar navbar-expand-lg navbar-light  d-md-block bg-light">
		  	<div class="container-fluid">
		    <a class="navbar-brand " href="#">
		    	<img src="../images/20.jpg" alt="" width="150" height="150">
		    </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">Home</a>
		        </li>
		        
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Anime
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="#Drama">Drama</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#Rom-Com">Rom-Com</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#Action">Action</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#Sports">Sports</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#Supernatural">Supernatural</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#Others">Others</a></li>
		          </ul>
		        </li>
		        
		      </ul>
					<?php if(!isset($_SESSION['username'])) {?>
		      <ul class="nav navbar-nav ml-auto">
		      	<li class="nav-item">
		        	<a class="nav-link" href="reg.php"><span class="fas fa-user"></span> Sign Up</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
			      </li>
			    </ul>
				<?php }
				else{

					?>
					 <ul class="nav navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="logout.php"><span class="fas fa-sign-in-alt"></span> Logout</a>
					  </li>
					  </ul>
	
					<?php
						}
						?>
		      
		    </div>
		  </div>
		</nav>

<!--image and Slider-->

		<section class="container">
    	<div id="carouselExampleCaptions" class="carousel  slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
		  </div>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="../images/image3.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <a href=""></a> <h2 >Tokyo Ghoul</h2></a>
		        <h5><b>Tokyo is haunted by ghouls who resemble humans but feast on their flesh. As a ghoul-human hybrid, Ken Kaneki finds himself caught between two worlds</b></h5>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="../images/image1.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		       <a href=""></a> <h2>Naruto: Shippûden</h2></a>
		        <h5>The Village Hidden in the Leaves is home to the stealthiest ninja in the land. But twelve years earlier, a fearsome Nine-tailed Fox terrorized the village before it was subdued and its spirit sealed within the body of a baby boy. Now that boy, Naruto, has grown up to become a hyperactive ninja-in-training who's more interested in pranks than schoolwork...but Naruto is determined to become the greatest ninja ever!</h5>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="../images/image2.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption  d-none d-md-block">
		      <a href=""></a>  <h2>Jujutsu Kaisen</h2></a>
		        <h5><b>The story of Jujutsu Kaisen is set in a world where Cursed Spirits feed on unsuspecting humans and fragments of the legendary and feared demon Ryomen Sukuna have been lost and scattered about.
		Should any curse consume Sukuna's body parts, the power they gain could destroy the world as we know it. Fortunately, there exists a mysterious school of Jujutsu Sorcerers who exist to protect the precarious existence of the living from the supernatural!</b></h5>
		      </div>
		    </div>
		     <div class="carousel-item">
		      <img src="../images/image6.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption  d-none d-md-block">
		      <a href=""></a>  <h2>Tokyo Revengers</h2></a>
		        <h5><b>Takemichi is a 26-year-old unemployed virgin who learns that the girl he dated in middle school, the only girl he ever dated, has died. Then, after an accident he finds himself in a time leap back to his middle school years. He vows to change the future and save the girl, and to do that he aims to rise to the top of the Kantou region's most brutal delinquent gang.</b></h5>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="../images/image12.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption  d-none d-md-block">
		      <a href=""></a>  <h2>Haikyuu!!</h2></a>
		        <h5><b>TakeShōyō Hinata, after seeing a volleyball match, aims to become the next "Little Giant" and thus joins his middle school volleyball club. After finding new members, he sets out for the middle school tournament, where he crosses paths with a formidable school with the "King of the Upper Court," Tobio Kageyama. Although his team lost, Hinata is still determined to aim for the top and exact revenge on Kageyama. Upon entering high school, he receives the biggest surprise: He and Kageyama are in the same high school volleyball club!</b></h5>
		      </div>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
	</header>
  <br>
	<main>
    <!--Catagories-->
    <section class="container my-7">

		  <div class="row g-4">
		    <div class="col-lg-4">
		      <div class="p-3 border bg-warning d-flex align-items-start justify-content-between rounded-3" id="Drama">
		        <h2 class="text-white">Drama</h2>
		        <img src="../images/image7.jpg">
		      </div>
		    </div>
		     <div class="col-lg-4">
		      <div class="p-3 border bg-warning d-flex align-items-start justify-content-between rounded-3" id= "Rom-Com">
		        <h2 class="text-white">Rom-Com</h2>
		        <img src="../images/image9.jpg">
		      </div>
		    </div>
		     <div class="col-lg-4">
		      <div class="p-3 border bg-warning d-flex align-items-start justify-content-between rounded-3" id="Action">
		        <h2 class="text-white">Action</h2>
		        <img src="../images/image10.jpg">
		      </div>
		    </div>
		     <div class="col-lg-4">
		      <div class="p-3 border bg-warning d-flex align-items-start justify-content-between rounded-3" id="Sports">
		        <h2 class="text-white">Sports</h2>
		        <img src="../images/image11.jpg">
		      </div>
		    </div>
		     <div class="col-lg-4">
		      <div class="p-3 border bg-warning d-flex align-items-start justify-content-between rounded-3" id="Supernatural">
		        <h2 class="text-white">Supernatural</h2>
		        <img src="../images/image13.jpg">
		      </div>
		    </div>
		    <div class="col-lg-4">
		      <div class="p-3 border bg-warning d-flex align-items-start justify-content-between rounded-3" id="Others">
		        <h2 class="text-white">Others</h2>
		        <img src="../images/image14.png">
		      </div>
		    </div>
		  </div>
		</div>
    </section>
    <br><br>
		<section class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">

						<?php
							$conn = mysqli_connect("localhost", "root", "", "suha");
							if (!$conn)
								die("Connection failed: " . mysqli_connect_error());
							$sql = "select * from tabledb";
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0)
							{
								while($row = mysqli_fetch_assoc($result))
								{
									echo 	
									'<div class="col">'.
									'<div class="card h-100">'.
										'<h3>' . $row["username"] . '</h3>' .
												'<div class="card-body">' .
													'<h5 class="card-title">' . $row["title"] . '</h5>' .
													'<p class="card-text">' . $row["content"] . '</p>' .
												'</div></div></div>';
								}
							}
							else
								echo 'NO RESULT FOUND';
							mysqli_close($conn);
						?>
					
		</div>
	</section>
	</main>
	<br><br>
	<footer>

	</footer>

	</body>

<!--Bootstrap Script-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
