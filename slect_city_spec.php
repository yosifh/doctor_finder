<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Doccure</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

  <div class="main-wrapper">

    <!-- Header -->
    <header class="header">
      <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
          <a id="mobile_btn" href="javascript:void(0);">
            <span class="bar-icon">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </a>
          <a href="slect_city_spec.php" class="navbar-brand logo">
            <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
          </a>
        </div>
        <div class="main-menu-wrapper">
          <div class="menu-header">
            <a href="slect_city_spec.php" class="menu-logo">
              <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
            </a>
            <a id="menu_close" class="menu-close" href="javascript:void(0);">
              <i class="fas fa-times"></i>
            </a>
          </div>
          <ul class="main-nav">
            <li>
              <a href="slect_city_spec.php">Home</a>
            </li>
            <li class="has-submenu">
              <a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">

                <li><a href="chat-doctor.html">Chat</a></li>


                <li><a href="doctor-register.html">Doctor Register</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Patients <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="search.html">Search Doctor</a></li>

                <li><a href="chat.html">Chat</a></li>

              </ul>
            </li>
            <li class="has-submenu active">
              <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="voice-call.html">Voice Call</a></li>
                <li><a href="video-call.html">Video Call</a></li>
                <li><a href="search.html">Search Doctors</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="components.html">Components</a></li>


              </ul>
            </li>
            <li>
              <a href="admin/form_in.php" target="_blank">Admin</a>
            </li>
          
          </ul>
        </div>

      </nav>
    </header>
    <!-- /Header -->

    <!-- Home Banner -->
    <section class="section section-search">
      <div class="container-fluid">
        <div class="banner-wrapper">
          <div class="banner-header text-center">
            <h1>ابحث عن الطبيب . </h1>
            <p> اكتشف أفضل الأطباء والعيادات والمستشفيات في المدينة الأقرب إليك.

              .</p>
          </div>
          <!-- Search -->
          <div class="search-box">
            <form action="with_slect_city.php">
              <div class="form-group search-location">
                <span class="form-text">بناء على موقعك</span>
                <select name="city" type="number" class="form-control" placeholder="Search Location">
                  <option value="16"> كربلاء</option>
                  <option value="1"> بغداد</option>
                  <option value=" 2"> البصرة</option>
                  <option value="3"> نينوى</option>
                  <option value="4">اربيل </option>
                  <option value="5">النجف </option>
                  <option value="6"> ذي قار</option>
                  <option value="7">كركوك </option>
                  <option value="8"> الانبار </option>
                  <option value="9"> صلاح الدين</option>
                  <option value="10"> السليمانية</option>
                  <option value="11 "> ديالى </option>
                  <option value="12"> واسط</option>
                  <option value="13">ميسان </option>
                  <option value="14">المثنى </option>
                  <option value="15"> بابل</option>

                  <option value="17"> دهوك</option>
                  <option value="18">القادسية </option>
                </select>
              </div>
              <div class="form-group search-info">
                <span class="form-text">على سبيل المثال: نسائية و توليد أو عيون وما إلى ذلك</span>
                <select name="spec" type="number" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
                  <option value="1">جملة عصبية </option>
                  <option value="2">اشعة وسونار </option>
                  <option value="3"> عيون</option>
                  <option value="4"> نسائية وتوليد</option>
                  <option value="5">جلدية وتجميل </option>
                  <option value="6"> اسنان</option>
                  <option value="7">اورام </option>
                  <option value="8">الطب الرياضي </option>
                  <option value="9">المفاصل والروماتيزم </option>
                  <option value="10">جراحة العضام والمفاصل والكسور </option>
                  <option value="11">بولية وكلية </option>
                  <option value="12">انف واذن وحنجرة </option>
                  <option value="13"> جراحة القلب</option>
                  <option value="14"> تخدير وعناية مركزة</option>
                  <option value="15">امراض الدم </option>
                  <option value="16">نفسية </option>
                  <option value="17"> جراحة اطفال</option>
                  <option value="18">اطباء اطفال </option>
                  <option value="19"> جراحة العمود الفقري</option>
                  <option value="20">باطنية </option>
                  <option value="21">دماغ واعصاب </option>
                  <option value="22">العقم واطفال الانابيب </option>
                  <option value="23">التجميل والجراحة التجميلية </option>
                  <option value="24">جراحة عامة وناضورية وجهاز هضمي </option>
                  <option value="25"> صدرية وتنفسية</option>
                  <option value="26">قلبية </option>
                  <option value="27">وجه وفكين </option>
                  <option value="28">علاج طبيعي وتأهيل طبي </option>
                </select>

              </div>
              <button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
            </form>
          </div>
          <!-- /Search -->

        </div>
      </div>
    </section>
    <div> اختار التخصص حسب الصورة</div>
    <section class="section section-doctor">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="section-header ">
              <h2> احجز طبيبنا</h2>
              <p>Lorem Ipsum is simply dummy text </p>
            </div>
            <div class="about-content">
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
              <p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes</p>
              <a href="javascript:;">Read More..</a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="doctor-slider slider">

              <!-- Doctor Widget -->


              <!-- Doctor Widget -->
              <div class="profile-widget">
                <div class="doc-img">
                  <a href="doctor-profile.html">
                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
                  </a>
                  <a href="javascript:void(0)" class="fav-btn">
                    <i class="far fa-bookmark"></i>
                  </a>
                </div>
                <div class="pro-content">
                  <h3 class="title">
                    <a href="doctor-profile.html">Sofia Brient</a>
                    <i class="fas fa-check-circle verified"></i>
                  </h3>
                  <p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                  <div class="rating">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating">(4)</span>
                  </div>
                  <ul class="available-info">
                    <li>
                      <i class="fas fa-map-marker-alt"></i> Louisiana, USA
                    </li>
                    <li>
                      <i class="far fa-clock"></i> Available on Fri, 22 Mar
                    </li>
                    <li>
                      <i class="far fa-money-bill-alt"></i> $150 - $250
                      <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                    </li>
                  </ul>
                  <div class="row row-sm">
                    <div class="col-6">
                      <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                    </div>
                    <div class="col-6">
                      <a href="booking.html" class="btn book-btn">Book Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Doctor Widget -->

              <!-- Doctor Widget -->
              <div class="profile-widget">
                <div class="doc-img">
                  <a href="doctor-profile.html">
                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">
                  </a>
                  <a href="javascript:void(0)" class="fav-btn">
                    <i class="far fa-bookmark"></i>
                  </a>
                </div>
                <div class="pro-content">
                  <h3 class="title">
                    <a href="doctor-profile.html">Marvin Campbell</a>
                    <i class="fas fa-check-circle verified"></i>
                  </h3>
                  <p class="speciality">MBBS, MD - Ophthalmology, DNB - Ophthalmology</p>
                  <div class="rating">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating">(66)</span>
                  </div>
                  <ul class="available-info">
                    <li>
                      <i class="fas fa-map-marker-alt"></i> Michigan, USA
                    </li>
                    <li>
                      <i class="far fa-clock"></i> Available on Fri, 22 Mar
                    </li>
                    <li>
                      <i class="far fa-money-bill-alt"></i> $50 - $700
                      <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                    </li>
                  </ul>
                  <div class="row row-sm">
                    <div class="col-6">
                      <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                    </div>
                    <div class="col-6">
                      <a href="booking.html" class="btn book-btn">Book Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Doctor Widget -->


            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">

      <!-- Footer Top -->
      <div class="footer-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6">

              <!-- Footer Widget -->
              <div class="footer-widget footer-about">
                <div class="footer-logo">
                  <img src="assets/img/footer-logo.png" alt="logo">
                </div>
                <div class="footer-about-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  <div class="social-icon">
                    <ul>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- /Footer Widget -->

            </div>

            <div class="col-lg-3 col-md-6">

              <!-- Footer Widget -->
              <div class="footer-widget footer-menu">
                <h2 class="footer-title">For Patients</h2>
                <ul>
                  <li><a href="search.html"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
                  <li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
                  <li><a href="register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
                </ul>
              </div>
              <!-- /Footer Widget -->

            </div>

            <div class="col-lg-3 col-md-6">

              <!-- Footer Widget -->
              <div class="footer-widget footer-menu">
                <h2 class="footer-title">For Doctors</h2>
                <ul>

                  <li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li>

                  <li><a href="doctor-register.html"><i class="fas fa-angle-double-right"></i> Register Doctor</a></li>

                </ul>
              </div>
              <!-- /Footer Widget -->

            </div>

            <div class="col-lg-3 col-md-6">

              <!-- Footer Widget -->
              <div class="footer-widget footer-contact">
                <h2 class="footer-title">Contact Us</h2>
                <div class="footer-contact-info">
                  <div class="footer-address">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                  </div>
                  <p>
                    <i class="fas fa-phone-alt"></i>
                    +1 315 369 5943
                  </p>
                  <p class="mb-0">
                    <i class="fas fa-envelope"></i>
                    doccure@example.com
                  </p>
                </div>
              </div>
              <!-- /Footer Widget -->

            </div>

          </div>
        </div>
      </div>
      <!-- /Footer Top -->

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="container-fluid">

          <!-- Copyright -->
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <div class="copyright-text">
                  <p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">

                <!-- Copyright Menu -->
                <div class="copyright-menu">
                  <ul class="policy-menu">
                    <li><a href="term-condition.html">Terms and Conditions</a></li>
                    <li><a href="privacy-policy.html">Policy</a></li>
                  </ul>
                </div>
                <!-- /Copyright Menu -->

              </div>
            </div>
          </div>
          <!-- /Copyright -->

        </div>
      </div>
      <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->

  </div>
  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Slick JS -->
  <script src="assets/js/slick.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>
</body>

</html>
<?php

// لعرض جميع معلومات جميع الاطباء
$host = "localhost";
$database = "app";
$username = "root";
$password = "";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT full_name,location,discription,nots,cityes.city_name,spec.name ,phone FROM doctors
JOIN cityes on(doctors.city_id=cityes.id) 
JOIN spec on (doctors.spec_id=spec.id)";


$result = $conn->query($sql);


if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {


    $full_name = $row['full_name'];
    $location = $row['location'];
    $discription = $row['discription'];
    $nots = $row['nots'];
    $city_id = $row['city_name'];
    $spec_id = $row['name'];
    $phone = $row['phone'];
  }
} else {
  echo "No doctors found";
}

$conn->close();

?>