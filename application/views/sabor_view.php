<body>
	<?php $this->load->view('template/navbar') ?>
	<br>
	<center>
		<h1>Tabla de sabores</h1>
		<br>
		<button class="btn btn-primary" data-toggle="modal" data-target="#agregar2">Agregar Sabor</button>
		<div class="container">
			<table class="table table-dark">
				<thead>
					<tr>
						<td>n</td>
						<td>Sabor</td>
					</tr>
				</thead>
				<tbody>
					<?php $n=1; foreach ($sabor as $c) { ?>
						<tr>
							<td><?php echo $n;$n++ ?></td>
							<td><?= $c->nombre_sabor ?></td>
							<td><a class="btn btn-danger btn-sm" href=" <?= base_url('sabor_controller/eliminar/'.$c->id_sabor) ?>" onclick="return confirm('Estas seguro que quieres borrar?')">Eliminar</a></td>
							<td><a class="btn btn-primary btn-sm" href="<?= base_url('sabor_controller/get_datos/'.$c->id_sabor) ?>">Actualizar</a></td>
						</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</center>
	<!-- Modal -->
	<div class="modal fade" id="agregar2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar Sabor</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<center>	
						<form action="<?= base_url('sabor_controller/guardar') ?>" onsubmit=" return validar_sabor()" method="POST">
							<div>
								<label>Sabor</label>
								<input type="text" name="sabor" id="sabor">
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