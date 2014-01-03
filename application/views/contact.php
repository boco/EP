<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Contact</title>
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
			<ul id="menu">
				<li><?php echo anchor('main', 'Home'); ?></li>
				<li><?php echo anchor('shop', 'Shop'); ?></li>
				<li><?php echo anchor('cart', "Cart (".$cart_items.")"); ?></li>
				<li><?php echo anchor('aboutus', 'About us'); ?></li>
				<li><?php echo anchor('contact', 'Contact'); ?></li>
			</ul>
			<div id="search-bar">					
				<img class="ikona" id="search" src="../photos/search.png" alt="search" width="24" height="24">
				<input id="searchbar" class="oblika-search" name="searchbar" type="search" placeholder="Search">
				<input id="hiddenurl" type="hidden" value="<?php echo base_url(); ?>">
			</div>
			<div id="results" class="halfscreen">Write something...</div>
			<div class="welcome">
				Welcome, <?php echo anchor('myprofile', $name);?>
				<?php echo anchor('main/logout', 'Logout', 'class="login"'); ?>
			</div>	
		</nav>
		
		<section id="contacts">
			<h2>Contact</h2>
			<address>
				<p>EasyDo App</p>
				<p>Janez Risar sp</p>
				<p>Cesta na gor 14</p>
				<p>6000 Koper</p><br>
				
				<p>T: +386 (0)5 628 55 18</p>
				<p>M: +386 (0)41 281 299</p>
				<p>E: easydoapp@janezrisar.si</p>
				<p>W: www.easydoapp.com</p>
			</address>
			
			<?php echo form_open('verifycontact',array('id'=>'forma','class'=>'sendmail')); ?>
				<div>
					<label class="control-label">Name and surname:</label>									
					<input id="sendmail-name" class="polja" name="name" type="text" value="<?php echo set_value('name'); ?>" placeholder="Name and surname">
				</div>
				<?php echo form_error('name', '<label class="error error-send">', '</label>'); ?>
				<div>
					<label class="control-label">Email address:</label>
					<input id="sendmail-email" class="polja" name="email" type="email" value="<?php echo set_value('email'); ?>" placeholder="Email address">
				</div>
				<?php echo form_error('email', '<label class="error error-send">', '</label>'); ?>
				<div>
					<label class="control-label">Phone number:</label>	
					<input id="sendmail-phone" class="polja-date" name="phone" type="text" value="<?php echo set_value('phone'); ?>" placeholder="Phone number"><br/>
				</div>
				<?php echo form_error('phone', '<label class="error error-send">', '</label>'); ?>
				<div>
					<label class="control-label">Message:</label>
					<textarea id="sendmail-message" class="polja" name="message" rows="6" cols="20" value="<?php echo set_value('message'); ?>" placeholder="Message"></textarea>
				</div>
				<?php echo form_error('message', '<label class="error error-send">', '</label><br/>'); ?>

				<input id="sendmail-send" class="send-button" type="button" value="Send">
			<?php form_close(); ?>
		</section>	
		<script type="text/javascript" src="../js/sendmail_verification.js"></script>
		
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
