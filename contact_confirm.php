<?php include("header.php"); ?>
<html>
	<head>
		<script src='assets/js/jquery-2.1.3.min.js'></script>
		<script src='assets/js/bootstrap.js'></script>
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
		<style type="text/css">
			<?php css(); ?>

			#content > div {
				padding: 20px;
			}
			#content > div > .profile-thm {
				display:inline-block;
				max-height: 200px;
				max-width:200px;
				background:#111;
			}
			.bg-success {
				padding: 15px 7px;
				border-radius: 3px;
			}
			.profile-thm {
				width:100%;
			}
			#block {
				padding: 50px;
				background: white;
			}
		</style>
		<script type="text/javascript">
			var data = JSON.parse(localStorage.getItem("data"));
			var id = parseInt(<?php echo $_GET["id"]; ?>);
			$(function() {
				$(".profile-data").html( data[id-1][0]+"<br>"+data[id-1][1] );
				$(".skill-data").html( data[id-1][2] );
				console.log( id );
				$("#profile-img").attr("src","assets/images/Pix"+id+".png");
			});
		</script>
	</head>

	<body>
		
		<!-- navigation bar //-->
		<?php navbar(); ?>

		<div class="container-fluid">
			<div class="col-xs-12 col-md-8 col-md-offset-2" >
				<div class="row" id="block">
					<div class="col-xs-4">
						<div class="text-center">
						<img id="profile-img" src="assets/images/placeholder.png" class="img profile-thm" />
						</div>
					</div>
					<div class="col-xs-6">
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
					</div>
				</div>
				<hr>
				<div class="row">
					<h4 class="bg-success text-center">การว่าจ้างเสร็จสมบูรณ์</h4>
				</div>
				<div class="row">
					<div class="text-right">
						<a href="index.php"><button type="button" class="btn btn-primary">กลับไปหน้าแรก</button></a>
					</div>
				</div>
			</div>
		</div>
		
		
	</body>
	
</html>