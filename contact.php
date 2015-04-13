<?php include("header.php"); ?>
<html>
	<head>
		<meta charset="UTF-8">
		<script src='assets/js/jquery-2.1.3.min.js'></script>
		<script src='assets/js/bootstrap.js'></script>
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
			a, a:hover {
				color: inherit;
				text-decoration: none;
			}
			<?php css(); ?>
		</style>
		<script>
			
		</script>
	</head>

	<body>
		
		<!-- navigation bar //-->
		<?php navbar(); ?>

		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="row text-center">
					<img src="assets/images/contact.jpg">
				</div>
				<br><br>
				<div class="row text-center">
					<a href="index.php"><button type="button" class="btn btn-sm btn-danger" style="width:150px;">ยกเลิก</button></a>
					<a href="contact_confirm.php?id=<?php echo $_GET["id"] ?>"><button type="button" class="btn btn-primary" style="width:200px;">จ้าง</button></a>
				</div>
			</div>
		</div>
		
		
	</body>
	
</html>