<?php
        // Autor Eliasafe D. Pinho
       	

        use App\core\LI_Controller as LI_Controller;
        class Welcome extends   Li_Controller {

            public function index() {
           	$model = $this->model("teste");
           	$dados['nome'] = $model->con();

              // Carregando view
              $this->view('welcome', $dados);
                
            }




        }
        