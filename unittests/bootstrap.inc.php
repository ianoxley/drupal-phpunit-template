<?php
/**
 * Merged set_include_path.inc.php and init_drupal.inc.php into a single file.
 *
 * It should be possible to include this file via the phpunit --bootstrap switch
 * rather than having to include it in each test file
 *
 * @author Ian Oxley
 */
define('ROOT_PATH', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR));
set_include_path(ROOT_PATH . PATH_SEPARATOR . get_include_path());

include_once 'includes' . DIRECTORY_SEPARATOR . 'bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

?>
