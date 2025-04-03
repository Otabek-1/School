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

    <title>Rahbariyat</title>

    @include("layouts.header")
</head>
<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 14%;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 24%;
            right: 3%;
        }

        .mainLeader {
            display: inline-block;
            width: 0;
        }

        .mainLeader .details {
            padding: 38px 0;
        }

        .mainLeader .details h1 {
            font-size: 27px;
            padding-left: 2px;
            margin-bottom: 25px;
        }

        .mainLeader .details span {
            padding-left: 2px;
        }

        .mainLeader .details span::after {
            top: -25%;
            left: 71%;
        }

        .deputy_director {
            margin-top: 67px;
            padding-left: 94px;
        }

        .mainLeader img {
            margin-left: 52px;
        }

        .mainLeader .details h1 {
            font-size: 27px;
            padding-left: 52px;
            margin-bottom: 25px;
        }

        .mainLeader .details span {
            padding-left: 52px;
        }
    }

    @media (max-width:375px) {
        .mainLeader {
            display: inline-block;
            width: 0;
        }

        .mainLeader .details {
            padding: 38px 0;
        }

        .mainLeader img {
            margin-left: 52px;
        }

        .mainLeader .details h1 {
            font-size: 27px;
            padding-left: 52px;
            margin-bottom: 25px;
        }

        .mainLeader .details span {
            padding-left: 52px;
        }

        .mainLeader .details span::after {
            top: -25%;
            left: 71%;
        }

        .deputy_director {
            margin-top: 67px;
            padding-left: 94px;
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
                    <h1 class="pageTitle text-dark">Rahbariyat</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                            <li class="breadcrumb-item " aria-current="page">Rahbariyat</li>
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

            <!-- Direktor -->
            <div class="container">
                @foreach($teachers as $teacher)
                    @if($teacher->lavozim_id == 1)
                        <div class="container">
                            <a href="{{ route("leaderShipDetail", $teacher->id) }}" class="mainLeader">
                                <img alt="Director" src="{{ asset($teacher->image) }}">
                                <div class="details">
                                    <h1>{{ $teacher->fullname }}</h1>
                                    <span>{{ $teacher->lavozim->name }}</span>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <hr class="sections__line">

            <!-- ZAM Direktors -->
            <div class="container deputy_director">
                <div class="row">
                    @foreach($teachers as $teacher)
                        @if($teacher->lavozim && $teacher->lavozim->id != 1)  <!-- Lavozim mavjud bo'lsa va lavozim id = 1 bo'lmasa -->
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <a href="{{ route("leaderShipDetail", $teacher->id) }}" class="deputy_director-main">
                                <img src="{{ asset($teacher->image) }}" width="60%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1>{{ $teacher->fullname }}</h1>
                                    <span>{{ $teacher->lavozim->name }}</span>  <!-- Lavozimning nomini chiqarish -->
                                </div>
                            </a>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
<!-- Main section End -->

@include("layouts.footer")
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
