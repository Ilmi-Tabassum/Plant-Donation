<?php
use PHPUnit\Framework\TestCase;
class tester extends TestCase
{
    public function testpay(){
    include "./app/payment_controllers/book.php";
    $pay = new pay();
    $pay->setpay(3,4,"bKash");
    $this->assertEquals(3,$pay->id);
    $this->assertEquals(4,$pay->quantity);
    $this->assertEquals("bKash",$pay->payment);
    $this->assertTrue($pay->update());
    }
    
    public function testpost(){
    include "./app/payment_controllers/admin_collections.php";
    $admin_collections = new admin_collections();
    $admin_collection->setTest(3,4,5);
    $this->assertEquals(3,$admin_collections->date);
    $this->assertEquals(4,$admin_collections->post);
    $this->assertEquals(5,$admin_collections->amount);
    $this->assertTrue($admin_collections->getResult());
    }

 
}
?>