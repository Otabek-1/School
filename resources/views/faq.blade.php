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

    <title>Savollar</title>

    <!-- Bootstrap core css -->
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
                    <h1 class="pageTitle text-dark">Tez-tez beriladigan savollar</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                            <li class="breadcrumb-item " aria-current="page">Tez-tez beriladigan savollar</li>
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
        <div class="faq">
            <div class="container">
                <div class="collapse_Faq">
                    <div class="row">
                        <div class="col-12" style="border: 1px solid #ece1e1; padding: 20px;">
                            <a href="">Nima uchun 9-sinf bitiruvchilariga asosiy taʼlim toʻgʻrisidagi hujjatning asl
                                nusxasi berilmaydi, faqat foto nusxasi yoki elektron nusxasi beriladi? 11-sinfni
                                tugatganidan keyin sertifikat beriladimi?</a>
                            <p class="faq_answer">O'zbekistonda majburiy o'n bir yillik ta'lim joriy etilganligi va
                                9-sinf o'quvchilarining ko'pchiligi 10-sinfda o'qishni davom ettirishi sababli
                                9-sinf bitiruvchilarining sertifikatlari maktabda saqlanadi. Agar talaba 9-sinfni
                                tamomlagandan so'ng akademik litseyga, kasb-hunar maktabiga o'qishga kirsa yoki
                                yangi o'quv yurtidan ma'lumotnoma yoki Kupon asosida boshqa umumta'lim maktabiga
                                o'tkazilsa. Bu masala bo'yicha ota-onalar maktab direktoriga murojaat qilishlari
                                mumkin.

                                Majburiy o'n bir yillik ta'lim tugagandan so'ng, 11 sinf bitiruvchilariga sertifikat
                                tantanali ravishda topshiriladi.</p>
                        </div>
                        <div class="col-12 mt-5" style="border: 1px solid #ece1e1; padding: 20px;">
                            <a href="">Umumtaʼlim maktablarining 0,5 stavka shtat birligidagi rahbarlari
                                (maʼnaviy-maʼrifiy hamda oʻquv-tarbiya ishlari boʻyicha direktor oʻrinbosarlari)
                                necha soatgacha dars olishi mumkin va ish haqi qay tartibda toʻlanadi?</a>
                            <p class="faq_answer">Umumtaʼlim muassasalari rahbar xodimlariga dars soatlarini
                                ajratish meʼyorlari Vazirlar Mahkamasining 2005-yil 21-dekabrdagi 275-sonli qarori
                                bilan tasdiqlangan “Xalq taʼlimi xodimlari mehnatiga haq toʻlash toʻgʻrisida nizom”
                                asosida tartibga solingan. Ushbu Nizomning 14-bandiga koʻra xalq taʼlimi
                                muassasasining rahbar xodimi tomonidan asosiy lavozimning bir haftada 10 soatgacha
                                hajmda oʻqituvchi lavozimi bilan qoʻshib olib borilishiga (oʻquv yuklamasi
                                yuritilishiga) yoʻl qoʻyiladi hamda ular mehnatiga soatbay haq toʻlanadi.</p>
                        </div>
                        <div class="col-12 mt-5" style="border: 1px solid #ece1e1; padding: 20px;">
                            <a href="">Nima uchun 9-sinf bitiruvchilariga asosiy taʼlim toʻgʻrisidagi hujjatning asl
                                nusxasi berilmaydi, faqat foto nusxasi yoki elektron nusxasi beriladi? 11-sinfni
                                tugatganidan keyin sertifikat beriladimi?</a>
                            <p class="faq_answer">O'zbekistonda majburiy o'n bir yillik ta'lim joriy etilganligi va
                                9-sinf o'quvchilarining ko'pchiligi 10-sinfda o'qishni davom ettirishi sababli
                                9-sinf bitiruvchilarining sertifikatlari maktabda saqlanadi. Agar talaba 9-sinfni
                                tamomlagandan so'ng akademik litseyga, kasb-hunar maktabiga o'qishga kirsa yoki
                                yangi o'quv yurtidan ma'lumotnoma yoki Kupon asosida boshqa umumta'lim maktabiga
                                o'tkazilsa. Bu masala bo'yicha ota-onalar maktab direktoriga murojaat qilishlari
                                mumkin.

                                Majburiy o'n bir yillik ta'lim tugagandan so'ng, 11 sinf bitiruvchilariga sertifikat
                                tantanali ravishda topshiriladi.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
</main>
<!-- Main section End -->

<!-- Footer Start  -->
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
