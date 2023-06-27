<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('../css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/movestyle.css')}}">
    <link rel="stylesheet" href="{{asset('../css/home.css')}}">
    <link rel="shortchat icon" href="{{asset('../images/fav icon.png')}}" />

    <title>Movies</title>
</head>
<body style="background: #000;">


<header class="header" data-header>
    <div class="container">
        <div class="overlay" data-overlay></div>

        <a href="./index.html" class="logo">
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

            <button class="btn btn-primary"><a href="{{route('showadd')}}">Add</a></button>
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
                    <a href="{{route('movies')}}" class="navbar-link">Movie</a>
                </li>
                <li>
                    <a href="{{route('about')}}" class="navbar-link">about</a>
                </li>

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


<section class="top-rated">
    <div class="container">

        <h2 class="h2 section-title">The Categrey Of Movies</h2>

        <ul class="filter-list">
            @foreach($category as $move)
            <li>
                <button class="filter-btn">{{$move->category}}</button>
            </li>
            @endforeach

        </ul>
    </div>
</section>


<div class="warpper">
    @foreach($allMoves as $move)
    <div class="cards">
        <img src="{{asset('photo/'.$move->pathPhoto)}}" alt="">
        <div class="info">
            <div class="quality">{{$move->moveName}}</div>
            <section class="top-rateds">
                <div class="container">
                    <ul class="filter-lists">
                        <li>
                          <a class="filter-btns" href="{{route('moveDetails',$move->id)}}">Details</a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    @endforeach
</div>
</body>
</html>
