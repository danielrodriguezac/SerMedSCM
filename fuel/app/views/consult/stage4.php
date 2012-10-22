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
                if(!isset($errors))
                {
                    $errors = Session::get('errors', null);
                    Session::delete('errors');
                }
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
                    <h4>Tratamiento M&eacute;dico  <button id="button_tratamiento_medico" type="button" class="btn btn-danger" autofocus><i class="icon-remove-sign"></i></button></h4>
                    <input type="hidden" name="tratamiento_medico" value="0">
                    <div id="well_tratamiento_medico" class="row-fluid">
                        <div class="span6">
                            <label class="" for="tm_farmacos">F&aacute;rmacos &frasl; Ter&aacute;pia</label>
                            <textarea rows="4" class="span12" name="tm_farmacos" id="tm_farmacos" placeholder="Medicamentos, terapia, etc. (Uno por linea)" disabled required></textarea>
                        </div>
                        <div class="span6">
                            <label class="" for="tm_">D&oacute;sificaci&oacute;n / Regularidad</label>
                            <textarea rows="4" class="span12" name="tm_dosificacion" id="tm_dosificacion" placeholder="Cada cuanto tiempo debe tomar el tratamiento. (Uno por linea)" disabled required></textarea>
                        </div>
                    </div>
<!--                    REFERENCIA MEDICA-->
                    <h4>Referencia M&eacute;dica  <button id="button_referencia_medica" type="button" class="btn btn-danger" autofocus><i class="icon-remove-sign"></i></button></h4>
                    <input type="hidden" name="referencia_medica" value="0">
                    <div id="well_referencia_medica" class="row-fluid">
                        <div class="span6">
                            <label class="" for="rm_a_consulta_de">A la consulta de: </label>
                            <input id="rm_a_consulta_de" class="" maxlength="" placeholder="" disabled required>
                            <textarea rows="4" class="span12" name="tm_farmacos" id="tm_farmacos" placeholder="Medicamentos, terapia, etc. (Uno por linea)" disabled required></textarea>
                        </div>
                        <div class="span6">
                            <label class="" for="tm_">D&oacute;sificaci&oacute;n / Regularidad</label>
                            <textarea rows="4" class="span12" name="tm_dosificacion" id="tm_dosificacion" placeholder="Cada cuanto tiempo debe tomar el tratamiento. (Uno por linea)" disabled required></textarea>
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

The following common input element content attributes, IDL attributes, and methods apply to the element: 
autocomplete, list, maxlength, pattern, placeholder, readonly, required, and size content attributes;
list, selectedOption, selectionStart, selectionEnd, and value IDL attributes;
select() and setSelectionRange() methods.