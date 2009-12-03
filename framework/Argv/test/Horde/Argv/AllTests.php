<?php
/**
 * Horde_Argv test suite
 *
 * @author     Chuck Hagenbuch <chuck@horde.org>
 * @author     Mike Naberezny <mike@maintainable.com>
 * @license    http://opensource.org/licenses/bsd-license.php BSD
 * @category   Horde
 * @package    Horde_Argv
 * @subpackage UnitTests
 */

if (!function_exists('_')) {
    function _($t) {
        return $t;
    }
}

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

/* Test base classes and helper objects */
require_once dirname(__FILE__) . '/TestCase.php';
require_once dirname(__FILE__) . '/ConflictTestCase.php';
require_once dirname(__FILE__) . '/InterceptedException.php';
require_once dirname(__FILE__) . '/InterceptingParser.php';

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
