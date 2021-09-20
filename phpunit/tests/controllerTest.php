<?php
include "./app/controller.php";;
use PHPUnit\Framework\TestCase;
class controllerTest extends TestCase
{
    //test user class
    public function test_user_class(){
    $user = new user();

    $this->assertTrue($user->login_user());

    $this->assertTrue($user->logout_user());

    $this->assertTrue($user->signup_user());
    }
    //test information class
    public function test_information_class(){
    $information = new information();

    $this->assertTrue($information->add());

    $this->assertTrue($information->delete());

 // Become a member and can do payment!!

    $this->assertTrue($information->signup());


    }
    //test Comments recorded
    public function test_result_class(){
    $results = new result();

    $this->assertTrue($results->check_duplicate());

    $this->assertEquals('We want to go for funding',  $results->has_no_solve());

    $this->assertTrue($results->cal_result('We want to go for funding'));
    }
}
?>