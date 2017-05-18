<div class="container text-center">
	<div class="row">
		<?= form_open('admin/login') ?>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" name="username">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" name="password">
			</div>
				<input type="submit" class="btn btn-default" value="Uloguj se">
		</form>
	</div>
</div>