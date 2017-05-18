<div class="container-fluid text-center">
	<div class="row">
		<h2 class="sub-heading">Trenutno aktivne akcije</h2>
		<div class="col-sm-6">
			<p id="naslov-display">"<?= $naslov['naslov'] ?>"</p>
		</div>
		<div class="col-sm-6">
			<table class="table table-hover">
				<tr>
					<th>Broj&nbsp;Akcije</th>
					<th>Usluga</th>
					<th>Cena</th>
				</tr>
				<?php foreach ($akcije as $akcija): ?>
				<tr>
					<td><?= $akcija['akcija_id'] ?></td>
					<td><?= $akcija['sadrzaj'] ?></td>
					<td><?= $akcija['cena'] ?></td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
	</div>
	<div class="row">
		<h2 class="sub-heading">Izmeni akcije</h2>
		<div class="col-sm-6">
			<?= form_open('admin/naslov_update') ?>
				<div class="form-group col-sm-12">
					<label for="pwd">Vrsta Akcije</label>
					<textarea class="form-control" rows="4" name="naslov"><?= $naslov['naslov'] ?></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-default" value="Promeni">
				</div>
				
			</form>
		</div>
		<div class="col-sm-6">
			<?= form_open('admin/akcije_update') ?>
				<div class="row">
				<div class="form-group col-sm-6">
					<label for="usluga0" class="">Usluga:</label>
					<textarea rows="4" class="form-control" id="usluga0" name=usluge[]><?= $akcije[0]['sadrzaj']?></textarea>
				</div>
				<div class="form-group col-sm-6">
					<label for="cena0" class="control-label">Cena:</label>
					<input type="text" class="form-control" id="cena0" name="cene[]" value="<?= $akcije[0]['cena']?>">
				</div>
				</div>
				<div class="row">
				<div class="form-group col-sm-6">
					<label for="usluga1" class="">Usluga:</label>
					<textarea rows="4" class="form-control" id="usluga1" name=usluge[]><?= $akcije[1]['sadrzaj']?></textarea>
				</div>
				<div class="form-group col-sm-6">
					<label for="cena1" class="control-label">Cena:</label>
					<input type="text" class="form-control" id="cena1" name="cene[]" value="<?= $akcije[1]['cena']?>">
				</div>
				</div>
				<div class="row">
				<div class="form-group col-sm-6">
					<label for="usluga2" class="">Usluga:</label>
					<textarea rows="4" class="form-control" id="usluga2" name=usluge[]><?= $akcije[2]['sadrzaj']?></textarea>
				</div>
				<div class="form-group col-sm-6">
					<label for="cena2" class="control-label">Cena:</label>
					<input type="text" class="form-control" id="cena2" name="cene[]" value="<?= $akcije[2]['cena']?>">
				</div>
				</div>
				<input type="submit" name="submit" class="btn btn-default" value="Promeni">
			</form>
		</div>
	</div>
</div>