<?php

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }
  
    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );

        $now = (int)date("H");
        if ($now >= 6 && $now < 12) {
            $msg = "Good morning";
        } elseif ($now >= 12 && $now < 18) {
            $msg = "Good afternoon";
        } else {
            $msg = "Good evening";
        }
        
        $this->assertEquals(
            $this->greeter->getGreeting(),
            $msg
        );

    }



}
