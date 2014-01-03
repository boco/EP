<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Admin</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css" />
		<meta name="description" content="" />
		<meta name="author" content="Boco" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    	<script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="../js/jcarousel.basic.js"></script>
		<script type="text/javascript" src="../js/search.js"></script>		
	</head>
	<body>
		<nav>
			<ul id="menu">
				<li><?php echo anchor('adm', 'Home'); ?></li>
				<li><?php echo anchor('editusers', 'Edit users'); ?></li>
			</ul>
			
			<div class="welcome">
				Welcome, <?php echo anchor('myprofile', $name);?>
				<?php echo anchor('main/logout', 'Logout', 'class="login"'); ?>
			</div>	
		</nav>
	</body>
</html>