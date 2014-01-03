<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Edit users</title>
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
				<li><?php echo anchor('editsellers', 'Edit users'); ?></li>
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
		
		<section id="edit-sellers">
			<h2>Edit users</h2>
			<table class="oklep-tabela">
				<caption>List of users</caption>
				<thead>
					<tr>
						<th class="big">Name</th>
						<th class="big">Surname</th>
						<th class="big">Status</th>
						<th colspan="3" class="big">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if($users){
							foreach($users as $row) {
								if($row->active == 1){
									echo '<tr class="active">';
								}else{
									echo '<tr class="non">';
								}
								echo '<td>'.$row->name.'</td>';
								echo '<td>'.$row->surname.'</td>';
								
								if($row->active == 1){
									echo '<td>Active</td>';
								}else{
									echo '<td>Non active</td>';
								}
																	
								echo '<td class="action">';
								echo form_open("editsellers/editUser");
								echo '<input type="image" class="edit-user" title="Edit" src="../photos/edit.png" width="24" height="24"/>';
								echo '<input type="hidden" hidden" name="edit" value="'.$row->user_id.'" />';
								echo form_close();
								echo '</td>';
				
								echo '<td class="action">';
								echo form_open("editsellers/deleteUser");
								echo '<input type="image" class="edit-user" title="Delete" src="../photos/bin.png" width="24" height="24"/>';
								echo '<input type="hidden" name="delete" value="'.$row->user_id.'" />';
								echo form_close();
								echo '</td>';
								
								if($row->active == 1){
									echo '<td class="action">';
									echo form_open("editsellers/deactivateUser");
									echo '<input type="image" class="edit-user" title="Deactivate" src="../photos/deactivate.png" width="24" height="24"/>';
									echo '<input type="hidden" name="deactivate" value="'.$row->user_id.'" />';
									echo form_close();
									echo '</td>';
								}else{
									echo '<td class="action">';
									echo form_open("editsellers/activateUser");
									echo '<input type="image" class="edit-user" title="Activate" src="../photos/activate.png" width="24" height="24"/>';
									echo '<input type="hidden" name="activate" value="'.$row->user_id.'" />';
									echo form_close();
									echo '</td>';
								}								
								echo '</tr>';
							}
						}
					?>
				</tbody>
			</table>
			<?php echo anchor('adduser', 'Add user', 'class="add-user"'); ?>
		</section>
	</body>
</html>
