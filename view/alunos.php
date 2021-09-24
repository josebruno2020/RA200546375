<?php
require('./functions/logged.php');
require('./Models/Student.php');
$aluno = new Student();
$alunos = $aluno->getStudents();
$alunos = json_decode($alunos);
logged();

?>


<h1>Alunos do Sistema</h1>
<div class="content">
    <a href="?p=novo-aluno" class="btn btn-primary">Adicionar Novo Aluno</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach($alunos as $a): ?>
            <tr>
                <td><?= $a->id; ?></td>
                <td><?= $a->name; ?></td>
                <td><?= $a->email; ?></td>
                <td>
                    <a href="#" class="btn btn-sm btn-info">Visualizar</a>
                    <a href="#" class="btn btn-sm btn-warning">Editar</a>
                    <a href="#" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>