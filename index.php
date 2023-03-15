<?php
/*
 *  Author: Kaine van Ommeren
 *  Date: February 2023
 *  File: index.php
 */

date_default_timezone_set("Europe/Amsterdam");
$currentTime = date("H:i A");
$currentYear = date("Y");

?>
<!doctype html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="img/icons/icon-title.png">
        <link href="./css/bootstrap.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
        <link href="https://unpkg.com/xp.css" rel="stylesheet" >
        <script rel="script" src="/js/bootstrap.js" defer></script>
        <script rel="script" src="/js/script.js" defer></script>
        <link href="./css/bootstrap-utilities.css" rel="stylesheet">
        <title>Website | Kaine</title>
    </head>
    <body>
        <div class="position-static center pt-md-5" id="toggleWindow">
                <div class="window mx-auto col-lg-5 row-cols-auto">
                    <div class="title-bar">
                        <div class="title-bar-text">Welkom's bericht</div>
                        <div class="title-bar-controls">
                            <button aria-label="Minimize"></button>
                            <button aria-label="Maximize"></button>
                            <button aria-label="Close" onclick="toggleView()"></button>
                        </div>
                    </div>
                    <div class="window-body">
    <pre>Kaine&#10094;R&#10095; Windows DOS
&#10094;C&#10095; Copyright Kaine <?php echo $currentYear ?>
      <br>C:&#92;WINDOWS&#92;SYSTEM32> Van harte welkom op mijn website.
    </pre>
                    </div>
                </div>
        </div>
        <!-- NAVBAR-->
        <div class="start footer-padding navbar fixed-bottom navbar-expand-sm ">
            <!-- START -->
            <div class="start-begin">
                <img src="img/icons/xp-app-logo.png" alt="logo" height="32" width="32">
            </div>
            <div class="start-begin-between">
            </div>
            <!-- CENTER -->
            <div class="start-bar bg-bar navbar-collapse navbarExpand" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="./pages/portfolio.php"><img src="img/icons/winrar-app-logo.png" title="Portfolio" width="28px" height="28px" alt="winrar-logo"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./pages/contact.php"><img src="img/icons/msn-app-logo.png" title="Contact" width="28px" height="28px" alt="msn-logo"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./pages/about-me.php"><img src="img/icons/ie-app-logo.png" title="Over mij" width="28px" height="28px" alt="ie-logo" ></a>
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