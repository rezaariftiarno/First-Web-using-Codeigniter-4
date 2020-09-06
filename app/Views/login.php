<?= $this->extend('layout')?>
<?= $this->section('content')?>
<?php 
		$username =[
			'name' => 'username',
			'id' => 'username',
			'value' => null,
			'class' => 'form-control',
		];

		$password =[
			'name' => 'password',
			'id'=> 'password',
			'class' => 'form-control',
		];
 ?>
	<section>
		<div class="divider-custom">
			
		</div>
		<h1>Login</h1>
			<?= form_open('Auth/login')?>
		<div class="form-group">
			<?= form_label("Username","username")?>
			<?= form_input($username)?>
		</div>
		<div class="form-group">
			<?= form_label("Password","Password")?>
			<?= form_password($password)?>
		</div>
		<div class="text-right">
			<?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary'])?>
		</div>
		<?= form_close() ?>
	</section>
<?= $this->endSection() ?>