<?php 
	
	class Caneta{
		
		public $modelo;
		private $ponta;
		public $cor;
		public $carga;

		public function Caneta(){
			$this->modelo = '';
			$this->ponta = 0.0;
			$this->cor = '';
			$this->carga = 100;

		}

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		public function getPonta(){
			return $this->ponta;
		}

		public function setPonta($ponta){
			$this->ponta = $ponta;
		}

		public function getCor(){
			return $this->cor;
		}
		public function setCor($cor){
			$this->cor = $cor;
		}

		public function getCarga(){
			return $this->carga;
		}

		public function setCarga($carga){
			$this->carga = $carga;
		}
		
		public function rabiscar(){
			if (($this->tampada == false) || ($this->carga == 0)) {

				echo "<p> ERRO! Não é possivel rabiscar CANETA TAMPADA ou SEM CARGA </p>";

			}else{

				echo "<p> Está rabiscando...</p>";	
			}
			
		}
		public function tampar(){
			$this->tampada = false;
		}
		public function destampar(){
			$this->tampada = true;
		}
		public function carga(){
			if(($this->carga <= 30) && ($this->carga > 0)) {

				echo "<p> Caneta com pouca Carga {$this->carga}% de carga</p>";

			}else if($this->carga > 30){

				echo "<p> Carga NORMAL {$this->carga}% de carga</p>";
			}
		}

	}
?>