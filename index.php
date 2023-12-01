<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title> Home </title>


  <link rel="stylesheet" href="css/style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
   <!-- International Telephone Input CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

<!-- International Telephone Input JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


  <link rel="stylesheet" href="css/style11.css">
  <link rel="stylesheet" href="css/style.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


  <style type="text/css">

  </style>

  <script src="js/validation.js"></script>

  <script type="text/javascript">




    document.addEventListener("DOMContentLoaded", function () {


      $("document").ready(function () {
        $("#popModal").modal("show");
      });


      document.querySelectorAll('.dropdown-menu').forEach(function (element) {
        element.addEventListener('click', function (e) {
          e.stopPropagation();
        });
      })




      if (window.innerWidth < 992) {


        document.querySelectorAll('.navbar .dropdown').forEach(function (everydropdown) {
          everydropdown.addEventListener('hidden.bs.dropdown', function () {

            this.querySelectorAll('.submenu').forEach(function (everysubmenu) {

              everysubmenu.style.display = 'none';
            });
          })
        });

        document.querySelectorAll('.dropdown-menu a').forEach(function (element) {
          element.addEventListener('click', function (e) {

            let nextEl = this.nextElementSibling;
            if (nextEl && nextEl.classList.contains('submenu')) {

              e.preventDefault();
              console.log(nextEl);
              if (nextEl.style.display == 'block') {
                nextEl.style.display = 'none';
              } else {
                nextEl.style.display = 'block';
              }

            }
          });
        })
      }


    });

  </script>
  <script>
    $("document").ready(function ($) {
      var nav = $('.navigation-bar');
      $(window).scroll(function () {
        if ($(this).scrollTop() > 125) {
          navigation - bar.addClass("f-nav");
        } else {
          navigation - bar.removeClass("f-nav");
        }
      });
    });
  </script>



  <script>
    $(window).on('scroll', function () {
      var scrollPos = $(window).scrollTop();

      if (scrollPos > 0) {
        $('.navbar').addClass('navbar-scrolled');
      } else {
        $('.navbar').removeClass('navbar-scrolled');
      }
    });

  </script>

</head>

<body>




  <div class="container-fluid p-0 m-0 sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-scrolled">
      <div class="container-fluid">
        <a class="navbar-brand " href="./index.php"><img src="./images/glintix_logo.png" alt="" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">


          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                About <span class="logo-text-nav">Glintix</span>
              </a>
              <ul class="dropdown-menu dropdown_menu_show" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="./menu/ourStory.html">Our Story</a></li>
                <li><a class="dropdown-item" href="./menu/leadership.html">Leadership</a></li>
                <li><a class="dropdown-item" href="/newsroom.html">Newsroom</a></li>
                <li><a class="dropdown-item" href="/partners.html">Partners</a></li>

              </ul>
            </li>
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown"> Product </a>
              <ul class="dropdown-menu dropdown_menu_show ">
                <li><a class="dropdown-item" href="#"> HR Software &raquo; </a>
                  <ul class="submenu dropdown-menu product_menu ">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 p-0 text-center">
                          <li><a class="dropdown-item" href="menu/hr-software.php">HR Software</a></li>
                        </div>
                        <div class="col-md-6">
                          <li><a class="dropdown-item" href="menu/hcmSoftware.php"> <img src="images/corehricon.png"
                                alt=""> Core HR</a></li>
                          <li><a class="dropdown-item" href="menu/workforce.php"> <img src="images/workforceicon.png"
                                alt=""> WorkForce</a></li>
                          <li><a class="dropdown-item" href="menu/attendance-management-system.php"> <img
                                src="images/attendanceicon.png" alt=""> Attendance</a></li>
                          <li><a class="dropdown-item" href="menu/helpdesk.php"> <img src="images/helpdeskicon.png"
                                alt="">
                              Helpdesk</a></li>
                          <li><a class="dropdown-item" href="menu/recruitment.php"> <img src="images/recruitmnticon.png"
                                alt=""> Recruitment</a></li>
                        </div>
                        <div class="col-md-6">
                          <li><a class="dropdown-item" href="menu/payroll.php"> <img src="images/payrollicon.png"
                                alt="">
                              Payroll</a></li>
                          <li><a class="dropdown-item" href="menu/performance.php"> <img
                                src="images/performanceicon.png" alt=""> Performance</a></li>
                          <li><a class="dropdown-item" href="menu/engagement.php"> <img src="images/engagementicon.png"
                                alt=""> Engagement</a></li>
                          <li><a class="dropdown-item" href="menu/expense.php"> <img src="images/expenseicon.png"
                                alt="">
                              Expense</a></li>
                          <li><a class="dropdown-item" href="menu/asset.php"> <img src="images/asseticon.png" alt="">
                              Asset</a></li>
                        </div>
                      </div>
                    </div>

                  </ul>
                </li>
                <li><a class="dropdown-item" href="#">Solutions &raquo; </a>
                  <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="menu/hr-professionals.php">HR Professionals</a></li>
                    <li><a class="dropdown-item" href="menu/employees.php">Employees</a></li>
                    <li><a class="dropdown-item" href="menu/teamManagers.php">Team Managers</a></li>
                    <li><a class="dropdown-item" href="menu/cxo.php">CXO</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="menu/mobile-app.php"> Mobile App </a>

                </li>
                <li><a class="dropdown-item" href="menu/projectone.php"> ProjectOne</a>

                </li>
              </ul>
            </li>



            <li class="nav-item"><a class="nav-link" href="/Pricing.html"> Pricing </a></li>
            <li class="nav-item"><a class="nav-link" href="/clients.html"> Clients </a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> HR Resources </a>
              <ul class="dropdown-menu dropdown_menu_show">
                <li><a class="dropdown-item" href="/blog.html"> Blog </a></li>
                <li><a class="dropdown-item" href="/hr-commune.html"> HR Commune </a></li>
                <li><a class="dropdown-item" href="/guides.html"> Guides </a></li>
                <li><a class="dropdown-item" href="hrResources.html"> HR Resources </a></li>
                <li><a class="dropdown-item" href="/Template.html"> Template </a></li>
                <li><a class="dropdown-item" href="/policy.html"> Policy </a></li>
                <li><a class="dropdown-item" href="/checklist.html"> Checklist </a></li>
                <li><a class="dropdown-item" href="/glossary.html"> Glossary </a></li>
                <li><a class="dropdown-item" href="/faq.html"> FAQ </a></li>
                <li><a class="dropdown-item" href="/tips.html"> Tips </a></li>




              </ul>
            </li>
          </ul>



        </div>
       

        <form class="d-flex">
          <button class="btn btn-success btn-custom1  m-1 text-white fw-700" type="submit"><a
              href="http://localhost/Glintix_hrms/Registration%20(D)/signin.php" class="text-white">Login</a></button>
          <button class="btn btn-success btn-custom1  m-1 text-white fw-700" type="submit m-1">Contact</button>
        </form>
      </div>
    </nav>
  </div>
  <div class="container-fluid p-0">
    <section class="banner-section" id="particles-js">
      <div class="container">
        <div class="row  HomePageAnim">

          <div class="col-md-5">
            <h1 class="p-2 text-white fw-bold">Designed to Simplify HR Workday</h1>
            <h4 class="p-2 text-white">With a smart inbox to guide your day, and intelligent automations to make work
              happen faster, Glintix HRMS saves more time for your people</h4>

            <div class="d-flex justify-content-center justify-content-md-start align-items-center fw-700">
              <a href="#" class="btn btn-success btn-custom mt-5" data-bs-toggle="modal" data-bs-target="#contactModal"
                rel="noopener noreferrer">BOOK A CALL</a>
              <a href="#videoModal_home" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                class="btn btn-success btn-custom  mt-5 ms-3" rel="noopener noreferrer"> WATCH DEMO <img
                  src="./images/play-back.png" alt="Play" class="slideshow__video--icon ml-6 img-fluid" title="play back"></a>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body modal-video">
                      <iframe class="img-fluid" id="" width="100%" height="100%"
                        src="https://www.youtube.com/embed/V5he1JXiQbg" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-7">
            <div class=" text-end pt-4">
              <video style="width: 100%; height: auto;" poster="placeholder.png" autoplay=""
                class="hmvideo-animation rounded-lg img-fluid" muted="" alt="Video showing photo editor features"
                loop="">
                <source class="img-fluid" src="./images/hm-video.mp4" type="video/mp4">
              </video>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>
  <div class="container-fluid p-0 mt-5">
    <div class="row">
      <div class="col text-center">
        <h4 class="fw-bolder bg-aliceblue fs-2 p-3 ">India’s fastest growing software for HR</h4>
        <p>Trusted by the Industry leaders for managing their day-to-day HR functions</p>
      </div>
    </div>

    <div class="row justify-content-center banner_img_grp ">
      <div class="col-md-3 col-sm-6 text-center   border-bottom "> <img src="./images/kyocera.png" alt=""> </div>
      <div class="col-md-3 col-sm-6 text-center  border border-top-0"><img src="./images/logo-bikaner.jpg" alt=""></div>
      <div class="col-md-3 col-sm-6 text-center  border border-top-0"><img src="./images/logo-haier.jpg" alt=""></div>
      <div class="col-md-3 col-sm-6 text-center  border-bottom"><img src="./images/logo-harvest.jpg" alt=""></div>
    </div>
    <div class="row justify-content-center banner_img_grp ">
      <div class="col-md-3 col-sm-6 text-center  border border-start-0"> <img src="./images/kyocera.png" alt=""> </div>
      <div class="col-md-3 col-sm-6 text-center  border"><img src="./images/logo-bikaner.jpg" alt=""></div>
      <div class="col-md-3 col-sm-6 text-center  border"><img src="./images/logo-haier.jpg" alt=""></div>
      <div class="col-md-3 col-sm-6 text-center  border border-end-0"><img src="./images/logo-harvest.jpg" alt=""></div>
    </div>
    <div class="row justify-content-center banner_img_grp ">
      <div class="col-md-3 col-sm-6 text-center  border border-start-0"> <img src="./images/kyocera.png" alt=""> </div>
      <div class="col-md-3 col-sm-6 text-center  border"><img src="./images/logo-bikaner.jpg" alt=""></div>
      <div class="col-md-3 col-sm-6 text-center  border"><img src="./images/logo-haier.jpg" alt=""></div>
      <div class="col-md-3 col-sm-6 text-center  border border-end-0"><img src="./images/logo-harvest.jpg" alt=""></div>
    </div>
    <div class="row justify-content-center banner_img_grp mb-5">
      <div class="col-md-3 col-sm-6 text-center  border-top"> <img src="./images/kyocera.png" alt=""> </div>
      <div class="col-md-3 col-sm-6 text-center  border border-bottom-0"><img src="./images/logo-bikaner.jpg" alt=""></div>
      <div class="col-md-3 col-sm-6 text-center  border border-bottom-0"><img src="logo-haier.jpg" alt=""></div>
      <div class="col-md-3 col-sm-6 text-center  border-top"><img src="./images/logo-harvest.jpg" alt=""></div>
    </div>

    <div class="row mb-5 clients_custom ">
      <div class="col text-center border-end "> <span>900+</span>
        <h4>Happy Clients</h4>
      </div>
      <div class="col text-center border-end"> <span>5lacs+</span>
        <h4>Satisfied users</h4>
      </div>
      <div class="col text-center"> <span>20+</span>
        <h4>Industries served</h4>
      </div>
    </div>
  </div>

  <div class="container-fluid " style="background-color: #FFF1ED;">
    <div class="row ">
      <div class="col-md-12 text-center mt-4">
        <h2>An Award-Winning HRMS Suite</h2>
      </div>
      <div class="col-md-12 text-center mb-5">
        <img src="./images/g2-batch.svg" class="img-fluid" alt="">
      </div>

      <div class="col-md-12 text-center mb-3">
        <img src="./images/g2-feedback.svg" class="img-fluid" alt="">
      </div>

      <div class="col-md-12 text-center mb-5">
        <a href="#" class="btn btn-success btn-custom mt-5 " data-bs-toggle="modal" data-bs-target="#contactModal"
          rel="">BOOK A FREE DEMO NOW</a>

      </div>
    </div>

  </div>


  <div class="container mt-5">
    <div class="row mb-5">
      <div class="col text-center">
        <h2 class="fw-4">Why should you <span class="text-success">prefer Glintix</span><br>
          over others?</h2 class="fw-4">
      </div>
    </div>
    <div class="row">

      <div class="col-md-3">
        <div class="nav flex-column nav-pills me-4 border border-3" id="v-pills-tab" role="tablist"
          aria-orientation="vertical">
          <button class="nav-link active text-secondary  " id="v-pills-home-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
            aria-selected="true">Efficiency</button>
          <button class="nav-link text-secondary mt-4" id="v-pills-profile-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
            aria-selected="false">Analytics</button>
          <button class="nav-link text-secondary mt-4" id="v-pills-messages-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
            aria-selected="false">Strong core</button>
          <button class="nav-link text-secondary mt-4" id="v-pills-settings-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
            aria-selected="false">Experience</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="tab-content" id="v-pills-tabContent">

          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row">
              <div class="col-md-10">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                  aria-labelledby="v-pills-home-tab">
                  <h5 class="fw-bold">Never miss or delay a task ever again</h5>
                  Humans work best in a continuity and limited distraction environment. Glintix is designed to optimize
                  the
                  flow of work for all its stakeholders.<br><br>


                  Efficiency across the organisation and not just HR is likely to see a boost of 9x, HR- 5x,
                  employee-2x,
                  employer-2x<br>
                  <button type="button" class="btn btn-success btn-custom mt-5">Know more</button>
                </div>
              </div>
              <div class="col-md-2">
                <img src="./images/efficiency.png" alt="">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="row">
              <div class="col-md-10">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                  aria-labelledby="v-pills-home-tab">
                  <h5 class="fw-bold">Every data you need, available in real time</h5>
                  Glintix offers in-depth insights that are action-led and support growth in the now and as well as in
                  the
                  long-term.<br><br>

                  To say the least, you will become 3x more agile and would be able to take strategic decisions right in
                  time.<br>
                  <button type="button" class="btn btn-success btn-custom mt-5">Know more</button>
                </div>
              </div>
              <div class="col-md-2">
                <img src="./images/analytics.png" alt="">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

            <div class="row">
              <div class="col-md-10">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                  aria-labelledby="v-pills-home-tab">
                  <h5 class="fw-bold">
                    Alter the software as per your needs
                  </h5>
                  Unlike other rigid HR system, the strong core engine of Glintix allows organizations to virtually
                  model
                  them
                  at all levels from enterprise to teams.<br><br>

                  You scale, we scale! Our core engine offers immense flexibility to support your future expansion plans
                  with easy configurations.<br>
                  <button type="button" class="btn btn-success btn-custom mt-5">Know more</button>
                </div>
              </div>
              <div class="col-md-2">
                <img src="./images/strong-core.png" alt="">
              </div>
            </div>

          </div>

          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

            <div class="row">
              <div class="col-md-10">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                  aria-labelledby="v-pills-home-tab">
                  <h5 class="fw-bold">
                    Build happier workplaces
                  </h5>
                  Glintix enhances employee journey at all 3 touchpoints – peer-to-peer, HR to employees and manager to
                  teams
                  to foster a culture of appreciation & gratitude.<br><br>

                  The increase in appreciation and recognition levels makes your employees 7x more motivated for every
                  task
                  they do!<br>
                  <button type="button" class="btn btn-success btn-custom mt-5">Know more</button>
                </div>
              </div>
              <div class="col-md-2">
                <img src="./images/experience.png" alt="">
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="container mt-5">
    <div class="row d-flex justify-content-center  align-items-center ">
      <div class="col-md-8 text-center">
        <p class="p-0 m-0">Learn how we <span class="custom-color">make your HR more efficient </span>compared to any other HR
          automation tool out there!</p>
      </div>
      <div class="col-md-4 text-center">
        <button type="button" class="btn btn-success btn-custom" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Watch Now
        </button>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body modal-video">
                <iframe class="img-fluid" id="" width="100%" height="100%"
                  src="https://www.youtube.com/embed/V5he1JXiQbg" frameborder="0" allowfullscreen>
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="testimonials mt-5" style="background: #F3F9F9 !important;">
    <div class="container-fluid  ">
      <div class="row ">
        <div class="col mt-3">
          <h5 class="text-center">It’s clear that our clients 🖤 Glintix</h5>
          <h3 class="text-center text-success">Real Customers, Real Stories</h3>
        </div>
      </div>
      <div class="row mt-3 ">
        <div class="col " style="height: 400px;">
          <div class="swiper mySwiper ">
            <div class="swiper-wrapper ">
              <div class="swiper-slide">
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <img src="./images/ANNAPURNA-Finance.png" alt="">
                      <h5 class="text-dark mt-5">“We wanted a solution that could collaborate data, functions and HR
                        processes at 700+ locations flawlessly. The experience with Glintix had been amazing and one
                        that
                        I would recommend.”</h5>
                      <h4 class="text-secondary mt-5">Annapurna</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <img src="./images/ANNAPURNA-Finance.png" alt="">
                      <h5 class="text-dark mt-5">“We wanted a solution that could collaborate data, functions and HR
                        processes at 700+ locations flawlessly. The experience with Glintix had been amazing and one
                        that
                        I would recommend.”</h5>
                      <h4 class="text-secondary mt-5">Annapurna</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <img src="./images/ANNAPURNA-Finance.png" alt="">
                      <h5 class="text-dark mt-5">“We wanted a solution that could collaborate data, functions and HR
                        processes at 700+ locations flawlessly. The experience with Glintix had been amazing and one
                        that
                        I would recommend.”</h5>
                      <h4 class="text-secondary mt-5">Annapurna</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <img src="./images/ANNAPURNA-Finance.png" alt="">
                      <h5 class="text-dark mt-5">“We wanted a solution that could collaborate data, functions and HR
                        processes at 700+ locations flawlessly. The experience with Glintix had been amazing and one
                        that
                        I would recommend.”</h5>
                      <h4 class="text-secondary mt-5">Annapurna</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <img src="./images/ANNAPURNA-Finance.png" alt="">
                      <h5 class="text-dark mt-5">“We wanted a solution that could collaborate data, functions and HR
                        processes at 700+ locations flawlessly. The experience with Glintix had been amazing and one
                        that
                        I would recommend.”</h5>
                      <h4 class="text-secondary mt-5">Annapurna</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <img src="./images/ANNAPURNA-Finance.png" alt="">
                      <h5 class="text-dark mt-5">“We wanted a solution that could collaborate data, functions and HR
                        processes at 700+ locations flawlessly. The experience with Glintix had been amazing and one
                        that
                        I would recommend.”</h5>
                      <h4 class="text-secondary mt-5">Annapurna</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <img src="./images/ANNAPURNA-Finance.png" alt="">
                      <h5 class="text-dark mt-5">“We wanted a solution that could collaborate data, functions and HR
                        processes at 700+ locations flawlessly. The experience with Glintix had been amazing and one
                        that
                        I would recommend.”</h5>
                      <h4 class="text-secondary mt-5">Annapurna</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <img src="./images/ANNAPURNA-Finance.png" alt="">
                      <h5 class="text-dark mt-5">“We wanted a solution that could collaborate data, functions and HR
                        processes at 700+ locations flawlessly. The experience with Glintix had been amazing and one
                        that
                        I would recommend.”</h5>

                      <h4 class="text-secondary mt-5">Annapurna</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <img src="./images/ANNAPURNA-Finance.png" alt="">
                      <h5 class="text-dark mt-5">“We wanted a solution that could collaborate data, functions and HR
                        processes at 700+ locations flawlessly. The experience with Glintix had been amazing and one
                        that
                        I would recommend.”</h5>
                      <h4 class="text-secondary mt-5">Annapurna</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pricingSection mt-5">
    <div class="container ">
      <div class="row">
        <div class="col">
          <h2 class="text-center">Media Coverage</h2>
          <p class="text-center">Glintix has featured in leading tabloids and media agencies as an Industry thought
            leader
            for their unparalleled &amp; out-of-the box HR automation services offering.</p>
        </div>
      </div>
      <div class="row ">
        <div class="col text-center ">
          <img src="./images/logo-times-jobs.png" alt="">
        </div>
        <div class="col text-center">
          <img src="./images/logo-times-jobs.png" alt="">
        </div>
        <div class="col text-center">
          <img src="./images/logo-times-jobs.png" alt="">
        </div>
        <div class="col text-center">
          <img src="./images/logo-times-jobs.png" alt="">
        </div>
        <div class="col text-center">
          <img src="./images/logo-times-jobs.png" alt="">
        </div>
        <div class="col text-center">
          <img src="./images/logo-times-jobs.png" alt="">
        </div>
        <div class="col text-center">
          <img src="./images/logo-times-jobs.png" alt="">
        </div>
        <div class="col text-center">
          <img src="./images/logo-times-jobs.png" alt="">
        </div>
        <div class="col text-center">
          <img src="./images/logo-times-jobs.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-5 col-sm-12">
        <img src="./images/mobile.png" alt="" class="img-fluid">
      </div>
      <div class="col-md-7 col-sm-12">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <h3 class="fw-bold">The first ever Mobile app with <span class="text-success">ESS + MSS + HSS</span>
                  </h3>
                  <ul class="mobile_app_slider ">
                    <li class="fw-bold">Employee Self Service-</li>
                    <p>Allow your employees to perform 25+ actions on the go from onboarding to goal creation and
                      setting, investment declarations, participating in Surveys, raising helpdesk tickets and more.</p>
                    <li class="fw-bold">Manager Self Service –</li>
                    <p> The Manager Self Service allows the team leads/manager to take 20+ approvals on the go like bulk
                      approval of attendance, new job opening, reviewing team goals, providing feedback and approving
                      clearance. </p>
                    <li class="fw-bold">HR Self Service – </li>
                    <p class="mb-0">Our app enables the HR to execute 20+ tasks like making company wide announcements,
                      managing job openings, generating various ELC letters, preboarding, onboarding, offer approval et
                      al.</p>
                  </ul>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <h3 class="fw-bold">The first ever Mobile app with <span class="text-success">ESS + MSS + HSS</span>
                  </h3>
                  <ul class="mobile_app_slider ">
                    <li class="fw-bold">Employee Self Service-</li>
                    <p>Allow your employees to perform 25+ actions on the go from onboarding to goal creation and
                      setting, investment declarations, participating in Surveys, raising helpdesk tickets and more.</p>
                    <li class="fw-bold">Manager Self Service –</li>
                    <p> The Manager Self Service allows the team leads/manager to take 20+ approvals on the go like bulk
                      approval of attendance, new job opening, reviewing team goals, providing feedback and approving
                      clearance. </p>
                    <li class="fw-bold">HR Self Service – </li>
                    <p class="mb-0">Our app enables the HR to execute 20+ tasks like making company wide announcements,
                      managing job openings, generating various ELC letters, preboarding, onboarding, offer approval et
                      al.</p>
                  </ul>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <h3 class="fw-bold">The first ever Mobile app with <span class="text-success">ESS + MSS + HSS</span>
                  </h3>
                  <ul class="mobile_app_slider ">
                    <li class="fw-bold">Employee Self Service-</li>
                    <p>Allow your employees to perform 25+ actions on the go from onboarding to goal creation and
                      setting, investment declarations, participating in Surveys, raising helpdesk tickets and more.</p>
                    <li class="fw-bold">Manager Self Service –</li>
                    <p> The Manager Self Service allows the team leads/manager to take 20+ approvals on the go like bulk
                      approval of attendance, new job opening, reviewing team goals, providing feedback and approving
                      clearance. </p>
                    <li class="fw-bold">HR Self Service – </li>
                    <p class="mb-0">Our app enables the HR to execute 20+ tasks like making company wide announcements,
                      managing job openings, generating various ELC letters, preboarding, onboarding, offer approval et
                      al.</p>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="row mt-5">
          <div class="col-md-4">
            <img src="./images/appstore.svg" alt="">
          </div>
          <div class="col-md-4">
            <img src="./images/playstore.svg" alt="">
          </div>
          <div class="col-md-4">
            <img src="./images/playstore.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 mt-5 d-flex justify-content-center align-items-center">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-a" role="tabpanel" aria-labelledby="v-pills-home-tab"><img
              src="./images/corehr_index.png" alt="" class="img-fluid"></div>
          <div class="tab-pane fade" id="v-pills-b" role="tabpanel" aria-labelledby="v-pills-profile-tab"><img
              src="./images/workforce_index.png" alt="" class="img-fluid"></div>
          <div class="tab-pane fade" id="v-pills-c" role="tabpanel" aria-labelledby="v-pills-messages-tab"><img
              src="./images/payroll_index.png" alt="" class="img-fluid"></div>
          <div class="tab-pane fade" id="v-pills-d" role="tabpanel" aria-labelledby="v-pills-settings-tab"><img
              src="./images/attendance_index.png" alt="" class="img-fluid"></div>
          <div class="tab-pane fade" id="v-pills-e" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            <img src="./images/performance_index.png" alt="" class="img-fluid">
          </div>
          <div class="tab-pane fade" id="v-pills-f" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            <img src="images/engagement_index.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-5 pills-button-bg">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link border m-2 active" id="v-pills-home-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-a" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
            <img src="icons8-hr-manager-64.png" alt="" class="img-fluid"> <span class="pill-btn-text ms-3">Core
              HR</span>
          </button>
          <button class="nav-link m-2 border" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-b"
            type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
            <img src="icons8-workforce-64.png" alt="" class="img-fluid"> <span
              class="pill-btn-text ms-3">WorkForce</span>
          </button>
          <button class="nav-link m-2 border" id="v-pills-messages-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-c" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
            <img src="icons8-payroll-48.png" alt="" class="img-fluid"> <span class="pill-btn-text ms-3">Payroll</span>
          </button>
          <button class="nav-link m-2 border" id="v-pills-settings-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-d" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
            <img src="icons8-attendance-48.png" alt="" class="img-fluid"> <span
              class="pill-btn-text ms-3">Attendance</span>
          </button>
          <button class="nav-link m-2 border" id="v-pills-settings-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-e" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
            <img src="icons8-performance-100.png" alt="" class="img-fluid"> <span
              class="pill-btn-text ms-3">Performance</span>
          </button>
          <button class="nav-link m-2 border" id="v-pills-settings-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-f" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
            <img src="icons8-user-engagement-female-48.png" alt="" class="img-fluid"> <span
              class="pill-btn-text ms-3">Engagement</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <h4 class="text-center fw-bold">Ready to be the Next-Gen HR? </h4>
        <p class="text-center">In the Bersin led Deloitte study, it was found that the companies with newly upgraded HCM
          spend as less as 22 percent of the time per employee. Build happier workplaces by spending less time on HR
          operations and more time on human interactions &amp; nurturing your talent with Glintix. Take the leap with
          India’s first truly #MobileFirst Mobile First HR app, Glintix. Speak to our experts to experience this marvel
          first-hand.</p>
      </div>
    </div>
    <div class="row justify-content-center mt-3">
      <div class="col-lg-3 col-md-4 col-12 text-center">
        <a href="#" class="btn btn-success btn-custom" data-bs-toggle="modal" data-bs-target="#contactModal"
          rel="noopener noreferrer">Get Free Demo</a>
      </div>
      <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title fw-bold " id="contactModallLabel">Book a Demo!</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="action.php">
                <div class="row mb-4">
                  <div class="col-md-6 col-sm-12">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name*"
                      required>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name*"
                      required>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-6 col-sm-12">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Work Email*"
                      required>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 ">
                        <input type="tel" id="phone" class="form-control w-100" required>
                      </div>
                      <!-- <div class="col-md-8 col-sm-12 ps-0">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="+91">
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-6 col-sm-12">
                    <select class="form-select" aria-label="Default select example" required>
                      <option selected>No. of Employees*</option>
                      <option value="1">1-50</option>
                      <option value="2">51-100</option>
                      <option value="3">101-200</option>
                      <option value="3">201-500</option>
                      <option value="3">501-1000</option>
                      <option value="3">1000+</option>
                    </select>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <select class="form-select" aria-label="Default select example" required>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Puducherry">Puducherry</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="West Bengal">West Bengal</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-6 col-sm-12">
                    <select class="form-select" aria-label="Default select example" required>
                      <option selected>Seniority*</option>
                      <option value="1">Owner</option>
                      <option value="2">Partner</option>
                      <option value="3">CXO</option>
                      <option value="3">VP</option>
                      <option value="3">Director</option>
                      <option value="3">Head</option>
                      <option value="3">Manager</option>
                      <option value="3">Senior</option>
                      <option value="3">Entry</option>
                    </select>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <select class="form-select" aria-label="Default select example" required>
                      <option selected>Function*</option>
                      <option value="1">Owner/Founder</option>
                      <option value="2">HR</option>
                      <option value="3">HR Business Partner</option>
                      <option value="3">HR Talent Management</option>
                      <option value="3">HR Talent Acquisition</option>
                      <option value="3">HR Compensation & Benefits</option>
                      <option value="2">Administation</option>
                      <option value="2">Finanace</option>
                      <option value="2">IT</option>
                    </select>
                  </div>
                </div>
                <div class="modal-footer justify-content-center">
                  <button type=" submit btn btn-primary " class="btn btn-success btn-custom ">Book a Demo</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row  mt-5">
        <div class="col">
          <div class="logoFoot">
            <img src="./images/glintix_logo.png" alt="" class="img-fluid">
          </div>
          <div class="foottext mt-3">
            An intelligent enterprise-ready HCM suite that automates HR processes, simplifies human interactions and
            deliver actionable insights to build better workplaces.
          </div>
          <div class="footcerti mt-3">
            <img src="./images/dmca_protected_sml_120af.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col">
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-0 ">
              <h6 class="text-success">Product</h6>
            </li>
            <li class="list-group-item p-0 "> <a href="">HR Software</a> </li>
            <li class="list-group-item p-0 "> <a href="">Payroll Software</a> </li>
            <li class="list-group-item p-0 "><a href="">Performance</a></li>
            <li class="list-group-item p-0 "><a href="">Attendance</a></li>
            <li class="list-group-item p-0 "><a href="">Workforce</a></li>
            <li class="list-group-item p-0 "><a href="">Core HR</a></li>
            <li class="list-group-item p-0 "><a href="">Engagement</a></li>
            <li class="list-group-item p-0 "><a href="">Helpdesk</a></li>
            <li class="list-group-item p-0 "><a href="">Expense</a></li>
            <li class="list-group-item p-0 "><a href="">Recruitment</a></li>
            <li class="list-group-item p-0 "><a href="">Asset</a></li>
            <li class="list-group-item p-0 "><a href="">Mobile App</a></li>
            <li class="list-group-item p-0 "><a href="">Inbox for HR</a></li>
            <li class="list-group-item p-0 "><a href="">Leave</a></li>
            <li class="list-group-item p-0 "><a href="">Time Tracking</a></li>
            <li class="list-group-item p-0 "><a href="">ProjectOne</a></li>
            <li class="list-group-item p-0 "><a href="">Partners</a></li>
          </ul>
        </div>
        <div class="col">
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-0 ">
              <h6 class="text-success">Solution By Role</h6>
            </li>
            <li class="list-group-item p-0 "> <a href="">HR Professionals</a> </li>
            <li class="list-group-item p-0 "> <a href="">Managers</a> </li>
            <li class="list-group-item p-0 "><a href="">Employees</a></li>
            <li class="list-group-item p-0 "><a href="">CXO</a></li>
          </ul>
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-0 ">
              <h6 class="text-success">Solution By Cities</h6>
            </li>
            <li class="list-group-item p-0 "> <a href="">HR Software Mumbai</a> </li>
            <li class="list-group-item p-0 "> <a href="">HR Software Bangalore</a> </li>
            <li class="list-group-item p-0 "><a href="">HR Software Delhi</a></li>
            <li class="list-group-item p-0 "><a href="">HR Software Chennai</a></li>
            <li class="list-group-item p-0 "><a href="">HR Software Hyderabad</a></li>
            <li class="list-group-item p-0 "><a href="">Payroll Delhi</a></li>
            <li class="list-group-item p-0 "><a href="">Payroll Chennai</a></li>
            <li class="list-group-item p-0 "><a href="">Payroll Hyderabad</a></li>
            <li class="list-group-item p-0 "><a href="">Payroll Bangalore</a></li>
            <li class="list-group-item p-0 "><a href="">Payroll Mumbai</a></li>
          </ul>
        </div>
        <div class="col">
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-0 ">
              <h6 class="text-success">Resources</h6>
            </li>
            <li class="list-group-item p-0 "> <a href="">Blog</a> </li>
            <li class="list-group-item p-0 "> <a href="">HR Commune</a> </li>
            <li class="list-group-item p-0 "><a href="">Guides</a></li>
            <li class="list-group-item p-0 "><a href="">HR Resources</a></li>
            <li class="list-group-item p-0 "><a href="">Template</a></li>
            <li class="list-group-item p-0 "><a href="">Policy</a></li>
            <li class="list-group-item p-0 "><a href="">Checklist</a></li>
            <li class="list-group-item p-0 "><a href="">Glossary</a></li>
            <li class="list-group-item p-0 "><a href="">FAQ</a></li>
            <li class="list-group-item p-0 "><a href="">Tips</a></li>
          </ul>
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-0 ">
              <h6 class="text-success">More</h6>
            </li>
            <li class="list-group-item p-0 "> <a href="">Payroll Solutions</a> </li>
            <li class="list-group-item p-0 "> <a href="">HR Solutions</a> </li>
          </ul>
        </div>
        <div class="col">
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-0 ">
              <h6 class="text-success">Company</h6>
            </li>
            <li class="list-group-item p-0 "> <a href="">Why Glintix</a> </li>
            <li class="list-group-item p-0 "> <a href="">Pricing</a> </li>
            <li class="list-group-item p-0 "><a href="">Clients</a></li>
            <li class="list-group-item p-0 "><a href="">Contact</a></li>
          </ul>
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-0 ">
              <h6 class="text-success">Guide</h6>
            </li>
            <li class="list-group-item p-0 "> <a href="">The Continuous Listening Guide</a> </li>
            <li class="list-group-item p-0 "> <a href="">HRMS Guide</a> </li>
            <li class="list-group-item p-0 "><a href="">Payroll Guide</a></li>
            <li class="list-group-item p-0 "><a href="">Recruitment Guide</a></li>
            <li class="list-group-item p-0 "><a href="">Performance Management Guide</a></li>
            <li class="list-group-item p-0 "><a href="">Appraisal Guide</a></li>
            <li class="list-group-item p-0 "><a href="">Engagement Guide</a></li>
            <li class="list-group-item p-0 "><a href="">Leave Management Guide</a></li>
            <li class="list-group-item p-0 "><a href="">Expense Guide</a></li>
          </ul>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4 ">
          <a href="#" target="_blank" rel="noopener"><img src="./images/playstore.svg" class="appstore__link"
              alt=" Glintix Inbox App on Google Play Store"></a>
          <a href="#" target="_blank" rel="noopener"><img src="./images/appstore.svg" class="appstore__link"
              alt="Glintix Inbox App on Apple App Store"></a>
          <p class="mb-0 mt-2"><a href="#" target="_blank" class="social__link" rel="noopener"><img src="./images/facebook.svg"
                alt="Glintix Facebook" class="social__icon"></a>
            <a href="#" target="_blank" class="social__link" rel="noopener"><img src="./images/linkedin.svg"
                alt="Glintix Linkedin" class="social__icon"></a>
            <a href="#" target="_blank" class="social__link" rel="noopener"><img src="./images/twitter.svg" alt="Glintix Twitter"
                class="social__icon"></a>
          </p>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col text-center">
              <div class="footer_img"><img src="./images/best-value-software-2022.png" alt=""
                  class="img-fluid footer__awards--img"></div>
            </div>
            <div class="col text-center">
              <div class="footer_img"></div><img src="./images/G2-badge.png" alt="" class="img-fluid footer__awards--img">
            </div>
            <div class="col text-center">
              <div class="footer_img"></div><img src="./images/footer-supreme-software.png" alt=""
                class="img-fluid footer__awards--img">
            </div>
            <div class="col text-center">
              <div class="footer_img"></div><img src="./images/footer-customer-choice.png" alt=""
                class="img-fluid footer__awards--img">
            </div>
            <div class="col text-center">
              <div class="footer_img"></div><img src="./images/footer-leader.png" alt="" class="img-fluid footer__awards--img">
            </div>
            <div class="col text-center">
              <div class="footer_img"></div><img src="./images/footer-techjockey.png" alt=""
                class="img-fluid footer__awards--img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <hr>
  <section class="bottom-note">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-4">
          <p>Copyright © 2023. Gnoin  Pvt. Ltd. All Rights Reserved.</p>
          <p><span class="text-success">Gnoin Pvt. Ltd.</span> </p>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col">
              <p>Terms & Services</p>
            </div>
            <div class="col">
              <p>Privacy</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="container">
    <div class="row">
      <div class="col">
        <div class="modal fade" id="popModal" tabindex="-1" aria-labelledby="popModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg ">
            <div class="modal-content">
              <div class="modal-header bg-aliceblue ">
                <!-- <h5 class="modal-title fw-bold  " id="popModallLabel">Book a Demo!</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body bg-aliceblue p-0">

                <!-- FORM 1 -->
                <form id="popupform" action="" method="POST">
                  <div id="error-message1" class="text-danger"></div>
                  <div id="success-message1" class="text-success"></div>
                  <div class="card ">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="./images/popmodalimg.jpg" class="img-fluid rounded-start h-100 " alt="...">
                      </div>

                      <div class="col-md-7">
                        <div class="card-body">
                          <div class="row mb-4">

                            <div class="col-md-6 col-sm-12">
                              <input type="text" class="form-control" id="fname1" name="fname"
                                placeholder="First Name*">
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <input type="text" class="form-control" id="lname1" name="lname" placeholder="Last Name*">
                            </div>
                          </div>
                          <div class="row mb-4">
                            <div class="col-md-6 col-sm-12">
                              <input type="text" class="form-control" id="email1" name="email"
                                placeholder="Work Email*">
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                  <input type="text" maxlength="10" id="number1" name="number"
                                    class="form-control w-100"
                                    onkeyup="if(/\D/g.test(this.value))this.value=this.value.replace(/\D/g,'')"
                                    placeholder="Enter Mobile">
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="row mb-4">
                            <div class="col-md-6 col-sm-12">
                              <select class="form-select" aria-label="Default select example" name="no_of_emp"
                                id="no_of_emp1">
                                <option selected>No. of Employees*</option>
                                <option value="1">1-50</option>
                                <option value="2">51-100</option>
                                <option value="3">101-200</option>
                                <option value="3">201-500</option>
                                <option value="3">501-1000</option>
                                <option value="3">1000+</option>
                              </select>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <select class="form-select" aria-label="Default select example" name="state" id="state1">
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-4">
                            <div class="col-md-6 col-sm-12">
                              <select class="form-select" aria-label="Default select example" name="designation"
                                id="designation1">
                                <option value="" selected>Designation*</option>

                                <option value="1">Seniority</option>
                                <option value="1">Owner</option>
                                <option value="2">Partner</option>
                                <option value="3">CXO</option>
                                <option value="3">VP</option>
                                <option value="3">Director</option>
                                <option value="3">Head</option>
                                <option value="3">Manager</option>
                                <option value="3">Senior</option>
                                <option value="3">Entry</option>
                              </select>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <select class="form-select" aria-label="Default select example" name="function"
                                id="function1">
                                <option value="" selected>Function*</option>

                                <option value="1">Owner/Founder</option>
                                <option value="2">HR</option>
                                <option value="3">HR Business Partner</option>
                                <option value="3">HR Talent Management</option>
                                <option value="3">HR Talent Acquisition</option>
                                <option value="3">HR Compensation & Benefits</option>
                                <option value="2">Administation</option>
                                <option value="2">Finanace</option>
                                <option value="2">IT</option>
                              </select>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-center bg-aliceblue">
                    <input type="submit" class="btn btn-success btn-custom1  m-1 text-white fw-700" name="submit" value="Book" id="submitpop">
                  </div>


                </form>
                <!-- FORM 1 CLOSE -->


              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script>
    var Swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },

    });
  </script>
  <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>
   <script>
    const phoneInputField1 = document.querySelector("#number1");
    const phoneInput1 = window.intlTelInput(phoneInputField1, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>

  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>
  <script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function () {
      stats.begin();
      stats.end();
      if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
        count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
      }
      requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
  </script>
 
  
 

  

  <script>
    $(document).ready(function () {
      $('#submitbtn').click(function (e) {
        e.preventDefault();

        // Clear previous error and success messages
        $('#error-message').text('');
        $('#success-message').text('');

        // Validate form inputs
        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var email = $('#email').val();
        var number = $('#number').val();
        var employees = $('#no_of_emp').val();
        var state = $('#state').val();
        var seniority = $('#seniority').val();
        var functionVal = $('#function').val();

        if (fname === '' || lname === '' || email === '' || number === '' || employees === '' || state === '' || seniority === '' || functionVal === '') {
          $('#error-message').text('Please fill in all required fields.');
        } else {
          // Send AJAX request
          $.ajax({
            type: 'POST',
            url: 'http://localhost/Glintix_hrms/insert_data.php',
            data: $('#demoform').serialize(),
            cache: false,
            success: function (data) {
              // Clear form inputs
              $('#demoform')[0].reset();

              // Show success message
              $('#success-message').text('Form submitted successfully.');
            },
            error: function () {
              $('#error-message').text('An error occurred while submitting the form.');
            }
          });
        }
      });
    });
  </script>

 

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <script>
    $(document).ready(function () {
      $('#submitpop').click(function (e) {
        e.preventDefault();

        // Clear previous error and success messages
        $('#error-message1').text('');
        $('#success-message1').text('');

        // Validate form inputs
        var fname1 = $('#fname1').val();
        var lname1 = $('#lname1').val();
        var email1 = $('#email1').val();
        var number1 = $('#number1').val();
        var employees1 = $('#no_of_emp1').val();
        var state1 = $('#state1').val();
        var seniority1 = $('#seniority1').val();
        var functionVal1 = $('#function1').val();

        if (fname1 === '' || lname1 === '' || email1 === '' || number1 === '' || employees1 === '' || state1 === '' || seniority1 === '' || functionVal1 === '') {
          $('#error-message1').text('Please fill in all required fields.');
        } else {
          // Send AJAX request
          $.ajax({
            type: 'POST',
            url: 'http://localhost/Glintix_hrms/insert_data.php',
            data: $('#popupform').serialize(),
            cache: false,
            success: function (data) {
              // Clear form inputs
              $('#popupform')[0].reset();

              // Show success message
              $('#success-message1').text('Form submitted successfully.');
            },
            error: function () {
              $('#error-message1').text('An error occurred while submitting the form.');
            }
          });
        }
      });
    });


   
  </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
   <script src="script.js"></script>

</body>

</html>