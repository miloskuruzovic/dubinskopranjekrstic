<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h2 class="sub-heading">Cenovnik</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<?= form_open('admin/cenovnik_update') ?>
				<div class="form-group">
					<label for="usluga">Usluga</label>
					<select class="form-control" id="usluga" onchange="window.location='<?= base_url() ?>cenovnik/'+this.value">
						<option value="">Sve usluge</option>
					<?php foreach ($usluge as $usluga): ?>
						<option value="<?= $usluga['usluga_id']?>"
						<?= ($usluga['usluga_id'] == $selected_usluga[0]['usluga_id'])?'selected':'' ?>>
						<?= ucfirst($usluga['naziv']) ?>
						</option>
					<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label for="update_cena">Cena</label>
					<input class="form-control" type="text" name="cena" id="uptdate_cena" 
					value="<?= ($selected_usluga)?$selected_usluga[0]['cena']:'' ?>">
				</div>
				<div class="form-group">
					<h5 style="font-weight: bold;">Kategorija</h5>
					<p><?= 
					($selected_usluga)?
					ucfirst($kategorije[($selected_usluga[0]['kategorija']-1)]['naziv']):
					"Kategorija usluge"
					?></p>
					<input class="form-control" type="hidden" name="usluga_id" value="<?= $selected_usluga[0]['kategorija'] ?>">
				</div>
				<div class="form-group">
					<h5 style="font-weight: bold;">ID</h5>
					<p><?= 
					($selected_usluga)?
					$selected_usluga[0]['usluga_id']:
					"ID usluge"
					?></p>
					<input type="hidden" name="usluga_id" value="<?= $selected_usluga[0]['usluga_id'] ?>">
				</div>
				<?= ($selected_usluga)?
				'<input type="submit" class="btn btn-primary" value="Promeni">':'' ?>
				
			</form>
		</div>
		<div class="col-sm-6">
			
			<table class="table table-hover">
				<tr>
					<th>Usluga</th>
					<th>Cena</th>
				</tr>
					<?php if (isset($selected_usluga[0])): ?>
						<tr>
						<td><?= $selected_usluga[0]['naziv'] ?></td>
						<td><?= $selected_usluga[0]['cena'] ?> din.</td>
						</tr>
					<?php else: ?>
						<?php foreach ($usluge as $usluga): ?>
						<tr>
						<td><?= $usluga['naziv'] ?></td>
						<td><?= $usluga['cena'] ?> din.</td>
						</tr>
					<?php endforeach ?>
					<?php endif ?>
			</table>
		</div>
	</div>
</div>