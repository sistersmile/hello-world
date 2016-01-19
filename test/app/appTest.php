<?php
class appTest extends \PHPUnit_Framework_TestCase{
  public function appTest(){    
    $app = new app();
    $app->getPropertyOrSomething();
    $this->assertEquals($app->getPropertyOrSomething(), 'Watchalookingfor?');
  }
}
 ?>
