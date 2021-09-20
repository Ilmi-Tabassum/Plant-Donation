<?php ?>

<?php
class admin_collections{
    public $date;
    public $post;
    public $amount;

    public function setTest($d,$l,$c){
      $this->date = $d;
      $this->post = $l;
      $this->amount = $c;
    }

	public function getResult(){

		$count= 5;
		$n=1;
		$row= array(3,4,5);
			while($n<=$count){
					
				if($row[0]===$this->date and $row[1]===$this->post and $row[2]===$this->amount){
				return true;
			}
				$n=$n+1;
			}
			return false;

		}
	}
	?>