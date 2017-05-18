<div class="container text-center">
	<div class="row">
		<div class="col-sm-6">
			<a href="<?= base_url() ?>">Akcije</a> / <a href="<?= base_url().'cenovnik' ?>">Cenovnik</a>
		</div>
		<div class="col-sm-6">
			Dubinsko pranje Krstić / <?= isset($_SESSION['msg'])?$_SESSION['msg']:'Ulogujte se!' ?>
		</div>
	</div>
</div>
</body>
</html>