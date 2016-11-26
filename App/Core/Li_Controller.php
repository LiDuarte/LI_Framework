<?php

        // Autor Eliasafe D. Pinho
     
        namespace App\core;
        
         class Li_Controller{

          
            protected function view($view, $dados = []) {
                   
                if (!empty($view)):
                    if (file_exists("App/view/" . $view . ".php")):
                        require_once 'App/view/' . $view . '.php';
                    else:
                        require_once "App/Errors/ViewError.error404.php";
                    exit();
                    endif;
                endif;
            }

            protected function model($model) {
               
                   if (file_exists("App/model/" . $model . ".php")):
                    require_once 'App/Model/' . $model . '.php';
                    return new $model;
                    else:
                        require_once "App/Errors/Model404.php";
                    exit();
                endif;
                              
            }


           
        }
        