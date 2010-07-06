<?php
/**
 * Sets the include path so all the Drupal stuff will work / can be tested
 *
 * @author Ian Oxley
 * @version $Id$
 * @copyright __MyCompanyName__, 6 July, 2010
 * @package default
 **/

define('ROOT_PATH', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR));
set_include_path(ROOT_PATH . PATH_SEPARATOR . get_include_path());
?>