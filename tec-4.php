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
.form-check{
    float:left;
    margin-left:12px;
    margin-bottom: -2px;
}
@media only screen and (max-width: 1204px) {
        .form-tec .container {
               width:80%;
    }
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
    <script language="JavaScript">
	function showPreview2(ele)
	{
			$('#imgAvatar2').attr('src', ele.value); // for IE
            if (ele.files && ele.files[0]) {
			
                var reader = new FileReader();
				
                reader.onload = function (e) {
                    $('#imgAvatar2').attr('src', e.target.result);
                }

                reader.readAsDataURL(ele.files[0]);
            }
            
	}
    
    </script>
    <script language="JavaScript">
	function showPreview3(ele)
	{
			$('#imgAvatar3').attr('src', ele.value); // for IE
            if (ele.files && ele.files[0]) {
			
                var reader = new FileReader();
				
                reader.onload = function (e) {
                    $('#imgAvatar3').attr('src', e.target.result);
                }

                reader.readAsDataURL(ele.files[0]);
            }
            
	}
    
    </script>
    <script language="JavaScript">
	function showPreview4(ele)
	{
			$('#imgAvatar4').attr('src', ele.value); // for IE
            if (ele.files && ele.files[0]) {
			
                var reader = new FileReader();
				
                reader.onload = function (e) {
                    $('#imgAvatar4').attr('src', e.target.result);
                }

                reader.readAsDataURL(ele.files[0]);
            }
            
	}
    
    </script>
    <script language="JavaScript">
	function showPreview5(ele)
	{
			$('#imgAvatar5').attr('src', ele.value); // for IE
            if (ele.files && ele.files[0]) {
			
                var reader = new FileReader();
				
                reader.onload = function (e) {
                    $('#imgAvatar5').attr('src', e.target.result);
                }

                reader.readAsDataURL(ele.files[0]);
            }
            
	}
    
    </script>
    
        <div class="form-tec">
        <div class="container" >
        <h5 class = "mb-4">อัปโหลดเอกสารการสมัคร</h5>
        <p class = "mb-4">หนังสือสัญญา</p>
        <form action="upload-tec-4.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <center><div class="box  ">
            <img src="assets/img/ดาวน์โหลด.png " width="100%"  id="imgAvatar1">
                <i class="fa fa-image"></i> 
            <div class="box-button">ตัวอย่างรูปภาพ</div>
            </div>
            <div class="box">
            <img id="imgAvatar">
                <i class="fa fa-image"></i> 
            <div class="box-button">รูปภาพตัวจริง
            </div>
            </div></center>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label text-right">อัพโหลดไฟล์</label>
                <div class="col-sm-8">
                    <div class="custom-file">
                    <input name="filUpload[]" type="file" id="filUpload" class="custom-file-input"  OnChange="showPreview(this)">
                    <label class="custom-file-label" for="filUpload" style="font-size:13px;">Choose file</label>
                </div>
            </div>
        </div>   
        <p class = "mb-4">หนังสือตรวจสอบประวัติ</p>
        <center><div class="box">
            <img src="assets/img/ดาวน์โหลด.png " width="100%"  id="imgAvatar1">
                <i class="fa fa-image"></i> 
            <div class="box-button">ตัวอย่างรูปภาพ</div>
            </div>
            <div class="box">
            <img id="imgAvatar2">
                <i class="fa fa-image"></i> 
            <div class="box-button">รูปภาพตัวจริง
            </div>
            </div></center>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label text-right">อัพโหลดไฟล์</label>
                <div class="col-sm-8">
                    <div class="custom-file">
                    <input name="filUpload[]" type="file" id="filUpload1" class="custom-file-input"  OnChange="showPreview2(this)">
                    <label class="custom-file-label" for="filUpload" style="font-size:13px;">Choose file</label>
                </div>
            </div>
        </div> 
        <p class = "mb-4">สำเนาทะเบียนบ้าน</p>
        <center><div class="box">
        <img src="assets/img/rmu-home.jpg " width="100%"  id="imgAvatar1">
                <i class="fa fa-image"></i> 
            <div class="box-button">ตัวอย่างรูปภาพ</div>
            </div>
            <div class="box">
            <img id="imgAvatar3">
                <i class="fa fa-image"></i> 
            <div class="box-button">รูปภาพตัวจริง
            </div>
            </div></center>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label text-right">อัพโหลดไฟล์</label>
                <div class="col-sm-8">
                    <div class="custom-file">
                    <input name="filUpload[]" type="file" id="filUpload2" class="custom-file-input"  OnChange="showPreview3(this)">
                    <label class="custom-file-label" for="filUpload" style="font-size:13px;">Choose file</label>
                </div>
            </div>
        </div> 
        <p class = "mb-4">สำเนาบัตรประชาชน</p>
        <center><div class="box">
        <img src="assets/img/img-example-land-for-sale-3.png " width="100%"  id="imgAvatar1">
                <i class="fa fa-image"></i> 
            <div class="box-button">ตัวอย่างรูปภาพ</div>
            </div>
            <div class="box">
            <img id="imgAvatar4">
                <i class="fa fa-image"></i> 
            <div class="box-button">รูปภาพตัวจริง
            </div>
            </div></center>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label text-right">อัพโหลดไฟล์</label>
                <div class="col-sm-8">
                    <div class="custom-file">
                    <input name="filUpload[]" type="file" id="filUpload3" class="custom-file-input"  OnChange="showPreview4(this)">
                    <label class="custom-file-label" for="filUpload" style="font-size:13px;">Choose file</label>
                </div>
            </div>
        </div> 
        <p class = "mb-4">ภาพถ่ายคู่กับบัตรประชาชน</p>
        <center><div class="box">
        <img src="assets/img/dc_2.png " width="100%"  id="imgAvatar1">
                <i class="fa fa-image"></i> 
            <div class="box-button">ตัวอย่างรูปภาพ</div>
            </div>
            <div class="box">
            <img id="imgAvatar5">
                <i class="fa fa-image"></i> 
            <div class="box-button">รูปภาพตัวจริง
            </div>
            </div></center>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label text-right">อัพโหลดไฟล์</label>
                <div class="col-sm-8 mb-4">
                    <div class="custom-file">
                    <input name="filUpload[]" type="file" id="filUpload4" class="custom-file-input"  OnChange="showPreview5(this)">
                    <label class="custom-file-label" for="filUpload" style="font-size:13px;">Choose file</label>
                </div>
            </div>
        </div > 
        <div class="form-group row">
            <div class="col-sm-5 offset-sm-4 ">
            <button type="submit" class="btn btn-primary" name="btnSubmit" id="btn_submit" >
            ส่งข้อมูล
            </button>
            </div>
        </div>
        </form>
        <style>
    .footer-end{
        background-color: #fff;
        padding: 5% 5%;
    }
    @media only screen and (max-width: 600px) {
      .footer-end {
          background-color: #fff;
          padding: 15% 15%;
    }
    }
</style>
<div class = "footer-end"></div>
        

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

<script type="text/javascript">
$(function (){
        $("#filUpload1").on("change",function(){
    var _fileName = $(this).val();
    _fileName = (_fileName)?_fileName:"Choose file";
    $(this).next("label").text(_fileName);
 
});
});
</script>
<script type="text/javascript">
$(function (){
        $("#filUpload2").on("change",function(){
    var _fileName = $(this).val();
    _fileName = (_fileName)?_fileName:"Choose file";
    $(this).next("label").text(_fileName);
 
});
});
</script>
<script type="text/javascript">
$(function (){
        $("#filUpload3").on("change",function(){
    var _fileName = $(this).val();
    _fileName = (_fileName)?_fileName:"Choose file";
    $(this).next("label").text(_fileName);
 
});
});
</script>
<script type="text/javascript">
$(function (){
        $("#filUpload4").on("change",function(){
    var _fileName = $(this).val();
    _fileName = (_fileName)?_fileName:"Choose file";
    $(this).next("label").text(_fileName);
 
});
});
</script>

    </body>

    </html>