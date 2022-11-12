<?php
  include '../view/config.php';
  include '../models/Student.php';

  $id = filter_input(INPUT_POST, 'id');
  $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $password = filter_input(INPUT_POST, 'password');
  $status = filter_input(INPUT_POST, 'status');
  $phone = filter_input(INPUT_POST, 'phone');
  $course = filter_input(INPUT_POST, 'course');

  if($id && $nome && $email && $password) {
    $newStudent = new Student();
    $newStudent->setId($id);
    $newStudent->setName($nome);
    $newStudent->setEmail($email);
    $newStudent->setPassword($password);
    $newStudent->setStatus($status);
    $newStudent->setPhone($phone);
    $newStudent->setCourse($course);  
  }


  $sql = $pdo->prepare("UPDATE students SET name = :name, email = :email, password = :password, phone = :phone, course = :course, status = :status, updated_at = current_timestamp() WHERE id = :id");

  $sql->bindValue(":id", $newStudent->getId());
  $sql->bindValue(":name", $newStudent->getName());
  $sql->bindValue(":email", $newStudent->getEmail());
  $sql->bindValue(":status", $newStudent->getStatus());
  $sql->bindValue(":phone", $newStudent->getPhone());
  $sql->bindValue(":course", $newStudent->getCourse());
  $sql->bindValue(":password", $newStudent->getPassword());
  $sql->execute();

  header("Location: http://localhost/RA200346805/view/alunos.php");
  exit;


















  







