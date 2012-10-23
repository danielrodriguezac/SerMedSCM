<?php echo $basicinfo; //print_r(Session::get());?>
<div class="row-fluid">
        <div class="span12">
            <?php if(isset($sessiondata)) echo $sessiondata; ?>
        </div>
</div>
<div class="row-fluid">
    <form class="" action="<?php echo Uri::create('consult/stage4'); ?>" method="post" autocomplete="off">
        <div class="span12">
            <h3>&Aacute;rea de Post-Consulta</h3>
            <hr>
            <?php
                $errors = Session::get_flash('errors', null);
                if(isset($errors))
                {
                    echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><ul>';
                    foreach ($errors as $key => $value) 
                    {
                        echo "<li>$value</li>";
                    }
                    echo '</ul></div>';
                }
            ?>
            <div class="row-fluid">
                <div class="span6">
<!--                    TRATAMIENTO MEDICO-->
                    <div id="well_tratamiento_medico" class="d_section d_section-large">
                        <h4>Tratamiento M&eacute;dico<button id="button_tratamiento_medico" type="button" class="btn btn-danger pull-right" autofocus><i class="icon-remove-sign"></i></button></h4>
                        <input type="hidden" name="tratamiento_medico" value="0">
                        <div id="well_tratamiento_medico_inner" class="row-fluid">
                            <div class="span6">
                                <label class="" for="tm_farmacos">F&aacute;rmacos &frasl; Ter&aacute;pia</label>
                                <textarea rows="4" class="span12" name="tm_farmacos" id="tm_farmacos" placeholder="Medicamentos, terapia, etc. (Uno por linea)" disabled required></textarea>
                            </div>
                            <div class="span6">
                                <label class="" for="tm_">D&oacute;sificaci&oacute;n / Regularidad</label>
                                <textarea rows="4" class="span12" name="tm_dosificacion" id="tm_dosificacion" placeholder="Cada cuanto tiempo debe tomar el tratamiento. (Uno por linea)" disabled required></textarea>
                            </div>
                        </div>
                    </div>
<!--                    REFERENCIA MEDICA-->
                    <div id="well_referencia_medica" class="d_section d_section-large">
                        <h4>Referencia M&eacute;dica<button id="button_referencia_medica" type="button" class="btn btn-danger pull-right"><i class="icon-remove-sign"></i></button></h4>
                        <input type="hidden" name="referencia_medica" value="0">
                        <div id="well_referencia_medica_inner" class="row-fluid">
                            <label class="" for="rm_a_consulta_de">A la consulta de: </label>
                            <input id="rm_a_consulta_de" class="span5" name ="rm_a_consulta_de" maxlength="" placeholder="" disabled required>

                            <label class="" for="rm_resumen_clinico">Resumen Clinico</label>
                            <textarea rows="4" class="span7" name="rm_resumen_clinico" id="rm_resumen_clinico" placeholder="" disabled required></textarea>

                            <label class="" for="rm_observaciones">Observaciones</label>
                            <textarea rows="4" class="span7" name="rm_observacion" id="rm_observacion" placeholder="" disabled required></textarea>
                        </div>
                    </div>
<!--                    REPOSO-->
                    <div id="well_reposo" class="d_section d_section-large">
                        <h4>Reposo<button id="button_reposo" type="button" class="btn btn-danger pull-right"><i class="icon-remove-sign"></i></button></h4>
                        <input type="hidden" name="reposo" value="0">
                        <div id="well_reposo_inner" class="row-fluid">
                            <label class="" for="r_tipo">Tipo de reposo</label>
                            <select id="r_tipo" class="span6" name="r_tipo" required disabled>
                                <option value=""> --- </option>
                                <option value="interno">
                                    Interno
                                </option>
                                <option value="ivss">
                                    I.V.S.S.
                                </option>
                            </select>
                            
                            <label class="" for="r_cargo">Cargo</label>
                            <input id="r_cargo" class="span5" name ="r_cargo" maxlength="" placeholder="" disabled required>
                            
                            
                            <label class="" for="r_turno">Turno</label>
                            <input id="r_turno" class="span5" name ="r_turno" maxlength="" placeholder="" disabled required>
                            
                            
                            <label class="" for="r_fecha_inicio">Fecha de inicio:</label>
                            <input id="r_fecha_inicio" class="span5" name ="r_fecha_inicio" maxlength="" placeholder="" disabled required>
                            
                            <label class="" for="rm_resumen_clinico">Resumen Clinico</label>
                            <textarea rows="4" class="span7" name="rm_resumen_clinico" id="rm_resumen_clinico" placeholder="" disabled required></textarea>

                            <label class="" for="rm_observaciones">Observaciones</label>
                            <textarea rows="4" class="span7" name="rm_observacion" id="rm_observacion" placeholder="" disabled required></textarea>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <h4>fasdasd dlfkds f kjsdnf ksdnf ksdf</h4>
                </div>
            </div>
            <button type="submit" class="btn">Guardar</button>
        </div>
    </form>
</div>