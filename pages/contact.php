<?php

date_default_timezone_set("Europe/Amsterdam");
$currentTime = date("H:i A")

?>
<!doctype html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="../img/icons/icon-title.png">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="https://unpkg.com/xp.css" rel="stylesheet" >
        <script rel="script" src="../js/bootstrap.js" defer></script>
        <script rel="script" src="../js/script.js" defer></script>
        <link href="../css/bootstrap-utilities.css" rel="stylesheet">
        <title>Website | Kaine</title>
    </head>
    <body>
    <div class="position-static center pt-md-5" id="toggleWindow">
        <div class="window mx-auto col-lg-2">
            <div class="title-bar">
                <div class="title-bar-text">Contact</div>
                <div class="title-bar-controls">
                    <button aria-label="Close" onclick="toggleView()"></button>
                </div>
            </div>
            <div class="window-body portID">
                <div class="">
                    <h4 class="text-lg-start">Je kan me bereiken op</h4>
                    <h5 class="fw-bold">Social media:</h5>
                    <p><a href="https://www.linkedin.com/in/kaine-van-ommeren-8300baa8/" target="_blank">LinkedIn</a></p>
                    <p><a href="https://www.instagram.com/zkaine/" target="_blank">Instagram</a></p>
                    <p><a href="https://github.com/zkainee" target="_blank">GitHub</a></p>
            </div>
        </div>
        </div>
        <!-- NAVBAR-->
        <div class="start footer-padding navbar fixed-bottom navbar-expand-sm ">
            <!-- START -->
            <div class="start-begin">
                <a href="../index.php" title="Start"><img src="../img/icons/xp-app-logo.png" alt="logo" height="32px" width="32px"></a>
            </div>
            <div class="start-begin-between">
            </div>
            <!-- CENTER -->
            <div class="start-bar bg-bar navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="../pages/portfolio.php"><img src="../img/icons/winrar-app-logo.png" title="Portfolio" width="28px" height="28px" alt="winrar-logo"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><img src="../img/icons/msn-app-logo.png" title="Contact" width="28px" height="28px" alt="msn-logo"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../pages/about-me.php"><img src="../img/icons/ie-app-logo.png" title="Over mij" width="28px" height="28px" alt="ie-logo" ></a>
                    </li>
                </ul>
            </div>
            <!-- END -->
            <div class="end-begin-between">
            </div>
            <div class="end-menu-bar">
                <p class="text-center text-white end-menu-bar-bg"><?php echo $currentTime ?></p>
            </div>
        </div>
    <script src="./js/bootstrap.bundle.min.js" defer></script>
    </body>
</html>
