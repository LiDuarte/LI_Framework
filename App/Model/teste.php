<?php 


	
	class Teste extends App\core\LI_Model{

		public function con(){
			$query =  $this->read("pessoas");
			var_dump($query);
					

		}


            public function inserir(){

              $dados = [
                'nome' => 'ãáââ'
                ];

              $this->create("pessoas", $dados);
            }


}
			

