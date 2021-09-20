<?php
namespace App\Models;
class Admin{
	public $admin_name;
	
	public $password;
	public $email;

	public function setAdminName($adminName){
        $this->admin_name = trim($adminName);
    }
    public function getAdminName(){
        return $this->admin_name;
	}
	
	public function setPassword($password){
		$this->password = trim($password);
	}
	public function getPassword(){
		return $this->password;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}
}