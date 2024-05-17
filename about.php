
<?php
$koneksi = mysqli_connect("localhost", "user", "user", "wd_afl2");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

$query = "SELECT * FROM profile";
$result = mysqli_query($koneksi, $query);

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

$data_json = json_encode($data);

mysqli_close($koneksi);
?>

<!doctype html>
<html lang="en">

<!-- Head -->
<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>Portfolio - Valencia Melita</title>

</head>
<body class="">

    <!-- Locomotive Scroll Container-->
    <div data-scroll-container>
        <!-- Navbar -->
        <nav data-scroll-section class="navbar navbar-expand-lg navbar-light bg-transparent mb-5 mb-lg-10">
          <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center fade-in" href="./index.php" data-scroll>
              <picture class="avatar me-3" data-scroll data-scroll-speed="10" data-scroll-direction="horizontal" data-scroll-position="top">
                <img class="img-fluid rounded-circle" src="./assets/images/logo.png">
              </picture>
              <span class="fw-bolder fs-6 d-flex justify-content-start" data-scroll-section>
                <span class="fade-in" data-scroll data-scroll-speed="2" data-scroll-delay=".03" data-scroll-position="top">Valencia Melita</span>
              </span>
            </a>
            <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" data-scroll data-scroll-speed="4" data-scroll-delay=".6" data-scroll-position="top">
              <ul class="navbar-nav me-0 ms-auto mb-2 mb-lg-0 mt-4 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./work.php">Work</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./contact.php">Contact</a>
                </li>
                <li class="nav-item d-lg-none">
                  <a class="nav-link btn-toggle-mode" href="#">Toggle Dark/Light Mode</a>
                </li>
              </ul>
            </div>
            <button class="btn-icon btn-toggle-mode ms-7 fade-in d-none d-lg-flex" data-scroll data-scroll-speed="-10" data-scroll-direction="horizontal" data-scroll-position="top"><i class="ri-sun-line"></i></button>
          </div>
        </nav>        <!-- / Navbar-->

        <!-- Main Section-->
        <section class="container py-3 " data-scroll-section>
            <!-- Page Content Goes Here -->

            <h1 class="display-3 mb-5" data-scroll data-scroll-speed="6" data-scroll-position="top">About Me</h1>

            <div class="row g-8">
                <!-- Profile Image-->
                <div class="col-12 col-md-5" data-scroll data-scroll-speed="6" data-scroll-position="top">
                    <picture>
                        <img class="img-fluid" src="./assets/images/profile.jpg">
                    </picture>
                    <div style="margin-top: 10px;">
                        <p><strong> Details </strong></p>
                        <ul>
                        <li><i class="bi bi-rounded-right"></i> <strong>Full Name:</strong> <?php echo $data[0]['fullname']; ?></li>
                        <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> <?php echo $data[0]['birthday']; ?></li>
                        <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> <?php echo $data[0]['phone']; ?></li>
                        <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong> <?php echo $data[0]['email']; ?></li>
                    </ul>
                    </div>
                    
                </div>
                <!-- / Profile Image-->

                <!-- / Bio & CV Link-->
                <div class="col-12 col-md-7">
                    <div class="row g-5 g-xl-8">
                        <div class="col-12 col-xl-7" data-scroll data-scroll-speed="4" data-scroll-position="top">
                            <p class="lead">I'm Valencia Melita, a second-year Information System Student.</p>
                        
                            <p>  Hi, I am a student majoring in Information System for Business in Ciputra University in Surabaya. My interests are on tech, event concepting, editing, travelling, films and music.
                            
                            <p> During my college years, I am looking forward to develop my skills in other areas as well, especially on soft and hard skills.</p>

                           
                        </div>
                        <div class="col-12 col-xl-5" data-scroll data-scroll-speed="2" data-scroll-position="top">
                            <a href="assets/CV_Valencia.pdf" class="btn btn-dark w-100 d-flex align-items-center justify-content-center"><i class="ri-file-download-line ri-lg me-2" download="CV_Valencia.pdf"></i> Download My CV</a>
                            <h5 class="fw-medium mt-6 mb-3">Find Me Online</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center mb-2"><i class="ri-github-line me-3 ri-lg"></i> <a class="link-body" href="https://github.com/valenciamelita">Github</a></li>
                                <li class="d-flex align-items-center mb-2"><i class="ri-twitter-line me-3 ri-lg"></i> <a class="link-body" href="https://twitter.com/taylorswift13">Twitter</a></li>
                                <li class="d-flex align-items-center mb-2"><i class="ri-linkedin-line me-3 ri-lg"></i> <a class="link-body" href="https://www.linkedin.com/in/valencia-melita-christy-130334291/">LinkedIn</a></li>
                                <li class="d-flex align-items-center mb-2"><i class="ri-instagram-line me-3 ri-lg"></i> <a class="link-body" href="https://www.instagram.com/valenciamelitaa/">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- / Bio & CV Link-->
            </div>

             <!-- / Education-->

             <div class="py-lg-6" data-scroll>
                <h2 
                    class="display-6 border-bottom pb-5 mb-5 fade-in-up" 
                    data-scroll data-scroll-position="bottom"
                >Education</h2>  

                <div 
                    class="row gx-2 mb-5 fade-in-up" 
                    data-scroll
                    data-scroll-position="bottom" 
                 >
                                <div class="col-12 col-lg-4">
                                    <p class="fw-bolder mb-1" style="text-decoration: underline solid #6EE7B7 5px;">Petra 1 Senior High School</p>
                                    <span class="text-muted small">Science Major (2019 - 2022)</span>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <p class="fw-bolder mb-1" style="text-decoration: underline solid #6EE7B7 5px;">Ciputra Univerity Surabaya</p>
                                    <span class="text-muted small">Information System for Business Major (2022 - Present)</span>
                                </div>
                            </div>

            </div>

            <!-- Experience-->
            <div class="py-lg-6" data-scroll>
                <h2 
                    class="display-6 border-bottom pb-5 mb-5 fade-in-up" 
                    data-scroll data-scroll-position="bottom"
                >Experience</h2>                <!-- Single Experience-->
                            <div 
                                class="row gx-2 mb-5 fade-in-up" 
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="col-12 col-lg-4">
                                    <p class="fw-bolder mb-1">Database Design</p>
                                    <span class="text-muted small">(2024 - Present)</span>
                                </div>
                                <div class="col-12 col-lg-8">
                                <p class="fw-bolder" style="text-decoration: underline solid #6EE7B7 5px;">Lecture Assistant</p>
                                    <p class="text-muted fw-light fs-6">Responsible for helping students, checking student's assignment, and giving grades.</p>
                                </div>
                            </div>
                            <!-- / Single Experience -->
                            <!-- Single Experience-->
                            <div 
                                class="row gx-2 mb-5 fade-in-up" 
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="col-12 col-lg-4">
                                    <p class="fw-bolder mb-1">ISB Awards: The Arcanum</p>
                                    <span class="text-muted small">(2024)</span>
                                </div>
                                <div class="col-12 col-lg-8">
                                <p class="fw-bolder" style="text-decoration: underline solid #6EE7B7 5px;">Announcer</p>
                                    <p class="text-muted fw-light fs-6">Announcing the Winners of Most Dedicated Students for ISB's Awarding Day. </p>
                                </div>
                            </div>
                            <!-- / Single Experience -->
                             <!-- Single Experience-->
                             <div 
                                class="row gx-2 mb-5 fade-in-up" 
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="col-12 col-lg-4">
                                    <p class="fw-bolder mb-1">UC HARDIKNAS 2024</p>
                                    <span class="text-muted small">(2024 - Present)</span>
                                </div>
                                <div class="col-12 col-lg-8">
                                <p class="fw-bolder" style="text-decoration: underline solid #6EE7B7 5px;">Event Committee</p>
                                    <p class="text-muted fw-light fs-6">Creating event concepts, event regulations for HARDIKNAS 2024 Public Speaking Competitions.</p>
                                </div>
                            </div>
                            <!-- / Single Experience -->
                             <!-- Single Experience-->
                             <div 
                                class="row gx-2 mb-5 fade-in-up" 
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="col-12 col-lg-4">
                                    <p class="fw-bolder mb-1">Prodi Day ISB</p>
                                    <span class="text-muted small">(2023)</span>
                                </div>
                                <div class="col-12 col-lg-8">
                                <p class="fw-bolder" style="text-decoration: underline solid #6EE7B7 5px;">Master of Ceremony</p>
                                    <p class="text-muted fw-light fs-6">MC for the Faculty Session of Prodi Day ISB 2023. </p>
                                </div>
                            </div>
                            <!-- / Single Experience -->
                             <!-- Single Experience-->
                             <div 
                                class="row gx-2 mb-5 fade-in-up" 
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="col-12 col-lg-4">
                                    <p class="fw-bolder mb-1">Student Union Information System for Business (ISB)</p>
                                    <span class="text-muted small">(2023 - Present)</span>
                                </div>
                                <div class="col-12 col-lg-8">
                                <p class="fw-bolder" style="text-decoration: underline solid #6EE7B7 5px;">Secretary</p>
                                    <p class="text-muted fw-light fs-6">Handling all administrative tasks such as permission letters, invitations, MoM recording, MoU, event proposal, and report writing. Additionally, organizing meetings agendas. Projects that I handled are: Prodi Day ISB, SIFT Dean's Cup 2023, ISB Awards: The Arcanum, SIFT Red Carpet Night 2024.</p>
                                </div>
                            </div>
                            <!-- / Single Experience -->
                             <!-- Single Experience-->
                             <div 
                                class="row gx-2 mb-5 fade-in-up" 
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="col-12 col-lg-4">
                                    <p class="fw-bolder mb-1">SIFT Red Carpet Night 2023</p>
                                    <span class="text-muted small">(2023)</span>
                                </div>
                                <div class="col-12 col-lg-8">
                                <p class="fw-bolder" style="text-decoration: underline solid #6EE7B7 5px;">Announcer</p>
                                    <p class="text-muted fw-light fs-6">Announcing the Winners for SIFT's Awarding Day. </p>
                                </div>
                            </div>
                            <!-- / Single Experience -->
                             <!-- Single Experience-->
                             <div 
                                class="row gx-2 mb-5 fade-in-up" 
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="col-12 col-lg-4">
                                    <p class="fw-bolder mb-1">EPIC National 2023</p>
                                    <span class="text-muted small">(2023)</span>
                                </div>
                                <div class="col-12 col-lg-8">
                                <p class="fw-bolder" style="text-decoration: underline solid #6EE7B7 5px;">Event Committee</p>
                                    <p class="text-muted fw-light fs-6">Creating event concepts, event regulations, and event rundown for EPIC 2023 Competitions and also as the MC for Technical Meeting & Workshop EPIC 2023. </p>
                                </div>
                            </div>
                            <!-- / Single Experience -->
                            <!-- Single Experience-->
                            <div 
                                class="row gx-2 mb-5 fade-in-up" 
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="col-12 col-lg-4">
                                    <p class="fw-bolder mb-1">SIFT Dean's Cup 2022</p>
                                    <span class="text-muted small">(2022)</span>
                                </div>
                                <div class="col-12 col-lg-8">
                                <p class="fw-bolder" style="text-decoration: underline solid #6EE7B7 5px;">Event Committee</p>
                                <p class="text-muted fw-light fs-6">Creating event concepts, event regulations for Dean's Cup 2022 Competitions and also as the MC Closing Dean's Cup 2022.</p>
                                </div>
                    </div>
            </div>            <!-- / Experience-->

            <!-- / Skills-->
            <!-- Skills Section-->
            <div class="pt-2 pb-6 skills" data-scroll>
                <h2 
                    class="display-6 border-bottom pb-5 mb-5 fade-in-up" 
                    data-scroll data-scroll-position="bottom"
                >Skills</h2>        <div class="row gx-10 gy-5">
                            <!-- Single Skill-->
                            <div class="col-12 col-lg-6 fade-in-up"
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="row align-items-center">
                                    <div class="col-12 d-flex justify-content-end">
                                        <p class="mb-0 fw-bolder">95%</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="mb-0 small lh-1">MySQL</p>
                                    </div>
                                    <div class="col-8">
                                        <div class="progress f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 95%"
                                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Single Skill -->
                            <!-- Single Skill-->
                            <div class="col-12 col-lg-6 fade-in-up"
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="row align-items-center">
                                    <div class="col-12 d-flex justify-content-end">
                                        <p class="mb-0 fw-bolder">90%</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="mb-0 small lh-1">C#</p>
                                    </div>
                                    <div class="col-8">
                                        <div class="progress f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Single Skill -->
                            <!-- Single Skill-->
                            <div class="col-12 col-lg-6 fade-in-up"
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="row align-items-center">
                                    <div class="col-12 d-flex justify-content-end">
                                        <p class="mb-0 fw-bolder">85%</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="mb-0 small lh-1">HTML</p>
                                    </div>
                                    <div class="col-8">
                                        <div class="progress f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Single Skill -->
                            <!-- Single Skill-->
                            <div class="col-12 col-lg-6 fade-in-up"
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="row align-items-center">
                                    <div class="col-12 d-flex justify-content-end">
                                        <p class="mb-0 fw-bolder">75%</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="mb-0 small lh-1">CSS</p>
                                    </div>
                                    <div class="col-8">
                                        <div class="progress f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Single Skill -->
                            <!-- Single Skill-->
                            <div class="col-12 col-lg-6 fade-in-up"
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="row align-items-center">
                                    <div class="col-12 d-flex justify-content-end">
                                        <p class="mb-0 fw-bolder">80%</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="mb-0 small lh-1">Adobe Photoshop</p>
                                    </div>
                                    <div class="col-8">
                                        <div class="progress f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Single Skill -->
                            <!-- Single Skill-->
                            <div class="col-12 col-lg-6 fade-in-up"
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="row align-items-center">
                                    <div class="col-12 d-flex justify-content-end">
                                        <p class="mb-0 fw-bolder">55%</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="mb-0 small lh-1">Javascript</p>
                                        </div>
                                        <div class="col-8">
                                            <div class="progress f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 55%"
                                                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- / Single Skill -->
                            <!-- Single Skill-->
                            <div class="col-12 col-lg-6 fade-in-up"
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="row align-items-center">
                                    <div class="col-12 d-flex justify-content-end">
                                        <p class="mb-0 fw-bolder">75%</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="mb-0 small lh-1">Adaptive</p>
                                    </div>
                                    <div class="col-8">
                                        <div class="progress f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Single Skill -->
                            <!-- Single Skill-->
                            <div class="col-12 col-lg-6 fade-in-up"
                                data-scroll
                                data-scroll-position="bottom" 
                            >
                                <div class="row align-items-center">
                                    <div class="col-12 d-flex justify-content-end">
                                        <p class="mb-0 fw-bolder">90%</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="mb-0 small lh-1">Fast Learner</p>
                                        </div>
                                        <div class="col-8">
                                            <div class="progress f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 90%"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
            </div>
            <!-- /Skills Section-->            <!-- / Skills-->

            <!-- /Page Content -->
        </section>
        <!-- / Main Section-->

        <!-- Footer -->
        <!-- Footer-->
        <div class="d-flex align-items-center justify-content-center flex-column col-lg-7 col-xl-6 col-xxl-5 text-center mx-auto mt-5 px-4 px-md-0 mt-lg-10" data-scroll-section>
            <h4 class="display-5 mb-5" data-scroll data-scroll-speed=".8" data-scroll-delay="0.05">Ready to Collaborate? Contact Me!</h4>
            <a href="./contact.php" class="btn btn-primary">Get In Touch</a>
        </div>
        
        <footer class="border-top mt-10 pt-5 pb-8  " data-scroll-section>
        <div class="container d-flex justify-content-between">
            <p class="small">All rights reserved. © Valencia Melita 2024.</p>
            <ul class="list-unstyled d-flex align-items-center">
                <li class="ms-3"><a class="text-decoration-none text-muted" href="https://github.com/valenciamelita"><i class="ri-github-fill"></i></a></li>
                <li class="ms-3"><a class="text-decoration-none text-muted" href="https://www.linkedin.com/in/valencia-melita-christy-130334291/"><i class="ri-linkedin-fill"></i></a></li>
                <li class="ms-3"><a class="text-decoration-none text-muted" href="https://www.instagram.com/valenciamelitaa"><i class="ri-instagram-fill"></i></a></li>
            </ul>
        </div>
        </footer>
        <!-- / Footer-->
        <!-- / Footer-->
    </div>
    <!-- /Locomotive Scroll Container-->

    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

<script>
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "about.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            console.log(data); 
            var aboutSection = document.getElementById('about');
            aboutSection.innerHTML = '<h2>About</h2><p>' + data[0].about_text + '</p>'; // Ubah dengan struktur data Anda
        }
    };
    xhr.send();
</script>


</html>