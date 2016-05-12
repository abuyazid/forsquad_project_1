<div class="warnMsg">
	<?php	if (isset($message_display)) {
				echo '<h2>'.$message_display.'</h2>';
	}?>
</div>

<div class="marked-title">
	<h3>Login</h3>
</div>

<div class="main-content contact">
    <div class="contact-content">
		<div class="contact-form">
			<div class="errorMsg">
				<?php	if (isset($error_message)) {
							echo $error_message;
						}?>
			</div>
			<?php echo form_open('login'); ?>
				<div class="top-form">
					<input type="text" class="field" name="username1" placeholder="Username" value="<?php echo set_value('username1'); ?>">
					<div class="clear"></div>
					<span class="text-danger"><?php echo form_error('username1'); ?></span>
				</div>
				<div class="top-form">
					<input type="password" class="field" name="password1" placeholder="Password">
					<div class="clear"></div>
					<span class="text-danger"><?php echo form_error('password1'); ?></span>
				</div>
				<button type="submit" class="btn btn-default">Log in</button>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<div class="marked-title">
	<h3>Register</h3>
</div>

<div class="main-content contact">
	<div class="contact-content">
		<div class="contact-form">
		
			<?php echo form_open('register'); ?>
				<div class="top-form">
					<input type="text" class="field" name="nama" placeholder="name" value="<?php echo set_value('nama'); ?>" >
					<div class="clear"></div>
					<span class="text-danger"><?php echo form_error('nama'); ?></span>
				</div>
				<div class="top-form">
					<input type="text" class="field" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
					<div class="clear"></div>
					<span class="text-danger"><?php echo form_error('username'); ?></span>
				</div>
				<div class="top-form">
					<input type="password"class="field" name="password"  placeholder="Password" >
					<div class="clear"></div>
					<span class="text-danger"><?php echo form_error('password'); ?></span>
				</div>
				<div class="top-form">
					<input type="password"class="field" name="cpassword"  placeholder="confirm Password">
					<div class="clear"></div>
					<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
				</div>
				<div class="top-form">
					<input type="text" class="field" name="email" placeholder="email" value="<?php echo set_value('email'); ?>">
					<div class="clear"></div>
					<span class="text-danger"><?php echo form_error('email'); ?></span>
				</div>
				<div class="top-form">
					<input type="text" class="field" name="phone" placeholder="phone" value="<?php echo set_value('phone'); ?>">
					<div class="clear"></div>
					<span class="text-danger"><?php echo form_error('phone'); ?></span>
				</div>
				<div class="top-form">
					<input type="text" class="field" name="alamat" placeholder="alamat" value="<?php echo set_value('alamat'); ?>">
					<div class="clear"></div>
					<span class="text-danger"><?php echo form_error('alamat'); ?></span>
				</div>
				<button type="submit" class="btn btn-default">Register</button>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>


	