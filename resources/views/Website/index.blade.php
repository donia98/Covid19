@extends('Website.app')
@section('content')
<!--header section start -->
<div class="header_section">
<div class="container-fluid">
        <div class="main d-flex align-items-center">
            <div class="logo"><a href="/"><img src="{{asset('img/logo.png')}}"></a></div>
            <div class="togle_">
                <div class="menu_main">
                    <nav class="navbar navbar-expand-md">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                    @endif
                                    @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="index.html">Home</a>
                    <a href="protect.html">Protect</a>
                    <a href="about.html">About</a>
                    <a href="doctors.html">Doctors</a>
                    <a href="news.html">News</a>
                </div>
            </div>
            <span class="navbar-toggler-icon"></span>
            <span onclick="openNav()"><img src="{{asset('img/toogle-icon.png')}}" class="toggle_menu"></span>
            <span onclick="openNav()"><img src="{{asset('img/toogle-icon1.png')}}" class="toggle_menu_1"></span>
        </div>
    </div>


    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <h1 class="banner_taital">Get Medical Care early</h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form.</p>
                                    <div class="more_bt"><a href="#">Read More</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img"><img src="{{asset('img/banner-img.png')}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <h1 class="banner_taital">Get Medical Care early</h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form.</p>
                                    <div class="more_bt"><a href="#">Read More</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img"><img src="{{asset('img/banner-img.png')}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <h1 class="banner_taital">Get Medical Care early</h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form.</p>
                                    <div class="more_bt"><a href="#">Read More</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img"><img src="{{asset('img/banner-img.png')}}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
</div>
<!-- header section end -->
<!-- protect section start -->
<div class="protect_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="protect_taital">How to Protect Yourself</h1>
                <p class="protect_text">English. Many desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model text, and a search for</p>
            </div>
        </div>
        <div class="protect_section_2 layout_padding">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="hands_text"><a href="#">Wash your <br>hands frequently</a></h1>
                    <h1 class="hands_text_2"><a href="#">Maintain social <br>distancing</a></h1>
                    <h1 class="hands_text"><a href="#">Avoid touching eyes,<br>nose and mouth</a></h1>
                </div>
                <div class="col-md-6">
                    <div class="image_2"><img src="{{asset('img/img-2.png')}}"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- protect section end -->
<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_img"><img src="{{asset('img/img-1.png')}}"></div>
            </div>
            <div class="col-md-6">
                <h1 class="about_taital">Coronavirus what it is?</span></h1>
                <p class="about_text">when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to using</p>
                <div class="read_bt"><a href="#">Read More</a></div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->
<!-- doctor section start -->
<div class="doctors_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="taital_main">
                    <div class="taital_left">
                        <div class="play_icon"><img src="{{asset('img/play-icon.png')}}"></div>
                    </div>
                    <div class="taital_right">
                        <h1 class="doctor_taital">What doctors say..</h1>
                        <p class="doctor_text">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look</p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- doctor section end -->
<!-- news section start -->
<div class="news_section layout_padding">
    <div class="container">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h1 class="news_taital">Latest News</h1>
                    <p class="news_text">when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using</p>
                    <div class="news_section_2 layout_padding">
                        <div class="box_main">
                            <div class="image_1"><img src="{{asset('img/news-img.png')}}"></div>
                            <h2 class="design_text">Coronavirus is Very dangerous</h2>
                            <p class="lorem_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                                that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                here, content here', making it look</p>
                            <div class="read_btn"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h1 class="news_taital">Latest News</h1>
                    <p class="news_text">when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using</p>
                    <div class="news_section_2 layout_padding">
                        <div class="box_main">
                            <div class="image_1"><img src="{{asset('img/news-img.png')}}"></div>
                            <h2 class="design_text">Coronavirus is Very dangerous</h2>
                            <p class="lorem_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                                that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                here, content here', making it look</p>
                            <div class="read_btn"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h1 class="news_taital">Latest News</h1>
                    <p class="news_text">when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using</p>
                    <div class="news_section_2 layout_padding">
                        <div class="box_main">
                            <div class="image_1"><img src="{{asset('img/news-img.png')}}"></div>
                            <h2 class="design_text">Coronavirus is Very dangerous</h2>
                            <p class="lorem_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                                that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                here, content here', making it look</p>
                            <div class="read_btn"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
</div>
<!-- news section end -->
<!-- update section start -->
<div class="update_section">
    <div class="container">
        <h1 class="update_taital">Get Every Update.... </h1>
        <form action="/action_page.php">
            <div class="form-group">
                <textarea class="update_mail" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
            </div>
            <div class="subscribe_bt"><a href="#">Subscribe Now</a></div>
        </form>
    </div>
</div>
<!-- update section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="footer_section_2">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">Resources</h2>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="#">What we do</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Travel Advice</a></li>
                            <li><a href="#">Protection</a></li>
                            <li><a href="#">Care</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">About</h2>
                    <p class="footer_text">Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">Contact Us</h2>
                    <div class="location_text">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span class="padding_15">Location</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                                    <span class="padding_15">Call +01 1234567890</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span class="padding_15">demo@gmail.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">countrys</h2>
                    <div class="map_image"><img src="{{asset('img/map-bg.png')}}"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="copyright_text">© 2021 All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<!-- copyright section end -->
<script>
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function () {

            $(this).addClass('transition');
        }, function () {

            $(this).removeClass('transition');
        });
    });

</script>
<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }

</script>
@endsection
