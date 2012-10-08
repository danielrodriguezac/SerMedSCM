<h4>Examenes registrados para esta consulta</h4>
<hr>
<table class="table table-striped table-condensed table-hover table-bordered">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Resultados</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sessiontests as $test): ?>
        <tr>
            <td>
                <p><?php echo $test['tipo'] ?></p>
            </td>
            <td>
                <p><?php echo $test['resultados']; ?></p>
            </td>
            <td>
                <p><?php echo $test['observaciones']; ?></p>
            </td>
            <td>
                <p><?php echo $test['fecha']; ?></p>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>