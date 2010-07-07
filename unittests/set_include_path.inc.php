<?php
/**
 * Sets the include path so all the Drupal stuff will work / can be tested
 *
 * @author Ian Oxley
 **/

define('ROOT_PATH', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR));
set_include_path(ROOT_PATH . PATH_SEPARATOR . get_include_path());
?>
