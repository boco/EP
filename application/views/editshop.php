<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Edit shop</title>
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
		
		<section id="shop">
			<h2>Shop</h2>
			<?php echo anchor('additem', 'Add new item', 'class="add-user"'); ?>
			<?php
				if($items){
					foreach($items as $row){
						echo '<div class="items">';
						echo '<img src='.$row->photo.' alt='.$row->name.' width="150" height="150">';
						echo '<h4>'.$row->name.'</h4>';
						echo '<p>Category: '.$row->category.'</p>';
						echo '<p>Price: '.$row->price.' &euro;</p>';
						
						echo form_open("editshop/edit");
						echo '<input type="submit" class="edititem" title="Add to cart" value="Edit item"/>';
						echo '<input type="hidden" hidden" name="item_id" value="'.$row->item_id.'" />';
						echo form_close();
						
						//echo form_open("editshop/delete");
						//echo '<input type="submit" class="deleteitem" title="Delete" value="Delete"/>';
						//echo '<input type="hidden" name="delete" value="'.$row->item_id.'" />';
						//echo form_close();
						
						if($row->active == 1){
							echo form_open("editshop/deactivate");
							echo '<input type="submit" class="activeitem" title="Deactivate" value="Deactivate"/>';
							echo '<input type="hidden" name="deactivate" value="'.$row->item_id.'" />';
							echo form_close();
						}else{
							echo form_open("editshop/activate");
							echo '<input type="submit" class="activeitem" title="Activate" value="Activate"/>';
							echo '<input type="hidden" name="activate" value="'.$row->item_id.'" />';
							echo form_close();
						}				
								
						echo '</div>';
					}
				}
			?>
		</section>		
	</body>
</html>
