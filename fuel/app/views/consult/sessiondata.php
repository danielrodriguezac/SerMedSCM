<div class="row-fluid">
    <div class="accordion" id="sessiondataaccordion">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#sessionvars">
                    <h4>Datos registrados para esta consulta</h4>
                </a>
            </div>
            <div id="sessionvars" class="accordion-body collapse">
                <div class="accordion-inner">
                    <?php foreach ($sessionvars as $clave => $datos): ?>
                                    <button class="btn applypopover btn-block" data-title="<?php echo $datos['spantext'];?>" data-content="<?php echo $datos['value'];?>"><?php echo $datos['spantext'];?></button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#sessiontests">
                    <h4>Examenes registrados para esta consulta</h4>
                </a>
            </div>
            <div id="sessiontests" class="accordion-body collapse">
                <div class="accordion-inner">
                    <div class="row-fluid d_section visible-desktop">
                        <div class="span2"><span class="label label-info">Tipo</span></div>
                        <div class="span3"> <span class="label label-info">Resultados</span></div>
                        <div class="span3"><span class="label label-info">Observaciones</span></div>
                        <div class="span2"><span class="label label-info">Fecha</span></div>
                        <div class="span2">
                            <div class="pull-right">
                                <div class="span2"><span class="label label-info">Accion</span></div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($sessiontests)): foreach ($sessiontests as $clave => $test): ?>
                    <div class="row-fluid d_section">
                        <div class="span2"><span class="label label-info hidden-desktop">Tipo</span>  
                            <?php if(isset($test['tiposhort'])): ?>
                            <a href="#" class="applytooltip" title="<?php echo $test['tipo']; ?>"><?php echo $test['tiposhort']; ?></a>
                                <?php else: echo $test['tipo']; endif; ?>
                        </div>
                        <div class="span3"> <span class="label label-info hidden-desktop">Resultados</span>  
                            <?php if(isset($test['resultadosshort'])): ?>
                            <a href="#" class="applytooltip" data-html="false" title="<?php echo $test['resultados']; ?>"><?php echo $test['resultadosshort']; ?></a>
                                <?php else: echo $test['resultados']; endif; ?>
                        </div>
                        <div class="span3"><span class="label label-info hidden-desktop">Observaciones</span>  
                            <?php if(isset($test['observacionesshort'])): ?>
                            <a href="#" class="applytooltip" data-html="false" title="<?php echo $test['observaciones']; ?>"><?php echo $test['observacionesshort']; ?></a>
                                <?php else: echo $test['observaciones']; endif; ?>
                        </div>
                        <div class="span2">
                            <span class="label label-info hidden-desktop">Fecha</span>  <?php echo $test['fecha']; ?>
                        </div>
                        <div class="span2">
                            <div class="pull-right">
                            <a href="<?php  echo Uri::create('consult/session/array_examenes/'.$clave); ?>" class="btn btn-mini"><i class="icon-trash"></i>  Eliminar</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif;?>
                </div>
            </div>
        </div>
    </div>
</div>