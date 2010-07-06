<?php
/**
 * Bootstraps Drupal
 *
 * Needs to be included in each PHPUnit test.
 *
 * Each PHPUnit test must be run from the root directory of
 * the Drupal installation though
 *
 * @author Ian Oxley
 * @version $Id$
 * @copyright __MyCompanyName__, 6 July, 2010
 * @package default
 **/

include_once 'includes' . DIRECTORY_SEPARATOR . 'bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

?>