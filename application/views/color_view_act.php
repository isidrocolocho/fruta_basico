<body>
	<?php $this->load->view('template/navbar') ?>
	<br>
	<br>
	<center>
		<h1>Tabla de actualizar</h1>
		<br>	
		<form action="<?= base_url('color_controller/actualizar') ?>" onsubmit="return validar_Color()" method="POST">
			<?php foreach ($datos as $d) { ?>
				<input type="hidden" name="id" id="id" value="<?= $d->id_color ?>">
				<div>
					<label>Color</label>
					<input type="text" name="color" id="color" value="<?= $d->nombre_color ?>">
				</div>
				<div>
					<input type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
				</div>
			<?php } ?>
		</form>
	</center>