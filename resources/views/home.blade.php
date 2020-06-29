@extends('layout/main')

@section('container')
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container" style="height:-200px;">
            <div class="banner_content text-center" data-aos-anchor-placement="top-bottom">            
                <h3>Find your homey residential here <br>with Anugerah Pratama Lazuardi</h3>
                <a class="main_btn page-scroll" href="#portfolio">Find now</a>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<!--================About  Area =================-->
<!-- <section class="about-area area-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 d-none d-lg-block">
                <div class="about-img responsive">
                    <img src="{{ URL::asset('images/banner/about3.png') }}" alt="" data-aos="fade-right">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-content" data-aos="fade-left">
                    <h4>PT. ANUGERAH PRATAMA LAZUARDI
                        MEMBANTU ANDA MENEMUKAN
                        RUMAH IMPIAN</h4>
                    <p>Kami hadir untuk membantu anda yang menginginkan rumah <br> impian sejak tahun 2013, dan telah menyelesaikan 10 proyek <br> dengan tetap menjaga kualitas dan kepuasan konsumen. Dapatkan <br> rumah impian anda bersama Anugerah Pratama Lazuardi dengan <br> cara menghubungi marketing kami.</p>
                    <a class="main_btn page-scroll" href="#portfolio">proyek berjalan</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--================About Area End =================-->

<!--================Service  Area =================-->
<section class="service-area area-padding">
    <div class="container">
        <div class="area-heading" data-aos="fade-top">
            <h3 class="line">What We Provide</h3>
        </div>
        <div class="row">
            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon" data-aos="fade-right">
                        <img src="{{ URL::asset('images/icon/murah.svg') }}" alt="">
                    </div>
                    <div class="service-content" data-aos="fade-left">
                        <h5>Harga yang bersaing</h5>
                        <p>PT. Anugerah Pratama Lazuardi hadir untuk membantu masyarakat yang menginginkan rumah minimalis dengan harga yang terjangkau. </p>
                    </div>
                </div>
            </div>
            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon" data-aos="fade-right">
                        <img src="{{ URL::asset('images/icon/lokasi.svg') }}" alt="" style="margin-top:-8px;">
                    </div>
                    <div class="service-content" data-aos="fade-left">
                        <h5>Lokasi yang strategis</h5>
                        <p>Lokasi yang strategis dan mudah dijangkau dari manapun merupakan target kami untuk mempermudah konsumen memenuhi kebutuhan. </p>
                    </div>
                </div>
            </div>
            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon" data-aos="fade-right">
                        <img src="{{ URL::asset('images/icon/mudah.svg') }}" alt="">
                    </div>
                    <div class="service-content" data-aos="fade-left">
                        <h5>Proses kpr mudah</h5>
                        <p>Kami akan membantu anda dalam melakukan proses pencairan kpr dengan dp minimum untuk mendapatkan rumah hunian yang diimpikan. </p>
                    </div>
                </div>
            </div>
            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon" data-aos="fade-right">
                        <img src="{{ URL::asset('images/icon/terpercaya.svg') }}" alt="">
                    </div>
                    <div class="service-content" data-aos="fade-left">
                        <h5>Terpercaya</h5>
                        <p>PT. Anugerah Pratama Lazuardi telah menyelesaikan 10 proyek, oleh karena itu kami akan terus menjaga kualitas dan kepuasan konsumen. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Service Area end =================-->

<!--================Funny number  Area =================-->
<section class="number-area" id="number-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-5">
                <div class="number-img" data-aos="fade-right">
                    <img src="{{ URL::asset('images/banner/about6.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="number-content" data-aos="fade-left">
                    <h4>Menawarkan Kualitas Dan <br>
                        Kepuasan Konsumen</h4>
                    <p>Kami menawarkan kualitas bahan bangunan yang kokoh, awet, dan tahan lama<br> kepuasan dari konsumen selalu menjadi bagian dari semangat kami untuk membantu anda mendapatkan rumah impian.</p>
                    <div class="number-wrapper">
                        <div class="single-number">
                            <h5><span class="counter">100</span>+</h5>
                            <p>happy customer</p>
                        </div>
                        <div class="single-number">
                            <h5><span class="counter">10</span></h5>
                            <p>Project Done</p>
                        </div>
                        <div class="single-number">
                            <h5><span class="counter">9.5</span>/<span class="counter">10</span></h5>
                            <p>Average Rating</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Funny number Area end =================-->



<!--================ Start Portfolio Area =================-->
<section class="portfolio_area area-padding" id="portfolio">
    <div class="container">
        <div class="area-heading">
            <h3 class="line">Project</h3>
        </div>
    </div>
    <div class="container">
        <div class="filters portfolio-filter">
            <ul>
                <li class="active" data-filter="*">all</li>
                <li data-filter=".following">PROYEK BERJALAN</li>
                <li data-filter=".upcoming">SOLD OUT</li>
            </ul>
        </div>
        <div class="filters-content">
            <div class="row portfolio-grid">
                <div class="grid-sizer col-md-3 col-lg-6"></div>
                <div class="col-lg-6 col-md-6 all  upcoming">
                <div class="single_portfolio">
                    <img class="img-fluid w-100" src="{{ URL::asset('images/project/gpaac1.jpg') }}" alt="">
                    <div class="centered">
                        <center>
                            <h3>GRIYA PRATAMA ASRI</h3><br><h3>CILEUNYI TAHAP 1</h3>
                        </center>
                    </div>
                    <div class="short_info">
                        <p>construction</p>
                        <h4><a href="project/infogpac1">GRIYA PRATAMA ASRI CILEUNYI TAHAP 1</a></h4>                            
                    </div>
                </div>
            </div>
                <div class="col-lg-6 col-md-6 all following">
                <div class="single_portfolio">
                    <img class="img-fluid w-100" src="{{ URL::asset('images/project/gpaac2.jpg') }}" alt="">
                    <div class="centered">
                        <center>
                            <h3>GRIYA PRATAMA ASRI</h3><br><h3>CILEUNYI TAHAP 2</h3>
                        </center>
                    </div>
                    <div class="short_info">
                        <p>construction</p>
                        <h4><a href="project/infogpac2">GRIYA PRATAMA ASRI CILEUNYI TAHAP 2</a></h4>                            
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 all  following">
                <div class="single_portfolio">
                    <img class="{{ URL::asset('images/project/par/par1.png') }}" alt="">
                    <div class="centered">
                        <center>
                            <h3>PRATAMA ASRI</h3><br><h3>RESIDENCE 2</h3>
                        </center>
                    </div>
                    <div class="short_info">
                        <p>construction</p>
                        <h4><a href="project/infopar2">PRATAMA ASRI RESIDENCE 2</a></h4>                            
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!--================ End Portfolio Area =================-->

<!--================ Start Testimonial Area =================-->
<section class="testimonial-area area-padding">
    <div class="container">
        <div class="area-heading">
            <h3 class="line">Marketing</h3>
    
        </div>
        <div class="row">
            <div class="active-testimonial-carusel owl-carousel">
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ URL::asset('images/elements/rsz.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <h4>Dhani Widya Purnamasari</h4>
                        <p class="designation">Supervisor Marketing</p>
                        <p>
                            0813 2057 9890
                        </p>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ URL::asset('images/elements/rsz5.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <h4>Ully Yuliana</h4>
                        <p class="designation">senior marketing</p>
                        <p>
                            0813 9522 5847
                        </p>

                    </div>
                </div>

                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ URL::asset('images/elements/sae.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <h4>A. Syaefulloh</h4>
                        <p class="designation">marketing</p>
                        <p>
                            0821 2055 9951
                        </p>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ URL::asset('images/elements/rsz-1.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <h4>Ujang Kusdianto</h4>
                        <p class="designation">marketing</p>
                        <p>
                            0813 2277 8509
                        </p>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ URL::asset('images/elements/iwan.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <h4>Iwan Setiawan</h4>
                        <p class="designation">Marketing</p>
                        <p>
                            0821 2992 4958
                        </p>
                    </div>
                </div>

                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ URL::asset('images/elements/riki1.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <h4>Riki Hardiansyah</h4>
                        <p class="designation">Marketing</p>
                        <p>
                            0823 1838 2322
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Testimonial Area =================-->



@endsection