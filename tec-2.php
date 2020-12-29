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
                    <li>สมัครสมาชิก</li>
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
    font-size:15px;
    font-weight: bold;

}
.btn{
    width:50%;
    margin-left:auto;
    margin-right:auto;
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
<div class="container">
<h5>ได้รับคำแนะนำจาก</h5>
<form class="row g-3 needs-validation" novalidate action="index.php">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
  <label class="form-check-label" for="flexCheckDefault">เพื่อนแนะนำ</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
  <label class="form-check-label" for="flexCheckDefault">Facebook</label>
</div>
<div class="form-check mb-2">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">ค้นหาจาก Google </label>
</div>
  <h5>ประเภทที่คุณสามารถทำงานได้</h5>
  <div class="form-check">
    <input type="radio" class="form-check-input" id="validationFormCheck5" name="radio-stacked" required/>
    <label class="form-check-label" for="validationFormCheck5">บริการซ่อมคอมพิวเตอร์/Notebook</label>
  </div>
  <div class="form-check ">
    <input type="radio" class="form-check-input" id="validationFormCheck6" name="radio-stacked" required/>
    <label class="form-check-label" for="validationFormCheck6">บริการซ่อมโทรศัพท์มือถือ</label>
  </div>
  <div class="form-check ">
    <input type="radio" class="form-check-input" id="validationFormCheck7" name="radio-stacked" required/>
    <label class="form-check-label" for="validationFormCheck7">บริการช่างแต่งหน้า</label>
  </div>
  <div class="form-check ">
    <input type="radio" class="form-check-input" id="validationFormCheck8" name="radio-stacked" required/>
    <label class="form-check-label" for="validationFormCheck8">บริการช่างถ่ายภาพ</label>
  </div>
  <div class="form-check mb-2">
    <input type="radio" class="form-check-input" id="validationFormCheck9" name="radio-stacked" required/>
    <label class="form-check-label" for="validationFormCheck9">บริการช่างตัดผม</label>
  </div>
  <h5>ข้อมูลบุคคลที่สามารถติดต่อได้ กรณีฉุกเฉิน</h5>
  <div class="col-md-12">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom01" value="" required/>
      <label for="validationCustom01" class="form-label">ชื่อ</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid city.</div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom02" value="" required />
      <label for="validationCustom02" class="form-label">นามสกุล</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid city.</div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom03" required />
      <label for="validationCustom03" class="form-label">เบอร์ติดต่อ</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid city.</div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom03" required />
      <label for="validationCustom03" class="form-label">ความสัมพันธ์</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid city.</div>
    </div>
  </div>
  <h5>ชื่อร้านและที่อยู่ร้าน</h5>
  <div class="col-md-12">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom05" required />
      <label for="validationCustom05" class="form-label">ชื่อร้าน</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid zip.</div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom05" required />
      <label for="validationCustom05" class="form-label">เลขที่อยู่,ซอย,ถนน</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid zip.</div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom05" required />
      <label for="validationCustom05" class="form-label">จังหวัด</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid zip.</div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom05" required />
      <label for="validationCustom05" class="form-label">เขต/อำเภอ</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid zip.</div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom05" required />
      <label for="validationCustom05" class="form-label">แขวง/ตำบล</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid zip.</div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom05" required />
      <label for="validationCustom05" class="form-label">รหัสไปรษณีย์</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid zip.</div>
    </div>
  </div>
    <button class="btn btn-primary" type="submit">Submit form</button>

</div>
</form>
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
          padding: 10% 10%;
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
