<body>
	<?php $this->load->view('template/navbar') ?>
	<br>
	<br>
	<center>
		<h1>Tabla de actualizar</h1>
		<br>	
		<form action="<?= base_url('sabor_controller/actualizar') ?>" onsubmit="return validar_sabor()" method="POST">
			<?php foreach ($datos as $d) { ?>
				<input type="hidden" name="id" id="id" value="<?= $d->id_sabor ?>">
				<div>
					<label>Sabor</label>
					<input type="text" name="sabor" id="sabor" value="<?= $d->nombre_sabor ?>">
				</div>
				<div>
					<input type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
				</div>
			<?php } ?>
		</form>
	</center>