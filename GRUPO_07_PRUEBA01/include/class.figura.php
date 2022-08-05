<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<div class="container col-sm-6 ">
			<form name="figuras" method="POST" action="" >
			
					<h2><center>INGRESO DATOS DE LA FIGURA</center></h2>
				<body style="display: flex; justify-content:center; margin-top: 20px;">
					<div class="form-group">
					Tipo: 
						<select class="form-control" id="fig" name="tipo" OnChange="desInput()">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</div>
				
			<div class="form-group">
					Lado 1:
					<input type="text" class="form-control" id="lado1" name="lado_1"size="4" disabled>
					</div>
			<div class="form-group">
					Lado 2:
					<input type="text" class="form-control" id="lado2" name="lado_2"size="4" disabled>
					</div>
			<div class="form-group">
					Lado 3:
					<input type="text" class="form-control" id="lado3" name="lado_3"size="4" disabled>
											
					</div>
					<center><input type="submit" class="btn btn-success btn-lg" name="calcular" value="Calcular"></center>
				
			
			</form>
			<div>
			<script>
			function desInput() {
				

				var selection = document.getElementById("fig");
				var op = selection.options[selection.selectedIndex].value;
				if(op=="cuadrado"){
					document.getElementById("lado1").disabled=false;
					document.getElementById("lado2").disabled=true;
					document.getElementById("lado3").disabled=true;
				}else if(op=="rectangulo"){
					document.getElementById("lado1").disabled=false;
					document.getElementById("lado2").disabled=false;
					document.getElementById("lado3").disabled=true;
				}else if(op=="triangulo"){
					document.getElementById("lado1").disabled=false;
					document.getElementById("lado2").disabled=false;
					document.getElementById("lado3").disabled=false;
				}else{
					
					document.getElementById("lado1").disabled=true;
					document.getElementById("lado2").disabled=true;
					document.getElementById("lado3").disabled=true;
				}
			}
			</script>';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
