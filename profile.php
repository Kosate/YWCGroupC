<?php include("header.php"); ?>
<html>
	<head>
		<script src='assets/js/jquery-2.1.3.min.js'></script>
		<script src='assets/js/bootstrap.js'></script>
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
		<meta charset="UTF-8">
		<style type="text/css">
			<?php css(); ?>
			body {
				width: 100%;
				height: 100%;
			}
			.profile-thm {
				max-width: 200px;
			}
			.profile-thm-popup {
				width: 300px;
				height: 300px;
				text-align:center;
				vertical-align: middle;
			}
			#block {
				margin-top:20px;
				padding:50px;
				background:white;
			}
		</style>
		<script>
			function feedback_maid() {
				window.location = "feedback_master.php";
			}
		</script>
	</head>

	<body>
		
		<!-- navigation bar //-->
		<?php navbar(); ?>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="row">
					<div class="col-md-3 text-center">
						<img src="assets/images/Pix6.png" class="profile-thm img img-responsive">
					</div>
					<div class="col-md-6">
						<strong>ข้อมูลส่วนตัว :</strong><br>
						<strong>ชื่อ </strong> นายพันทิป ดอทคอม<br>
						<strong>อายุ</strong> 25 ปี<br>
						<strong>เลขที่สมาชิก </strong> 880671<br>
						<hr>
					</div>
				</div>
				<div id="block" class="row table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<td>หมายเลขงาน</td>
								<td>ชื่อ</td>
								<td>วันที่</td>
								<td>สถานะ</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<tr >
								<td>1</td>
								<td>นายคอมพิวเตอร์ คีย์บอร์ด</td>
								<td>วันพุธที่ 28 ม.ค 58</td>
								<td>เสร็จแล้ว</td>
								<td><a href="feedback_master.php" class="btn btn-primary"> คลิ๊กเพื่อให้คะแนน</a> </td>
							</tr>
							</a>
							<tr >
								<td>2</td>
								<td>นาวสาวโปรวิชั่น อัพเดท</td>
								<td>ทุกๆ วันพฤหัสบดี</td>
								<td>รอการยืนยัน</td>
								<td><a data-toggle="modal" data-target="#confirm-work" class="btn btn-warning"> คลิ๊กเพื่อรับงาน</a> </td>
							</tr>
						</tbody>

					</table>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="confirm-work" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
				<h3 class="modal-header">
					ยืนยันการรับงาน ?
				</h3>
				<div class="modal-body">
					คุณต้องการยืนยันการรับงานหรือไม่
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">ยกเลิก</button>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail">ยืนยัน</button>
				</div>
			</div>
		</div>

		<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
				<h3 class="modal-header">
					ข้อมูลของ Maid
				</h3>
				<div class="modal-body">
					คุณได้ตกลงรับงานกับ Maid เรียบร้อยแล้ว<br>
					ขอบคุณที่ใช้บริการ<br>
					<hr>
					Master นายวงใน ใจกล้า เลขที่สมาชิก 123680<br>
Maid นางไป๋ตู้ ตามรอยหมี เลขที่สมาชิก 211873 <br>
ทักษะที่จ้าง จ้างเลี้ยงเด็ก <br>
สถานที่ The Niche id Laoprao 130 – ห้อง 255<br>
ซอยลาดพร้าว 130 แยกไดรว์อิน 5<br>
ถนนลาดพร้าว แขวงคลองจั่น เขตบางกะปิ กรุงเทพ<br>
ช่วงเวลา 15.00 – 20.00 น. <br>
รายละเอียด เลี้ยงเด็กอายุ 10 ขวบ ให้ช่วยดูแล สอนทำการบ้านในวันเวลาดังกล่าว<br>
ติดต่อมาสเตอร์ อีเมล์ Wongnai.goodweb@gmail.com<br>
เบอร์โทร 089-8172565<br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">ปิด</button>
				</div>
			</div>
		</div>
		
	</body>
	
</html>