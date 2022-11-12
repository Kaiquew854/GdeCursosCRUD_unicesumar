<?php
include_once './header.php';
include_once './config.php';
include_once '../models/Student.php';


$sql = $pdo->query("SELECT *FROM Students");

$array = [];
if ($sql->rowCount() > 0) {

    $data = $sql->fetchAll();

    foreach ($data as $row) {
        $student = new Student();
        $student->setId($row['id']);
        $student->setName($row['name']);
        $student->setEmail($row['email']);
        $student->setPassword($row['password']);
        $student->setPhone($row['phone']);
        $student->setCourse($row['course']);
        $student->setStatus($row['status']);
        $student->setCreatedAt($row['created_at']);
        $student->setUpdatedAt($row['updated_at']);

        $array[] = $student;
    }
}


?>

<main class="d-flex container align-items-center" style="height: calc(100vh - 56px); ">

    <div class="div" style="width: 100%;">
        <div class="row">
            <a type="a" class="btn btn-primary" href="./adicionar_aluno.php">Adicionar aluno</a>
        </div>

        <div class="row mt-3">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($array as $student) : ?>
                        <tr>
                            <th scope="row" class="align-middle"><?= $student->getId(); ?></th>
                            <td class="align-middle"><?= $student->getName(); ?></td>
                            <td class="align-middle"><?php if ($student->getStatus() == 1) {
                                                            echo 'Ativo';
                                                        } else {
                                                            echo 'Inativo';
                                                        } ?></td>
                            <td style="width: 25%">
                                <a type="button" class="btn btn-primary" href="./visualizar_aluno.php?id=<?= $student->getId(); ?>">Visualizar</a>
                                <a type="button" class="btn btn-secondary" href="./editar_aluno.php?id=<?= $student->getId(); ?>">Editar</a>
                                <a type="button" class="btn btn-danger" href="../controllers/excluir_aluno_action.php?id=<?= $student->getId(); ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</main>
</body>

</html>