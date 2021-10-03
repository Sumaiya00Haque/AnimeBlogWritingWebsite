<html>
<head>
    <title>User login and reg </title>
    <link rel="stylesheet" type="text/css" href="style1.css"> 
    <!--bootstrap styleesheet-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6">
                <h2>Register Here</h2>
                <form action="registration.php" method="post">
                    
                    <div class="form group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                        
                    </div>
                    <div class="form group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                        </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
                </div>      


            </div>

        </div>
    </div>
</html>