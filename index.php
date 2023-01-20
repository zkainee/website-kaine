<?php
/*
 *  Author: Kaine van Ommeren
 *  Date: February 2023
 *  File: index.php
 */

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
        <script rel="script" src="/js/bootstrap.js" defer></script>
        <script rel="script" src="/js/script.js" defer></script>
        <link href="./css/bootstrap-utilities.css" rel="stylesheet">
        <title>Website | Kaine</title>
    </head>
    <body>
        <div>
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="" alt="" width="72" height="57">
                <h1 class="display-5 fw-bold">Lorem</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Eu consequat ac felis donec et. Nunc aliquet bibendum enim facilisis gravida neque convallis.
                        Dolor purus non enim praesent. Neque sodales ut etiam sit amet nisl.
                        Leo vel fringilla est ullamcorper. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida.
                        Convallis a cras semper auctor neque vitae tempus quam.
                        Platea dictumst quisque sagittis purus sit amet volutpat consequat. Viverra tellus in hac habitasse.
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Lorem</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Ipsum</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- NAVBAR-->
        <div class="container">
            <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-blue">
                <div class="container-fluid">
                    <img class="navbar-brand" src="./img/logo.png" alt="logo" height="45px" width="55px">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropup">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropup</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">lorem</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-light">
                        <p>hbdsjgvfdsgvdfv</p>
                    </div>
                </div>
            </nav>
        </div>
        <script src="./js/bootstrap.bundle.min.js" defer></script>
    </body>
<?php //include "./includes/footer.php" ?>