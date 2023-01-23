<?php
/*
 *  Author: Kaine van Ommeren
 *  Date: February 2023
 *  File: index.php
 */

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
        <link rel="icon" href="./img/icon-title.png">
        <link href="./css/bootstrap.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/xp.css">
        <script rel="script" src="/js/bootstrap.js" defer></script>
        <script rel="script" src="/js/script.js" defer></script>
        <link href="./css/bootstrap-utilities.css" rel="stylesheet">
        <title>Website | Kaine</title>
    </head>
    <body background="./img/xp-wallpaper.png">
        <div class="px-4 py-5 my-5 text-center">
            <div class="">
                <div class="window display-8 mx-auto col-lg-5">
                    <div class="title-bar">
                        <div class="title-bar-text">Lorem ipsum dolor sit amet</div>
                        <div class="title-bar-controls">
                            <button aria-label="Minimize"></button>
                            <button aria-label="Maximize"></button>
                            <button aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="window-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Eu consequat ac felis donec et. Nunc aliquet bibendum enim facilisis gravida neque convallis.
                            Dolor purus non enim praesent. Neque sodales ut etiam sit amet nisl.
                            Leo vel fringilla est ullamcorper. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida.
                            Convallis a cras semper auctor neque vitae tempus quam.
                            Platea dictumst quisque sagittis purus sit amet volutpat consequat. Viverra tellus in hac habitasse.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <!-- NAVBAR-->
        <div class="container">
            <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-blue">
                <div class="container-fluid">
                    <img src="./img/xp-app-logo.png" alt="logo" height="32px" width="32px">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="./pages/portfolio.php"><img src="./img/winrar-app-logo.png" title="Portfolio" width="32px" height="32px" alt="winrar-logo"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="./pages/contact.php"><img src="./img/msn-app-logo.png" title="Contact" width="32px" height="32px" alt="msn-logo"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="./pages/about-me.php"><img src="./img/ie-app-logo.png" title="Over mij" width="32px" height="32px" alt="ie-logo" ></a>
                            </li>
                            <li class="nav-item dropup">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><img src="./img/game-app-logo.png" alt="game-logo" width="32px" height="32px"></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
<!--                    <div class="bg-light rounded-1 px-3 d-flex">-->
<!--                        <p class="p-1 w-100">hbdsjgvfdsgvdfv</p>-->
<!--                    </div>-->
                    <div class="col-1 bg-right-blue">
                        <p class="text-center text-white"><?php echo $currentTime ?></p>
                    </div>
                </div>
            </nav>
        </div>
        <script src="./js/bootstrap.bundle.min.js" defer></script>
    </body>
</html>
<?php //include "./includes/footer.php" ?>