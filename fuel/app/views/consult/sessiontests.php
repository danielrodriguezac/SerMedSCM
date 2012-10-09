<h4>Examenes registrados para esta consulta</h4>
<hr>
<table class="table table-striped table-condensed table-hover table-bordered">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Resultados</th>
            <th>Observaciones</th>
            <th>Fecha</th>
            <th>Acci&oacute;n</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sessiontests as $clave => $test): ?>
        <tr>
            <td>
                <?php if(isset($test['tiposhort'])): ?>
                <a href="#" class="applytooltip" title="<?php echo $test['tipo']; ?>"><?php echo $test['tiposhort']; ?></a>
                    <?php else: echo $test['tipo']; endif; ?>
            </td>
            <td>
                <?php if(isset($test['resultadosshort'])): ?>
                <a href="#" class="applytooltip" title="<?php echo $test['resultados']; ?>"><?php echo $test['resultadosshort']; ?></a>
                    <?php else: echo $test['resultados']; endif; ?>
            </td>
            <td>
                <?php if(isset($test['observacionesshort'])): ?>
                <a href="#" class="applytooltip" title="<?php echo $test['observaciones']; ?>"><?php echo $test['observacionesshort']; ?></a>
                    <?php else: echo $test['observaciones']; endif; ?>
            </td>
            <td>
                <?php echo $test['fecha']; ?>
            </td>
            <td>
<!--                <div class="btn-group"></div>
                        <a href="#" class="btn btn-mini">1</a>
                        <a href="#" class="btn btn-mini">1</a>-->
                <a href="<?php  echo Uri::create('consult/session/array_examenes/'.$clave); ?>" class="btn btn-mini"><i class="icon-trash"></i>  Eliminar</a>
                
            </td>
                
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>