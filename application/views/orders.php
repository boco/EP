<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Orders</title>
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
				<li><?php echo anchor('prodaja', 'Home'); ?></li>
				<li><?php echo anchor('orders', 'Orders'); ?></li>
				<li><?php echo anchor('editshop', 'Edit shop'); ?></li>
				<li><?php echo anchor('editsellers', 'Edit users'); ?></li>
			</ul>
			
			<div class="welcome">
				Welcome, <?php echo anchor('myprofile', $name);?>
				<?php echo anchor('main/logout', 'Logout', 'class="login"'); ?>
			</div>	
		</nav>
		
		<section id="cart">
			<h2>Orders awaiting</h2>
			<?php
				if($orders){
					foreach($orders as $row){	
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

						echo form_open("orders/approve");
						echo '<input type="submit" class="approveorder" value="Approve"/>';
						echo '<input type="hidden" name="cart_id" value="'.$row->cart_id.'" />';
						echo form_close();
						
						echo form_open("orders/reject");
						echo '<input type="submit" class="rejectorder" value="Reject"/>';
						echo '<input type="hidden" name="cart_id" value="'.$row->cart_id.'" />';
						echo form_close();
							
						echo form_open("orders/cancel");
						echo '<input type="submit" class="cancelorder" value="Cancel"/>';
						echo '<input type="hidden" name="cart_id" value="'.$row->cart_id.'" />';
						echo form_close();
					
						echo '<hr/>';
					}
				}
			?>
		</section>
	</body>
</html>
