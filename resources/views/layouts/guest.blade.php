@props(['title' => ''])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description"
        content="{{ config('app.name', 'Laravel') }}- Crypto FX is an online FX and CFD broker based in New York, USA and regulated by the American Securities and Investments Commission. We do not just provide a trading platform. Instead, we aim to provide you with our best level of customer service whether you are a beginner looking to learn how to trade the markets or seasoned professional trader that demands high calibre in execution, technology and support.">
    <meta name="keywords"
        content="bitcoin,investment,crypto,cryptocurrency,trading,coins trading,yahoo business,cfd,online investment,smart investment,crypto investment">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name', 'Laravel') }}- Home">

    <meta itemprop="name" content="{{ config('app.name', 'Laravel') }}- Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/62253abb86cd31646607035.png">

    <meta property="og:type" content="website">
    <meta property="og:title"
        content="{{ config('app.name', 'Laravel') }}- Crypto FX is an online FX and CFD broker based in New York, USA and regulated by the American Securities and Investments Commission.">
    <meta property="og:description"
        content="{{ config('app.name', 'Laravel') }}- Crypto FX is an online FX and CFD broker based in New York, USA and regulated by the American Securities and Investments Commission. We do not just provide a trading platform. Instead, we aim to provide you with our best level of customer service whether you are a beginner looking to learn how to trade the markets or seasoned professional trader that demands high calibre in execution, technology and support.">
    <meta property="og:image" content="assets/images/seo/62253abb86cd31646607035.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="">

    <meta name="twitter:card" content="summary_large_image">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="/assets/templates/bit_gold/css/vendor/bootstrap.min.css">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="/assets/templates/bit_gold/css/all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="/assets/templates/bit_gold/css/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/templates/bit_gold/css/vendor/animate.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="/assets/templates/bit_gold/css/vendor/slick.css">
    <link rel="stylesheet" href="/assets/templates/bit_gold/css/vendor/dots.css">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="/assets/templates/bit_gold/css/main.css">
    <link rel="stylesheet" href="/assets/templates/bit_gold/css/custom.css">
    <link rel="stylesheet" href="/assets/templates/bit_gold/css/color.php?color=CCA354&amp;secondColor=000000">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <title>{{ config('app.name', 'Laravel') }} - {{$title}} </title>


    <!-- Fonts -->
    {{--
    <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{--
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}


</head>

<body>
    {{-- <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div> --}}
    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-rocket" aria-hidden="true"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->

    <div class="full-wh">
        <!-- STAR ANIMATION -->
        <div class="bg-animation">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
            <div id='stars4'></div>
        </div>
        <!-- / STAR ANIMATION -->
    </div>
    <div class="page-wrapper">
        <!-- header-section start  -->
        <header class="header">
            <div class="header__bottom">
                <div class="container">

                    <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
                    <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd"
                        background-color="#1c1c1c" locale="en" font-color="#ffffff">
                    </coingecko-coin-price-marquee-widget>

                    <nav class="navbar navbar-expand-xl p-0 align-items-center">
                        <a class="site-logo site-title" href="/">
                            {{-- <img src="assets/images/logoIcon/logo.png" alt="site-logo"> --}}
                        </a>
                        <ul class="account-menu responsive-account-menu ml-3">
                            <li class="icon">
                                <a href="/login">
                                    <i class="las la-user"></i>
                                </a>
                            </li>
                        </ul>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu-toggle"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto">
                                <li> <a href="/">Home</a></li>
                                <li><a href="/plan">Plan</a></li>
                                <li><a href="/about">About</a></li>
                                {{-- <li><a href="/blog">Blog</a></li> --}}
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/register">Register</a></li>
                            </ul>
                            <div class="nav-right">
                                <ul class="account-menu ml-3">
                                    <li class="icon"><a href="/register"><i class="las la-user"></i></a></li>
                                </ul>
                                {{-- <div id="google_translate_element"></div>
                                <script defer type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'en'
                                        }, 'google_translate_element');
                                    }
                                </script>
                                <script defer type="text/javascript"
                                    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                                </script> --}}
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- header__bottom end -->
        </header>
        <!-- header-section end  -->
        {{ $slot }}
        <!-- footer section start -->
        <footer class="footer bg_img" data-background="/assets/images/frontend/footer/5fce39681ce6b1607350632.jpg">
            <div class="footer__top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <a href="/">
                                {{-- <img src="assets/images/logoIcon/logo.png" alt="image"> --}}
                            </a>
                            <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                                <li><a href="#">Privacy &amp;
                                        Policy</a></li>
                                <li><a href="/#">Terms &amp;
                                        Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-md-left text-center">
                            <p>
                            <p>© {{date('Y')}} <a href="/" class="base--color">{{ config('app.name', 'Laravel') }}</a>.
                                All
                                rights reserved</p>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                                <li><a href="https://facebook.com"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="lab la-twitter"></i></a></li>
                                <li><a href="https://www.pinterest.com/"><i class="lab la-pinterest-p"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="lab la-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer section end -->
    </div>

    <!-- jQuery library -->
    <script src="/assets/templates/bit_gold/js/vendor/jquery-3.5.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="/assets/templates/bit_gold/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
    <script src="/assets/templates/bit_gold/js/vendor/slick.min.js"></script>
    <script src="/assets/templates/bit_gold/js/vendor/wow.min.js"></script>
    <!-- dashboard custom js -->
    <script src="/assets/templates/bit_gold/js/app.js"></script>


    <link rel="stylesheet" href="/assets/templates/bit_gold/css/iziToast.min.css">
    <script src="/assets/templates/bit_gold/js/iziToast.min.js"></script>

    <script>
        (function($) {
            "use strict";
            $(document).on('click', '.investButton', function() {
                var data = $(this).data('resource');
                var symbol = "$";
                var currency = "USD";

                $('#mySelect').empty();

                if (data.fixed_amount == '0') {
                    $('.investAmountRenge').text(`invest: ${symbol}${data.minimum} - ${symbol}${data.maximum}`);
                    $('.fixedAmount').val('');
                    $('#fixedAmount').attr('readonly', false);

                } else {
                    $('.investAmountRenge').text(`invest: ${symbol}${data.fixed_amount}`);
                    $('.fixedAmount').val(data.fixed_amount);
                    $('#fixedAmount').attr('readonly', true);
                }

                if (data.interest_status == '1') {
                    $('.interestDetails').html(`<strong> Interest: ${data.interest} % </strong>`);
                } else {
                    $('.interestDetails').html(`<strong> Interest: ${data.interest} ${currency}  </strong>`);
                }
                if (data.lifetime_status == '0') {
                    $('.interestValidaty').html(`<strong>  per ${data.times} hours ,  ${data.repeat_time} times</strong>`);
                } else {
                    $('.interestValidaty').html(`<strong>  per ${data.times} hours,  life time </strong>`);
                }

                $('.planName').text(data.name);
                $('.plan_id').val(data.id);
            });



        })(jQuery);
    </script>
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $("#changePlan").on('change', function() {
                    var planId = $("#changePlan option:selected").val();
                    var investAmount = $('.invest-input').val();
                    var profitInput = $('.profit-input').val('');

                    $('.period').text('');

                    if (investAmount != '' && planId != null) {
                        ajaxPlanCalc(planId, investAmount)
                    }
                });

                $(".invest-input").on('change', function() {
                    var planId = $("#changePlan option:selected").val();
                    var investAmount = $(this).val();
                    var profitInput = $('.profit-input').val('');
                    $('.period').text('');
                    if (investAmount != '' && planId != null) {
                        ajaxPlanCalc(planId, investAmount)
                    }
                });
            });

            function ajaxPlanCalc(planId, investAmount) {
                $.ajax({
                    url: "planCalculator",
                    type: "post",
                    data: {
                        planId,
                        investAmount
                    },
                    success: function(response) {
                        var alertStatus = "";
                        if (response.errors) {
                            iziToast.error({
                                message: response.errors,
                                position: "topRight"
                            });
                        } else {
                            var msg = `${response.description}`
                            $('.profit-input').val(msg);
                            if (response.netProfit) {
                                $('.period').text('Net Profit ' + response.netProfit);
                            }
                        }
                    }
                });
            }
        })(jQuery);
    </script>
    {{-- <script type="text/javascript">
        (function($) {
            "use strict";
            $('.subscribe-form').on('submit', function(e) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                e.preventDefault();
                var email = $('input[name=email]').val();
                $.post('subscribe', {
                    email: email
                }, function(response) {
                    if (response.errors) {
                        for (var i = 0; i < response.errors.length; i++) {
                            iziToast.error({
                                message: response.errors[i],
                                position: "topRight"
                            });
                        }
                    } else {
                        iziToast.success({
                            message: response.success,
                            position: "topRight"
                        });
                    }
                });
            });

        })(jQuery);
    </script> --}}

    @livewireScripts
</body>

</html>