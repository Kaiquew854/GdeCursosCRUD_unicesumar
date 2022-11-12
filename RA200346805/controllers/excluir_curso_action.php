<?php
  include '../view/config.php';

  $id = $_GET['id'];

  $sql = $pdo->prepare('DELETE FROM courses WHERE id = :id');
  $sql->bindValue(':id', $id);
  $sql->execute();

  header("Location: http://localhost/RA200346805/view/cursos.php");
  exit;


  