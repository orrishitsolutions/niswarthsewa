<?php
require_once('login/head.php');
?>
	<h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
	<?= form_open('admin/login', ['class' => 'forms-sample']); ?>
		<?php $errors = $this->session->flashdata(); ?>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="text" class="form-control <?php if (!empty($errors['email'])): ?> is-invalid <?php endif; ?>"
				   name="email" id="exampleInputEmail1" placeholder="Email">
			<?php if (!empty($errors['email'])) { ?>
				<div>
                <span class="font-weight-bold text-danger text-small">
                    <?= $errors['email'] ?>
                </span>
				</div>
			<?php } ?>
		</div>
		<input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>"
			   value="<?= $this->security->get_csrf_hash(); ?>">
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password"
				   class="form-control <?php if (!empty($errors['password'])): ?> is-invalid <?php endif; ?>"
				   name="password" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
			<?php if (!empty($errors['password'])) { ?>
				<div>
                <span class="font-weight-bold text-danger text-small">
                    <?= $errors['password'] ?>
                </span>
				</div>
			<?php } ?>
		</div>
		<div class="mt-3">
			<button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Sign-in</button>
		</div>
	<?= form_close(); ?>
<?php
require_once('login/footer.php');
?>
