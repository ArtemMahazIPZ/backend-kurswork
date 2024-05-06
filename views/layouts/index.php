<?php
/** @var string $Title */
/** @var string $Content */
if (empty($Title))
    $Title = '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $Title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .login-button {
        background-color: darkorange;
        color: white;
        font-size: 14px;
        padding: 8px 20px;
        border-radius: 50px;
        text-decoration: none;
    }

    .login-button:hover {
        background-color: yellow;
    }
    .navbar-brand{
        font-family: "Montserrat", sans-serif;
    }
    .navbar-toggler{
        border: none;
        font-size: 1.25rem;
    }
    .navbar-toggler:focus, .btn-close:focus{
        box-shadow: none;
        outline: none;
    }
    .nav-link{
        color: lightgray;
        font-weight: 500;
        position: relative;
    }
    .nav-link:hover, .nav-link.active{
        color: white;
    }
    .nav-link::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        visibility: hidden;
        height: 2px;
        background-color: darkorange;
        transition: 0.2s ease-in-out;
    }
    .nav-link:hover::before{
        width: 100%;
        visibility: visible;
    }
    .dropdown-toggle::after{
        display: none !important;
    }

</style>
<body>
<div class="container">
    <header class="p-3 mb-3 border-bottom">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand me-auto" href="/"><span class="text-warning">Lyceum</span><span class="text-primary">69</span></a>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Lyceum69</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mx-lg-2 active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Про нас
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Історія закладу</a></li>
                                    <li><a class="dropdown-item" href="#">Вище керівництво</a></li>
                                    <li><a class="dropdown-item" href="#">Вчителі</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mx-lg-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Наші учні
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">5 клас</a></li>
                                    <li><a class="dropdown-item" href="#">6 клас</a></li>
                                    <li><a class="dropdown-item" href="#">7 клас</a></li>
                                    <li><a class="dropdown-item" href="#">8 клас</a></li>
                                    <li><a class="dropdown-item" href="#">9 клас</a></li>
                                    <li><a class="dropdown-item" href="#">10 клас</a></li>
                                    <li><a class="dropdown-item" href="#">11 клас</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Новини</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Курси та гуртки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Контакти</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <a href="#" class="login-button">Увійти в акаунт</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <div>
        <h1><?= $Title ?></h1>
        <?= $Content ?>
    </div>
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">На головну</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Про нас</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Контакти</a></li>
        </ul>
        <p class="text-center text-body-secondary">&copy; 2024 Ліцей №69</p>
        <p class="text-center text-body-secondary">м. Житомир, бульвар Іпатія Потія, 69</p>
    </footer>
</div>
</body>
</html>
