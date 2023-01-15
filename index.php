<?php

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
        <nav class="nav">
            <!-- NAVIGATION -->
            <div class="container">
                <header class="d-flex align-items-center py-3 mb-4 border-bottom">
                    <div class="badge bg-primary text-wrap" style="width: 8rem;">
                        <h2 class="fw-semibold">KAINE</h2>
                    </div>
                    <ul class="nav col-12 col-md-auto mb-2 justify-content-end mb-md-0">
                        <li><a href="./pages/about-me.php" class="nav-link px-2 link-dark">Over mij</a></li>
                        <li><a href="./pages/portfolio.php" class="nav-link px-2 link-dark">Portfolio</a></li>
                        <li><a href="./pages/contact.php" class="nav-link px-2 link-dark">Contact</a></li>
                    </ul>
                    <!-- DARK MODE -->
                    <div class="justify-content-end form-check form-switch">
                        <input type="checkbox" id="toggleDarkmode" class="form-check-input toggleDarkmode bi bi-moon-stars">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-moon-stars" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                        </svg>
                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                    </div>
                </header>
            </div>
        </nav>
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
    </body>
<?php include "./includes/footer.php" ?>