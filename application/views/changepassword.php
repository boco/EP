<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Change password</title>
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
				<li><?php echo anchor('cart', "Cart (".$cart_items.")"); ?></li>
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
		
		<section id="edit-password">
			<h2>Change password</h2>
			<?php echo form_open('changepassword/save',array('id'=>'forma-password','class'=>'ovitek2')); ?>
				<div id="oklep-old-password" class="edit-oklep">					
					<img class="ikona" src="../photos/locket.png" alt="password" width="24" height="24">
					<input id="old-password" name="old-password" class="zaobljen" type="password" autocomplete="off" placeholder="Old password"><br/>
				</div>
				<?php echo form_error('old-password', '<label id="neki" class="error">', '</label>'); ?>
				<div id="oklep-password" class="edit-oklep">					
					<img class="ikona" src="../photos/locket.png" alt="password" width="24" height="24">
					<input id="password" name="password" class="zaobljen" type="password" autocomplete="off" placeholder="New password"><br/>
				</div>
				<?php echo form_error('password', '<label class="error">', '</label>'); ?>
				<div id="oklep-re-password" class="edit-oklep">					
					<img class="ikona" src="../photos/locket.png" alt="re-password" width="24" height="24">
					<input id="re-password" name="re-password" class="zaobljen" type="password" autocomplete="off" placeholder="Retype new password"><br/>
				</div>
				<?php echo form_error('re-password', '<label class="error">', '</label>'); ?>
				<input id="save" class="save2" type="button" value="Save"/>
			<?php form_close(); ?>			
		</section>
		<script type="text/javascript" src="../js/changepass_verification.js"></script>
		
		<?php if($role == 0){ ?>
		<section id="mini-cart">
			<h4>Cart</h4>
			<?php if($cart_sum->price){ ?>
			<p>Total: <?php echo $cart_sum->price;?> &euro;</p>
			<?php
			echo anchor('cart', 'Cart');
			echo anchor('checkout', 'Check out');
			?>
			<?php }else{ ?>
			<p>Total:  0 &euro;</p>
			<?php
			echo anchor('cart', 'Cart');
			} 
			?>
		</section>
		<?php } ?>
	</body>
</html>
