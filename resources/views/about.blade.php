<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SATTI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./cssWelcome/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./cssWelcome/css/style.css" rel="stylesheet">

    <!-- CSS Style About timeline -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css" />
    <link href="./cssabout/styleabout.css" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->   
      
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a href="{{ route('Viewhome') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
          <div class="flip-animation">
              <span><h2 class="m-0 text-primary">S</h2></span>
              <span><h2 class="m-0 text-primary">A</h2></span>
              <span><h2 class="m-0 text-primary">T</h2></span>
              <span><h2 class="m-0 text-primary">T</h2></span>
              <span><h2 class="m-0 text-primary">I</h2></span>
              <span><h2 class="m-0 text-primary">&nbsp;</h2></span>
              <span><h2 class="m-0 text-primary">P</h2></span>
          </div> 
      </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('Viewhome') }}" class="nav-item nav-link active">Trang chủ</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Giới thiệu</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('showAbout') }}" class="dropdown-item">Lịch sử hình thành</a>
                    <a href="testimonial.html" class="dropdown-item">Cơ cấu tổ chức</a>
                </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kết quả đào tạo</a>
              <div class="dropdown-menu fade-down m-0">
                  <a href="{{ route('resultTraining') }}" class="dropdown-item">Kết quả đào tạo 2023</a>
                  <a href="{{ route('showData') }}" class="dropdown-item">Tra cứu lịch sử đào tạo</a>
              </div>
          </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Thông tin đào tạo</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="team.html" class="dropdown-item">Lịch đào tạo</a>
                    <a href="testimonial.html" class="dropdown-item">Thông tin các khóa học</a>
                    <a href="404.html" class="dropdown-item">Tài liệu và phần mềm</a>
                </div>
            </div>
            <a href="{{ route('showAbout') }}" class="nav-item nav-link">Liên hệ</a>
        </div>
    </div>
  </nav>
    <!-- Navbar End -->

    <!-- Timeline Start -->
    <div class="container">
      <h1 class="title">Lịch sử hình thành và phát triển SATTI P</h1>
      <div class="timeline">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=11;" data-year="2011">
              <div class="swiper-slide-content"><span class="timeline-year">2014</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=12;" data-year="2012">
              <div class="swiper-slide-content"><span class="timeline-year">2012</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=13;" data-year="2013">
              <div class="swiper-slide-content"><span class="timeline-year">2013</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=14;" data-year="2014">
              <div class="swiper-slide-content"><span class="timeline-year">2014</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=15;" data-year="2015">
              <div class="swiper-slide-content"><span class="timeline-year">2015</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=16;" data-year="2016">
              <div class="swiper-slide-content"><span class="timeline-year">2016</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    <!-- Timeline End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./cssWelcome/lib/wow/wow.min.js"></script>
    <script src="./cssWelcome/lib/easing/easing.min.js"></script>
    <script src="./cssWelcome/lib/waypoints/waypoints.min.js"></script>
    <script src="./cssWelcome/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="./cssWelcome/js/main.js"></script>

    <!-- Template timeline -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
    <script src="./cssabout/styleabout.js"></script>



</body>

</html>