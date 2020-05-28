<?php

require 'Produto.php';

$produto = new Produto();


switch ($_GET['operacao']){


    case 'list':

    $produto ->list();
    echo '<h3> Produtos:  </h3>';

    foreach($produto->list() as $value){
    echo 'Id: ' . $value['id'] . '<br> Descricao: ' .  $value['descricao'] . '<hr>';
    
    }


    break;


    case 'insert':

       $status =  $produto ->insert('Produto Teste jean 01');

       if(!$status){
           echo " nao foi possivel executar";
           return false;
       }
       echo "registro inserido com sucesso";



    break;


    case 'update':
       
        $status =  $produto ->update('Produto Alterado // jean 01', 1 );

       if(!$status){
           echo " nao foi possivel executar";
           return false;
       }
       echo "registro atualizado com sucesso";

    break;


    case 'delete':
        $status =  $produto->delete(1);


       if(!$status){
        echo " nao foi possivel executar";
        return false;
    }
    echo "registro removido com sucesso";


    break;




}