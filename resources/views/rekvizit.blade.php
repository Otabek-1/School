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

    <title>Rekvizit</title>

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
                    <h1 class="pageTitle text-dark">Rekvizitlar</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                            <li class="breadcrumb-item " aria-current="page">Rekvizitlar</li>
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
        <div class="container">
            <div class="page_content mb-5 mt-5"><b></b>
                <p></p>
                <p><strong>Federal byudjet daromadiga mablag' o'tkazish uchun Bosh daromad ma'muri sifatida
                        Vazirlikning rekvizitlari:</strong></p>

                <p>Qabul qiluvchi: mintaqalararo operatsion UFK (O'zbekiston Respublikasi&nbsp; Xalq ta'limi
                    vazirligi)</p>

                <p>INN: 9710062939</p>

                <p>KPP: 771001001</p>

                <p>Bank nomi: Aloqabank, Toshkent</p>

                <p>BIK: 24501901</p>

                <p>Hisob 3100643000000019500</p>
                <p></p>
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
