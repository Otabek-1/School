<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Site Metas -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />

<title>Asosiy</title>
@include("layouts.header")

<body>
<!-- Header Start -->
<header>
    <div class="bannerBox">
        <!-- Header Nav Start -->
        @include("layouts.header-nav")
        <!-- Header Nav End -->


        <!-- Big logo start -->
        <div class="bigBannerContent" style="background-image: url('image/329-maktab.jpg');">
            <div class="bannerContent">
                <div class="container-fluid">
                    <div class="row">
                        <div class="logoTextBox">
                            <div class="col-12"></div>
                            <h1 class="logoTextBox__title text-center">
                                <b>Halima Xudoyberdiyeva nomiadgi ijod <br> maktabi</b> <br>
                                Guliston shahar
                            </h1>
                            <div class="quote text-center">
                                <p class="">"Yangi O'zbekiston - maktab ostonasidan boshlanadi"</p>
                                <span class="">Shavkat Mirziyoyev</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Big Logo end -->
    </div>
</header>
<!-- Header End -->


<!-- Main Section Start -->
<main>
    <section>
        <div class="container">
            <!-- Service List Start  -->
            <div class="mainServicesList">
                <a href="{{route("education")}}">
                    <div class="icon">
                        <img alt="icon" src="image/oquvchi.png" width="45%" style="margin-left: 60px;">
                    </div>
                    <h1>O'quvchilarga</h1>
                    <div class="description">
                        <p>2-sinf dars jadvali</p>
                        <p>1-sinf dars jadvali</p>
                        <p>8-sinf dars jadvali</p>
                        <p>4-sinf dars jadvali</p>
                    </div>

                    <button type="button">Batafsil</button>
                </a>
                <a href="#">
                    <div class="icon">
                        <img alt="icon" src="image/Ota-ona.png" width="45%" style="margin-left: 75px;">
                    </div>
                    <h1>Ota-onalarga</h1>
                    <div class="description">

                    </div>

                    <button type="button">Batafsil</button>
                </a>
                <a href="#">
                    <div class="icon">
                        <img alt="icon" src="image/oqtuvchi.png" width="45%" style="margin-left: 80px;">
                    </div>
                    <h1>O'qituvchilarga</h1>
                    <div class="description">

                    </div>

                    <button type="button">Batafsil</button>
                </a>
            </div>
            <!-- Service List End -->


            <!-- School Info Start  -->
            <div class="row">
                <h1 class="text-center text-uppercase mt-5 title">Maktab haqida qisqacha</h1>
                @foreach($schoolInfos as $info)
                    <div class="col-lg-3 col-md-6">
                        <div class="school_info" data-tilt data-tilt-scale="1.1">
                            <h2>{{ $info->info_count }}</h2>
                            <p>{{ $info->info_name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- School Info End -->


            <hr class="sections__line">
            <!-- Online School Come Start -->
            <div class="onlineSchool">
                <div class="row">
                    <div class="col-lg-6 col-md-12 text-md-center d-md-inline-block d-flex align-items-center wow fadeInLeft"
                         data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="onlineSchool__info ">
                            <h1>Agar siz maktabga <br> bora olmasangiz, <br> maktab sizning <br> uyingizga borishi
                                <br> mumkin.
                            </h1>
                            <p>Maktab.uz - bu xalqaro standartlarga javob beradigan va <br> maktab o'quvchilari
                                uchun
                                yuqori
                                sifatli uzluksiz <br> masofaviy ta'limni ta'minlaydigan ilg'or raqamli ta'lim <br>
                                texnologiyasi.
                                Platforma o'qituvchilarga ham, ota -onalarga <br> ham o'quvchilarning rivojlanish
                                darajasini
                                kuzatish va mavzular <br> mazmuni bilan tanishish uchun keng imkoniyatlar beradi.
                            </p>
                            <button class="btns" type="button">Batafsil</button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="onlineSchool__img">
                            <img src="image/onlineSchool2.png" width="75%" alt="OnlineSchool">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Online School Come End -->

            <hr class="sections__line">

            <!-- Section News Start -->
            <div class="news">
                <div class="row mb-4">
                    @foreach($news as $new)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                            <a href="{{ route('NewsShow', $new->slug) }}">
                                <div class="imageBox">
                                    <img alt="image" src="{{ asset('storage/' . $new->image) }}" width="170px">
                                </div>
                                <h1>{{ $new->title }}</h1>
                                <span>{{ $new->created_at->format('d M Y') }}</span>
                            </a>
                        </div>
                    @endforeach


                </div>

            </div>
            <!-- Section News End -->

            <hr class="sections__line mt-0">

            <!--Map Section Start  -->
            <div class="mapArea">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3034.2750964654474!2d68.77841167653314!3d40.491299451096694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b2074809652c0f%3A0x1c1b5182fc5527b5!2sHalima%20Xudiyberdiyeva%20nomidagi%20ijod%20maktabi!5e0!3m2!1suz!2s!4v1735298701546!5m2!1suz!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!--Map Section End  -->

            <hr class="sections__line mt-5">

            <!-- Contact Section Start -->
            <div class="contact">
                <h1 class="text-center text-uppercase mb-5 title title_map">Biz bilan bog'laning</h1>
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <form action="{{ route("sendEmail") }}" method="post">
                            @csrf()
                            <div class="row contact_row1">
                                <div class="col-6">
                                    <input type="text" placeholder="I.F.Sh" name="name">
                                </div>
                                <div class="col-6">
                                    <input type="email" placeholder="E.pochta" name="email">
                                </div>
                            </div>
                            <div class="row contact_row2">
                                <div class="col-6">
                                    <input type="tel" value="+998" placeholder="Telefon" name="phone">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Mavzu" name="theme">
                                </div>
                            </div>
                            <div class="row contact_row3">
                                <div class="col-12">
                                    <input type="text" placeholder="Xabarlar" name="message">
                                    <button type="submit" class="contact_btn text-center">Yuborish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <h2 class="mb-3 contact__title">Halima Xudoyberdiyeva nomidagi ijod maktabi</h2>

                        <table id="w9" class="table table-striped table-bordered detail-view">
                            <tbody>
                            <tr>
                                <th>Mudir:</th>
                                <td>To'ychiyev Zafar Nordonqulovich</td>
                            </tr>
                            <tr>
                                <th>Telefon:</th>
                                <td>+99899-477-55-30</td>
                            </tr>
                            <tr>
                                <th>Faks:</th>
                                <td>+99899-477-55-30</td>
                            </tr>
                            <tr>
                                <th>Instagram:</th>
                                <td>@h_xudoyberdiyeva</td>
                            </tr>
                            <tr>
                                <th>Telegram:</th>
                                <td>@hxudoyberdiyeva</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->

            <hr class="sections__line mt-5">

            <!-- Useful Links Start -->
            <div class="usefulLinks">
                <div class="container">
                    <h1 class="mb-5">Foydali havolalar</h1>
                    <div class="slider">
                        <a href="">
                            <div class="slider_content">
                                <img src="image/gerb_slider.png" width="10%" alt="Image 1">
                                <h1>O'zbekiston respulikasi davlat maktabi 1</h1>
                            </div>
                        </a>
                        <a href="">
                            <div class="slider_content">
                                <img src="image/Oliy majlis.jpg" width="10%" alt="Image 1">
                                <h1>O'zbekiston Respublikasi hukumat portali</h1>
                            </div>
                        </a>
                        <a href="">
                            <div class="slider_content">
                                <img src="image/mygovUz.jpg" width="10%" alt="Image 1">
                                <h1>Yagona interaktiv davlat xizmatlari</h1>
                            </div>
                        </a>
                        <a href="">
                            <div class="slider_content">
                                <img src="image/gerb_slider.png" width="10%" alt="Image 1">
                                <h1>O'zbekiston respulikasi davlat maktabi 1</h1>
                            </div>
                        </a>
                        <a href="">
                            <div class="slider_content">
                                <img src="image/gerb_slider.png" width="10%" alt="Image 1">
                                <h1>O'zbekiston respulikasi davlat maktabi 1</h1>
                            </div>
                        </a>
                        <a href="">
                            <div class="slider_content">
                                <img src="image/gerb_slider.png" width="10%" alt="Image 1">
                                <h1>O'zbekiston respulikasi Prezidentining virtual portali</h1>
                            </div>
                        </a>
                        <a href="">
                            <div class="slider_content">
                                <img src="image/mygovUz.jpg" width="10%" alt="Image 1">
                                <h1>Respulika Bolalar kutubxonasi</h1>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Useful Links End -->

        </div>
    </section>
</main>
<!-- Main Section End -->

<!-- Footer Start  -->
@include("layouts.footer")
</html>
