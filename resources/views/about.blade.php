<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('../css/home.css')}}" />
    <link rel="stylesheet" href="{{asset('../css/about.css')}}" />
    <script src="{{asset('../js/JQuery3.3.1.js')}}"></script>
    <script src="{{asset('../js/lightslider.js')}}"></script>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header class="header" data-header>
    <div class="container">
        <div class="overlay" data-overlay></div>

        <a href="#" class="logo">
            <img src="{{asset('../images/logo.svg')}}" alt="Filmlane logo" />
        </a>

        <div class="header-actions">
            <button class="search-btn">
                <ion-icon name="search-outline"></ion-icon>
            </button>

            <div class="lang-wrapper">
                <label for="language">
                    <ion-icon name="globe-outline"></ion-icon>
                </label>

                <select name="language" id="language">
                    <option value="en">EN</option>
                    <option value="au">AU</option>
                    <option value="ar">AR</option>
                    <option value="tu">TU</option>
                </select>
            </div>

        </div>

        <button class="menu-open-btn" data-menu-open-btn>
            <ion-icon name="reorder-two"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>
            <div class="navbar-top">
                <a href="./index.html" class="logo">
                    <img src="{{asset('../images/logo.svg')}}" alt="Filmlane logo" />
                </a>

                <button class="menu-close-btn" data-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <ul class="navbar-list">
                <li>
                    <a href="{{route('home')}}" class="navbar-link">Home</a>
                </li>

                <li>
                    <a href="{{route('movies')}}" class="navbar-link">Movies</a>
                </li>
                <li>
                    <a href="{{route('about')}}" class="navbar-link">about</a>
                </li>
                <!--  -->
            </ul>

            <ul class="navbar-social-list">
                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-pinterest"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>



<!-- Home -->
<section class="home" id="home">
    <div class="home-text">
        <h3>Hello I'm</h3>
        <h1>Mohamed Wael </h1>
        <h5>A Full-Stack Web Devoleper <span>From Egypt</span></h5>
        <p>Able to use html - Css - Bootstarp - jquery - JS - MySQL - Laravel - PHP languages</p>

        <div class="social">
            <a href="https://www.facebook.com/profile.php?id=100008314851604&mibextid=ZbWKwL"><i class='bx bxl-facebook'></i></a>
            <a href="https://www.instagram.com/mohamed_wael_200?r=nametag"><i class='bx bxl-instagram' ></i></a>
            <a href="#"><i class='bx bxl-linkedin' ></i></a>
            <a href="https://wa.me/qr/R2OVJZZ2LAE2J1"><i class='bx bxl-whatsapp' ></i></a>
        </div>
        <!-- <a href="#" class="btn">About Me</a> -->
    </div>

    <div class="home-img">
        <img src="{{asset('../images/IMG-20210408-WA0082.jpg')}}">
    </div>
</section>
</body>
</html>
