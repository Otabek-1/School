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

    <title>Foydali resurslar</title>

   @include("layouts.header")
</head>
<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 17%;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 24%;
            right: 3%;
        }

        .projectsList {
            grid-template-columns: unset;
        }
        .projectsList .item, .projectsList a.item {
            padding: 40px 0;
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
                    <h1 class="pageTitle text-dark">Foydali resurslar</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                            <li class="breadcrumb-item " aria-current="page">Foydali resurslar</li>
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
        <div class="useful-links">
            <div class="container">

                <div class="projectsList">

                    <a class="item" href="usefulResursDetail.html">
                        <img alt="logo" src="/image/Useful-links.jpg">
                        <div class="description">
                            <h1>Edukids</h1>
                            <h3>EduKids - o‘quvchi-yoshlar uchun mo‘ljallangan bo‘lib, yosh avlodni kelajakda
                                muvaffaqiyatga erishish va o‘z ustida ishlashga chaqirish, shuningdek o‘quvchilarda
                                ma’lum bir mavzular bo‘yicha aniq tasavvurni shakllantirishga qaratilgan 100 dan
                                ortiq ilmiy-ommabop animasion dayjestlar to‘plamidir.
                            </h3>
                        </div>
                    </a>

                    <a class="item" href="usefulResursDetail.html">
                        <img alt="logo" src="/image/Useful-links.jpg">
                        <div class="description">
                            <h1>Maktab.uz</h1>
                            <h3>Masofaviy ta’lim platformasi. Ushbu platforma masofaviy ta’lim jarayonini amaliyotga
                                keng joriy etish, ta’lim berishda innovatsion shakl va usullaridan samarali
                                foydalanish, sinflar kesimida barcha mavzular bo‘yicha videodarslar bazasini
                                yaratish imkoniyatini beradi.
                            </h3>
                        </div>
                    </a>

                    <a class="item" href="usefulResursDetail.html">
                        <img alt="logo" src="/image/Useful-links.jpg">
                        <div class="description">
                            <h1>Uzbekcoders.uz</h1>
                            <h3>Dasturlashni o‘rganish uchun ochiq va bepul onlayn platforma.Ushbu onlayn
                                portal 4 ta yo‘nalish (ma’lumotlar tahlili (Data analysis), android ilovalar
                                (Android), Front-End, Full-Stack) bo‘yicha istagan kishiga IT-mutaxassisliklarni
                                mutlaqo bepul o‘rganish imkoniyatini beradi.
                            </h3>
                        </div>
                    </a>

                    <a class="item" href="usefulResursDetail.html">
                        <img alt="logo" src="/image/Useful-links.jpg">
                        <div class="description">
                            <h1>Onlinedu.uz</h1>
                            <h3>Uzluksiz kasbiy ta’lim platformasi.
                            </h3>
                        </div>
                    </a>

                    <a class="item" href="usefulResursDetail.html">
                        <img alt="logo" src="/image/Useful-links.jpg">
                        <div class="description">
                            <h1>Ish.uzedu.uz</h1>
                            <h3>Ushbu tizim bo‘sh ish o‘rinlari bo‘yicha ma’lumotlarni e’lon qilish va malakali
                                kadrlarni topishga hamda ularni ish bilan ta'minlash imkoniyatini yaratadi.
                            </h3>
                        </div>
                    </a>

                    <a class="item" href="#">
                        <img alt="logo" src="/image/Useful-links.jpg">
                        <div class="description">
                            <h1>Smartland</h1>
                            <h3>Interfaol virtual ta’lim platformasi. Ushbu ta’lim platformasi orqali bolalar bo‘sh
                                vaqtlarini mazmunli o‘tkazishlari uchun interaktiv ko‘rinishdagi mantiqiy o‘yinlar
                                to‘plamidan foydalanishlari mumkin.
                            </h3>
                        </div>
                    </a>
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
