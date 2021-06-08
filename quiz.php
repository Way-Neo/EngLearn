<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1">
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
                <li><a href="logout.php">LOG-OUT</a></li>
            </ul>
        </div>
    </header>

    <body>

        <div class="blog-post">
            <div class="blog-post-img">
                <img src="images/q1.jpg" alt="">
            </div>
            <div class="blog-post-info">
                <div class="blog-post-title">
                    <h1>Quiz of Simple Present</h1>
                </div>
                <div class="blog-post-date">
                    <span>Tuesday</span>
                    <span>May 25, 2021<br><br></span>
                </div>
                <div class="blog-post-desc">
                    <p><b>We provide practice questions for The Simple Present Tenses to help you understand the material more deeply.<br>After answering you will be given an assessment score</b><br><br></p>
                </div>
                <div class="blog-post-read-more">
                    <a href="quiz-1.html">Start the Quiz<u></u></a>
                </div>
            </div>
        </div>
        <div class="blog-post">
            <div class="blog-post-img">
                <img src="images/q2.jpg" alt="">
            </div>
            <div class="blog-post-info">
                <div class="blog-post-title">
                    <h1>Quiz of Present Continuous</h1>
                </div>
                <div class="blog-post-date">
                    <span>Tuesday</span>
                    <span>May 2, 2021<br><br></span>
                </div>
                <div class="blog-post-desc">
                    <p><b>We provide practice questions for The Present Continuous Tenses to help you understand the material more deeply.<br>After answering you will be given an assessment score</b><br><br></p>
                </div>
                <div class="blog-post-read-more">
                    <a href="quiz-2.html">Start the Quiz<u></u></a>
                </div>
            </div>
        </div>
        <div class="blog-post">
            <div class="blog-post-img">
                <img src="images/q3.jpg" alt="">
            </div>
            <div class="blog-post-info">
                <div class="blog-post-title">
                    <h1>Quiz of Simple Past</h1>
                </div>
                <div class="blog-post-date">
                    <span>Tuesday</span>
                    <span>May 18, 2021<br><br></span>
                </div>
                <div class="blog-post-desc">
                    <p><b>We provide practice questions for The Simple Past Tenses to help you understand the material more deeply.<br>After answering you will be given an assessment score</b><br><br></p>
                </div>
                <div class="blog-post-read-more">
                    <a href="quiz-3.html">Start the Quiz<u></u></a>
                </div>
            </div>
        </div>
        <div class="blog-post">
            <div class="blog-post-img">
                <img src="images/q4.jpg" alt="">
            </div>
            <div class="blog-post-info">
                <div class="blog-post-title">
                    <h1>Quiz of Past Continuous</h1>
                </div>
                <div class="blog-post-date">
                    <span>Tuesday</span>
                    <span>May 10, 2021<br><br></span>
                </div>
                <div class="blog-post-desc">
                    <p><b>We provide practice questions for The Past Continuous Tenses to help you understand the material more deeply.<br>After answering you will be given an assessment score</b><br><br></p>
                </div>
                <div class="blog-post-read-more">
                    <a href="quiz-4.html">Start the Quiz<u></u></a>
                </div>
            </div>
        </div>
        <div class="blog-post">
            <div class="blog-post-img">
                <img src="images/q5.jpg" alt="">
            </div>
            <div class="blog-post-info">
                <div class="blog-post-title">
                    <h1>Quiz of Present Perfect</h1>
                </div>
                <div class="blog-post-date">
                    <span>Tuesday</span>
                    <span>May 16, 2021<br><br></span>
                </div>
                <div class="blog-post-desc">
                    <p><b>We provide practice questions for The Present Perfect Tenses to help you understand the material more deeply.<br>After answering you will be given an assessment score</b><br><br></p>
                </div>
                <div class="blog-post-read-more">
                    <a href="quiz-5.html">Start the Quiz<u></u></a>
                </div>
            </div>
        </div>
        <div id="copyright">
        <div class="wrapp">
            &copy; 2021.<b>EngLearn.</b> All Rights Reserved.
        </div>
    </div>
    </body>

</html>