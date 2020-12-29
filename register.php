<?php
    require "header.inc.php";

    // Include database file
  include 'config.inc.php';
  $condb = new condb();
    // Insert Record in customer table
 if(isset($_POST['submit'])) {
    $condb->insertData($_POST);
  }
?>
<body>
     <!---MOBILE NAV--->
     <div class="mb-nav">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item  ">
            <a href="#home">
                <center>
                <i class="bx bxs-home"></i>
                </center>
                <div class="nav-text">หน้าแรก</div>
            </a>
        </div>
        <div class="mb-nav-item active ">
            <a href="#about">
                <center><i class='bx bxs-wink-smile'></i></center>
                <div class="nav-text active">รายการงาน</div>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#food-menu-section">
                <center><i class='bx bxs-food-menu'></i></center>
                <div class="nav-text">หน้าแรก</div>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#testimonial">
                <center><i class='bx bxs-comment-detail'></i></center>
                <div class="nav-text">หน้าแรก</div>
            </a>
        </div>
    </div>
    <!-- END MOBILE NAV -->

   

    <!-- ======= login ======= -->
    <section id="login" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div id="loginbox" class="loginbox">

                <!-- <div class="container" data-aos="fade-up"> -->
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6 ">
                        <h1>Wellcome to Aider Service </h1>
                        <h2 style="color:#f8a203 ">Register Page</h2>
                    </div>
                    <div class="col-lg-6" style="padding-top: 10px;">
                        <div class="loginbox-bg">
                        <form action="register.php" name="form1" method="post">
                            <!-- ========= แจ้งเตือน ===========  -->
                            <!-- ========= แสดงข้อความการสมัคร ====== -->
                        <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <i class='fas fa-check'></i>  สมัครสำเสร็จ
            </div>";
      } 
      if (isset($_GET['msg2']) == "no") {
      echo "<div class='alert alert-danger alert-dismissible'>
              <i class='fas fa-exclamation-triangle'></i> กรอกข้อมูลไม่ครบ กรุณากรอกใหม่
            </div>";
      } 
      
      if (isset($_GET['msg3']) == "nopass") {
        echo "<div class='alert alert-danger alert-dismissible'>
                <i class='fas fa-exclamation-triangle'></i> ไม่ผ่าน
              </div>";
        } 
      ?>
                        <div class="form-group">
                                <input type="text" class="form-control" id="txtName" placeholder="Enter Name" name="txtName">
                            </div>
                            <div class="form-group">
                                
                                <input type="email" class="form-control" id="txtEmail" placeholder="Enter email" name="txtEmail">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="txtPassword" placeholder="Enter password" name="txtPassword">
                            </div>
                            <div class="form-group">
                                
                                <input type="password" class="form-control" id="txtConPassword" placeholder="Enter Confirm password" name="txtConPassword">
                            </div>
                            <center><button type="submit" name="submit" class="btn">REGISTER</button></center>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--=======End login=======-->
<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>