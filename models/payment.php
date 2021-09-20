

<?php
require_once '../libraries/Database1.php';

class payment {

    private $db;

    public function __construct(){
        $this->db = new Database1;
    }

    public function payment($data){
        $this->db->query('INSERT INTO payment (payId, creditcardNo, creditYear, creditMonth, creditCVV, paypalcardNo, paypalYear, paypalMonth, payCVV, BphoneNum)
        VALUES (:payId, :creditcardNo, :creditYear,  :creditMonth , :creditCVV, :paypalcardNo, :paypalYear, :paypalMonth, :payCVV, :BphoneNum)');
     
        $this->db->bind(':payId', $data['payId']);
        $this->db->bind(':creditcardNo', $data['creditcardNo']);
        $this->db->bind(':creditYear', $data['creditYear']);
        $this->db->bind(':creditMonth', $data['creditMonth']);
        $this->db->bind(':creditCVV', $data['creditCVV']);
        $this->db->bind(':paypalcardNo', $data['paypalcardNo']);
        $this->db->bind(':paypalYear', $data['paypalYear']);
        $this->db->bind(':paypalMonth', $data['paypalMonth']);
        $this->db->bind(':payCVV', $data['payCVV']);
        $this->db->bind(':BphoneNum', $data['BphoneNum']);

      
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
} 