<!DOCTYPE html>
<html class="no-js" lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <!-- Site Title -->
    <title>@yield('title')</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="assets/img/favicon.png" />
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
      <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"
    />
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-pro.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon_gerold.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/backToTop.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/light-mode.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
     
  </head>

  <body class="dark-mode">
    <div id="loader-container"><div id="loader"></div></div>

    <!-- Preloader Area End -->

    <!-- start: Back To Top -->
    <div class="progress-wrap" id="scrollUp">
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewbox="-1 -1 102 102"
      >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
      </svg>
    </div>
    <!-- end: Back To Top -->

    <!-- HEADER START -->
    <header class="tj-header-area header-absolute">
      <div class="container">
        <div class="row">
          <div class="navbarecastom col-12 d-flex flex-wrap align-items-center">
            <div class="logo-box">
              <a  href="">
                <img src="assets/img/logo/logo-dark.png" alt="" />
              </a>
            </div>

            <div class="header-info-list d-none d-md-inline-block">
              <ul class="ul-reset">
                <li>
                  <a href="mailto:mail@gerolddesign.com"
                    >@yield('email' , 'ایمیل')</a
                  >
                </li>
              </ul>
            </div>

            <div class="header-menu">
              <nav>
                <ul>
                  <li><a href="#services-section">خدمات</a></li>
                  <li><a href="#skills-section">مهارت ها</a></li>
                  <li><a href="#resume-section">رزومه</a></li>
                  <li><a href="#works-section">نمونه کار</a></li>
                  <li><a href="#testimonials-section">گواهینامه ها</a></li>
                  <li><a href="#contact-section">تماس با ما</a></li>
                </ul>
              </nav>
            </div>

            <div class="header-button">
              <div class="button-dark-light">
                <a href="/en"
                  ><img src="assets/img/icons/iran.svg" alt=""
                /></a>
              </div>
              <div class="header-bine"></div>
              <div class="button-dark-light">
                <img
                  id="toggle-theme"
                  src="assets/img/icons/light-icon.svg"
                  alt=""
                />
              </div>
            </div>

            <div class="menu-bar d-lg-none">
              <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <header class="tj-header-area header-2 header-sticky sticky-out">
      <div class="container">
        <div class="row">
          <div class="navbarecastom col-12 d-flex flex-wrap align-items-center">
            <div class="logo-box">
              <a href="">
                <img src="assets/img/logo/logo-dark.png" alt="" />
              </a>
            </div>

            <div class="header-info-list d-none d-md-inline-block">
              <ul class="ul-reset">
                <li>
                  <a href="mailto:mail@gerolddesign.com"
                    >@yield('email' , 'ایمیل')</a
                  >
                </li>
              </ul>
            </div>

            <div class="header-menu">
              <nav>
                <ul>
                  <li><a href="#services-section">خدمات</a></li>
                  <li><a href="#skills-section">مهارت ها</a></li>
                  <li><a href="#resume-section">رزومه</a></li>
                  <li><a href="#works-section">نمونه کار</a></li>
                  <li><a href="#testimonials-section">گواهینامه ها</a></li>
                  <li><a href="#contact-section">تماس با ما</a></li>
                </ul>
              </nav>
            </div>

            <div class="header-button">
              <a href="#contact-section" class="btn tj-btn-primary">تماس با من</a>
            </div>

            <div class="menu-bar d-lg-none">
              <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER END -->