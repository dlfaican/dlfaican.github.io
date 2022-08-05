<?php
class rectangulo extends figura implements formulas{
	private $lado1=0;
	private $lado2=0;

	function __construct($base,$altura){
		$this-> lado1= $base;
		$this-> lado2=$altura;
		$this -> tipo = 'Poligono';
		$this -> a = $this -> area();
		$this -> p = $this -> perimetro();
	}

	function area(){
		return $this ->  lado1 * $this -> lado2;
	}

	function perimetro(){
		return ($this -> lado1 * 2) + ($this -> lado2 *2);
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
