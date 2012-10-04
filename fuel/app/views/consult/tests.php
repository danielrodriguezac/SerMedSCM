<?php echo $basicinfo; ?>
<div class="page-header">
    <h2>Registro de ex&aacute;menes m&eacute;dicos</h2>
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
            <div id="well_examenes" class="well">
                <label class="text-info" for="tipo">Tipo de Ex&aacute;men:</label>
                <textarea rows="4" class="" name="tipo" id="tipo" placeholder="e.j. Hematologia Completa, Colesterol total, etc..." required autofocus></textarea>

                <label class="text-info" for="resultados">Resultados:</label>
                <textarea rows="4" class="" name="tipo" id="resultados" placeholder="Informacion mostrada en examenes." required></textarea>
                
                <label class="text-info" for="tipo">Observaciones:</label>
                <textarea rows="4" class="" name="tipo" id="observaciones" placeholder="" required></textarea>
                
                <label class="text-info" for="fecha">Fecha del Ex&aacute;men:</label>
                <input class="span5" name="fecha" type="date" max="<?php echo $fecha_hoy; ?>" required />
                
            </div>
            <button type="submit" class="btn">Enviar</button>
        </div>
        <div class="span9">
            
        </div>
    </form>
</div>