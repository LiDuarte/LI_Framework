<?php
    
    namespace App\core;
      
    
        class App {
            
            private $controller = "Welcome";
            private $method = 'index';
            private $param = [];

            function __construct() {
                
                $url[0] = $this->controller;
                $url = $this->getUrl();
                
                if (file_exists("App/controller/" . $url[0] . ".php")):
                    $this->controller = $url[0];
                    unset($url[0]);
                endif;

                // verifica se foi setado alguma controller
                if(PADRAOURL != "default" and PADRAOURL != ""):
                    if (!file_exists("App/Controller/" . PADRAOURL . ".php")) {
                        require_once "App/Errors/ControllerDefaultError.php";
                        exit;
                    }else{
                        $this->controller = PADRAOURL;
                    }
                endif;
                
                require_once "App/Controller/" . $this->controller . ".php";



                $this->controller = new $this->controller;

                if (isset($url[1])):
                    if(method_exists($this->controller, $url[1])):
                    $this->method = $url[1];
                    unset($url[1]);
                    endif;
                endif;

                $this->param = $url ? array_values($url) : [];

                call_user_func_array([$this->controller, $this->method], $this->param);
            }

                private function getUrl() {
                    if (isset($_GET['url'])):
                        return explode("/", filter_var(trim($_GET['url']), FILTER_SANITIZE_STRING));
                    endif;
                }

        }
        