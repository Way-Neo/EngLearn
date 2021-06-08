<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form
	
// data base name : comments
	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width, initial-scale=1.0">
	<title> ENG-LEARN </title>
	<link rel="stylesheet" type="text/css" href="css/style-web.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head> 
<body>
	<!-- header -->
	<div class="medsos"> 
		<div class="container">
			<ul>
				<li><a href="https://www.youtube.com/watch?v=2xutV988ZYs"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/englearn.official"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/englearn.englearn.7"><i class="fab fa-facebook"></i></a></li>
			</ul>
		</div>
	</div>

	<header>
		<div class="container">
			<h1><a href="index.html">EngLearn</a></h1>
			<ul>
				<li class="active"><a href="index.html">HOME</a></li>
				<li><a href="course.html">COURSE</a></li>
				<li><a href="quiz.php">  QUIZ  </a></li>
				<li><a href="comment.php">COMMENT</a></li>
				<li><a href="profile.html">PROFILE</a></li>
			</ul>
		</div>
	</header>

<div class ="wrapperall">
	<div class="wrapper">
			<form action="" method="POST" class="form">
				<div class="row">
					<div class="col-6" style="margin-right: 10px">
						<div class="input-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name"  style="border-radius: 5px;" placeholder="Enter your Name" required>
						</div>
					</div>
					<div class="col-6" style="margin-right: 10px">
						<div class="input-group"  >
							<label for="email">Email</label>
							<input type="email" name="email" id="email" style="border-radius: 5px" placeholder="Enter your Email" required>
						</div>
					</div>
				</div>
				<div class="col-6" style="margin-right: 10px">
					<div class="input-group textarea">
						<label for="comment">Comment</label>
						<textarea id="comment" name="comment" style="border-radius: 5px" placeholder="Enter your Comment" required></textarea>
					</div>
				</div>
				<div class="input-group">
					<button name="submit" class="btn">Post Comment</button>
				</div>
			</form>


			<div class="prev-comments">

				<?php 
				
				$sql = "SELECT * FROM comments";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {

				?>

				<div class="single-item">
					<h4><?php echo $row['name']; ?></h4>
					<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
					<p><?php echo $row['comment']; ?></p>
				</div>

					<?php

						}
					}
					
					?>

			</div>
	</div>
</div>

<!-- footer copyrigt -->
<div id="copyright">
        <div class="wrapp">
            &copy; 2021.<b>EngLearn.</b> All Rights Reserved.
        </div>
    </div>
	</body>
</html>