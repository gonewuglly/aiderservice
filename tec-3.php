<?php require "header_tec.inc.php";?>
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
    width:40%;
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
               /* background-color:green; */
    }
}

    </style>
<div class="form-tec">
<div class="container">
<h5>อัปโหลดเอกสารการสมัคร</h5>
<p>กรุณาอัปโหลดเอกสารการสมัคร</p>
<p>หลักฐานการสมัครมีดังนี้</p>
<ul>เอกสารประกอบด้วย
<ul>
<li>สำเนาทะเบียนบ้าน 1 ชุด</li>
<li>สำเนาบัตรประชาชน 2 ชุด</li>
<li>หนังสือสัญญา 1 ชุด(ดาวน์โหลดด้านล่าง)</li>
<li>หนังสือตรวจสอบประวัติ 1 ชุด(ดาวน์โหลดด้านล่าง)</li>
</ul></ul>
<p class="mb-4">พร้อมเซนชื่อรับรองทุกผ่านด้วยปากกาน้ำเงิน</p>
<h5 class = "mb-3">ดาวน์โหลดเอกสาร</h5>
<style>.btn-work{
  width:70%;
  padding: 5px 32px;
  border: 1px solid #f8a203;
  border-radius:20px;
  text-align:center;
  margin-left:auto;
  margin-right:auto;
}
.btn-work:hover{
  border: 1px solid #111;
}
.btn-work a{
    color:#111;
}
@media only screen and (max-width: 600px) {
      .btn-work {
        width:100%;
    }
    }

</style>
<div class="btn-work mb-2">หนังสือสัญญา</div>
<div class="btn-work mb-4">เอกสารตรวจสอบประวัติ</div>
    <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
<h5 class = "mb-3">ดาวน์โหลดเอกสาร</h5>
<div class="btn-work mb-10">
<a href ="test2.php">อัปโหลดเอกสาร</a></div>


</div>
</div>
<style>
    .footer-end{
        background-color: #fff;
        padding: 2% 2%;
    }
    @media only screen and (max-width: 600px) {
      .footer-end {
          background-color: #fff;
          padding: 2% 2%;
    }
    }
</style>
<div class = "footer-end"></div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.2.1/mdb.min.js"
></script>
</body>
</html>
