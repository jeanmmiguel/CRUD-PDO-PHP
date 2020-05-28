<?php

declare(strict_types=1);

class Produto{


    /**
     * @var PDO
     */
    private $conexao;

    public function __construct(){

        try{

             $this->conexao = new PDO('mysql:host=localhost;dbname=produtos','root','');
        } catch(Exception $e){
            echo $e->getMEssage();
            die();
        }


    }

    public function list() : array{
        $sql = 'select * from produtos';

        $produtos = [];


        foreach($this->conexao->query($sql) as $key => $value){
            array_push($produtos,$value);

            
        
        }

        return $produtos;

        
    }

    public function insert(stirng $descricao) : int{
       
        $sql = 'insert into produtos(descricao) values(?)';

        $prepare = $this->conexao->prepare($sql);

        $perapre->bindParam(1,$descricao);
        $preapre->execute();

        return $preapre->rowCount();


    }

    public function update(string $descricao, int $id) : int{
        $sql = 'insert into produtos(descricao) values(?)';

        $prepare = $this->conexao->prepare($sql);

        $perapre->bindParam(1,$descricao);
        $perapre->bindParam(2,$id);
        $preapre->execute();

        return $preapre->rowCount();
        


    }

    public function delete(int $id) : int{
        $sql = 'delete from produtos where id = ?';

        $prepare = $pdo->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        echo $prepare->rowCount();



        
    }

}