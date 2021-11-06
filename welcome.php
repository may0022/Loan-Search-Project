<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
	<nav>
        <div id="logo-img">
            <a href="home.php">
                <img src="img/logo1.png" alt="Loan Search">
            </a>
        </div>
    </nav>
		
		<main>
			<div class="outside"></div>
					<div class="wrapper2">
						<h1 class="section-heading">Welcome</h1>
						<center><h2>Hi,<?php echo htmlspecialchars($_SESSION["username"]); ?>. This is your Loan Search account!</h2>
								<div>
									<p><a href="matches.html" class="btn-readmore">Review Matches</a> <a href="reset-password.php" class="btn-readmore">Reset Your Password</a> <a href="logout.php" class="btn-readmore">Sign Out of Your Account</a></p>
								</div></center>
					</div>
			<div class="outside2"></div>
		</main>
	
	<footer id="footer">
            <div id="right-footer">
                <p>Website Developed by KMZ</p>
            </div>
    </footer>
</body>
</html>