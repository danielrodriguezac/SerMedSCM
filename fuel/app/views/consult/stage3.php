<?php echo $basicinfo; ?>
<div class="row-fluid">
    <form class="" action="<?php echo Uri::create('consult/stage3'); ?>" method="post" autocomplete="off">
        <div class="span3">
            <h4>Registrar Diagn&oacute;stico</h4>
            <hr>
            <?php if(isset($errors))
            {
                echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><ul>';
                foreach ($errors as $key => $value) 
                {
                    echo "<li>$value</li>";
                }
                echo '</ul></div>';
            }
            ?>
            <div id="div_diagnostico" class="row-fluid">
                <label for="tipo">Diagnostico</label>
                <select id="diagnostico" class="span12" name="diagnostico" required autofocus>
                    <option value=""> --- </option>
                    <option value="0">
                        UÑERO
                    </option>
                    <option value="1">
                        Espirotlitis caustica
                    </option>
                    <option value="2">
                        Cochiflosis Gertrudica
                    </option>
                    <?php //foreach receiving an array of possible diagnostics ?>
                </select>
                <select id="sistema" class="span12" name="sistema" required>
                    <option value=""> --- </option>
                    <option value="0">
                        Talacha
                    </option>
                    <option value="1">
                        Pescuezo
                    </option>
                    <option value="2">
                        Patas
                    </option>
                    <?php //foreach receiving an array of possible systems ?>
                </select>
                <label class="text-info" for="resultados">Resultados:</label>
                <textarea rows="4" class="span12" name="resultados" id="resultados" placeholder="Informacion mostrada en examenes." required></textarea>

                <label class="text-info" for="observaciones">Observaciones:</label>
                <textarea rows="4" class="span12" name="observaciones" id="observaciones" placeholder="" required></textarea>

                <label class="text-info" for="fecha">Fecha en que se realiz&oacute; el ex&aacute;men:</label>
<!--                <input class="span12" name="fecha" type="date" max="<?php echo $fecha_hoy; ?>" required />-->
                <input class="span12" type="text" id="datepicker" name="fecha" readonly required>

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
            <?php if(isset($sessiontests)) echo $sessiontests; ?>
        </div>
    </form>
</div>