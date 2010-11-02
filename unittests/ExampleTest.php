<?php
/**
 * ExampleTest.php
 *
 * @author Ian Oxley
 */
require_once 'PHPUnit/Framework.php';

class ExampleTest extends PHPUnit_Framework_TestCase {
    
    public function testFoo() {
        $this->assertTrue('foo' == 'foo');
    }
}
?>
