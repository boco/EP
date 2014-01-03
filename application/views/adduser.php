<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Add user</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css" />
		<meta name="description" content="" />
		<meta name="author" content="Boco" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript" src="../js/search.js"></script>
	</head>

	<body>		
		<nav>
			<?php if($role == 2){ ?>
			<ul id="menu">
				<li><?php echo anchor('adm', 'Home'); ?></li>
				<li><?php echo anchor('editusers', 'Edit users'); ?></li>
			</ul>
			<?php }elseif($role == 1){ ?>
			<ul id="menu">
				<li><?php echo anchor('prodaja', 'Home'); ?></li>
				<li><?php echo anchor('orders', 'Orders'); ?></li>
				<li><?php echo anchor('editshop', 'Edit shop'); ?></li>
				<li><?php echo anchor('editsellers', 'Edit sellers'); ?></li>
			</ul>
			<?php }else{ ?>
			<ul id="menu">
				<li><?php echo anchor('main', 'Home'); ?></li>
				<li><?php echo anchor('shop', 'Shop'); ?></li>
				<li><?php echo anchor('cart', "Cart (".$cart.")"); ?></li>
				<li><?php echo anchor('aboutus', 'About us'); ?></li>
				<li><?php echo anchor('contact', 'Contact'); ?></li>
			</ul>
			<?php }?>
			
			<?php if($role <= 1){ ?>
			<div id="search-bar">					
				<img class="ikona" id="search" src="../photos/search.png" alt="search" width="24" height="24">
				<input id="searchbar" class="oblika-search" name="searchbar" type="search" placeholder="Search">
				<input id="hiddenurl" type="hidden" value="<?php echo base_url(); ?>">
			</div>
			<div id="results" class="halfscreen">Write something...</div>
			<?php }?>
			
			<div class="welcome">
				Welcome, <?php echo anchor('myprofile', $name);?>
				<?php echo anchor('main/logout', 'Logout', 'class="login"'); ?>
			</div>
		</nav>
		
		<section id="addseller">
			<h2>Add user</h2>
			<?php echo form_open('adduser/save',array('class'=>'ovitek-seller')); ?>
				<div>
					<label class="control-label">Name:</label>									
					<input id="name" class="polja" type="text" name="name" value="<?php echo set_value('name'); ?>" placeholder="Name">
				</div>
				<?php echo form_error('name', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">Surname:</label>									
					<input id="surname" class="polja" type="text" name="surname" value="<?php echo set_value('surname'); ?>" placeholder="Surname">
				</div>
				<?php echo form_error('surname', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">Address:</label>									
					<input id="address" class="polja" type="text" name="address" value="<?php echo set_value('address'); ?>" placeholder="Address">
				</div>
				<?php echo form_error('address', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">City:</label>									
					<input id="city" class="polja" type="text" name="city" value="<?php echo set_value('city'); ?>" placeholder="City">
				</div>
				<?php echo form_error('city', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">Post number:</label>									
					<input id="post" class="polja" type="text" name="post" value="<?php echo set_value('post'); ?>" placeholder="Post number">
				</div>
				<?php echo form_error('post', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">E-mail:</label>									
					<input id="email" class="polja" type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="E-mail">
				</div>
				<?php echo form_error('email', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">Phone:</label>									
					<input id="phone" class="polja" type="text" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="Phone number">
				</div>
				<?php echo form_error('phone', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">Password:</label>									
					<input id="password" class="polja" type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
				</div>
				<?php echo form_error('password', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">Retype password:</label>									
					<input id="repassword" class="polja" type="password" name="repassword" value="<?php echo set_value('repassword'); ?>" placeholder="Retype password">
				</div>
				<?php echo form_error('repassword', '<label class="error error-seller">', '</label>'); ?>
								
				<input id="save" class="save-seller" type="submit" value="Confirm">
			<?php form_close(); ?>
		</section>
	</body>
</html>
