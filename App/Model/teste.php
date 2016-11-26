<?php 


	
	class Teste extends App\core\LI_Model{

		public function con(){
		
			$query = $this->funBy("pessoas",'id','4');
			
			var_dump($query);
					

		}


            public function inserir(){

              $dados = [
                'nome' => 'ãáââ'
                ];

              $this->create("pessoas", $dados);
            }


}
			

