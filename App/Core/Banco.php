<?php
       
       namespace App\core;
       use \PDO;
         class Banco{
            const INIFILE = "App/config/database.ini";
            private  $iniData;
            public $conn;
            protected function connect() {
           
                if (is_null($this->conn)):

                   try {
                    $this->iniData = parse_ini_file(self::INIFILE);
                   
                       $this->conn = new PDO("{$this->iniData['driver']}:host={$this->iniData['host']}; dbname={$this->iniData['dbname']}", "{$this->iniData['username']}", "{$this->iniData['password']}" );

                       $this->conn->exec("set names utf8");
                       $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                       $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                       return $this->conn;
                       
                   } catch (PDOException $e) {
                       dump($e->getMessage());
                   }
                    
                endif;
            }

            protected function preExec($sql,$bindParameters = null){
              
                $this->query = $this->connect()->prepare($sql);

                if($this->query->execute($bindParameters) == false){
                  
                  echo "Erro na execução da Sql";

                }

                return $this->query;
                 
              
               
            }


            protected function prepare($sql,$bindParameters = null){
                $this->query = $this->connect()->prepare($sql);
                return $this->query;
                 
              
               
            }
        }
        