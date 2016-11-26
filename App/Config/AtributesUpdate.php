<?php 


	namespace App\config;
	class AtributesUpdate
	{
		
		public function combineUpdateFields($atributes){
			
			$keys = array_keys($atributes);

			$separadorPorPontos = 	":".implode("=:", $keys);
			dump($separadorPorPontos);
			// die();
			$combine = array_combine($keys, explode("=", $separadorPorPontos));
			dump($combine);

		}
	}


