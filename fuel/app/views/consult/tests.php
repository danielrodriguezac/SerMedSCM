<?php echo $basicinfo; ?>
<div class="page-header">
    <h3>Registro de ex&aacute;menes m&eacute;dicos</h3>
</div>
<div class="row-fluid">
    <form class="" action="<?php echo Uri::create('consult/tests'); ?>" method="post" autocomplete="off">
        <div class="span3">
            <h4>Registrar Exámen</h4>
            <hr>
            <?php if(isset($errors))
            {
                echo '<ul>';
                foreach ($errors as $key => $value) 
                {
                    echo "<li>$value</li>";
                }
                echo '</ul>';
            }
            ?>
            <div id="well_examenes" class="well">
                <label class="text-info" for="tipo">Tipo de Ex&aacute;men</label>
                <textarea rows="4" class="" name="tipo" id="tipo" placeholder="e.j. Hematologia Completa, Colesterol total, etc..." required autofocus></textarea>

                <label class="text-info" for="resultados">Resultados:</label>
                <textarea rows="4" class="" name="resultados" id="resultados" placeholder="Informacion mostrada en examenes." required></textarea>

                <label class="text-info" for="observaciones">Observaciones:</label>
                <textarea rows="4" class="" name="observaciones" id="observaciones" placeholder="" required></textarea>

                <label class="text-info" for="fecha">Fecha en que se realiz&oacute; el ex&aacute;men:</label>
<!--                <input class="span5" name="fecha" type="date" max="<?php echo $fecha_hoy; ?>" required />-->
                <input type="text" id="datepicker" name="fecha" readonly required>

                <label class="text-info" for="mas_examenes">&iquest;Reportar otro ex&aacute;men?</label>
                <label class="radio">
                    <input type="radio" name="mas_examenes" id="mas_examenes" value="1" required>Si
                </label>
                <label class="radio">
                    <input type="radio" name="mas_examenes" value="0" checked>No
                </label>
            </div>
            <button type="submit" class="btn">Enviar</button>
            <a class="btn btn-primary" href="<?php echo Uri::create('consult/stage3'); ?>">Continuar sin registrar</a>
        </div>
        <div class="span9">
            <?php echo $sessiontests; ?>
        </div>
    </form>
</div>