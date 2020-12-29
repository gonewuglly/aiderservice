<?php
require "header_tec.inc.php";
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
            <h1 class="logo mr-auto"><a href="index.html">Aider Man<span>.</span></a></h1>
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

            <a href="service.php" class="get-started-btn scrollto">Services</a>
        </div>
    </header>
    <!-- End Header -->

      <!-- ======= Breadcrumbs ======= -->
      <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">หน้าหลัก</a></li>
                    <li>ส่งเอกสารการสมัคร</li>
                </ol>

            </div>
        </section>

        <style>
        .body-icontec{
            margin-top:15px;
            /* background:#111; */
            width:100%;
        }
        .continer-icontec{
            /* background:red; */
            width:50%;
            margin-left:auto;
            margin-right:auto;

        }
        
        .category-icon {
            display: inline-block;
            width: 55px;
            height: 55px;
            padding-top: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            /* border: 1px solid #8a8888; */
            background-color: #fff;
            border-radius: 70px;
            margin-right: 50px;
            margin: 20px;
            font-size: 20px;
        }
        
        .container-icon1 {
            float: left;
            /* margin-left: 5px; */
            height: 25px;
            /* background-color: #f0eeee; */
            width: 100%;
        }
        
        .icon-text1 {
            float: left;
            margin-left: -23px;
            width: 100px;
            display: block;
            font-size: 11px;
            color: #111;
            padding: 18px;
            text-align: center;
            /* background-color: #f0eeee; */
        
        }
         
    @media only screen and (max-width: 600px) {
        .continer-icontec {
               width:90%;
    }
        }
    @media only screen and (max-width: 1204px) {
        .continer-icontec {
               width:100%;
    }
    }
    h4{
        text-align:center;
        font-weight:70px;
    }
    
        </style>
        <div class = "body-icontec">
        <div class="continer-icontec">
        <h4>เมนูช่าง</h4>
        <center>
        
                        <div class="category-icon "><i class="icofont-tasks-alt "></i>
                            <div class="icon-text1 ">งานที่ต้องการรับ</div>
                        </div>
                        <div class="category-icon "><i class="icofont-mobile-phone "></i>
                        <div class="icon-text1 ">รับงาน Aider</div>
                        </div>
                        <div class="category-icon "><i class="icofont-computer "></i>

                            <div class="icon-text1 ">งานของฉัน</div>
                        </div>

                        <div class="category-icon "><i class="icofont-user-alt-1 "></i>
                            <div class="icon-text1 ">นัดหมาย</div>
                        </div>

                        <div class="category-icon "><i class="icofont-camera "></i>
                            <div class="icon-text1 ">ประวัติ</div>
                        </div>

                        <div class="category-icon "><i class="icofont-ui-cut "></i>
                            <div class="icon-text1 ">สรุปยอด</div>
                        </div>
                       

                    </center>
                

        </div>
        </div>