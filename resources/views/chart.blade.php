<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="./cssCommon/fontRobo.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="./cssCommon/cdnjs.cloudflare.com_ajax_libs_font-awesome_5.10.0_css_all.css" rel="stylesheet">
    <link href="./cssCommon/cdn.jsdelivr.net_npm_bootstrap-icons@1.4.1_font_bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./cssWelcome/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./cssWelcome/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./cssWelcome/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./cssWelcome/css/style.css" rel="stylesheet">

    <!-- CSS Chart -->
    <link rel="stylesheet" href="./csschart/csschart1.css">

    <title>SATTI - Result</title>
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
                      <a href="{{ route('orgview') }}" class="dropdown-item">Cơ cấu tổ chức</a>
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

    <!-- Chart Start -->
    <div class="container">
        <h2>SATTI TRAINING RESULT 2023</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="chart">
              <canvas id="barchart1"></canvas>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="chart">
              <canvas id="barchart2"></canvas>
            </div>
          </div>
          <div class="col-md-4">
            <div class="chart">
              <canvas id="barchart3"></canvas>
            </div>
          </div>
          <div class="col-md-4">
            <div class="chart">
              <canvas id="doughnut4"></canvas>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-4">
              <div class="chart">
                <canvas id="barchart5"></canvas>
              </div>
            </div>
            <div class="col-md-4">
              <div class="chart">
                <canvas id="barchart6"></canvas>
              </div>
            </div>
            <div class="col-md-4">
              <div class="chart">
                <canvas id="doughnut7"></canvas>
              </div>
            </div>
          </div>
    </div>
         
    <!-- Chart End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-3 mt-3 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-1">
          <div class="row g-5">
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-white mb-3">Quick Link</h4>
                  <a class="btn btn-link" href="">Trang chủ</a>
                  <a class="btn btn-link" href="">Lịch học</a>
                  <a class="btn btn-link" href="">Tra cứu</a>
                  <a class="btn btn-link" href="">Khóa học</a>
                  <a class="btn btn-link" href="">Liên hệ</a>
              </div>
              <div class="col-lg-6 col-md-6">
                  <h4 class="text-white mb-3">Liên hệ</h4>
                  <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Phòng 312, trung tâm phát triển nhân tài SEVT</p>
                  <p class="mb-2"><i class="fa fa-user-tie me-3"></i>Nguyễn Văn Thi</p>
                  <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>036.372.3301</p>
                  <p class="mb-2"><i class="fa fa-envelope me-3"></i>vanthi.ng@samsung.com</p>
                  
              </div>
                            
          </div>
      </div>
      <div class="container">
          <div class="copyright">
              <div class="row">
                  <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                      &copy; Website được phát triển bởi Nguyễn Văn Thi - Phòng đào tạo kỹ thuật và công nghệ cao SATTI.

                      <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->


      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
      
    <script src="./csschart/cdn.jsdelivr.net_npm_chart.js"></script>
    <script src="./csschart/chart1.js"></script>
    <script src="./csschart/chart2.js"></script>
    <script src="./csschart/chart3.js"></script>
    <script src="./csschart/chart4.js"></script>
    <script src="./csschart/chart5.js"></script>
    <script src="./csschart/chart6.js"></script>
    <script src="./csschart/chart7.js"></script>
    
    <!-- JavaScript Libraries -->
    <script src="./cssCommon/js/code.jquery.com_jquery-3.4.1.min.js"></script>
    <script src="./cssCommon/js/cdn.jsdelivr.net_npm_bootstrap@5.0.0_dist_js_bootstrap.bundle.js"></script>
    <script src="./cssWelcome/lib/wow/wow.min.js"></script>
    <script src="./cssWelcome/lib/easing/easing.min.js"></script>
    <script src="./cssWelcome/lib/waypoints/waypoints.min.js"></script>
    <script src="./cssWelcome/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="./cssWelcome/js/main.js"></script>
</body>
</html>