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

    <!-- Bootstrap core css -->
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
                        <h1 class="pageTitle text-dark">To'garaklar batafsil</h1>
                        <nav aria-label="breadcrumb">
                            <ol id="w5" class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                                <li class="breadcrumb-item " aria-current="page">To'garaklar batafsil</li>
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

                <!-- Togaraklar Detail -->
                <div class="container">

                    <div class="leaderInfo">
                        <div class="photo">
                            <img alt="image" src="{{ asset("image/shaxmat.jpg") }}" class="mt-5 me-4">
                        </div>

                        <div class="description">
                            <h1 class="staffTitle mb-4"><b class="me-1">{{ $dars->name }}</h1>



                            <div class="contactInfo">
                                <div>
                                    <i class="fa-solid fa-door-open"></i>
                                    <span>{{ $dars->work_days }}</span>
                                </div>

                                <div>
                                    <i class="far fa-clock"></i>
                                    <span>{{ $dars->work_time }}</span>
                                </div>

                                <div>
                                    <i class="fas fa-phone-alt"></i>
                                    <a href="tel:998 99 871 25 13">{{ $dars->teacher->number }}</a>
                                </div>

                                <div>
                                    <i class="fa-solid fa-child"></i>
                                    <?php

$classes = json_decode($dars->classes, true);


if (isset($classes['class']) && is_array($classes['class'])) {
    
    $classList = implode(', ', $classes['class']);
    echo "<a href=\"#\">{$classList} sinf</a>";
} else {
    echo "Noto'g'ri formatdagi ma'lumot!";
}
?>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="sections__line">


            </div>
        </section>
    </main>
    <!-- Main section End -->

    @include("layouts.footer")
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