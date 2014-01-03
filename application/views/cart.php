<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Shop</title>
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
			<h2>Cart content</h2>
			<?php
				if($cart_content){
					foreach($cart_content as $row){
						echo '<div class="items">';
						echo '<img src='.$row->photo.' alt='.$row->name.' width="150" height="150">';
						echo '<h4>'.$row->name.'</h4>';
						echo '<p>Category: '.$row->category.'</p>';
						echo '<p>Price: '.$row->price.' &euro;</p>';
						
						echo form_open("cart/remove");
						echo '<input type="submit" class="addcart" title="Remove from cart" value="Remove"/>';
						echo '<input type="hidden" hidden" name="item_id" value="'.$row->item_id.'" />';
						echo form_close();
								
						echo '</div>';
					}
				}
				if($cart_items){
					echo anchor('checkout', 'Check out','class="add-user"');
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
		<?php 
		echo anchor('previousorders', 'View previous orders','class="previous"');
		}
		?>
	</body>
</html>
