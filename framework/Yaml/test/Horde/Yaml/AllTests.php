<?php
/**
 * Horde_Yaml test suite
 *
 * @author  Mike Naberezny <mike@maintainable.com>
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * @category   Horde
 * @package    Horde_Yaml
 * @subpackage UnitTests
 */

/**
 * Define the main method
 */
if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Horde_Url_AllTests::main');
}

/**
 * Prepare the test setup.
 */
require_once 'Horde/Test/AllTests.php';
require_once dirname(__FILE__) . '/Helpers.php';

/**
 * @package    Horde_Url
 * @subpackage UnitTests
 */
class Horde_Url_AllTests extends Horde_Test_AllTests
{
}

if (PHPUnit_MAIN_METHOD == 'Horde_Url_AllTests::main') {
    Horde_Url_AllTests::main('Horde_Url', __FILE__);
}
