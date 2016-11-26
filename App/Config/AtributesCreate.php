<?php 



namespace App\config;
class AtributesCreate 
{
	
	public function createFieldsUpdate($atributes){
		return implode("='%s',", array_keys($atributes))."='%s'";

	}

	public function createFields($atributes){
		if(is_array($atributes)):
			return implode(",", array_keys($atributes));
		else:
			return implode(",", $atributes);
		endif;
		

	}

	public function createValues($atributes){
		return ":".implode(",:", array_keys($atributes));

	}

	public function bindCreateParameters($atributes){
		$values = $this->createValues($atributes);
		
		$bindParameters = array_combine(explode(',', $values), $atributes);
		return $bindParameters;
	
	}


}