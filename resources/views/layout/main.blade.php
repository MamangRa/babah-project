<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ URL::asset('images/logo.jpg') }}">
    <title>Anugerah Pratama Lazuardi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/animate-css/animate.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <script type="text/javascript">
        $(document).ready(function() {
            $("#navbarSupportedContent").on("click", "li", function() {
                $(this).addClass(" active").siblings().removeClass(" active");
            })
        })
    </script>
    <title>Anugerah Pratama Lazuardi</title>
</head>


<!--================ Navbar =================-->
<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="text-center">
                <a class="dn_btn" href=""><i class="ti-mobile"></i>022 7833916</a>
                <a class="dn_btn" href="https://www.google.co.id/maps/place/Jl.+Sukup+Baru+No.20,+Pasir+Endah,+Kec.+Ujung+Berung,+Kota+Bandung,+Jawa+Barat+40619/@-6.9116075,107.6907347,18.75z/data=!4m5!3m4!1s0x2e68dd47138f3305:0x6f66f8f3bec48fc3!8m2!3d-6.9113781!4d107.6908735?hl=id&authuser=0" target="_blank"> <i class="ti-location-pin"></i> Sukup Baru 20,Bandung,Indonesia</a>
                <a class="dn_btn" href="https://www.instagram.com/anugerahpratamalazuar/" target="_blank"><i class="ti-instagram"></i>anugerahpratamalazuar</a>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="{{ URL('/admin/login') }}">
                    <img src="{{ URL::asset('images/logo.jpg') }}" alt="Logo" style="width:40px;">
                </a>
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ URL('/home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ URL('/about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ URL('/services') }}">services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ URL('/project') }}">project</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ URL('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- end navbar -->
<!-- isi page -->
@yield('container')
<!-- end isi page -->
<!-- footer -->
<footer class="footer-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-6">
                <div class="single-footer-widget">
                    <h6>Tentang Kami</h6>
                    <div class="row">
                        <p>Kami hadir untuk membantu anda yang menginginkan rumah impian sejak tahun 2013 dan telah menyelesaikan 10 proyek dengan menjaga kualitas dan kepuasan konsumen</p>
                        <a href="{{ URL('/about')}}" style="color:inherit;">Selengkapnya >></a>
                        <!-- <div class="col-lg-6">
                            <ul class="footer-nav">
                                <li><i class="ti-angle-right"></i>
                                    <a href="{{ URL('/home') }}">Home</a>
                                </li>
                                <li><i class="ti-angle-right"></i>
                                    <a href="{{ URL('/about') }}">About us</a>
                                </li>
                                <li><i class="ti-angle-right"></i>
                                    <a href="{{ URL('/services') }}">Service</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="footer-nav">
                                <li><i class="ti-angle-right"></i>
                                    <a href="{{ URL('/project') }}">Project</a>
                                </li>
                                
                                <li><i class="ti-angle-right"></i>
                                    <a href="{{ URL('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Business Hours</h6>
                    <ul class="business-hour">
                        <li>Senin - Jumat : <span>9:00 am - 18:00 pm</span> </li>
                        <li>Sabtu :<span>9:00 am - 16:00 pm</span></li>
                        <li>Minggu :<span>Closed</span></li>
                    </ul>               
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<!-- end footer -->

<script src="{{ URL::asset('js/jquery-2.2.4.min.js') }}"></script>

<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/stellar.js') }}"></script>
<script src="{{ URL::asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('vendors/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ URL::asset('js/waypoints.min.js') }}"></script>
<script src="{{ URL::asset('js/mail-script.js') }}"></script>
<script src="{{ URL::asset('js/contact.js') }}"></script>
<script src="{{ URL::asset('js/jquery.form.js') }}"></script>
<script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('js/mail-script.js') }}"></script>
<script src="{{ URL::asset('js/theme.js') }}"></script>
<script>
    $('.page-scroll').on('click', function(e) {
        var tujuan = $(this).attr('href');
        var elemen = $(tujuan);
        $('html , body').animate({
            scrollTop: elemen.offset().top
        });
        e.preventDefault();
    });
</script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 800,
    });
</script>
