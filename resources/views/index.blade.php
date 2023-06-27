<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('../css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('../css/lightslider.css')}}" />
    <link rel="stylesheet" href="{{asset('../css/home.css')}}" />
    <script src="{{asset('../js/JQuery3.3.1.js')}}"></script>
    <script src="{{asset('../js/lightslider.js')}}"></script>

    <!-- icon -->
    <link rel="shortchat icon" href="{{asset('../images/fav icon.png')}}" />
    <!-- font Osam -->
    <script
        src="https://kit.fontawesome.com/c8e4d183c2.js"
        crossorigin="anonymous"
    ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>
<body>


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

            <button class="btn btn-primary" ><a href="{{route('showadd')}}">Add</a></button>
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

<main>
    <article>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <p class="hero-subtitle">Filmlane</p>

                    <h1 class="h1 hero-title">
                        Unlimited <strong>Movie</strong>, TVs Shows, & More.
                    </h1>

                    <div class="meta-wrapper">
                        <div class="badge-wrapper">
                            <div class="badge badge-fill">PG 18</div>

                            <div class="badge badge-outline">HD</div>
                        </div>

                        <div class="ganre-wrapper">
                            <a href="#">Romance,</a>

                            <a href="#">Drama</a>
                        </div>

                        <div class="date-time">
                            <div>
                                <ion-icon name="calendar-outline"></ion-icon>

                                <time datetime="2022">2022</time>
                            </div>

                            <div>
                                <ion-icon name="time-outline"></ion-icon>

                                <time datetime="PT128M">128 min</time>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </article>
</main>

<!--  -->

<!-- Section -->
<section id="main">
    <h1 class="showcase-heading dark">Top Rate</h1>

    <ul id="autoWidth" class="cs-hidden">
        @foreach($bestMoves as $move)
        <li class="item-a">
            <div class="showcase-box">
                <a href="{{route('moveDetails',$move->id)}}"><img src="{{asset('photo/'.$move->pathPhoto)}}" alt="" /></a>
            </div>
        </li>
        @endforeach
    </ul>
</section>



<div class="movies-heading">
    <h2 class="n">Best Movies</h2>
</div>

<section id="movis-list">
    @foreach($limitMoves as $move)
    <div class="movies-box">
        <div class="movies-img">
            <div class="quality">{{$move->moveName}}</div>
            <img src="{{asset('photo/'.$move->pathPhoto)}}" alt="" />
        </div>
        <a href="#">
            {{$move->summary}}
        </a>
        <form action="{{route('moveDetails',$move->id)}}" method="get">
        <button  class="details-move">Watch</button>
        </form>
    </div>
    @endforeach

</section>

<div class="btns">
    <a href="#">See More</a>
</div>

<!-- footer -->
<footer>
    <p>Good Movies</p>
    <p>copyright 2020 Mohamed Wael Moahmed</p>
</footer>


<!-- Loddrer -->
<!-- <div class="loder-container">
  <img src="../img/371 (1).gif" alt="" />
</div> -->

<!-- slider Script -->
<script src="{{asset('../js/loder.js')}}"></script>
<script src="{{asset('../js/script.js')}}"></script>

<script>
    $(document).ready(function () {
        $("#autoWidth,#autoWidth2").lightSlider({
            autoWidth: true,
            loop: true,
            onSliderLoad: function () {
                $("#autoWidth,#autoWidth2").removeClass("cS-hidden");
            },
        });

        $(".n").mouseenter(function () {
            $(this).css({ "font-size": "30px" });
        });
        $(".n").mouseleave(function () {
            $(this).css({ "font-size": "1.7rem" });
        });
        $(".fa").click(function () {
            $("body").css({ "background-color": "black", color: "white" }),
                $("a").css({ color: "white" }),
                $(".movies-box").css({ border: "1px white" }),
                $(".movies-heading").css({ border: "1px white" }),
                $("p").css({ color: "white" }),
                $("strong").css({ color: "white" }),
                $(".latest-box").css({
                    "background-color": "black",
                    color: "white",
                }),
                $("#main").css({ "background-color": "black", color: "white" }),
                $(".showcase-heading").css({ color: "white" }),
                $("nav").css({ "background-color": "black", color: "white" });
        });
    });
</script>

</body>
</html>
