<?php //include('../model/conn.php');?>
<?php //session_start();?>
<?php
	class pay{
		public $id;
		public $quantity;
		public $payment;

		public function setpay($i,$q,$p){
			$this->id = $i;
			$this->quantity = $q;
			$this->payment = $p;
		}

		public function update(){
			
			$payment = $this->payment;
			$c = $this->id;
		
			$count= 100;
			$n=1;
			$auto = 2;
			while ($n<=$count) {
				if ($n==$c) {
				
					$i = 1000 - $this->quantity;
				
					return true;
				}
				$n=$n+1;
			}
			return false;	
		}
	}

?>