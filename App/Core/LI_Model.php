<?php
          
          
       
        namespace App\core;
        use \PDO;
        use App\config\AtributesCreate as atributesCreate;
        use App\config\AtributesUpdate as atributesUpdate;
        use App\core\interfaces\iModel;
        use App\core\Banco;
        
          class LI_Model extends Banco implements iModel{
            private $db;
            function __construct(){
                $database = new Banco;
                $this->db = $database;

                $this->attr = new atributesCreate;
                $this->attrUpdate = new atributesUpdate;
            }

                public function create($table,$atributes){
                    
                    $fields = $this->attr->createFields($atributes);
                    $values = $this->attr->createValues($atributes);
                    $bindParameters = $this->attr->bindCreateParameters($atributes);

                    $query = "INSERT INTO $table ($fields) VALUES($values) ";
                    $stmt = $this->db->connect()->prepare($query);
                    try {
                        $stmt->execute($bindParameters);
                        return $this->db->conn->lastInsertId();
                    } catch (PDOException $e) {
                        dump($e->getMessage());
                    }

                   
                }
                public function read($table){
                    $query = "SELECT * FROM $table";
                    $stmt = $this->db->connect()->prepare($query);
                    try {
                        $stmt->execute();
                        return $stmt->fetchAll();
                    } catch (PDOException $e) {
                        dump($e->getMessage());
                    }
                }
                public function update($id, $atributes){
                    $this->attrUpdate->combineUpdateFields($atributes);
                    $query =  "UPDATE  SET ";
                }
                public function delete($table, $name, $value){
                     $query = "DELETE FROM $table WHERE $name = :$name";
                     $stmt = $this->db->prepare($query);
                     
                    try {
                        
                        $stmt->bindParam(":$name", $value);
                        $stmt->execute();
                        return $stmt->rowCount();

                    } catch (PDOException $e) {
                        dump($e->getMessage());
                    }

                }
                public function funBy($table, $name,$value){
                    header('Content-Type: text/html; charset=utf-8'); 
                     $query = "SELECT * FROM $table WHERE $name = $value";
                     $stmt = $this->db->connect()->prepare($query);
                     
                    try {
                        $stmt->execute();
                        return $stmt->fetch();
                        
                    } catch (PDOException $e) {
                        dump($e->getMessage());
                    }

                }
                  
          }
        