<?php echo $basicinfo; ?>
<div class="page-header">
    <h2>Registro de ex&aacute;menes m&eacute;dicos<</h2>
</div>
<div class="row-fluid">
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
    <form class="" action="<?php echo Uri::create('consult/tests'); ?>" method="post" autocomplete="off">
        <div class="span3">
            <div id="well_consulta_especial" class="well">
            <label class="text-info" for="departamento">Departamento</label>
            <select id="departamento" name="departamento" required autofocus>
                <option value=""> --- </option>
                <optgroup label="Planta">
                    <option value="1">
                        Flexo 1
                    </option>
                </optgroup>
                <optgroup label="Administracion">
                    <option value="2">
                        Compras
                    </option>
                </optgroup>
            </select>

            <label class="text-info" for="motivo_consulta">Motivo de la consulta:</label>
            <textarea rows="4" class="" name="motivo_consulta" id="motivo_consulta" placeholder="ej. Dolor, accidente, etc..." required></textarea>

            <label class="text-info" for="tipo_consulta">Tipo de consulta:</label>
            <select id="tipo_consulta" name="tipo_consulta" required>
                <option value=""> --- </option>
                <optgroup label="Si es la primera consulta">
                    <option value="1">
                        Prima
                    </option>
                </optgroup>
                <optgroup label="Si el paciente ya ha venido varias veces">
                    <option value="2">
                        Sucesiva
                    </option>
                </optgroup>
            </select>
            </div>
            <div id="well_consulta_especial" class="well">
                <label class="text-info" for="consulta_especial">¿Es una Consulta especial?</label>
                <label class="radio">
                    <input type="radio" name="consulta_especial" id="consulta_especial" value="1" required>Si
                </label>
                <label class="radio">
                    <input type="radio" name="consulta_especial" value="0" checked>No
                </label>
                
                <div id="well_consulta_especial_1">
                    <label class="text-info" for="ce_tipo">De que tipo?</label>
                    <select id="ce_tipo" name="ce_tipo" required disabled>
                        <option value=""> --- </option>
                        <option value="0">
                            Pre-empleo
                        </option>
                        <option value="1">
                            Pre-vacacional
                        </option>
                        <option value="2">
                            Post-vacacional
                        </option>
                        <option value="3">
                            Egreso
                        </option>
                    </select>

                    <label class="text-info" for="ce_limitacion">Existe alguna limitacion?</label>
                    <label class="radio">
                        <input type="radio" name="ce_limitacion" id="ce_limitacion" value="1" required disabled>Si
                    </label>
                    <label class="radio">
                        <input type="radio" name="ce_limitacion" value="0" checked>No
                    </label>
                </div>
                <div id="well_consulta_especial_2">
                <label class="text-info" for="ce_descripcion">Describa brevemente la limitacion:</label>
                <textarea rows="4" class="" name="ce_descripcion" id="ce_descripcion" placeholder="" disabled required></textarea>
                </div>
            </div>
            <div id="well_examenes" class="well">
                <label class="text-info" for="examenes">Reportar ex&aacute;menes?</label>
                <label class="radio">
                    <input type="radio" name="examenes" id="examenes" value="1" required>Si
                </label>
                <label class="radio">
                    <input type="radio" name="examenes" value="0" checked>No
                </label>
            </div>
            <button type="submit" class="btn">Enviar</button>
        </div>
        <div class="span9">
            
        </div>
    </form>
</div>