<div class="row-fluid">
    <div class="accordion" id="basicinfoaccordion">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#basicinfoaccordion" href="#collapseOne">
                    <h1><?php echo $nombres . ' ' . $apellidos ?>  <span class="label<?php echo $edctagclass ?>"><?php echo $estado_contratacion ?></span></h1>
                </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse">
                <div class="accordion-inner">
                    <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th colspan="3" class="text-info">Datos Personales</th>
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
        <!--                    <td rowspan="5">
                                <?php //echo Asset::img('retrato.png', array('class' => 'img-polaroid')); ?>
                            </td>-->
                        </tr>
                        <tr>
                            <td>
                                <p><span class="label label-info">Fecha de Nacimiento:</span>  <?php echo $fecha_nacimiento; ?><b>(<?php echo $edad; ?>)</b></p>
                            </td>
                            <td>
                                <p><span class="label label-info">Fecha de Registro:</span>  <?php echo $fecha_registro; ?><b>(<?php echo $tiempo_en_empresa; ?>)remember to fix time_ago method</b></p>
                            </td>
                            <td>
                                <p><span class="label label-info">Genero:</span>  <?php echo $genero; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p><span class="label label-info">Lugar de Nacimiento:</span>  <?php echo $lugar_nacimiento; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p><span class="label label-info">Direccion:</span>  <?php echo $direccion; ?></p>
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
            </div>
        </div>

    <!--    <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                    Collapsible Group Item #2
                </a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse in">
                <div class="accordion-inner">
                    Anim pariatur cliche...
                </div>
            </div>
        </div>-->
    </div>
</div>