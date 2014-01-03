<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Previous orders</title>
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
		
		<section id="cart">
			<h2>Previous orders</h2>
			<?php
				if($previous_carts){
					foreach($previous_carts as $row){
						echo '<div class="naslov">';
						echo '<strong>Order status: ';
						if($row->status=='ready'){
							echo '<span style="color: #ffbb00">waiting to be confirmed</span></strong>';
						}elseif($row->status=='approved'){
							echo '<span style="color: green">approved</span></strong>';
						}elseif($row->status=='rejected'){
							echo '<span style="color: red">rejected</span></strong>';
						}else{
							echo '<span style="color: red">canceled</span></strong>';
						}
						echo '</div>';
						$cart_number=$this->cart_items->get_previous($row->cart_id);
						foreach($cart_number as $cart){
							echo '<div class="checkoutitems">';
							echo '<img src='.$cart->photo.' alt='.$cart->name.' width="100" height="100">';
							echo '<h4>'.$cart->name.'</h4>';
							echo '<p>Category: '.$cart->category.'</p>';
							echo '<p>Price: '.$cart->price.' &euro;</p>';								
							echo '</div>';
						}
						echo '<hr/>';
					}
				}
			?>
		</section>
		
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
