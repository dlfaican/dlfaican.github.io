<?php
class cuadrado extends figura implements formulas {
	private $lado1=0;

	function __construct($l1){
		$this -> lado1= $l1;
		$this -> tipo = 'Cuadrilatero';
		$this -> a = $this -> area();
		$this -> p = $this -> perimetro();
	}

	function area(){
		return $this -> lado1 * $this -> lado1;
	}

	function perimetro(){
		return $this -> lado1 * 4;
	}	

	function GetArea(){
		return $this -> a;
	}

	function GetPerimetro(){
		return $this -> p;
	}


	function GetTipo(){
		return $this -> tipo;
	}

	
}
?>
