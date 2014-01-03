<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Add item</title>
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
			<h2>Add item</h2>
			<?php echo form_open('additem/save',array('class'=>'ovitek-seller')); ?>
				<div>
					<label class="control-label">Name:</label>									
					<input id="name" class="polja" type="text" name="name" value="<?php echo set_value('name'); ?>" placeholder="Name">
				</div>
				<?php echo form_error('name', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">Category:</label>									
					<select id="category" class="polja-drop" name="category">
						<option value="empty">-</option>
						<option value="Running" <?php echo set_select('category','Running'); ?> >Running</option>
						<option value="Casual" <?php echo set_select('category','Casual'); ?> >Casual</option>
						<option value="Summer" <?php echo set_select('category','Summer'); ?> >Summer</option>
					</select>
				</div>
				<?php echo form_error('category', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">Price:</label>									
					<input id="price" class="polja" type="text" name="price" value="<?php echo set_value('price'); ?>" placeholder="Price">
				</div>
				<?php echo form_error('price', '<label class="error error-seller">', '</label>'); ?>
				
				<div>
					<label class="control-label">Photo:</label>									
					<input id="photo" class="polja" type="text" name="photo" value="<?php echo set_value('photo'); ?>" placeholder="Photo">
				</div>
				<?php echo form_error('photo', '<label class="error error-seller">', '</label>'); ?>
								
				<input id="save" class="save-seller" type="submit" value="Confirm">
			<?php form_close(); ?>				
		</section>
	</body>
</html>
