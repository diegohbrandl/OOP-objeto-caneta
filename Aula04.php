<?php 
	
	class Caneta{
		
		var $modelo;
		var $cor;
		var $ponta;
		var $carga;
		var $tampada;

		function rabiscar(){
			if (this->tampada == true) {
				echo "<p> ERRO!, não posso rabiscar";
			} else{
				echo "<p>Estou escrevendo...<p>";
			}

		function tampar(){
			this->tampada == true;
		}

		function destampar(){
			this.->destampar == false;
		}
		
		}
	
	}
?>