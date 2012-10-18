<div class="row-fluid">
    <div class="accordion" id="sessionconsultaccordion">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#sessionvars">
                    <h4>Datos registrados para esta consulta</h4>
                </a>
            </div>
            <div id="sessionvars" class="accordion-body collapse in">
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
                    Collapsible Group Item #2
                </a>
            </div>
            <div id="sessiontests" class="accordion-body collapse in">
                <div class="accordion-inner">
                    Anim pariatur cliche...
                </div>
            </div>
        </div>
    </div>
</div>



                    