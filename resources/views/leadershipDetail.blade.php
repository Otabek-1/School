<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Rahbariyat batafsil</title>

    @include("layouts.header")
</head>
<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 18%;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 25%;
            right: 3%;
        }

        .leaderInfo {
            display: block;
        }

        .leaderInfo .photo {
            width: 100%;
        }

        .leaderInfo .photo img {
            width: 100%;
            text-align: center;
        }

        .leaderInfo .description .staffTitle {
            font-size: 22px;
            margin: 62px 0;
            margin-bottom: 0;
            text-transform: uppercase;
        }

        .contactInfo span {
            font-size: 16px;
        }
    }

    @media (max-width:375px) {
        .topMain-logo {
            position: absolute;
            top: 13%;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 25%;
            right: 3%;
        }

        .leaderInfo {
            display: block;
        }

        .leaderInfo .photo {
            width: 100%;
        }

        .leaderInfo .photo img {
            width: 100%;
            text-align: center;
        }

        .leaderInfo .description .staffTitle {
            font-size: 22px;
            margin: 17px 0;
            margin-bottom: 0;
            text-transform: uppercase;
        }

        .contactInfo span {
            font-size: 16px;
        }
    }
</style>

<body>
<!-- Header Start -->
<header>
    <div class="bannerBox">
        <!-- Header Nav Start -->
        @include("layouts.header-nav")
        <!-- Header Nav End -->

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">Rahbariyat batafsil</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                            <li class="breadcrumb-item " aria-current="page">Rahbariyat batafsil</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Image Header End -->

    </div>
</header>
<!-- Header End -->

<!-- Main section Start -->
<main>
    <section>
        <div class="leaderShip">

            <!-- Rahbariyat Detail -->
            <div class="container">

                <div class="leaderInfo">
                    <div class="photo">
                        <img alt="image" src="{{ asset($teacher->image) }}">
                    </div>

                    <div class="description">
                        <h1 class="staffTitle">{{ $teacher->fullname }}</h1>

                        <h2>{{ $teacher->lavozim->name }}</h2>

                        <div class="contactInfo">
                            <div>
                                <i class="far fa-clock"></i>
                                <span>{{ $teacher->work_time }}</span>
                            </div>

                            <div>
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:{{$teacher->number}}">{{ $teacher->number }}</a>
                            </div>

                            <div>
                                <i class="far fa-envelope-open"></i>
                                <a href="mailto:{{ $teacher->gmail }}">{{ $teacher->gmail }}</a>
                            </div>
                        </div>



                        <div class="collapseBox">
                            <a data-toggle="collapse" href="#collapseExample" role="button">Biografiya</a>

                            <div class="collapse" id="collapseExample">
                                <div class="item">{{ $teacher->biography }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="sections__line">


        </div>
        </div>
    </section>
</main>
<!-- Main section End -->

{{--@include("layouts.footer")--}}

<footer>
    <div class="footer mt-5">
        <div class="container">
            <div class="row">
                <ul class="footer_menu">
                    <li>
                        <a href="https://vacancy.argos.uz/">Bo'sh ish o'rinlari</a>
                    </li>
                    <li>
                        <a href="{{ route("schoolrules") }}">Maktab qonun qoidalari</a>
                    </li>
                    <li>
                        <a href="{{ route("faq") }}">Tez-tez beriladigan savollar</a>
                    </li>
                    <li>
                        <a href="{{ route("symbols") }}">Davlat ramzlari</a>
                    </li>
                </ul>
            </div>
            <div class="footer_contact-left">
                <a href="#">
                    <i class="fab fa-instagram"></i>
                    <span>@halimaxudoyberdiyeva</span>
                </a>
                <a href="#">
                    <i class="fas fa-envelope"></i>
                    <span>halimaxudoyberdiyeva@maktab.uz</span>
                </a>
            </div>
            <div class="footer_contact-right">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                    <span>@halimaxudoyberdiyeva</span>
                </a>
                <a href="#">
                    <i class="fab fa-telegram-plane"></i>
                    <span>@halimaxudoyberdiyeva</span>
                </a>
            </div>
            <div class="footer_logo">
                    <span>
                        <img src="./image/Gerb.png" alt="Logo" width="20%">
                    </span>
                <a href="">
                    Halima Xudoyberdiyeva nomidagi ijod maktabi
                    <i>Guliston shahar</i>
                </a>
            </div>


            <a href="#" class="it_live-logo">
                <img src="./image/It live logo for red-04-04.png" alt="IT_Live" width="10%">
            </a>
            <span class="year_text">
                    © 2020-2024 Barcha huquqlar himoyalangan
                </span>
        </div>
    </div>
</footer>
<!-- Footer End -->

</body>



<!-- Js -->
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/tilt.jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="/js/wow.min.js"></script>

<!-- Js -->
<!-- Js -->
<script>
    $(document).ready(function () {
        $(".searchBtn").click(function (e) {
            e.preventDefault();
            $(".mainSearchForm").toggleClass("active");
        });

        $(".closeBtn").click(function (e) {
            e.preventDefault();
            $(".mainSearchForm").removeClass("active");
        });

        const bigMenuBtn = document.querySelector('.bigMenuBtn');
        const overlay = document.querySelector('.overlay');

        bigMenuBtn.addEventListener('click', function () {
            this.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });


        $('.js-tilt').tilt({
            scale: 1.2
        })

    });
</script>

</html>
