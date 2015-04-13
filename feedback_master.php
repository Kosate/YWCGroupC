<?php include("header.php"); ?>
<html>
	<head>
		<script src='assets/js/jquery-2.1.3.min.js'></script>
		<script src='assets/js/bootstrap.js'></script>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />

<link href="assets/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="assets/js/star-rating.js" type="text/javascript"></script>
		<style type="text/css">
			body {
				width: 100%;
				height: 100%;
			}
			#content > div {
				padding: 20px;
			}
			#content > div > .profile-thm {
				display:inline-block;
				max-height: 200px;
				max-width:200px;
				background:#111;
			}
			.profile-thm-popup {
				max-width: 300px;
				max-height: 300px;
			}
			.borderless td {
				border: none !important;
			}
			.navbar {
				margin-bottom: 0px;
			}
			.card {
				cursor: pointer;
				padding: 10px;
			}
			.container-card {
				box-shadow: #ddd 2px 2px 5px;
				background: #FFF;
			}
			.container-card:hover {
				box-shadow: #ccc 0px 5px 5px;
			}
			#cover {
				height:300px;
				width: 100%;
				background: #1e54df;
				box-shadow: #555 2px 0px 20px;
			}
			#search {
				background: #ef6013;
				box-shadow: #555 2px 0px 5px;
			}
			#block {
				padding: 50px;
				background: white;
			}
			<?php css(); ?>
		</style>
		<script type="text/javascript">
		$("#input-24").rating({
    clearButton: '<button class="btn btn-default" type="button"><i class="glyphicon glyphicon-remove"></i> Clear</button>',
    clearElement: "#kv-clear", 
    captionElement: "#kv-caption"
});


			var data = [["นางสาวโซเชียล เด็กดี","อายุ 21 ปี เลขที่สมาชิก 905642","ทักษะงาน ทำอาหารไทย อิตาเลียน ดูแลน้องหมา รดน้ำต้นไม้ ทำงานบ้าน วันที่ว่าง ทุกวันศุกร์เสาร์อาทิตย์"],
["นายพันทิพ บางขุนพรหม","อายุ 28 ปี เลขที่สมาชิก 504125","ทักษะงาน ต่อคิวทำวีซ่า ตัดแต่งสวน ช่วยถือของเวลาเดินช็อปปิ้ง วันที่ว่าง วันพุธที่ 14 ม.ค 58"],
["นายประยุทธ ตะวันโอชา","อายุ 50 ปี เลขที่สมาชิก 309177","ทักษะงาน ไกด์ชมค่ายทหาร ไปคาราโอเกะเป็นเพื่อน (เราจะทำตามสัญญา..) วันที่ว่าง ว่างทุกวัน"],
["นางไป๋ตู้ ตามรอยหมี","อายุ 35 ปี เลขที่สมาชิก 211873","ทักษะงาน สอนถักโครเช เลี้ยงเด็ก สอนหนังสือ วันที่ว่าง วันจันทร์ที่ 12 ม.ค. 58 วันศุกร์ที่ 23 ม.ค. 58"],
["นายสมาคม เว็บไทย","อายุ 32 ปี เลขที่สมาชิก 440185","ทักษะงาน ซ่อมอุปกรณ์อิเลกทรอนิกส์ เล่นกีต้า ร้องเพลงให้ฟัง รับส่งของด่วนทันใจ วันที่ว่าง ทุกๆ วันจันทร์แรกของเดือน ทุกวันอาทิตย์"],
["นายสนุก ตรวจหวย","อายุ 45 ปีเลขที่สมาชิก 014862","ทักษะงาน รับจ้างซื้อของ เล่นหมากรุก วาดรูป วันที่ว่าง วันจันทร์ถึงศุกร์"],
["นางสาวพีที โฮสติ้ง","อายุ 22 ปี เลขที่สมาชิก 883184", "ทักษะงาน เดินช็อปปิ้งเป็นเพื่อน แต่งตัว เสื้อผ้า หน้าผม รับจ้างเป็นแฟน วันที่ว่าง ทุกวันเสาร์"]];

			var curId = -1;

			$(function() {
				localStorage.setItem("data",JSON.stringify(data));
				$('#myModal').on('show.bs.modal', function (event) {
					var button = $(event.relatedTarget);
					var recipient = button.data('id');
					var modal = $(this);
					console.log( recipient );
					modal.find('.modal-title').text( data[recipient-1][0] );
					modal.find(".profile-data").html( data[recipient-1][0]+"<br>"+data[recipient-1][1] );
					modal.find(".skill-data").html( data[recipient-1][2] );
					curId = parseInt(recipient);
				});
				$("#hiring-btn").click(function() {
					window.location = "contact.php?id="+curId;
				});
			});
		</script>
	</head>

	<body>
		
		<!-- navigation bar //-->
		<?php navbar(); ?>
		
		<div id="content" class="row col-sm-12 col-lg-8 col-lg-offset-2 text-center">
			<div>
				<h1>ส่งงาน</h1>
				<div id="block">
				<table class="table borderless">
	<thead>
		<th>
		</th>
		<th>
		</th>
	</thead>
	<tbody>
		<tr>
			<td><strong>Master </strong></td>
			<td>นายบริการ ดอทอะไร </td>
		</tr>
		<tr>
			<td><strong>สมาชิกหมายเลข </strong></td>
			<td>123680 </td>
		</tr>
		<tr>
			<td><strong>Maid </strong></td>
			<td>นายพันทิพ บางขุนพรหม </td>
		</tr>
		<tr>
			<td><strong>สมาชิกหมายเลข</strong> </td>
			<td>123680 </td>
		</tr>
		<tr>
			<td><strong>ทักษะที่จ้าง </strong></td>
			<td>จ้างเลี้ยงเด็ก </td>
		</tr>
		<tr>
			<td><strong>วันที่จ้าง </strong></td>
			<td>วันศุกร์ที่ 23 มกราคม 2558 </td>
		</tr>
		<tr>
			<td><strong>สถานที่</strong> </td>
			<td>คอนโดมิเนีนมย่านลาดพร้าว </td>
		</tr>
		<tr>
			<td><strong>ระยะเวลา </strong></td>
			<td>15:00 - 20:00 น.</td>
		</tr>
		<tr>
			<td><strong>ลายละเอียด </strong></td>
			<td>เลี้ยงเด็กอายุ 10 ขวบให้ช่วยดูแล สวนทำการบ้านในช่วงเลาดากล่าว </td>
		</tr>
	</tbody>
</table>
</div>



<div>
	<h3>ให้เกรดเมด</h3>

	<input id="input-24" class="rating">

	<a class="btn btn-primary" href="index.php">ส่งเกรด</a>
</div>
			</div>


	</body>
	
</html>