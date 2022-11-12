<?php
  include '../view/config.php';
  include '../models/Courses.php';

  $id = filter_input(INPUT_POST, 'id');
  $nome = filter_input(INPUT_POST, 'name');
  $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
  $status = filter_input(INPUT_POST, 'status');
  $dateStart = filter_input(INPUT_POST, 'dateStart');
  $dateFinish = filter_input(INPUT_POST, 'dateFinish');
  
var_dump($id,$nome);
  if($nome && $description) {

    $newCourse = new Courses();
    $newCourse->setId($id);
    $newCourse->setNameCourse($nome);
    $newCourse->setDescription($description);
    $newCourse->setDateStart($dateStart);
    $newCourse->setDateFinish($dateFinish);
    $newCourse->setStatus($status);

  }

  $sql = $pdo->prepare("UPDATE Courses SET nameCourse = :nameCourse, description = :description, dateStart = :dateStart, dateFinish = :dateFinish, status = :status,  updated_at = current_timestamp() WHERE id = :id");

  $sql->bindValue(":id", $newCourse->getId());
  $sql->bindValue(":nameCourse", $newCourse->getNameCourse());
  $sql->bindValue(":description", $newCourse->getDescription());
  $sql->bindValue(":status", $newCourse->getStatus());
  $sql->bindValue(":dateStart", date("Y-m-d", strtotime($newCourse->getDateStart())));
  $sql->bindValue(":dateFinish", date("Y-m-d", strtotime($newCourse->getDateFinish())));
  $sql->bindValue(":status", $newCourse->getStatus());
  
  $sql->execute();


    header("Location: http://localhost/RA200346805/view/cursos.php");
    exit;

