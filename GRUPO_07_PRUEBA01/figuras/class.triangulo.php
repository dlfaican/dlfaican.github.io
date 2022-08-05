<?php
class triangulo extends figura implements formulas{
	private $lado1=0;
	private $lado2=0;
	private $lado3=0;

	function __construct($l1,$l2,$l3){
		$this-> lado1= $l1;
		$this-> lado2=$l2;
		$this-> lado3=$l3;
        $this -> tipo = "Polígono";
        $this -> a = $this->area();
        $this -> p = $this->perimetro();
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

	function area(){
		$s=( $this->lado1+$this->lado2+$this->lado3 )/2;

        return sqrt( $s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3) );
	}

	function perimetro(){
		return $this->lado1+$this->lado2+$this->lado3;
	}
}
?>
