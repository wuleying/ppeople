<?php $this->load->view('layout/simpleheader'); ?>
<div class="margin12">
	<h1 class="text-center">用户登录</h1>
	<form class="form-signin" role="form" method="post" action="<?php echo base_url('/signin'); ?>">
		<input type="hidden" name="action" value="1" />
		<p><h2 class="form-signin-heading"></h2></p>
		<p><input type="text" name="email" class="form-control" placeholder="邮箱" value="<?php echo set_value('email'); ?>" /></p>
		<p><input type="password" name="password" maxlength="16" class="form-control" placeholder="密码" value="" /></p>
		<p><button class="btn btn-lg btn-primary btn-block" type="submit">登录</button></p>
	</form>
	<?php if (validation_errors()) : ?>
		<div class="alert alert-danger">
			<p><strong>错误信息！</strong></p>
			<?php echo validation_errors(); ?>
		</div>
	<?php endif; ?>
</div>
<?php $this->load->view('layout/simplefooter'); ?>
