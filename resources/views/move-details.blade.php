<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Guy 2021</title>

    <!--
      - favicon
    -->
    <!-- <link rel="shortcut icon" href="../readme-images/favicon.svg" type="image/svg+xml"> -->
    <link rel="shortchat icon" href="{{asset('../images/fav icon.png')}}" />

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="{{asset('../css/home.css')}}">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="#top">
<!--
  - #HEADER
-->

<header class="header" data-header>
    <div class="container">

        <div class="overlay" data-overlay></div>

        <a href="./index.html" class="logo">
            <img src="{{asset('../images/logo.svg')}}" alt="Filmlane logo">
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
                    <img src="{{asset('../images/logo.svg')}}" alt="Filmlane logo">
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

<main>
    <article >
        <section class="movie-detail" style=" background: url({{asset('photo/'.$details->pathBackground)}}) no-repeat;background-size: cover;">
            <div class="container">
                <figure class="movie-detail-banner">

                    <img src="{{asset('photo/'.$details->pathPhoto)}}" alt="Free guy movie poster">

                    <button class="play-btn">
                        <ion-icon name="play-circle-outline"></ion-icon>
                    </button>

                </figure>

                <div class="movie-detail-content">

                    <p class="detail-subtitle">New Episodes</p>

                    <h1 class="h1 detail-title">
                        {{$details->moveName}} <strong></strong>
                    </h1>

                    <div class="meta-wrapper">

                        <div class="badge-wrapper">
                            <div class="badge badge-fill">{{$details->country}}</div>

                            <div class="badge badge-outline">{{$details->quality}}</div>
                        </div>

                        <div class="ganre-wrapper">
                            <a href="#">{{$details->category}},</a>
                        </div>

                        <div class="date-time">

                            <div>
                                <ion-icon name="calendar-outline"></ion-icon>

                                <time datetime="2021">{{$details->ReleaseDate}}</time>
                            </div>

                            <div>
                                <ion-icon name="time-outline"></ion-icon>

                                <time datetime="PT115M">115 min</time>
                            </div>

                        </div>

                    </div>

                    <p class="storyline">
                        {{$details->summary}}
                    </p>

                    <div class="details-actions">

                        <button class="share">
                            <ion-icon name="share-social"></ion-icon>

                            <span>Share</span>
                        </button>

                        <div class="title-wrapper">
                            <p class="title">Prime Video</p>

                            <p class="text">Streaming Channels</p>
                        </div>

                        <button class="btn btn-primary">
                            <ion-icon name="play"></ion-icon>

                            <span>Watch Now</span>
                        </button>

                    </div>

                    <a href="{{asset('photo/'.$details->pathPhoto)}}" download class="download-btn">
                        <span>Download</span>

                        <ion-icon name="download-outline"></ion-icon>
                    </a>

                </div>

            </div>
        </section>
    </article>
</main>








<!--
  - custom js link
-->
<script src="{{asset('../js/script.js')}}"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
