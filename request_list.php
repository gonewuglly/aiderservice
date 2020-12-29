<?php
    require "header.inc.php";
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
                <div class="nav-text active">หน้าแรก</div>
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


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo mr-auto"><a href="index.html">Aider servicE<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="request_list.html">Services</a></li>
                    <li><a href="#team">สมัครเป็นผู้ให้บริการ</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

            <a href="" class="get-started-btn scrollto">Services</a>
        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ol>
                <h4>Services</h4>

            </div>
        </section>

        <!--=======step icon =======-->
        <div class="category-section">
            <div class="container" data-aos="fade-up " style="margin-top: -30px;">
                <div class="container-icon1 text-center">
                    <b>category</b>

                    <center>
                        <div class="category-icon ">
                            <i class="icofont-mobile-phone "></i>

                            <div class="icon-text1 ">ซ่อมโทรศัพท์</div>
                        </div>
                        <div class="category-icon "><i class="icofont-computer "></i>

                            <div class="icon-text1 ">ซ่อมคอมพิวเตอร์</div>
                        </div>

                        <div class="category-icon "><i class="icofont-user-alt-1 "></i>
                            <div class="icon-text1 ">แต่งหน้า</div>
                        </div>

                        <div class="category-icon "><i class="icofont-camera "></i>
                            <div class="icon-text1 ">ถ่ายภาพ</div>
                        </div>

                        <div class="category-icon "><i class="icofont-ui-cut "></i>
                            <div class="icon-text1 ">ตัดผม</div>
                        </div>
                        <div class="category-icon "><i class="icofont-tasks-alt "></i>
                            <div class="icon-text1 ">อื่น ๆ</div>
                        </div>

                    </center>
                </div>

            </div>
        </div>

        <!--========slider card=======-->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title4" style="margin-top: 120px;">
                    <h2>บริการแนะนำ</h2>
                </div>
                <center>
                    <slid>
                        <div class="slider owl-carousel">
                            <div class="card">
                                <div class="img">
                                    <img src="assets/img/team/team-1.jpg" alt=""></div>
                                <div class="content">
                                    <div class="title">
                                        Briana Tozour</div>
                                    <!-- <div class="sub-title">
                                Graphic Designer</div> -->
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">
                                    <img src="assets/img/team/team-1.jpg" alt=""></div>
                                <div class="content">
                                    <div class="title">
                                        Pricilla Preez</div>
                                    <!-- <div class="sub-title">
                                Web Developer</div> -->
                                </div>
                            </div>
                            <div class="card">
                                <div class="img">
                                    <img src="assets/img/team/team-1.jpg" alt=""></div>
                                <div class="content">
                                    <div class="title">
                                        Eliana Maia</div>
                                    <!-- <div class="sub-title">
                                App Developer</div> -->


                                </div>
                            </div>
                            <div class="card">
                                <div class="img">
                                    <img src="assets/img/team/team-2.jpg" alt=""></div>
                                <div class="content">
                                    <div class="title">
                                        Pricilla Preez</div>
                                    <!-- <div class="sub-title">
                                Web Developer</div> -->

                                </div>
                            </div>
                        </div>

                        <script>
                            $(".slider").owlCarousel({
                                loop: true,
                                autoplay: true,
                                autoplayTimeout: 2000, //2000ms = 2s;
                                autoplayHoverPause: true,
                            });
                        </script>

                    </slid>
                </center>
                <div class="slider-border"></div>

                <!-- ======= services Section ======= -->
                <section id="services" class="services">
                    <div class="container">

                        <div class="section-title4">
                            <h2>ร้านใกล้บ้านคุณ</h2>
                        </div>

                        <div class="row">

                            <div class="col-lg-6 ">
                                <div class="member d-flex align-items-start">
                                    <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <a href="step1.php">
                                            <h4>ร้าน N.C.R. New Config&Remedy</h4>
                                        </a>
                                        <span>Chief Executive Officer</span>
                                        <!-- <p>Explicabo voluptatem mollitia et repellat</p> -->

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="member d-flex align-items-start">

                                    <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <a href="">
                                            <h4>Sarah Jhonson</h4>
                                        </a>
                                        <span>Product Manager</span>
                                        <p>Aut maiores voluptates amet et quis</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member d-flex align-items-start">
                                    <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <a href="">
                                            <h4>William Anderson</h4>
                                        </a>
                                        <span>CTO</span>
                                        <p>Quisquam facilis cum velit laborum corrupti</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member d-flex align-items-start">
                                    <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Amanda Jepson</h4>
                                        <span>Accountant</span>
                                        <p>Dolorum tempora officiis odit laborum officiis</p>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
            </div>
            </section>
            <!-- End services Section -->



    </main>
    <!-- End #main -->

    <?php
    require "footer.inc.php";
?>