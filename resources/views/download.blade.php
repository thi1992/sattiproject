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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="./cssWelcome/lib/animate/animate.min.css" rel="stylesheet">
        <link href="./cssWelcome/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="./cssWelcome/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="./cssWelcome/css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="./cssdownload/styledownload.css">
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

    <main>
        <div class="container">
        <h2>Danh sách các phần mềm đào tạo</h2>
        <h5>Chú ý: Các phần mềm đã được IT của 2 nhà máy SEV và SEVT cho phép sử dụng miễn phí trong công ty</h5>
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-details">
                  <p class="text-title">GX-Work 2</p>
                  <p class="text-body">Phần mềm dùng đê lập trình PLC Mitsubishi</p>
                </div>
                <button class="card-button"><a href="{{ route('download1') }}">DOWNLOAD</a></button>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-details">
                  <p class="text-title">Card title</p>
                  <p class="text-body">Here are the details of the card</p>
                </div>
                <button class="card-button"><a href="">DOWNLOAD</a></button>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-details">
                  <p class="text-title">Card title</p>
                  <p class="text-body">Here are the details of the card</p>
                </div>
                <button class="card-button"><a href="">DOWNLOAD</a></button>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-details">
                  <p class="text-title">Card title</p>
                  <p class="text-body">Here are the details of the card</p>
                </div>
                <button class="card-button"><a href="">DOWNLOAD</a></button>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                  <div class="card-details">
                    <p class="text-title">Card title</p>
                    <p class="text-body">Here are the details of the card</p>
                  </div>
                  <button class="card-button"><a href="">DOWNLOAD</a></button>
                </div>
              </div>
              
              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                  <div class="card-details">
                    <p class="text-title">Card title</p>
                    <p class="text-body">Here are the details of the card</p>
                  </div>
                  <button class="card-button"><a href="">DOWNLOAD</a></button>
                </div>
              </div>
              
              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                  <div class="card-details">
                    <p class="text-title">Card title</p>
                    <p class="text-body">Here are the details of the card</p>
                  </div>
                  <button class="card-button"><a href="">DOWNLOAD</a></button>
                </div>
              </div>
              
              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                  <div class="card-details">
                    <p class="text-title">Card title</p>
                    <p class="text-body">Here are the details of the card</p>
                  </div>
                  <button class="card-button"><a href="">DOWNLOAD</a></button>
                </div>
              </div>
          </div>
          
          <div class="row">
            <!-- Third Row -->
            <!-- Add your cards here -->
          </div>
          
          <div class="row">
            <!-- Fourth Row -->
            <!-- Add your cards here -->
          </div>
        </div>
    </main>
      
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./cssWelcome/lib/wow/wow.min.js"></script>
    <script src="./cssWelcome/lib/easing/easing.min.js"></script>
    <script src="./cssWelcome/lib/waypoints/waypoints.min.js"></script>
    <script src="./cssWelcome/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="./cssWelcome/js/main.js"></script>
      
</body>
</html>