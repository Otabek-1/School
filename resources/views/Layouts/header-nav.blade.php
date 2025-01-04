<div class="headerBar">
    <div class="topMainMenu">
        <a href="/" class="topMain-logo">
            <img src="image/Gerb.png" alt="" width="8%" style="transform: scale(1.3)">
            <p>Halima Xudoyberdiyeva nomidagi ijod maktabi</p>
        </a>
        <ul>
            <li>
                <a href="https://vacancy.argos.uz/">Bosh ish orinlari</a>
            </li>
            <li>
                <a href="{{ route("schoolrules") }}">Maktab qonun-qoidalar</a>
            </li>
            <li>
                <a href="{{ route("faq") }}">Tez-tez beriladigan savollar </a>
            </li>
            <li>
                <a href="{{ route("symbols") }}">Davlat ramzlari</a>
            </li>
        </ul>
        <div class="additionalFuntions">
            <a href="#" class="eye"><i class="fa-regular fa-eye text-white me-2"></i></a>
            <a href="#" class="searchBtn text-white">|
                <i class="fa-solid fa-magnifying-glass text-white mb-3 ms-2"></i>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="headerMenuBox">
            <div class="bigMenuBtn">
                <button type="button" class="borderedBtn">
                    <div class="menuBars"></div>
                </button>
                <!-- Click bolganda Brauzer chap tomondan chiqadi -->
                <div class="overlay">
                    <div class="container">
                        <div class="topLogoGerb">
                            <img src="image/Gerb.png" alt="Logo" width="13%">
                        </div>
                        <div class="listMenu">
                            <ul>
                                <li><a href="#">Maktab haqida</a>
                                    <ul>
                                        <li><a href="{{ route("schoolTasks") }}">Maktab vazifalari</a></li>
                                        <li><a href="{{ route("leaderShip") }}">Rahbariyat</a></li>
                                        <li><a href="{{ route("teachers") }}">O'qituvchilar</a></li>
                                        <li><a href="{{ route("rekvizits") }}">Rekvizitlar</a></li>
                                    </ul>
                                <li><a href="education.html">Ta'lim</a>
                                    <ul>
                                        <li><a href="{{ route("education") }}">1-smena</a></li>
                                        <li><a href="{{ route("education") }}">2-smena</a></li>
                                        <li><a href="{{ route("education") }}">Qo'shimcha darslar </a></li>
                                        <li><a href="{{ route("education") }}">Sport to'garaklar</a></li>
                                    </ul>
                                <li class="overlay_li-social"><a href="schoolNews.html">Axborot markazi</a>
                                    <ul>
                                        <li><a href="{{ route("schoolNews") }}">Maktab yangiliklari</a></li>
                                        <li><a href="{{ route("gallery") }}">Galeriya</a></li>
                                        <li><a href="{{ route("infographics") }}">Infografika</a></li>
                                    </ul>
                            </ul>
                            <ul class="simple">
                                <li><a href="{{ route("UsefulResources") }}">Foydali resurslar</a></li>
                                <li><a href="{{ route("contact") }}">Bogʻlanish</a></li>
                            </ul>
                        </div>
                        <div class="topMainMenu2">
                            <ul>
                                <li>
                                    <a href="https://vacancy.argos.uz/">Bosh ish orinlari</a>
                                </li>
                                <li>
                                    <a href="{{ route("schoolrules") }}">Maktab qonun-qoidalar</a>
                                </li>
                                <li>
                                    <a href="{{ route("faq") }}">Tez-tez beriladigan savollar </a>
                                </li>
                                <li>
                                    <a href="{{ route("symbols") }}">Davlat ramzlari</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Click bolganda Brauzer chap tomondan chiqadi -->
            </div>
            <div class="mainMenuBox">
                <div class="menuList">

                    <!--  -->
                    <div class="menuLine"></div>
                    <!--  -->
                    <div class="bottomMainMenu">
                        <ul class="menu">
                            <li>
                                <a href="" class="">Maktab haqida</a>
                                <ul class="menu_ul-li">
                                    <li>
                                        <a href="{{ route("schoolTasks") }}">Maktab vazifalari</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route("leaderShip") }}">Rahbariyat</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route("teachers") }}">O'qituvchilar</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route("rekvizits") }}">Rekvizitlar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route("education") }}">Ta'lim </a>
                                <ul class="menu_ul-li">
                                    <li>
                                        <a href="{{route("education")}}">1-smena</a>
                                    </li>
                                   
                                    <hr>
                                    <li>
                                        <a href="{{route("education")}}">Qo'shimcha darslar</a>
                                    </li>
                                 
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route("UsefulResources") }}">Foydali resurslar </a>
                            </li>
                            <li>
                                <a href="{{ route("schoolNews") }}">Axborot markazi </a>
                                <ul class="menu_ul-li">
                                    <li>
                                        <a href="{{route("schoolNews")}}">Maktab yangiliklari</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route("gallery") }}">Galeriya</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route("infographics") }}">Infografika</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route("contact") }}">Boglanish </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Search Start-->
                    <form id="w2" class="mainSearchForm" action="search.html" method="get">
                        <div class="input-group">
                            <input type="text" id="mainSearch" class="form-control" placeholder="Izlash"
                                   name="ContentSearch">

                            <div class="input-group-prepend">
                                <button class="btn __searchBtn closeBtn" type="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                    <!-- Search End-->

                    <div class="dropdown langBar">
                        <button class="borderedBtn" type="button" data-toggle="dropdown">O'z</button>
                        <div id="" class="dropdown-menu-right dropdown-menu">
                            <a class="dropdown-item active" href="/Uz">O'zbekcha</a>
                            <a class="dropdown-item" href="/Ўзб">Ўзбекча</a>
                            <a class="dropdown-item" href="/Ru">Русский</a>
                            <a class="dropdown-item" href="/En">English</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
