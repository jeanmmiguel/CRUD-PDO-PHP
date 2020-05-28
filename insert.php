<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'insert into produtos(descricao) values(?)';

$prepare = $pdo->prepare($sql);

$perapre->bindParam(1,$_GET['descricao']);
$preapre->execute();

echo $preapre->rowCount();