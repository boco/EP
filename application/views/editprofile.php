<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Edit profile</title>
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
		
		<section id="edit-profile">
			<h2>Edit profile</h2>
			<?php echo form_open('editprofile/save',array('id'=>'forma-editprofile','class'=>'ovitek')); ?>
				<div id="oklep-name" class="edit-oklep">					
					<img class="ikona" src="../photos/user.png" alt="name" width="24" height="24">
					<input id="name" name="name" class="zaobljen" type="text" value="<?php echo set_value('name',$name); ?>" placeholder="Name"><br/>
				</div>
				<?php echo form_error('name', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-surname" class="edit-oklep">					
					<img class="ikona" src="../photos/user.png" alt="surname" width="24" height="24">
					<input id="surname" name="surname" class="zaobljen" type="text" value="<?php echo set_value('surname',$surname); ?>" placeholder="Surname"><br/>
				</div>
				<?php echo form_error('surname', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-address" class="edit-oklep">					
					<img class="ikona" src="../photos/address.png" alt="address" width="24" height="24">
					<input id="address" name="address" class="zaobljen" type="text" value="<?php echo set_value('address',$address); ?>" placeholder="Address"><br/>
				</div>
				<?php echo form_error('address', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-city" class="edit-oklep">					
					<img class="ikona" src="../photos/geo.png" alt="city" width="24" height="24">
					<input id="city" name="city" class="zaobljen" type="text" value="<?php echo set_value('city',$city); ?>" placeholder="City"><br/>
				</div>
				<?php echo form_error('city', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-post" class="edit-oklep">					
					<img class="ikona" src="../photos/post.png" alt="post" width="24" height="24">
					<input id="post" name="post" class="zaobljen" type="text" value="<?php echo set_value('post',$post); ?>" placeholder="Post number"><br/>
				</div>
				<?php echo form_error('post', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-email" class="edit-oklep">					
					<img class="ikona" src="../photos/mail.png" alt="email" width="24" height="24">
					<input id="email" name="email" class="zaobljen" type="email" value="<?php echo set_value('email',$email); ?>" placeholder="E-mail"><br/>
				</div>
				<?php echo form_error('email', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-phone" class="edit-oklep">					
					<img class="ikona" src="../photos/phone.png" alt="phone" width="24" height="24">
					<input id="phone" name="phone" class="zaobljen" type="phone" value="<?php echo set_value('phone',$phone); ?>" placeholder="Phone number"><br/>
				</div>
				<?php echo form_error('phone', '<label class="error">', '</label>'); ?>
							
				<input id="save" class="save" type="button" value="Save"/>
			<?php form_close(); ?>				
		</section>
		<script type="text/javascript" src="../js/editprofile_verification.js"></script>
		
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
