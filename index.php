<?php include("header.php"); ?>
<html>
	<head>
		<script src='assets/js/jquery-2.1.3.min.js'></script>

<script type="text/javascript " src="http://johannburkard.de/resources/Johann/jquery.highlight-5.js"></script>
		<script src='assets/js/bootstrap.js'></script>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Maid One Day</title>
<meta name="description" content="Description">
<meta name="robots" content="all">
<meta name="geo.placename" content="TH" />
<meta name="geo.region" content="TH" />
<meta content="GENERAL" name="RATING" />
<meta content='INDEX, FOLLOW' NAME='ROBOTS'/>
<meta content='Global' name='Distribution'/>
<meta content='1 days' name='revisit-after'/>
<meta content='Thailand' name='geo.placename'/>
<meta CONTENT="TH" name="geo.region"/>
<link rel="shortcut icon" href="assets/images/Pix1.png" />
<link rel='image_src' href='assets/images/Pix1.png' />
<link rel='video_src' href='http://player.ooyala.com/player.js' /> 
<meta name='video_height' content='640' /> 
<meta name='video_width' content='480' /> 
<meta name='video_type' content='application/x-shockwave-flash' />
<meta property='og:type' content='website'/>
<meta property="og:title" content="Title"/>
<meta property="og:description" content="Description"/> 
<meta property="og:site_name" content="www.c.com"/>
<meta property="og:url" content="www.c.com/page"/>
<meta property="og:image" content="image.jpg"/>
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
		<style type="text/css">
		.highlight { background-color: yellow }
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
				height: 450px;
			}
			.container-card {
				box-shadow: #ddd 2px 2px 5px;
				background: #FFF;
				height: 400px;
				overflow: hidden;
				padding: 5px;
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
				background: #0070a0;
				box-shadow: #555 2px 0px 5px;
				padding-bottom: 20px;
			}
			<?php css(); ?>
		</style>
		<script type="text/javascript">

			var data = [
			["นางสาวโซเชียล เด็กดี",
				"อายุ 21 ปี เลขที่สมาชิก 905642",
				"ทำอาหารไทย อิตาเลียน ดูแลน้องหมา รดน้ำต้นไม้ ทำงานบ้าน ",
				"ทุกวันศุกร์เสาร์อาทิตย์"],
			["นายพันทิพ บางขุนพรหม",
				"อายุ 28 ปี เลขที่สมาชิก 504125",
				"ต่อคิวทำวีซ่า ตัดแต่งสวน ช่วยถือของเวลาเดินช็อปปิ้ง",
				"วันพุธที่ 14 ม.ค 58"],
			["นายประยุทธ ตะวันโอชา",
				"อายุ 50 ปี เลขที่สมาชิก 309177",
				"ไกด์ชมค่ายทหาร ไปคาราโอเกะเป็นเพื่อน (เราจะทำตามสัญญา..) ",
				"ว่างทุกวัน"],
			["นางไป๋ตู้ ตามรอยหมี",
				"อายุ 35 ปี เลขที่สมาชิก 211873",
				"สอนถักโครเช เลี้ยงเด็ก สอนหนังสือ",
				"วันจันทร์ที่ 12 ม.ค. 58 วันศุกร์ที่ 23 ม.ค. 58"],
			["นายสมาคม เว็บไทย",
				"อายุ 32 ปี เลขที่สมาชิก 440185",
				"ซ่อมอุปกรณ์อิเลกทรอนิกส์ เล่นกีต้า ร้องเพลงให้ฟัง รับส่งของด่วนทันใจ",
				"ทุกๆ วันจันทร์แรกของเดือน ทุกวันอาทิตย์"],
			["นายสนุก ตรวจหวย",
				"อายุ 45 ปีเลขที่สมาชิก 014862",
				"รับจ้างซื้อของ เล่นหมากรุก วาดรูป",
				"วันจันทร์ถึงศุกร์"],
			["นางสาวพีที โฮสติ้ง",
				"อายุ 22 ปี เลขที่สมาชิก 883184", 
				"เดินช็อปปิ้งเป็นเพื่อน แต่งตัว เสื้อผ้า หน้าผม รับจ้างเป็นแฟน",
				"ทุกวันเสาร์"],
			["นายพันทิป ดอทคอม",
				"อายุ 25 ปี เลขที่สมาชิก 880671",
				"ทักษะ เล่นกับเด็ก ",
				"ทุกวันเสาร์"],
			];

			var curId = -1;

			$(function() {

				$("#content > .row").prepend('<a href="newtask.php"><div class="card col-xs-6 col-sm-3 text-center" ><div class="container-card" style="padding-top:50%;"><img src="assets/images/add.png" class="profile-thm img img-responsive full-width" /><div>&nbsp;</div></div></div></a>');

				try {
					//localStorage.setItem("newcard","false");
					var newcard = localStorage.getItem("newcard");
					if( newcard == "true" ) {
						console.log( 555 );
						setTimeout(function() {
						
							$elm = $('<div class="card col-xs-6 col-sm-3 text-center" data-toggle="modal" data-target="#myModal" data-id="8"><div class="container-card"><img src="assets/images/Pix6.png" class="profile-thm img img-responsive full-width" /><div>นายพันทิป ดอทคอม</div></div></div>');
							$("#content > .row").append( $elm );
						},1000);
					}
				} catch(e) {

				}

				localStorage.setItem("data",JSON.stringify(data));
				$('#myModal').on('show.bs.modal', function (event) {
					console.log(5555);
					var button = $(event.relatedTarget);
					var recipient = button.data('id');
					var modal = $(this);
					console.log( recipient );
					modal.find('.modal-title').text( data[recipient-1][0] );
					modal.find("#profilePix").attr("src","assets/images/Pix"+recipient+".png");
					modal.find(".profile-data").html( data[recipient-1][0]+"<br>"+data[recipient-1][1] );
					modal.find(".skill-data").html( data[recipient-1][2] );
					modal.find(".day-data").html(data[recipient-1][3] );
					curId = parseInt(recipient);
				});

				$("#content .container-card div:gt(0)").each(function( i ){

					var starPic = "<a class='glyphicon glyphicon-star-empty'></a>";
					var starSum = function(starPic){
						var end = Math.floor(Math.random()*3+2);
						var sum= "";
						for (var i = 0; i <= parseInt(end) ; i++) {
							sum+=starPic;
						};
						return sum;
					}
					$(this).html("<strong>ชื่อ : </strong>" +data[i][0]+"<br><strong>ความนิยม : </strong> "+ starSum(starPic)+	
						"<br><strong>ความสามารถ : </strong>"+data[i][2]+
						"<br><strong>วันที่ว่าง : </strong>"+data[i][3] );



				});
				$("#hiring-btn").click(function() {
					window.location = "contact.php?id="+curId;
				});

				$("#search-inp").on('input',function() {
					searching();
				});
			});
function searching() {
				var pass = false;
				var text = $("#search-inp").val();
				if( text == "" ) pass = true;
				$("#content .container-card div:gt(0)").each(function(i) {
					if( pass || data[i][0].indexOf(text) != -1 || data[i][1].indexOf(text) != -1 || data[i][2].indexOf(text) != -1 || data[i][3].indexOf(text) != -1 ) {
						$(this).parent().parent().fadeIn();
						$(this).parent().parent().removeHighlight();
						$(this).parent().parent().highlight($("#search-inp").val());
					} else {
						$(this).parent().parent().fadeOut();
					}
				});
			}
		</script>

	</head>

	<body>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51f136981273e313"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow16.js"></script>

		
		<!-- navigation bar //-->
		<?php navbar(); ?>

		<!-- content //-->
		<div class="row" id="search">
			<div class=" col-sm-12 col-lg-8 col-lg-offset-2 text-center">
				<h2 class="row text-center" style="padding:7px; color:white">
เมดวันเดย์ พื้นที่เสรีในการจัดหาและจ้างงาน
				</h2>
				<div class="row">
					<div>
					</div>
					<form class="navbar-form row" role='search'>
						<input class="form-control" id="search-inp" placeholder='Search' size="80">
						<button class="btn btn-default btn" id="search-btn">Search</button>
					</form>
				</div>
			</div>
		</div>

		<div id="showof"></div>

		<div id="content" class="row col-sm-12 col-lg-8 col-lg-offset-2 text-center">
			<div class="row">
				<div class="card col-xs-6 col-sm-3 text-center" data-toggle="modal" data-target="#myModal" data-id="1">
					<div class="container-card">
						<img src="assets/images/Pix1.png" class="profile-thm img img-responsive full-width" />
						<div>description</div>

					</div>
				</div>
				<div class="card col-xs-6 col-sm-3 text-center" data-toggle="modal" data-target="#myModal" data-id="2">
					<div class="container-card">
						<img src="assets/images/Pix2.png" class="profile-thm img img-responsive full-width" />
						<div>description</div>
					</div>
				</div>
				<div class="card col-xs-6 col-sm-3 text-center" data-toggle="modal" data-target="#myModal" data-id="3">
					<div class="container-card">
						<img src="assets/images/Pix3.png" class="profile-thm img img-responsive full-width" />
						<div>description</div>
					</div>
				</div>
				<div class="card col-xs-6 col-sm-3 text-center" data-toggle="modal" data-target="#myModal" data-id="4">
					<div class="container-card">
						<img src="assets/images/Pix4.png" class="profile-thm img img-responsive full-width" />
						<div>description</div>
					</div>
				</div>
				<div class="card col-xs-6 col-sm-3 text-center" data-toggle="modal" data-target="#myModal" data-id="7">
					<div class="container-card">
						<img src="assets/images/Pix5.png" class="profile-thm img img-responsive full-width" />
						<div>description</div>
					</div>
				</div>
				<div class="card col-xs-6 col-sm-3 text-center" data-toggle="modal" data-target="#myModal" data-id="6">
					<div class="container-card">
						<img src="assets/images/Pix6.png" class="profile-thm img img-responsive full-width" />
						<div>description</div>
					</div>
				</div>
				<div class="card col-xs-6 col-sm-3 text-center" data-toggle="modal" data-target="#myModal" data-id="2">
					<div class="container-card">
						<img src="assets/images/Pix7.png" class="profile-thm img img-responsive full-width" />
						<div>description</div>
					</div>
				</div>

				
			</div>
		</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">aaa</h4>
		</div>
		<div class="modal-body">
			<table class="table borderless">
				<tr>
					<td>
						<div class="col-sm-4">
							<img src="assets/images/Pix1.png" class="img img-responsive"  id='profilePix'/>
						</div>
						<div class="col-sm-8">
							<strong>ข้อมูลส่วนตัว :</strong><br>
							<div class="profile-data">
							My name is sparta<br>
							Born 1 1 1991<br>
							</div>
							<hr>
							<strong>ความสามารถ :</strong><br>
							<div class="skill-data">
								blah blah blash<br>
							</div>
							<strong>วันที่ว่าง :</strong><br>
							<div class="day-data">
								blah blah blash<br>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="modal-footer">
			<button type="button" class=" btn btn-primary" id="hiring-btn"> จ้าง
			</button>
		</div>
	</div>
</div>
	

	</body>
	
</html>