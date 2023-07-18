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
    <link href="./cssCommon/fontRobo.css" rel="stylesheet">
    
    <!-- Icon Font Stylesheet COMMON -->
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="./cssWelcome/img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Tin tức</h5>
                                <h1 class="display-3 text-white animated slideInDown">Training Plan</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Thông tin lịch trình đào tạo tháng 6 các khóa đào tạo được tổ chức tại SEV, SEVT, Hà Nội....</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Chi tiết</a>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="./cssWelcome/img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Sự kiện</h5>
                                <h1 class="display-3 text-white animated slideInDown">Samsung Viet Nam Technical Skill 2023</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Cuộc thi tay nghề kỹ thuật lớn nhất tại Samsung VN với sự tham gia của những nhân viên ưu tú giữa các nhà máy SEV, SEVT, SDV, SEMV, SDIV, SEHC. .</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Chi tiết</a>           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="./cssWelcome/img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Sự kiện</h5>
                                <h1 class="display-3 text-white animated slideInDown">Industrial 4.0 Semina</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Hội thảo công nghiệp 4.0 với sự tham gia của PGS.TS Nguyễn Văn A....</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Chi tiết</a>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->  

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="./cssWelcome/img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Chúng tôi là SATTI</h1>
                    <p class="mb-4">Samsung Advanced Training Technology Instutite (SATTI) - Bộ phận đào tạo kỹ thuật và công nghệ cao</p>
                    <p class="mb-4">Con người là giá trị cốt lõi đầu tiên để tạo nên thành công của 4 giá trị cốt lõi còn lại. SATTI với sứ mệnh đào tạo nguồn nhân lực công nghệ cao đáp ứng nhu cầu đổi mới về công nghiệp 4.0 và chuyển đổi số trong sản xuất với nhiều chương trình như:</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Công nghệ thiết bị</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Công nghệ phần mềm</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kỹ thuật cải tiến</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Đào tạo đối tác Vendor cấp 1</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Hội thảo công nghệ</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Bản tin công nghệ</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Chi tiết</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Chart Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Training Result</h6>
                <h1 class="mb-5">Kết quả đào tạo</h1>
            </div>
            <div class="row g-2 justify-content-center">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="chart">
                        <canvas id="barchart1" width="auto"></canvas>
                    </div>
                </div>
            </div>
            <div class="row g-2 justify-content-center">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="chart">
                        <canvas id="barchart2" width="auto"></canvas>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="chart">
                        <canvas id="barchart3" width="auto"></canvas>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="chart">
                        <canvas id="doughnut4" width="auto"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart End -->

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses Categories</h6>
                <h1 class="mb-5">Danh mục khóa học</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="./cssWelcome/img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Software</h5>
                                    <small class="text-primary">29 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="./cssWelcome/img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Automation</h5>
                                    <small class="text-primary">29 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="./cssWelcome/img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Innovation</h5>
                                    <small class="text-primary">29 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="./cssWelcome/img/cat-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Online Course</h5>
                            <small class="text-primary">29 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Popular Courses</h6>
                <h1 class="mb-5">Khóa học nổi bật</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="./cssWelcome/img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 10px 10px 10px 10px;">Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">Automation Leader</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>viet.kien</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>7 Days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="./cssWelcome/img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 10px 10px 10px 10px;">Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">SPS Leader</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>ba.phu</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>10 Days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="./cssWelcome/img/course-3.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 10px 10px 10px 10px;">Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">PLC Siemens Programming</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>vanthi.ng</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>5 Days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>10 Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Expert Instructors</h6>
                <h1 class="mb-5">Giảng viên chuyên gia</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./cssWelcome/img/team-1.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Phan Tố Uyên</h5>
                            <small>PGS.TS - ĐH Kinh Tế Quốc Dân</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./cssWelcome/img/team-2.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Tạ Văn Lợi</h5>
                            <small>PGS.TS - ĐH Kinh Tế Quốc Dân</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./cssWelcome/img/team-3.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Nguyễn Trí Cường</h5>
                            <small>TS - ĐH Bách Khoa Hà Nội</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./cssWelcome/img/team-4.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Phạm Thị Lý</h5>
                            <small>TS - ĐH Giao Thông Vận Tải</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Servey !</h6>
                <h1 class="mb-5">Học viên phản hồi!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="./cssWelcome/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nguyên Thành Tú</h5>
                    <p>Pad Equipment P</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tham gia khóa học Automation giúp tôi được tiếp cận với nhiều công nghệ mới trong sản xuất.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="./cssWelcome/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Trần Đồng Kiên</h5>
                    <p>Main G</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tôi thật vinh dự khi được tham gia khóa học SPS Leader, khóa học mang đến cho tôi rất nhiều kiến thức bổ ích và được giao lưu cùng nhiều bạn học viên.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="./cssWelcome/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nguyễn Văn Hùng</h5>
                    <p>CNC Color Equipment</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Khóa học truyền thông công nghiệp đã giúp tôi hoàn thành được dự án cải tiến kết nối Barcode với PLC từ đó cắt giảm được thao tác lãng phí, cảm ơn SATTI đã tổ chức khóa học.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="./cssWelcome/img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nguyễn Song Toàn</h5>
                    <p>Automation S/W</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Khi tham gia khóa học QC Tool tôi mới biết mình còn thiếu rất nhiều kiến thức trong quản lý chất lượng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

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


    <!-- JavaScript Libraries -->
    <script src="./cssCommon/js/code.jquery.com_jquery-3.4.1.min.js"></script>
    <script src="./cssCommon/js/cdn.jsdelivr.net_npm_bootstrap@5.0.0_dist_js_bootstrap.bundle.js"></script>
    <script src="./cssWelcome/lib/wow/wow.min.js"></script>
    <script src="./cssWelcome/lib/easing/easing.min.js"></script>
    <script src="./cssWelcome/lib/waypoints/waypoints.min.js"></script>
    <script src="./cssWelcome/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="./cssWelcome/js/main.js"></script>

    <script src="./csschart/cdn.jsdelivr.net_npm_chart.js"></script>
    <script src="./csschart/chart1.js"></script>
    <script src="./csschart/chart2.js"></script>
    <script src="./csschart/chart3.js"></script>
    <script src="./csschart/chart4.js"></script>

</body>

</html>