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

    <title>Ta'lim</title>

    @include("layouts.header")
</head>

<style>
    @media (max-width: 412px) {
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

        .servicesList {
            grid-template-columns: unset;
        }

        .servicesList a {
            padding: 20px 0;
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
                    <h1 class="pageTitle text-dark">Ta'lim</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                            <li class="breadcrumb-item" aria-current="page">Ta'lim</li>
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
        <div class="main_tabs" style="padding: 10px 0;">
            <div class="container">
                <div class="serviceTabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab"
                               aria-controls="tab1" aria-selected="true">1-smena</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab"
                               aria-controls="tab3" aria-selected="false">Qo'shimcha darslar</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content mt-5">
                    <!-- 1-smena -->
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="servicesList flex items-center justify-center">

                            <a href="{{ asset('image/jadval-7-a.jpg') }}" download="7a-sinf_dars_jadvali.jpg">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>7-A sinf dars jadvali</span>
                                </div>
                                <span>7-A sinf dars jadvali</span>
                            </a>

                            <a href="{{ asset('image/jadval-7-b.jpg') }}" download="7b-sinf_dars_jadvali.jpg">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>7-B sinf dars jadvali</span>
                                </div>
                                <span>7-B sinf dars jadvali</span>
                            </a>


                            <a href="{{ asset('image/jadval-8-a.jpg') }}" download="8a-sinf_dars_jadvali.jpg">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>8-A sinf dars jadvali</span>
                                </div>
                                <span>8-A sinf dars jadvali</span>
                            </a>

                            <a href="{{ asset('image/jadval-8-b.jpg') }}" download="8b-sinf_dars_jadvali.jpg">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>8-B sinf dars jadvali</span>
                                </div>
                                <span>8-B sinf dars jadvali</span>
                            </a>

                            <a href="{{ asset('image/jadval-9-a.jpg') }}" download="9a-sinf_dars_jadvali.jpg">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>9-A sinf dars jadvali</span>
                                </div>
                                <span>9-A sinf dars jadvali</span>
                            </a>

                            <a href="{{ asset('image/jadval-9-b.jpg') }}" download="9b-sinf_dars_jadvali.jpg">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>9-B sinf dars jadvali</span>
                                </div>
                                <span>9-B sinf dars jadvali</span>
                            </a>

                            <a href="{{ asset('image/jadval-10-a.jpg') }}" download="10a-sinf_dars_jadvali.jpg">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>10-A sinf dars jadvali</span>
                                </div>
                                <span>10-A sinf dars jadvali</span>
                            </a>


                            <a href="{{ asset('image/jadval-10-b.jpg') }}" download="10b-sinf_dars_jadvali.jpg">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>10-B sinf dars jadvali</span>
                                </div>
                                <span>10-B sinf dars jadvali</span>
                            </a>

                            <a href="{{ asset('image/jadval-11-a.jpg') }}" download="11-sinf_dars_jadvali.jpg">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>11-A sinf dars jadvali</span>
                                </div>
                                <span>11-A sinf dars jadvali</span>
                            </a>

                            <a href="{{ asset('image/jadval-11-b.jpg') }}" download="11b-sinf_dars_jadvali.jpg">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>11-B sinf dars jadvali</span>
                                </div>
                                <span>11-B sinf dars jadvali</span>
                            </a>
                        </div>
                    </div>

                    <!-- Qo'shimcha Darslar -->
                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                        <div class="servicesList">
                            @foreach($qoshimchaDarslar as $qoshimchaDars)
                                <a href="">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="/image/book svg.jfif">
                                        </div>
                                        <span>{{ $qoshimchaDars->name }}</span>
                                    </div>
                                    <span>{{ $qoshimchaDars->name }}</span>
                                </a>
                            @endforeach



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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Initialize the tab navigation on page load
        $('#myTab a').on('click', function (e) {
            e.preventDefault();

            // Remove active class from all links
            $('#myTab a').removeClass('active');
            // Add active class to the clicked link
            $(this).addClass('active');

            // Get the target tab from the href attribute
            var targetTab = $(this).attr('href');

            // Hide all tabs
            $('.tab-pane').removeClass('show active');
            // Show the clicked tab content
            $(targetTab).addClass('show active');
        });
    });
</script>
</body>

</html>
