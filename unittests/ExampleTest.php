<?php
/**
 * ExampleTest.php
 *
 * @author Ian Oxley
 */
require_once 'PHPUnit/Framework.php';
include_once 'set_include_path.inc.php';
include_once 'init_drupal.inc.php';

class ExampleTest extends PHPUnit_Framework_TestCase {
    
    public function testFoo() {
        $this->assertTrue('foo' == 'foo');
    }
}
?>
