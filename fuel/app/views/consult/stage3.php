<?php echo $basicinfo; ?>
<div class="row-fluid">
    <form class="" action="<?php echo Uri::create('consult/stage3'); ?>" method="post" autocomplete="off">
        <div class="span3">
            <h4>Diagn&oacute;stico</h4>
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
                <label for="diagnostico">Diagnostico</label>
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
                <label for="sistema">Sistema</label>
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
                <label for="enfermedad_ocupacional">&iquest;El paciente muestra s&iacute;ntomas de una enfermedad ocupacional?</label>
                <select id="enfermedad_ocupacional" class="span12" name="enfermedad_ocupacional" required>
                    <option value=""> --- </option>
                    <option value="1">
                        Si
                    </option>
                    <option value="0">
                        No
                    </option>
                </select>
                
                <div id="well_accidente_trabajo" class="span12 well well_large">
                    <label for="accidente_trabajo">&iquest;Es consecuencia de un Accidente Laboral?</label>
                    <label class="radio inline">
                        <input type="radio" name="accidente_trabajo" id="accidente_trabajo" value="1" required>Si
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="accidente_trabajo" value="0" checked>No
                    </label>

                    <div id="well_accidente_trabajo_1">
                        <label class="" for="at_tipo">&iquest;De que tipo?</label>
                        <select id="at_tipo" class="span12" name="at_tipo" required disabled>
                            <option value=""> --- </option>
                            <option value="at/st">
                                AT/Sin p&eacute;rdida de tiempo
                            </option>
                            <option value="at/ct">
                                AT/Con p&eacute;rdida de tiempo
                            </option>
                            <option value="cura">
                                C&uacute;ra o tratamiento relacionado
                            </option>
                        </select>
                        <label class="" for="ac_descripcion">Describa brevemente el accidente:</label>
                        <textarea rows="4" class="span12" name="ac_descripcion" id="ac_descripcion" placeholder="Sea breve.." required disabled></textarea>
                    </div>
                </div>
                <div class="span12">
                    <label class="" for="evolucion">Evoluci&oacute;n:</label>
                    <textarea rows="4" class="span12" name="evolucion" id="evolucion" placeholder="Progreso del paciente e informacion de importancia M&eacute;dica" required></textarea>
                    <button type="submit" class="btn">Guardar</button>
                </div>
            </div>
        </div>
        <div class="span9">
            <?php if(isset($sessiontests)) echo $sessiontests; ?>
        </div>
    </form>
</div>