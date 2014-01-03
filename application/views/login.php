<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SuperShop Login</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css" />
                <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<meta name="description" content="" />
		<meta name="author" content="Boco" />
	</head>

	<body>
		<div id="login-box">
			<h4>Login</h4>
			<?php echo form_open('verifylogin',array('id'=>'form-login')); ?>
				<div id="oklep-email" class="oklep">					
   					<img class="ikona" src="../photos/mail.png" alt="mail" width="24" height="24">
   					<input id="email" class="zaobljen" name="email" type="email" value="<?php echo set_value('email'); ?>" placeholder="E-mail"><br/>
   				</div>
				<?php echo form_error('email', '<label class="error">', '</label>'); ?>
   				<div id="oklep-password" class="oklep">	
   					<img class="ikona"  src="../photos/locket.png" alt="locket" width="24" height="24">
   					<input id="password" class="zaobljen" name="password" type="password" value="<?php echo set_value('password'); ?>" placeholder="Password"><br/>
   				</div>
				<?php echo form_error('password', '<label class="error">', '</label><br/>'); ?>
   				<input id="login" class="window-login" type="button" value="Login">
			<?php form_close(); ?>
			<p class="back" >Go to <?php echo anchor('index', 'homepage'); ?></p>
		</div>
		<script type="text/javascript" src="../js/login_verification.js"></script>
	</body>
	
</html>
