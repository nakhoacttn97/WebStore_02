<?php
namespace models;
class Db{
    protected $pdo;
    function __construct(){
        //Error
        $this->pdo = new \PDO('mysql:host=localhost;dbname=Store', 'root', '');
    }
    protected function save($sql, $params){
        $stmt = $this->pdo->prepare($sql);
        $ret = 0;
        if($stmt){
            if($stmt->execute($params)){
                $ret = $stmt->rowCount();
            }
            $stmt->closeCursor();
        }
        return $ret;
    }

    protected function getAll(string $sql, $params = NULL){
        $arr = NULL;
        if($params == NULL){
            $stmt = $this->pdo->query($sql);
            if($stmt){
                if($stmt->rowCount() > 0){
                    $arr = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                }
                $stmt->closeCursor();
                $stmt->closeCursor();
            }
        }else{
            $stmt = $this->pdo->prepare($sql);
            if($stmt){
                if( $stmt->execute($params) && $stmt->rowCount() > 0){
                    $arr = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                }
                $stmt->closeCursor();
            }
        }
        return $arr;
    }
    function __destruct(){
        unset($this->pdo);
    }
}