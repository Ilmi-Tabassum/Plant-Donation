<?php
class AdminTest extends \PHPUnit\Framework\TestCase{
    
    
    public function testReturnAdminName(){
        $user = new \App\Models\Admin;
        $user->setAdminName('Ilmi');
        $this->assertEquals($user->getAdminName(), 'Ilmi');
    }
    public function testReturnPassword(){
        $user = new \App\Models\Admin;
		$user->setPassword('1234');
        $this->assertEquals($user->getPassword(), '1234');
    }
    public function testReturnEmailAddress(){
		$user = new \App\Models\Admin;
		$user->setEmail('ilmi.tabassum@g.bracu.ac.bd');
        $this->assertEquals($user->getEmail(), 'ilmi.tabassum@g.bracu.ac.bd');
    }

      


}