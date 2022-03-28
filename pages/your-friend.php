<!-- html header -->
<?php require_once "../includes/header.php" ?>

<!-- nav bar -->
<nav>
    <div class="logo">
        <div class="logo-img">
            <a href="home.php"><img src="../images/logo-tab.png">UNLIMIT</a>
        </div>
    </div>
    <div class="pages">
        <a href="home.php"><i class='fas fa-home' style='font-size:24px'></i></a>
        <a href="movie.php"><i class='fas fa-photo-video' style='font-size:24px'></i></a>
        <a href="add-friend.php"><i class='fas fa-user-plus' style='font-size:24px'></i></a>
        <a href="profile.php"><i class='fas fa-user-alt' style='font-size:24px'></i></a>
        <a href="task.php"><i class='fas fa-tasks' style='font-size:24px'></i></a>
        <a href="setting.php"><i class='fas fa-align-justify' style='font-size:24px'></i></a>
    </div>
</nav>
<!-- body container -->
<div class="container">
    <div class="side-bar">
        <div class="profile-image">
            <img src="../images/logo-tab.png" alt="">
            <div class="edit-profile">
            <a href=""><i class='fas fa-pen' style='font-size:14px'>edit</i></a>
            </div>
        </div>
        <div class="profile-user">
            Hin soklim
        </div>
        <hr>
        <div class="side-bar-manu">
            <input type="search" name="search" id="" placeholder="Search friend..."><i class='fas fa-search' style='font-size:24px'></i>
        </div>
        <div class="side-bar-manu">
            <a href="post-picture.php"><i class='fas fa-file-upload' style='font-size:24px'></i>Post Picture</a>
        </div>
        <div class="side-bar-manu">
            <a href="post-video.php"><i class='fas fa-file-video' style='font-size:24px'></i>Post Video</a>
        </div>
        <div class="side-bar-manu">
            <a href="your-friend.php" class="active-sidebar"><i class='fas fa-user-friends' style='font-size:24px'></i>Your Friends</a>
        </div>
        <div class="side-bar-manu">
            <a href="shop.php"><i class='fas fa-shopping-cart' style='font-size:24px'></i>Shops</a>
        </div>
        <div class="side-bar-manu">
            <a href="feedback.php"><i class='fas fa-comment-dots' style='font-size:24px'></i>Send Feedback</a>
        </div>
        <div class="side-bar-manu">
            <a href="log-out.php"><i class='far fa-window-close' style='font-size:24px'></i>LogOut</a>
        </div>
    </div>
    <div class="main-container">
        <h1>Friend page</h1>
    </div>
</div>


<!-- html footer -->
<?php require_once "../includes/footer.php";?>
