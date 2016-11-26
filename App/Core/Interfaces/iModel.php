<?php 


namespace App\core\interfaces;
	interface iModel{

		public function create($table,$atributes);
		public function read($table);
		public function update($id, $atributes);
		public function delete($table, $name, $value);
		public function funBy($table, $name,$value);

	}
