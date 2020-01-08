<body>
	<?php $this->load->view('template/navbar') ?>
	<br>
	<center>
		<h1>Tabla de colores</h1>
		<br>
		<button class="btn btn-primary" data-toggle="modal" data-target="#agregar1">Agregar Color</button>
		<div class="container">
			<table class="table table-dark">
				<thead>
					<tr>
						<td>n</td>
						<td>Color</td>
					</tr>
				</thead>
				<tbody>
					<?php $n=1; foreach ($color as $c) { ?>
						<tr>
							<td><?php echo $n;$n++ ?></td>
							<td><?= $c->nombre_color ?></td>
							<td><a class="btn btn-danger btn-sm" href=" <?= base_url('color_controller/eliminar/'.$c->id_color) ?>" onclick="return confirm('Estas seguro que quieres borrar?')">Eliminar</a></td>
							<td><a class="btn btn-primary btn-sm" href="<?= base_url('color_controller/get_datos/'.$c->id_color) ?>">Actualizar</a></td>
						</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</center>
	<!-- Modal -->
	<div class="modal fade" id="agregar1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar Color</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<center>	
						<form action="<?= base_url('color_controller/guardar') ?>" onsubmit="return validar_Color()" method="POST">
							<div>
								<label>Color</label>
								<input type="text" name="color" id="color">
							</div>
							<div>
								<input type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
							</div>
						</form>
					</div>
				</center>
			</div>
		</div>
	</div>