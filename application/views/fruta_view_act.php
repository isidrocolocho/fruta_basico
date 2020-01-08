 <body>
    <?php $this->load->view('template/navbar') ?>
    <center>
        <br>
        <h1>Actualizacion de datos</h1>
        <form action="<?= base_url('fruta_controller/actualizar') ?>" method="POST" onsubmit="return validar_vista()">
            <?php foreach ($datos as $d) { ?>
                <input type="hidden" name="id" id="id" value="<?= $d->id_fruta ?>">
                <div>
                    <label>Nombre de la fruta</label>
                    <input type="text" name="fruta" id="fruta" value="<?= $d->nombre_fruta ?>">	
                </div>
                <div>
                    <label>sabor de la fruta</label>
                    <select name="sabor" id="sabor">
                        <option value="">--selecciones fruta--</option>
                        <?php foreach($sabor as $s){?>
                            <option value="<?php echo $s->id_sabor ?>" <?php if ($s->id_sabor==$d->id_sabor) {
                                echo "selected";
                            } ?>><?php echo $s->nombre_sabor ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label>Color de la fruta</label>
                    <select name="color" id="color">
                        <option value="">--selecciones sabor--</option>
                        <?php foreach($color as $c){?>
                            <option value="<?php echo $c->id_color ?>" <?php if ($c->id_color==$d->id_color) {
                                echo "selected";
                            } ?>><?php echo $c->nombre_color ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="actualizar" value="actualizar">
                </div>
            <?php  } ?>
        </form>
    </center>