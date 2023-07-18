<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SATTI Software</title>
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

        <link rel="stylesheet" href="./cssorg/styleorg.css">
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
    <h1 class="title">CƠ CẤU TỔ CHỨC SATTI P</h1>
    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-12 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Kim Felix</span>
              <p class="job">kim.felix@samsung.com</p>
              <button>Group Leader</button>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Khuất Mạnh Hoài</span>
              <p class="job">manh.hoai@samsung.com</p>
              <button>Part Leader</button>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Trần Viết Kiên</span>
              <p class="job">viet.kien@samsung.com</p>
              <button>Software</button>
            </div>
          </div>
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Trần Thị An</span>
              <p class="job">an.tt@samsung.com</p>
              <button>Innovation-SEV</button>
            </div>
          </div>
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Nguyễn Bá Phú</span>
              <p class="job">ba.phu@samsung.com</p>
              <button>Triz-SEVT</button>
            </div>
          </div>
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Đỗ Trọng Huynh</span>
              <p class="job">trong.huynh@samsung.com</p>
              <button>Logistics</button>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Nguyễn Thanh Bình</span>
              <p class="job">binht.nguyen@samsung.com</p>
              <button>Robot/AGV</button>
            </div>
          </div>
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Nguyễn Xuân Hải</span>
              <p class="job">hai91.xuan@samsung.com</p>
              <button>Innovation-SEVT</button>
            </div>
          </div>
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Hoàng Thanh Loan</span>
              <p class="job">thanh.loan@samsung.com</p>
              <button>Triz-SEV</button>
            </div>
          </div>
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Đinh Quang Huy</span>
              <p class="job">huy.dq@samsung.com</p>
              <button>CAD/CAM</button>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Nguyễn Văn Lịch</span>
              <p class="job">ngv.lich@samsung.com</p>
              <button>CNC</button>
            </div>
          </div>
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Đỗ Hồng Thắm</span>
              <p class="job">tham.do@samsung.com</p>
              <button>IE-SEVT</button>
            </div>
          </div>
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Vương Thị Thảo</span>
              <p class="job">thao.vuong@samsung.com</p>
              <button>IE-SEV</button>
            </div>
          </div>
          <div class="col-md-3 center">
            {{-- Hàng 5 - Cột 4 --}}
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Nguyễn Văn Thi</span>
              <p class="job">vanthi.ng@samsung.com</p>
              <button>Automation</button>
            </div>
          </div>
          <div class="col-md-3 center">
            <div class="card">
              <div class="card-border-top"></div>
              <div class="img"></div>
              <span>Hoàng Thị Việt Hà</span>
              <p class="job">ha.htv@samsung.com</p>
              <button>Coordinator</button>
            </div>
          </div>
          <div class="col-md-3 center">
            {{-- Hàng 6 - Cột 3 --}}
          </div>
          <div class="col-md-3 center">
            {{-- Hàng 6 - Cột 4 --}}
          </div>
        </div>
      </div>
    
    
    
    
    </main>
      
      
    
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