<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/settings/' . $settings->logo) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>الصناعيه المتكامله</title>
</head>

<body>
    <!------------------------ Start header Section --------------------------->
    <nav class="navbar">
        <div class="nav-right">
            <a class="logo" href="#">
                <img src="{{ asset('images/settings/' . $settings->logo) }}" alt="logo">
            </a>
            <ul class="nav__links">
                <li><a class="active" href="#">الصفحة الرئيسية</a></li>
                <li><a href="#about">من نحن</a></li>
                <li><a href="#features">مميزات التطبيق</a></li>
                <li><a href="#app-screen">شاشات التطبيق</a></li>
                <li><a href="#">تواصل معنا</a></li>
            </ul>
        </div>
        <div class="nav__bars"><i class="fa fa-bars"></i></div>
        <div class="social__group nav-left">
            @foreach ($social_links as $social_link)
                @if ($social_link->status == 'show')
                    <a href="{{ $social_link->website_url }}"><i class="{{ $social_link->website_icon }}"></i></a>
                @endif
            @endforeach
        </div>
    </nav>
    <header>
        <div class="container">
            @include('admin.alerts')

            <div class="header__content">
                <div class="row">
                    <div class="header__content-details col-md-6 col-xs-12">
                        <div class="header__title">
                            <h1>{{ $settings->title }} </h1>
                        </div>
                        <div class="header__text">
                            <p>{{ $settings->sub_title }} </p>
                        </div>
                        <div class="btn__group">
                            <a href="{{ $settings->google_play_url }}"><i class="fab fa-google-play"></i> Google Play
                            </a>
                            <a href="{{ $settings->app_store_url }}"><i class="fab fa-apple"></i> App Store </a>
                        </div>
                    </div>

                    <div class="header__content-img col-md-6 col-xs-12">
                        <img src="{{ asset('assets/images/hero-2-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="before"></div>
    <!-- sidebar -->
    <div class="side__bar">
        <span class="close__sidebar"><i class="fa fa-times"></i></span>
        <div class="social__group nav-left">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <a href="#">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
        </a>
        <ul class="side__bar-links">
            <li><a href="index.html" class="navLink">الرئيسيه</a></li>
            <li><a href="#" class="navLink">من نحن</a></li>
            <li><a href="#" class="navLink">مميزات التطبيق</a></li>
            <li><a href="#" class="navLink">شاشات التطبيق</a></li>
            <li><a href="#" class="navLink">تواصل معنا</a></li>
        </ul>
    </div>
    <!------------------------ End header Section ----------------------------->

    <!------------------------ Start content Section --------------------------->
    <main>
        <!--=====  Start About Section  =====-->
        <div id="about" class="about__container">
            <div class="about__content container">
                <div class="row">
                    <div class="about__content-details col-md-6 col-xs-12">
                        <div class="about__title">
                            <h1>مـن نـحـن ؟</h1>
                        </div>
                        <div class="about__text">
                            <p>{{ $settings->description }}</p>
                        </div>
                    </div>
                    <div class="about__content-info col-md-6 col-xs-12">
                        {{-- @foreach ($statistics as $statistic)
                            @if ($statistics[0]->status == 'show')
                                <div class="col-md-6 col-xs-6">
                                    <div class="info">
                                        <img src="" alt="">
                                        <span>{{ $statistic->counter }}</span>
                                        <h5>{{ $statistic->title }}</h5>
                                    </div>
                                </div>
                            @endif
                        @endforeach --}}
                        {{-- =================================== --}}
                        @if ($statistics[0]->status == 'show')
                            <div class="col-md-6 col-xs-6">
                                <div class="info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27.309" height="30.209"
                                        viewBox="0 0 28.309 32.209">
                                        <path id="Union_2" data-name="Union 2"
                                            d="M-516.056-849.2a.943.943,0,0,1-.943-.943,12.377,12.377,0,0,1,3.587-8.733,12.109,12.109,0,0,1,8.68-3.66h3.775a12.109,12.109,0,0,1,8.68,3.66,12.377,12.377,0,0,1,3.587,8.733.943.943,0,0,1-.943.943Zm4.719-23.717a8.5,8.5,0,0,1,8.492-8.492,8.5,8.5,0,0,1,8.492,8.492,8.5,8.5,0,0,1-8.492,8.493A8.5,8.5,0,0,1-511.338-872.922Z"
                                            transform="translate(517 881.414)" fill="#4a4a4a" />
                                    </svg>
                                    <span>{{ $statistics[0]->counter }}</span>
                                    <h5>{{ $statistics[0]->title }}</h5>
                                </div>
                            </div>
                        @endif
                        @if ($statistics[1]->status == 'show')
                            <div class="col-md-6 col-xs-6">
                                <div class="info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33.056" height="27.214"
                                        viewBox="0 0 35.056 29.214">
                                        <path id="Union_3" data-name="Union 3"
                                            d="M-177.484-850.973a2.559,2.559,0,0,1-2.556-2.556v-.731a2.559,2.559,0,0,1,2.556-2.556h29.944a2.559,2.559,0,0,1,2.556,2.556v.731a2.559,2.559,0,0,1-2.556,2.556Zm14.18-9.1-7.669-8.033a1.1,1.1,0,0,1,.792-1.852h4.017v-8.4a1.829,1.829,0,0,1,1.826-1.826h3.651a1.829,1.829,0,0,1,1.826,1.826v8.4h4.017a1.1,1.1,0,0,1,.792,1.852l-7.669,8.033a1.092,1.092,0,0,1-.792.339A1.091,1.091,0,0,1-163.3-860.076Z"
                                            transform="translate(180.04 880.187)" fill="#4a4a4a" />
                                    </svg>
                                    <span>{{ $statistics[1]->counter }}</span>
                                    <h5>{{ $statistics[1]->title }}</h5>
                                </div>
                            </div>
                        @endif
                        @if ($statistics[2]->status == 'show')
                            <div class="col-md-6 col-xs-6">
                                <div class="info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30.992" height="35.464"
                                        viewBox="0 0 32.992 37.464">
                                        <path id="Union_4" data-name="Union 4"
                                            d="M-491.13-1030.536a25.692,25.692,0,0,1-9.072-1.774v-16.5a12.171,12.171,0,0,0,3.741-2.417c1.868-1.868,2.858-6.458,2.858-9a1.1,1.1,0,0,1,1.1-1.1h.907a4.58,4.58,0,0,1,4.591,4.495c.017,1.507-.374,5.2-1.1,6.5h8.573a3.459,3.459,0,0,1,3.5,2.915,3.293,3.293,0,0,1-.82,2.584,3.3,3.3,0,0,1-1.589,5.383,3.291,3.291,0,0,1,.232,1.216,3.3,3.3,0,0,1-2.432,3.182,3.344,3.344,0,0,1-3.3,4.515Zm-16.77,0a1.1,1.1,0,0,1-1.1-1.1v-17.6a1.1,1.1,0,0,1,1.1-1.1h4.4a1.1,1.1,0,0,1,1.1,1.1v17.6a1.1,1.1,0,0,1-1.1,1.1Zm24.194-28.667a1.1,1.1,0,0,1-1.1-1.1,1.1,1.1,0,0,1,1.1-1.1h2.2a1.1,1.1,0,0,1,1.1,1.1,1.1,1.1,0,0,1-1.1,1.1Zm-15.4,0a1.1,1.1,0,0,1-1.1-1.1,1.1,1.1,0,0,1,1.1-1.1h2.2a1.1,1.1,0,0,1,1.1,1.1,1.1,1.1,0,0,1-1.1,1.1Zm11.605-4.514a1.1,1.1,0,0,1-.492-1.476l1.1-2.2a1.1,1.1,0,0,1,1.476-.491,1.1,1.1,0,0,1,.491,1.475l-1.1,2.2a1.1,1.1,0,0,1-.984.608A1.1,1.1,0,0,1-487.5-1063.717Zm-7.09-.492-1.1-2.2a1.1,1.1,0,0,1,.491-1.475,1.1,1.1,0,0,1,1.476.491l1.1,2.2a1.1,1.1,0,0,1-.492,1.476,1.1,1.1,0,0,1-.491.116A1.1,1.1,0,0,1-494.587-1064.209Z"
                                            transform="translate(509 1068)" fill="#4a4a4a" />
                                    </svg>
                                    <span>{{ $statistics[2]->counter }}</span>
                                    <h5>{{ $statistics[2]->title }}</h5>
                                </div>
                            </div>
                        @endif
                        @if ($statistics[3]->status == 'show')
                            <div class="col-md-6 col-xs-6">
                                <div class="info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40.35" height="40.35"
                                        viewBox="0 0 43.35 43.35">
                                        <path id="Union_5" data-name="Union 5"
                                            d="M-175.894-1019.65v-3.9a11.256,11.256,0,0,0-.6-3.495,6.254,6.254,0,0,1,1.875-.315,5.031,5.031,0,0,1-2.121-.479,11.428,11.428,0,0,0-2.911-4.129c-.014-.157-.048-.311-.048-.472a5.085,5.085,0,0,1,5.081-5.081,5.085,5.085,0,0,1,5.08,5.081,5.086,5.086,0,0,1-5.08,5.08,6.358,6.358,0,0,1,6.35,6.35v1.355Zm-20.321,0v-3.894a8.9,8.9,0,0,1,8.89-8.891,8.9,8.9,0,0,1,8.891,8.891v3.894Zm-10.16,0V-1021a6.358,6.358,0,0,1,6.35-6.35,6.271,6.271,0,0,1,1.874.315,11.287,11.287,0,0,0-.6,3.5v3.894Zm1.27-12.785a5.085,5.085,0,0,1,5.08-5.08,5.085,5.085,0,0,1,5.081,5.08c0,.162-.033.315-.048.473a11.428,11.428,0,0,0-2.911,4.129,5.031,5.031,0,0,1-2.121.479A5.086,5.086,0,0,1-205.105-1032.435Zm11.431-6.349a6.357,6.357,0,0,1,6.35-6.35,6.357,6.357,0,0,1,6.35,6.35,6.357,6.357,0,0,1-6.35,6.349A6.357,6.357,0,0,1-193.675-1038.785Zm20.066-3.408-4.766,2.5.911-5.306-3.856-3.758,5.327-.774,2.383-4.828,2.382,4.828,5.576.774-4.1,3.758.913,5.306Zm-27.433,0-4.767,2.5.913-5.306-4.1-3.758,5.576-.774,2.382-4.828,2.383,4.828,5.327.774-3.856,3.758.911,5.306Zm13.716-8.636-4.765,2.506.91-5.306-3.857-3.759,5.33-.774,2.382-4.837,2.383,4.837,5.33.774-3.857,3.759.91,5.306Z"
                                            transform="translate(209 1063)" fill="#4a4a4a" />
                                    </svg>
                                    <span>{{ $statistics[3]->counter }}</span>
                                    <h5>{{ $statistics[3]->title }}</h5>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!--=====  End About Section  =====-->

        <!--=====  Start Features Section  =====-->
        <div id="features" class="features__container">
            <div class="container">
                <div class="features">
                    <h2 class="heading col-md-12">مميزات التطبيق</h2>
                    <div class="features__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    {{-- @foreach ($features as $feature)
                                        <div class="col-md-12 col-xs-12">
                                            <div class="feature">
                                                <div class="feature__img feature__img-1">
                                                    <img src="{{ asset('images/features/' . $feature->image) }}"
                                                        alt="">
                                                </div>
                                                <div class="feature__text">
                                                    <h3> {{ $feature->title }} </h3>
                                                    <p> {{ $feature->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach --}}

                                    <div class="col-md-12 col-xs-12">
                                        <div class="feature">
                                            <div class="feature__img feature__img-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.236"
                                                    height="24.863" viewBox="0 0 19.236 24.863">
                                                    <path id="Path_46" data-name="Path 46"
                                                        d="M95.578,50a1.662,1.662,0,0,0-1.662,1.662v-1.34a1.662,1.662,0,0,0-3.325,0v-.671a1.662,1.662,0,1,0-3.325,0V44.04a1.662,1.662,0,1,0-3.325,0V55.95a.241.241,0,0,1-.418.163l-2.661-2.894a1.591,1.591,0,0,0-2.309-.048,2.034,2.034,0,0,0-.231,2.482l4.252,6.217a4.964,4.964,0,0,0,3.033,2.046.181.181,0,0,1,.181.181v2.8a.34.34,0,0,0,.34.34h9.708a.34.34,0,0,0,.34-.34V64.446a1.473,1.473,0,0,1,.1-.538l.129-.328a12.072,12.072,0,0,0,.832-4.242l0-1.721V51.666A1.662,1.662,0,0,0,95.578,50Z"
                                                        transform="translate(-78.005 -42.378)" fill="#000" />
                                                </svg>
                                            </div>
                                            <div class="feature__text">
                                                <h3> {{ $features[0]->title }} </h3>
                                                <p> {{ $features[0]->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="feature">
                                            <div class="feature__img">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24.359"
                                                    height="18.915" viewBox="0 0 24.359 18.915">
                                                    <path id="check"
                                                        d="M9.328,18.956a1.243,1.243,0,0,1-1.759,0L.547,11.933a1.865,1.865,0,0,1,0-2.638l.879-.88a1.865,1.865,0,0,1,2.638,0L8.448,12.8,20.3.953a1.865,1.865,0,0,1,2.638,0l.879.88a1.865,1.865,0,0,1,0,2.638Zm0,0"
                                                        transform="translate(0 -0.406)" fill="#474747" />
                                                </svg>

                                            </div>
                                            <div class="feature__text">
                                                <h3> {{ $features[1]->title }} </h3>
                                                <p> {{ $features[1]->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="feature">
                                            <div class="feature__img">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25.758"
                                                    height="15.243" viewBox="0 0 25.758 15.243">
                                                    <path id="fast-delivery"
                                                        d="M7.395.152C5.162.67,4.307,1.976,3.236,3.773H7.395ZM20.446,3.924a.663.663,0,0,0-.755.7.755.755,0,0,0,.752.755H25a.755.755,0,1,1,0,1.509H18.211a.755.755,0,1,0,0,1.509H25a.755.755,0,1,1,0,1.509h-1.66v2.264a.755.755,0,0,1-.755.755H21.071a2.893,2.893,0,0,1-5.67,0H7.739a2.893,2.893,0,0,1-5.67,0H.754A.755.755,0,0,1,0,12.175V7.647A2.435,2.435,0,0,1,2.337,5.282H8.149A.755.755,0,0,0,8.9,4.528V0H22.588a.755.755,0,0,1,.755.755v1.66h.906a.755.755,0,0,1,0,1.509ZM3.926,11.372a1.384,1.384,0,1,0,2.362.978A1.384,1.384,0,0,0,3.926,11.372Zm13.332,0a1.384,1.384,0,1,0,2.362.978A1.384,1.384,0,0,0,17.258,11.372Zm0,0"
                                                        transform="translate(0.001 0)" fill="#000"
                                                        fill-rule="evenodd" />
                                                </svg>

                                            </div>
                                            <div class="feature__text">
                                                <h3> {{ $features[2]->title }} </h3>
                                                <p> {{ $features[2]->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-xs-12 features__content-img">
                                    <img src="{{ asset('assets/images/content-2-img.png') }}" alt="">
                                </div>

                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="feature">
                                            <div class="feature__img">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.493"
                                                    height="22.481" viewBox="0 0 22.493 22.481">
                                                    <path id="Path_14589" data-name="Path 14589"
                                                        d="M-251.761-4686.9l-1.4-1.4a.659.659,0,0,1,0-.932l-.984-.983a4.57,4.57,0,0,1-2.75.931,4.62,4.62,0,0,1-4.614-4.615,4.62,4.62,0,0,1,4.614-4.614,4.619,4.619,0,0,1,4.614,4.614,4.572,4.572,0,0,1-.931,2.751l.983.983a.659.659,0,0,1,.932,0l1.4,1.4a1.321,1.321,0,0,1,0,1.865,1.315,1.315,0,0,1-.932.385A1.313,1.313,0,0,1-251.761-4686.9Zm-14.7-5.46,2.257-2.257a.657.657,0,0,0,.193-.467v-2.887l2.056,1.027a5.868,5.868,0,0,0-.87,3.047,5.858,5.858,0,0,0,.388,2.05,8.762,8.762,0,0,1-.912.061A8.592,8.592,0,0,1-266.462-4692.364Zm-5.331-6.044a8.777,8.777,0,0,1,.143-4.384l3.684-.72v1.833a.661.661,0,0,0,.193.465l2.444,2.444v3.409l-2.379,2.378A8.67,8.67,0,0,1-271.793-4698.408Zm7.781-1.042v-2.073l1.151-2.3,2.44-1.219a.657.657,0,0,0,.342-.421.657.657,0,0,0-.089-.534l-1.877-2.9c.215.032.43.054.645.1a8.668,8.668,0,0,1,6.415,6.561,8.784,8.784,0,0,1,.139,2.793,5.893,5.893,0,0,0-2.048-.385,5.9,5.9,0,0,0-4.256,1.815Zm-2.637-2.5v-2.364a.659.659,0,0,0-.788-.646l-3.616.706a8.88,8.88,0,0,1,1.642-2.164,8.655,8.655,0,0,1,5.719-2.58l2.015,3.11-1.969.984a.666.666,0,0,0-.3.294l-1.318,2.637a.656.656,0,0,0-.07.3v1.044Z"
                                                        transform="translate(272.005 4709)" fill="#474747" />
                                                </svg>

                                            </div>
                                            <div class="feature__text">
                                                <h3> {{ $features[3]->title }} </h3>
                                                <p> {{ $features[3]->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="feature">
                                            <div class="feature__img">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.851"
                                                    height="20.978" viewBox="0 0 10.851 20.978">
                                                    <path id="Path_84" data-name="Path 84"
                                                        d="M133.352,0h-8.681a1.085,1.085,0,0,0-1.085,1.085V19.893a1.085,1.085,0,0,0,1.085,1.085h8.681a1.085,1.085,0,0,0,1.085-1.085V1.085A1.085,1.085,0,0,0,133.352,0Zm-5.787,1.447a.362.362,0,0,1,.362-.362h2.17a.362.362,0,0,1,.362.362h0a.362.362,0,0,1-.362.362h-2.17a.362.362,0,0,1-.362-.362Zm-1.085-.362a.362.362,0,1,1-.362.362A.362.362,0,0,1,126.48,1.085Zm2.532,19.17a.723.723,0,1,1,.723-.723A.723.723,0,0,1,129.011,20.255Zm4.7-6.51v4.34h-9.4V2.894h9.4V13.744Z"
                                                        transform="translate(-123.586)" fill="#474747" />
                                                </svg>

                                            </div>
                                            <div class="feature__text">
                                                <h3> {{ $features[4]->title }} </h3>
                                                <p> {{ $features[4]->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="feature">
                                            <div class="feature__img">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23.548"
                                                    height="23.542" viewBox="0 0 23.548 23.542">
                                                    <path id="Path_14590" data-name="Path 14590"
                                                        d="M-241.977-4886.705l-4.2-4.206a.839.839,0,0,1,0-1.168.841.841,0,0,1,1.189-.021l2.769,2.77V-4901.6a.841.841,0,0,1,.842-.84.84.84,0,0,1,.84.84v12.269l2.771-2.77a.843.843,0,0,1,1.169,0,.841.841,0,0,1,.02,1.189l-4.2,4.206s0,0,0,0a.841.841,0,0,1-.6.246A.838.838,0,0,1-241.977-4886.705Zm3.959-6.481a.842.842,0,0,1-.842-.842.841.841,0,0,1,.842-.84h2.524a3.37,3.37,0,0,0,2.795-1.5,3.363,3.363,0,0,0-.944-4.663.841.841,0,0,1-.346-.925c.043-.16.078-.323.1-.487a5.04,5.04,0,0,0-4.145-5.8,5.042,5.042,0,0,0-5.8,4.145.839.839,0,0,1-.232.456.84.84,0,0,1-1.189.009,1.677,1.677,0,0,0-1.174-.48,1.681,1.681,0,0,0-1.684,1.679.841.841,0,0,1-.842.84,3.365,3.365,0,0,0-3.364,3.364,3.365,3.365,0,0,0,3.364,3.365h4.206a.84.84,0,0,1,.84.84.841.841,0,0,1-.84.842h-4.206a5.048,5.048,0,0,1-4.993-4.3,5.048,5.048,0,0,1,4.245-5.737,3.369,3.369,0,0,1,.145-.458,3.364,3.364,0,0,1,4.37-1.881,6.728,6.728,0,0,1,6.318-4.435,6.729,6.729,0,0,1,6.737,6.72,6.678,6.678,0,0,1-.111,1.193,5.046,5.046,0,0,1,1.788,3.848,5.048,5.048,0,0,1-5.041,5.052Z"
                                                        transform="translate(254 4910)" fill="#474747" />
                                                </svg>

                                            </div>
                                            <div class="feature__text">
                                                <h3> {{ $features[5]->title }} </h3>
                                                <p> {{ $features[5]->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====  End Features Section  =====-->

        <!--=====  Start App Screen Section  =====-->
        <div id="app-screen" class="app-screen__container">
            <div class="container">
                <div class="app-screen row">
                    <div class="col-md-3 col-xs-12">
                        <div class="app-screen__header">
                            <h2>شاشات التطبيق</h2>
                            <p>{{ $settings->application_screens }}</p>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="owl-carousel" dir="ltr">
                            <div><img src="{{ asset('assets/images/الحرفيين التقسييمه التانيه – 1.png') }}"
                                    class="screen-img" alt=""></div>
                            <div><img src="{{ asset('assets/images/تعديل كلمة المرور – 2.png') }}" class="screen-img"
                                    alt=""></div>
                            <div><img src="{{ asset('assets/images/الحرفيين التقسييمه التانيه – 1.png') }}"
                                    class="screen-img" alt=""></div>
                            <div><img src="{{ asset('assets/images/تعديل الحساب الشخصى.png') }}" class="screen-img"
                                    alt="">
                            </div>
                            <div><img src="{{ asset('assets/images/تعديل الحساب الشخصى.png') }}" class="screen-img"
                                    alt="">
                            </div>
                        </div>
                        <div class="mobile__frame">
                            <img src="{{ asset('assets/images/phone-frame2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====  End App Screen Section  =====-->

        <!--=====  Start Email Section  =====-->
        <div class="email__container">
            <div class="container">
                <div class="email__content">
                    <h2>القائمه البريديه</h2>
                    <p>اشترك في النشرة الإخبارية لدينا ولا تفوت الوافدين الجدد وآخر التحديثات والعروض الخاصة من الصناعية
                        المتكاملة </p>
                    <form action="{{ route('news-subscription') }}" method="post">
                        @csrf
                        <input name="email" class="email__inp" type="text" placeholder="بريدك الإلكترونى">
                        <input class="btn__submit" type="submit" value="إشتراك">
                    </form>
                    <div class="email__content-img">
                        <img src="{{ asset('assets/images/02.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--=====  End Email Section  =====-->
    </main>
    <!------------------------ End content Section ----------------------------->

    <!------------------------ Start footer Section --------------------------->
    <footer>
        <div class="footer__container">
            <div class="container">
                <div class="footer_content">
                    <a class="footer__logo" href="#"><img
                            src="{{ asset('images/settings/' . $settings->logo) }}" alt=""></a>
                    <div class="btn__group">
                        <a href="{{ $settings->google_play_url }}"><i class="fab fa-google-play"></i> Google Play
                        </a>
                        <a href="{{ $settings->app_store_url }}"><i class="fab fa-apple"></i> App Store </a>
                    </div>

                    <div class="copyrights">
                        <div>
                            <span>جميع الحقوق محفوظه ل خـدمـه لجميع خدمات النقل</span>
                            <img src="{{ asset('images/settings/' . $settings->logo) }}" alt="logo">
                        </div>
                        <a href="#"><img src="{{ asset('assets/images/logo1.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="fa fa-arrow-up scrollup__icon"></i>
    </a>
    <!------------------------ End footer Section ----------------------------->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
