<?php

  include_once './config.php';
  include_once '../models/Courses.php';


  $id = $_GET['id'];


  $sql = $pdo->query("SELECT * FROM Courses WHERE id =".$id);
  $course=[];

  if($sql->rowCount() > 0) {
    $data = $sql->fetch();

    $course1 = new Courses();
    $course1->setId($data['id']);
    $course1->setNameCourse($data['nameCourse']);
    $course1->setDescription($data['description']);
    $course1->setDateStart($data['dateStart']);
    $course1->setDateFinish($data['dateFinish']);
    $course1->setStatus($data['status']);
    $course1->setCreatedAt($data['created_at']);
    $course1->setUpdatedAt($data['updated_at']);

    $course[] = $course1;
  }

?>


<?php include_once './header.php'; ?>

    <main class="d-flex container align-items-center" style="height: calc(100vh - 56px); ">
        <div class="container-fluid border rounded p-5 " style="box-shadow: 1px 2px 6px 4px rgba(0,0,0,0.1)">
        <a type="button" href="./cursos.php" class="btn btn-primary">Voltar</a>
            <div class="row mt-5">
                <div class="col-md-3">
                    <p class="fw-bold">ID:</p>
                </div>
                <div class="col-md-6">
                    <p class="fw-bold">Nome:</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold">Status:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p><?=$course[0]->getId();?></p>
                </div>
                <div class="col-md-6">
                <p><?=$course[0]->getNameCourse();?></p>
                </div>
                <div class="col-md-3">
                    <p><?php if($course[0]->getStatus()==1){echo "Ativo";} else echo"Inativo";?></p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-3">
                    <p class="fw-bold">Data de inicio:</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold">Data de término: </p>
                </div>
                <div class="col-md-5">
                    <p class="fw-bold">Descrição:</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                <p><?=$course[0]->getDateStart();?></p>
                </div>
                <div class="col-md-3">
               
                <p><?=$course[0]->getDateFinish();?></p>
                </div>
                <div class="col-md-6">
                <?=$course[0]->getDescription();?>
                
                </div>
            </div>

            
        </div>

    </main>
</body>

</html>