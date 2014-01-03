<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Signup</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css" />
		<meta name="description" content="" />
		<meta name="author" content="Boco" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script>
			$(function () {
            	$("#datepicker").datepicker({
				dateFormat: 'yy-mm-dd', 
				changeYear: true,
				changeMonth: true
				});
        	});
		</script>
	</head>

	<body>
		<div id="signup-box">
			<h4>Sign up</h4>
			<?php echo form_open('verifysignup',array('id'=>'form-signup')); ?>
				<div id="oklep-name" class="oklep">					
   					<img class="ikona" src="../photos/user.png" alt="name" width="24" height="24">
   					<input id="name" class="zaobljen" type="text" name="name" value="<?php echo set_value('name'); ?>" placeholder="Name" ><br/>
   				</div>
				<?php echo form_error('name', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-surname" class="oklep">					
   					<img class="ikona" src="../photos/user.png" alt="surname" width="24" height="24">
   					<input id="surname" class="zaobljen" type="text" name="surname" value="<?php echo set_value('surname'); ?>" placeholder="Surname" ><br/>
   				</div>
				<?php echo form_error('surname', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-address" class="oklep">					
   					<img class="ikona" src="../photos/address.png" alt="address" width="24" height="24">
   					<input id="address" class="zaobljen" type="text" name="address" value="<?php echo set_value('address'); ?>" placeholder="Address" ><br/>
   				</div>
				<?php echo form_error('address', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-city" class="oklep">					
   					<img class="ikona" src="../photos/geo.png" alt="city" width="24" height="24">
   					<input id="city" class="zaobljen" type="text" name="city" value="<?php echo set_value('city'); ?>" placeholder="City" ><br/>
   				</div>
				<?php echo form_error('city', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-post" class="oklep">					
   					<img class="ikona" src="../photos/post.png" alt="post" width="24" height="24">
   					<input id="post" class="zaobljen" type="text" name="post" value="<?php echo set_value('post'); ?>" placeholder="Post number" ><br/>
   				</div>
				<?php echo form_error('post', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-email" class="oklep">					
   					<img class="ikona" src="../photos/mail.png" alt="email" width="24" height="24">
   					<input id="email" class="zaobljen" type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="E-mail"><br/>
   				</div>
				<?php echo form_error('email', '<label class="error">', '</label>'); ?>
				
				<div id="oklep-phone" class="oklep">					
   					<img class="ikona" src="../photos/phone.png" alt="phone" width="24" height="24">
   					<input id="phone" class="zaobljen" type="text" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="Phone number"><br/>
   				</div>
				<?php echo form_error('phone', '<label class="error">', '</label>'); ?>
				
   				<div id="oklep-password" class="oklep">	
   					<img class="ikona" src="../photos/locket.png" alt="password" width="24" height="24">
   					<input id="password" class="zaobljen" type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password"><br/>
   				</div>
				<?php echo form_error('password', '<label class="error">', '</label>'); ?>
				
   				<div id="oklep-repassword" class="oklep">	
   					<img class="ikona" src="../photos/locket.png" alt="re-password" width="24" height="24">
   					<input id="re-password" class="zaobljen" type="password" name="repassword" value="<?php echo set_value('repassword'); ?>" placeholder="Retype password"><br/>
   				</div>
				<?php echo form_error('repassword', '<label class="error">', '</label>'); ?>
				
				<input id="signup" class="window-signup" type="button" value="Sign up"/>
			<?php form_close(); ?>
			<p class="back" >Go to <?php echo anchor('index', 'homepage'); ?></p>
		</div>
	</body>
	<script type="text/javascript" src="../js/signup_verification.js"></script>
</html>
