<div class="marked-title">
	<h3>Login</h3>
</div>

<div class="main-content contact">
    <div class="contact-content">
		<div class="contact-form">
			<form action="<?=base_url(); ?>login/login" method="post" role="form">
				<div class="top-form"><input type="text" class="field" name="username" placeholder="Username"><div class="clear"></div></div>
				<div class="top-form"><input type="password" class="field" name="password" placeholder="Password"><div class="clear"></div></div>
				<button type="submit" class="btn btn-default">Log in</button>
			</form>
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
					<input type="text" class="field" name="nama" placeholder="nama">
					<div class="clear"></div>
					<span class="text-danger"><?php echo form_error('nama'); ?></span>
				</div>
				<div class="top-form"><input type="text" class="field" name="username" placeholder="Username"><div class="clear"></div><span class="text-danger"><?php echo form_error('username'); ?></span></div>
				<div class="top-form"><input type="password"class="field" name="password"  placeholder="Password"><div class="clear"></div><span class="text-danger"><?php echo form_error('password'); ?></span></div>
				<div class="top-form"><input type="password"class="field" name="cpassword"  placeholder="confirm Password"><div class="clear"></div><span class="text-danger"><?php echo form_error('ConfirmPassword'); ?></span></div>
				<div class="top-form"><input type="text" class="field" name="email" placeholder="email"><div class="clear"></div><span class="text-danger"><?php echo form_error('email'); ?></span></div>
				<div class="top-form"><input type="text" class="field" name="phone" placeholder="phone"><div class="clear"></div><span class="text-danger"><?php echo form_error('phone'); ?></span></div>
				<div class="top-form"><input type="text" class="field" name="alamat" placeholder="alamat"><div class="clear"></div><span class="text-danger"><?php echo form_error('alamat'); ?></span></div>
				<button type="submit" class="btn btn-default">Register</button>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>


	