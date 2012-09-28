<div class="page-header">
    <h1><?php echo $nombres . ' ' . $apellidos ?></h1>
</div>
<div class="row-fluid">
    <div class="span8">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Datos Personales</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p><span class="label label-info">C.I.:</span>  <?php echo $ci ?></p>
                    </td>
                    <td>
                        <p><span class="label label-info">Nacionalidad:</span>  <?php echo $nacionalidad; ?></p>
                    </td>
                    <td>
                        <p><span class="label label-info">Estado Civil:</span>  <?php echo $estado_civil; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><span class="label label-info">Fecha de Nacimiento:</span>  <?php echo $fecha_nacimiento; ?><b>(<?php echo $edad; ?>)</b></p>
                    </td>
                    <td>
                        <p><span class="label label-info">Fecha de Registro:</span>  <?php echo $fecha_registro; ?><b>(<?php echo $tiempo_en_empresa; ?>)</b></p>
                    </td>
                    <td>
                        <p><span class="label">Pre-Empleo</span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <p><span class="label label-info">Direccion:</span>  Turmero, Urb. La Mantuana, calle Don Humberto, Ca2efref2efrge2efref2efrges</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="button" class="btn btn-info"><i class="icon-user"></i>  Ver informacion detallada</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="span3 offset1">
        <?php echo Asset::img('retrato.png', array('class' => 'img-polaroid')); ?>
    </div>
</div>