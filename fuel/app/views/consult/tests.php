<?php echo $basicinfo; ?>
<!--<div class="page-header">
    <h3>Registro de ex&aacute;menes m&eacute;dicos</h3>
</div>-->
<div class="row-fluid">
    <form class="" action="<?php echo Uri::create('consult/tests'); ?>" method="post" autocomplete="off">
        <div class="span3">
            <h4>Registrar Exámen</h4>
            <hr>
            <?php if(isset($errors))
            {
                echo '<div class="alert alert-error alert-block"><button type="button" class="close" data-dismiss="alert">×</button><ul><h4>Error</h4>';
                foreach ($errors as $key => $value) 
                {
                    echo "<li>$value</li>";
                }
                echo '</ul></div>';
            }
            ?>
            <div id="well_examenes" class="row-fluid">
                <label class="text-info" for="tipo">Tipo de Ex&aacute;men</label>
                <textarea rows="4" class="span12" name="tipo" id="tipo" placeholder="e.j. Hematologia Completa, Colesterol total, etc..." required autofocus></textarea>

                <label class="text-info" for="resultados">Resultados:</label>
                <textarea rows="4" class="span12" name="resultados" id="resultados" placeholder="Informacion mostrada en examenes." required></textarea>

                <label class="text-info" for="observaciones">Observaciones:</label>
                <textarea rows="4" class="span12" name="observaciones" id="observaciones" placeholder="" required></textarea>

                <label class="text-info" for="datepicker">Fecha en que se realiz&oacute; el ex&aacute;men:</label>
<!--                <input class="span12" name="fecha" type="date" max="<?php echo $fecha_hoy; ?>" required />-->
                <input class="span12" type="text" id="datepicker" name="fecha" value="<?php echo $fecha_hoy; ?>" required readonly>
                <div class="span12">
                    <label class="text-info" for="mas_examenes">&iquest;Reportar otro ex&aacute;men?</label>
                    <label class="radio inline">
                        <input type="radio" name="mas_examenes" id="mas_examenes" value="1" required>Si
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="mas_examenes" value="0" checked>No
                    </label>
                    <hr>
                </div>
                <div class="span12">
                <button type="submit" class="btn">Registrar</button>
                <a class="btn btn-primary" href="<?php echo Uri::create('consult/stage3'); ?>">Continuar</a>
                </div>
            </div>
        </div>
    </form>
        <div class="span9">
            <?php if(isset($sessiondata)) echo $sessiondata; ?>
        </div>
</div>