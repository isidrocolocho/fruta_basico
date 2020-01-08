<body>
	<?php $this->load->view('template/navbar') ?>
	<center>
		<br>
		<h1>Tabla de Frutas</h1>
		<br>
		<button type="button" class="btn btn-primary" style="color: black;" data-toggle="modal" data-target="#agregar" >Nuevo fruta
        </button>
        <div class="container">

            <table class="table table-dark ">
                <thead>
                    <tr>
                        <td>n</td>
                        <td>Fruta</td>
                        <td>Color</td>
                        <td>Sabor</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1; foreach($fruta as $f){?>
                        <tr>
                            <td><?php echo $n;$n++; ?></td>
                            <td><?= $f->nombre_fruta ?></td>
                            <td><?= $f->nombre_color ?></td>
                            <td><?= $f->nombre_sabor ?></td>
                            <td><a class="btn btn-danger btn-sm" href="<?= base_url('fruta_controller/eliminar/'.$f->id_fruta) ?>" onclick="return confirm('Estas seguro que deseas eliminar?')" >Eliminar</a></td>
                            <td><a class="btn btn-success btn-sm" href="<?= base_url('fruta_controller/get_datos/'.$f->id_fruta) ?>">Actualizar</a></td>
                        </tr>	
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </center>
    <!-- Modal -->
    <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">agregar fruta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <form action="<?= base_url('fruta_controller/guardar') ?>" method="POST" onsubmit="return validar_vista()">
                            <div>
                                <label>Nombre de la fruta</label>
                                <input type="text" name="fruta" id="fruta">	
                            </div>
                            <div>
                                <label>sabor de la fruta</label>
                                <select name="sabor" id="sabor">
                                    <option value="">--selecciones fruta--</option>
                                    <?php foreach($sabor as $s){?>
                                        <option value="<?php echo $s->id_sabor ?>"><?php echo $s->nombre_sabor ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div>
                                <label>Color de la fruta</label>
                                <select name="color" id="color">
                                    <option value="">--selecciones sabor--</option>
                                    <?php foreach($color as $c){?>
                                        <option value="<?php echo $c->id_color ?>"><?php echo $c->nombre_color ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
