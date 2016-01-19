<?php
class appTest extends \PHPUnit_Framework_TestCase{
  $app = new app();
  $app->getPropertyOrSomething();
  $this->assertEquals($app->getPropertyOrSomething(), 'Watchalookingfor?');
}
 ?>
