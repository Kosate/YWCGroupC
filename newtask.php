<?php include("header.php"); navbar(); ?>

<html>
	<head>
		<script src='assets/js/jquery-2.1.3.min.js'></script>
		<script src='assets/js/bootstrap.js'></script>
		<script type="text/javascript" src="assets/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-tagsinput/bootstrap-tagsinput.css">
		<meta charset="UTF-8">
		<style type="text/css">
			body {
				width: 100%;
				height: 100%;
			}
			#box{
				background: white;
				padding: 40px;
			}
			<?php css(); ?>
		</style>
		<script>
			$(function() {
				localStorage.setItem("newcard","false");
				$("#newcard").click( function() {

					localStorage.setItem("newcard","true");

					window.location = "index.php";
				})
			})
		</script>
	</head>

	<body>
		
		<!-- navigation bar //-->

		<div class="container">
			<div class="row" >  
				<div class="col-md-8 col-md-offset-2"id='box'>
					<div class="row">
						<div class="col-md-3 text-center">
						<img src="assets/images/Pix6.png" class="profile-thm img img-responsive">
						</div>
						<div class="col-md-6">
							<strong>ข้อมูลส่วนตัว </strong>:
							<br> <strong>ชื่อ </strong> นายพันทิป ดอทคอม<br><strong>อายุ</strong> 25 ปี<br><strong>เลขที่สมาชิก</strong> 880671<br>
							<hr>
						</div>
					</div>
					<hr>
					<div class="row">
						<label >ความสามารถ</label><br>
						<input type="text" value="เล่นกับเด็ก" data-role="tagsinput" >
						<br><p style="color:red;">** Enter เพื่อสร้างแทคใหม่</p>
					</div>
					<div class="row">
						<label >เลือกวันว่าง</label>
						<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    อาทิตย์
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">อาทิตย์</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">จันทร์</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">อังคาร</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">พุธ</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">พฤหัส</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ศุกร์</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">เสาร์</a></li>
  </ul>
</div>
						
					</div>
					<div classs="row ">
						<div class="text-right">
						<button type="button" class="btn btn-danger">ยกเลิก</button>
						<button id="newcard" type="button" class="btn btn-primary">สร้างการ์ด</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</body>
	
</html>