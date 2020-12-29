<?php
require "header_tec.inc.php";
?>

    <html>

    <head>

        <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css" >
    <style type="text/css">
        html{
            font-family:tahoma, Arial,"Times New Roman";
            font-size:14px;
        }
        body{
            font-family:tahoma, Arial,"Times New Roman";
            font-size:14px;
        }    
    </style>
    </head>

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
.form-tec{
    margin-top:30px;
    height:50%;
     /* background-color:red; */
}
.form-tec .container{
    /* background-color:green; */
    width:50%;
}
.form-tec h5{
    font-size:17px;
    font-weight: bold;

}
.form-tec p{
    font-size:16px;
    margin-bottom:2px;
    /* font-weight: bold; */

}
.form-tec ul{
    font-size:16px;
    margin-bottom:2px;
    /* font-weight: bold; */

}
.btn{
    width:50%;
    margin-left:auto;
    margin-right:auto;
}
ิ.btn-work{
  width:50px;
  padding: 10px 32px;
  background:#f8a203;
  border-color:#f8a203;
  border-radius:20px;
}

    @media only screen and (max-width: 600px) {
        .form-tec .container {
               width:90%;
    }
    .btn{
    width:100%;
}
.form-tec{
    margin-top:20px;
    /* max-height:100%; */
}
}
.form-check{
    float:left;
    margin-left:12px;
    margin-bottom: -2px;
}
@media only screen and (max-width: 1204px) {
        .form-tec .container {
               width:90%;
    }
}

    </style>
        <div class="form-tec">
        <div class="container" >
        <h5 class = "mb-4">อัปโหลดเอกสารการสมัคร</h5>
        <p class = "mb-4">หนังสือสัญญา</p>

<body>
    <form name="form1" method="post" action="PageMultiFiles2.php" enctype="multipart/form-data">
    <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label text-right">อัพโหลดไฟล์</label>
                <div class="col-sm-8">
                    <div class="custom-file">
                    <input type="file" name="filUpload[]" id="filUpload" class="custom-file-input"><br>
                    <label class="custom-file-label" for="filUpload" style="font-size:13px;">Choose file</label>
                </div>
            </div>
        </div>   
        <input type="file" name="filUpload[]"><br>
        <input type="file" name="filUpload[]"><br>
        <input name="btnSubmit" type="submit" value="Submit">
    </form>
   
    <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript"></script>
<script type="text/javascript">
$(function(){
        $("#filUpload").on("change",function(){
    var _fileName = $(this).val();
    _fileName = (_fileName)?_fileName:"Choose file";
    $(this).next("label").text(_fileName);

});
});</script>
</body>

</html>