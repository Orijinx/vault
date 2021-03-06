<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{$intent->Page_Name}}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/gijgo.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/slicknav.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
	<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
			<div class="header-area ">
				<div id="sticky-header" class="main-header-area">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-3 col-lg-2">
								<div class="logo">
									<a href="{{ url('/') }}">
										<img  src="{{ asset('svg/vault-white-bold.svg') }} " width="100" alt="">
									</a>
								</div>
							</div>
							<div class="col-xl-6 col-lg-7">
								<div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="{{ url('/') }}">Главная</a></li>
                                            <li><a href="about.html">О нас</a></li>
                                            <li><a href="services.html">Сервисы</a></li>
                                            <li><a href="#">Новости <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Новости проекта</a></li>
                                                    <li><a href="single-blog.html">Новости рынка</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Функции <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="portfolio.html">Портфолио</a></li>
                                                    <li><a href="elements.html">Поиск</a></li>
                                                </ul>
                                            </li>
                                            {{-- <li><a href="contact.html">Contact</a></li>
                                            --}}
                                        </ul>
                                    </nav>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 d-none d-lg-block">
								<div class="Appointment">
									<div class="book_btn d-none d-lg-block">
										<a  href="{{ url('/home') }}">Портфолио</a>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="mobile_menu d-block d-lg-none"></div>
							</div>
						</div>
	
					</div>
				</div>
			</div>
		</header>
        <!-- header-end -->
        
        <!-- bradcam_area  -->
		<div class="bradcam_area bradcam_bg_1">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="bradcam_text text-center">
							<h3>{{$intent->Page_Name}}</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /bradcam_area  -->
    
        
        @yield('body')

        <!-- footer start -->
        <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-6">
                            <div class="menu_links">
                               
                               <a href="{{ url('/') }}"> <img src="{{ asset('svg/vault-white.svg') }} " alt="" width="200px">
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="menu_links">
                                <ul>
                                    <li><a href="#">Главная</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col-xl-6 col-md-6">
                            <div class="socail_links">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            {{--  <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
    
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>  --}}
        </footer>
    <!--/ footer end  -->

	<!-- JS here -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/ajax-form.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/scrollIt.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/nice-select.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/gijgo.min.js"></script>

	<!--contact js-->
	<script src="js/contact.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/mail-script.js"></script>

	<script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>
</body>
</html>