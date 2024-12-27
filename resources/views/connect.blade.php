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

    <title>Bog'lanish</title>

   @include("layouts.header")
</head>

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
                    <h1 class="pageTitle text-dark">Bog'lanish</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                            <li class="breadcrumb-item " aria-current="page">Bog'lanish</li>
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
        <div class="connect">
            <div class="container">
                <!--Map Section Start  -->
                <div class="mapArea">
                    <div class="row">
                        <div class="col-12 mt-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6131044.44664104!2d64.608575!3d41.381166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b20750bb92946b%3A0x54012c9057e544c8!2s11-%20umumiy%20o%CA%BBrta%20ta%CA%BClim%20maktabi!5e0!3m2!1sru!2s!4v1694608189347!5m2!1sru!2s"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <!--Map Section End  -->

                <hr class="sections__line mt-5">

                <!-- Contact Section Start -->
                <div class="contact">
                    <h1 class="text-center text-uppercase mb-5 title title_map">Biz bilan bog'laning</h1>
                    <div class="row">
                        <div class="col-md-7">
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
                        <div class="col-md-5">
                            <h2 class="mb-3">Halima Xudoyberdiyeva nomidagi ijod maktabi</h2>

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
                                    <td>@hxudoyberiyeva</td>
                                </tr>
                                <tr>
                                    <th>Telegram:</th>
                                    <td>@h_xudoyberdiyeva</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Contact Section End -->
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
