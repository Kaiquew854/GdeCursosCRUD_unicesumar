<?php

session_start();


$ra='RA200346805';
$senha='kaique';

$inputRa=filter_input(INPUT_POST, 'number-ra');
$inputPassword=filter_input(INPUT_POST, 'password'); 

var_dump($ra,$password);

if($inputRa && $inputPassword){
    if($inputRa==$ra && $inputPassword==$senha){
        $_SESSION['ra']=$inputRa;
        header("location: http://localhost/RA200346805/view/alunos.php");
        exit;
    }
}
header("location: http://localhost/RA200346805");
exit;
?>