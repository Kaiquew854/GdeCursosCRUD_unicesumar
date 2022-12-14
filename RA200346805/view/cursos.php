<?php

include_once '../view/config.php';

include_once '../models/Courses.php';
include_once './header.php';

$sql = $pdo->query("SELECT * FROM courses");

$array = [];

if ($sql->rowCount() > 0) {

    $data = $sql->fetchAll();

    foreach ($data as $row) {
        $courses = new Courses();
        $courses->setId($row['id']);
        $courses->setNameCourse($row['nameCourse']);
        $courses->setDescription($row['description']);
        $courses->setDateStart($row['dateStart']);
        $courses->setDateFinish($row['dateFinish']);
        $courses->setStatus($row['status']);
        $courses->setCreatedAt($row['created_at']);
        $courses->setUpdatedAt($row['updated_at']);

        $array[] = $courses;
    }
}

?>




<main class="d-flex container align-items-center" style="height: calc(100vh - 56px); ">

    <div class="div" style="width: 100%;">
        <div class="row">
            <a type="a" class="btn btn-primary" href="./adicionar_curso.php">Adicionar curso</a>
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
                    <?php foreach ($array as $courses) : ?>
                        <tr>
                            <th scope="row" class="align-middle"><?= $courses->getId(); ?></th>
                            <td class="align-middle"><?= $courses->getNameCourse(); ?></td>
                            <td class="align-middle"><?php if ($courses->getStatus() == 1) {
                                                            echo 'Ativo';
                                                        } else {
                                                            echo 'Inativo';
                                                        } ?></td>
                            <td style="width: 25%">
                                <a type="button" class="btn btn-primary" href="./visualizar_curso.php?id=<?= $courses->getId();?>">Visualizar</a>
                                <a type="button" class="btn btn-secondary" href="./editar_curso.php?id=<?= $courses->getId();?>">Editar</a>
                                <a type="button" class="btn btn-danger" href="../controllers//excluir_curso_action.php?id=<?= $courses->getId();?>">Excluir</a>
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