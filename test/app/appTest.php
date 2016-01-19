<?php
require_once 'app/app.php';
class appTest extends \PHPUnit_Framework_TestCase{
  public function testBasics(){
    $app = new app();
    $this->assertEquals($app->getPropertyOrSomething(), 'Watchalookingfor?');
  }
}
 ?>
