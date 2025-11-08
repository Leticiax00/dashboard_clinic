<h2>Consultas Agendadas</h2>

<?php if (session()->getFlashdata('sucesso')): ?>
    <p style="color: green;"><?= session()->getFlashdata('sucesso') ?></p>
<?php endif; ?>

<?php if (!empty($consultas)): ?>
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Paciente</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Motivo</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($consultas as $c): ?>
        <tr>
            <td><?= esc($c['nome_paciente']) ?></td>
            <td><?= date('d/m/Y', strtotime($c['data_consulta'])) ?></td>
            <td><?= esc($c['hora_consulta']) ?></td>
            <td><?= esc($c['motivo']) ?></td>
            <td><?= esc($c['status']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<p>Nenhuma consulta cadastrada ainda.</p>
<?php endif; ?>
