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

    <title>Maktab yangiliklari</title>

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
            top: 24%;
            right: 3%;
        }

        .navigationTabs {
            grid-template-columns: unset;
            margin: 0;
        }
        .navigationTabs a{
            margin: 20px 0;
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
                    <h1 class="pageTitle text-dark">Yangiliklar</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                            <li class="breadcrumb-item " aria-current="page">Yangiliklar</li>
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
        <div class="schoolNews">
            <div class="container">
                <div class="navigationTabs">
                    <a href="/uz/news/index" class="active" data-tab="tab1">
                        <i class="fas fa-newspaper"></i> Yangiliklar
                    </a>
                    <a href="/uz/announces/index" class="" data-tab="tab2">
                        <i class="fas fa-bullhorn"></i> E'lonlar
                    </a>
                </div>

                <div class="tab-content">
                    <!-- Content for Yangiliklar tab -->
                    <div class="tab-pane fade active show" id="tab1">
                        <div class="imageCardBoxes">
                            <div class="row">
                                @foreach($news as $new)
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <a href="{{ route('NewsShow', $new->slug) }}">
                                            <div class="imageBox">
                                                <img alt="image" src="{{ asset('storage/' . $new->image) }}">
                                            </div>
                                            <h1>{{ $new->title }}</h1>
                                            <span>{{ $new->created_at->format('d M Y') }}</span>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- Content for E'lonlar tab -->
                    <div class="tab-pane fade" id="tab2">
                        <div class="imageCardBoxes">
                            <a href="">
                                <div class="imageBox">
                                    <img alt="image" src="/image/329-maktab.jpg">
                                </div>
                                <h1>Rossiya universitetlarida taʼlim olmoqchimisiz? Unda koʻrgazmaga marhamat!</h1>
                                <span>04 Oktabr 2021</span>
                            </a>
                        </div>
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
    document.addEventListener("DOMContentLoaded", function () {
        // Get all tab links inside the navigationTabs div
        const tabLinks = document.querySelectorAll(".navigationTabs a");

        // Get all tab panes
        const tabPanes = document.querySelectorAll(".tab-content .tab-pane");

        // Add click event listeners to the tab links
        tabLinks.forEach(function (tabLink) {
            tabLink.addEventListener("click", function (event) {
                event.preventDefault();

                // Remove the 'active' class from all tab links and tab panes
                tabLinks.forEach(function (link) {
                    link.classList.remove("active");
                });
                tabPanes.forEach(function (pane) {
                    pane.classList.remove("active", "show");
                });

                // Add the 'active' class to the clicked tab link and corresponding tab pane
                const targetTabId = this.getAttribute("data-tab");
                const targetTabPane = document.getElementById(targetTabId);

                if (targetTabPane) {
                    this.classList.add("active");
                    targetTabPane.classList.add("active", "show");
                }
            });
        });
    });

</script>



</html>
