<?php require "header_tec.inc.php";?>
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
                    <li>งานที่ต้องการรับ</li>
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
    font-size:15.5px;
    font-weight: bold;

}
.btn{
    width:50%;
    margin-left:auto;
    margin-right:auto;
}
.form-tec .box {
    width:120px;
    height:150px;
    border-radius:5px;
    display:inline-block;
    margin-bottom:10px;
    /* margin-left:20px; */
}
.box img{
    
    width:100%;
    height:85%;
    border-radius:7px 7px 0px 0px;
    background-color: #9A9292;
}

.box i{
    color:#fff;
    text-align:center;
    padding-top:50px;
    font-size:30px;
    width:120px;
    height:128px;
    margin-top:-127px;
    border-radius:7px 7px 0px 0px;
    /* position:absolute; */
    display:block; 
    z-index:999;
    background-color: #111;
    opacity: 0.2;
    filter: alpha(opacity=40); /* For IE8 and earlier */
}

.box-button{
    width:120px;
    height:20px;
    /* border: 1px solid #111; */
    background-color: #EAE9E9;
    text-align:center;
    border-radius:0px 0px 5px 5px;
    font-size:12px;
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
@media only screen and (max-width: 1024px) {
        .form-tec .container {
               width:90%;
    }
}
.form-outline span{
  font-size:10px;
 
}
.form-label ul{
  margin-top:-12px;
  margin-left:-33px;
}
.form-label{
  margin-top:-2px;
}

    </style>
    <script language="JavaScript">
	function showPreview(ele)
	{
			$('#imgAvatar').attr('src', ele.value); // for IE
            if (ele.files && ele.files[0]) {
			
                var reader = new FileReader();
				
                reader.onload = function (e) {
                    $('#imgAvatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(ele.files[0]);
            }
            
	}
    
    </script>
<div class="form-tec">
<div class="container">
<h5>เพิ่มบริการ</h5>
<form class="row g-3 needs-validation" novalidate action="tec-2.php">
  <div class="col-md-12">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom01" value="" required/>
      <label for="validationCustom01" class="form-label">ชื่อบริการ</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid city.</div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom02" value="" required />
      <label for="validationCustom02" class="form-label">รายละเอียดบริการ</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid city.</div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-outline">
  <p class = "mb-4">ภาพประกอบ</p>
        <center>
            <div class="box">
            <img id="imgAvatar">
                <i class="fa fa-image"></i> 
            <div class="box-button">รูปภาพประกอบ
            </div>
            </div></center>
            
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label text-right">อัพโหลดไฟล์</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                    <input name="" type="file" id="filUpload" class="custom-file-input"  OnChange="showPreview(this)">
                    <label class="custom-file-label" for="filUpload" style="font-size:13px;">Choose file</label>
                </div>
            </div>
        </div> 
        </div>
  </div>
  <div class="col-md-12">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom03" required />
      <label for="validationCustom03" class="form-label">ราคา(*ตามความจริง)</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid city.</div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-outline">
        <select class="form-control" id="cars" name="cars">
        <option value="volvo">ยี่ห้อ</option>
        <option value="volvo">iPhone</option>
        <option value="saab">Vivo</option>
        <option value="fiat">Oppo</option>
        <option value="audi">Huawei</option>
        </select>
        <label for="validationCustom03" class="form-label"></label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a valid city.</div>
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
 <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript"></script>

<script type="text/javascript">
$(function (){
        $("#filUpload").on("change",function(){
    var _fileName = $(this).val();
    _fileName = (_fileName)?_fileName:"Choose file";
    $(this).next("label").text(_fileName);
 
});
});
</script>
</body>
</html>
