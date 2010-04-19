<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Dojo
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . DIRECTORY_SEPARATOR . 'TestHelper.php';

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Zend_Dojo_View_Helper_AllTests::main');
}

require_once 'Zend/Dojo/View/Helper/TooltipTest.php';
require_once 'Zend/Dojo/View/Helper/TitlePaneTest.php';
require_once 'Zend/Dojo/View/Helper/SelectTest.php';
require_once 'Zend/Dojo/View/Helper/ColorPaletteTest.php';
require_once 'Zend/Dojo/View/Helper/DialogTest.php';
require_once 'Zend/Dojo/View/Helper/DropDownButtonTest.php';


/**
 * @category   Zend
 * @package    Zend_Dojo
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Dojo
 * @group      Zend_Dojo_View
 */
class Zend_Dojo_View_Helper_AllTests
{
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Zend Framework - Zend_Dojo_View_Helper');

        $suite->addTestSuite('Zend_Dojo_View_Helper_TooltipTest');
        $suite->addTestSuite('Zend_Dojo_View_Helper_TitlePaneTest');
        $suite->addTestSuite('Zend_Dojo_View_Helper_SelectTest');
        $suite->addTestSuite('Zend_Dojo_View_Helper_ColorPaletteTest');
        $suite->addTestSuite('Zend_Dojo_View_Helper_DialogTest');
        $suite->addTestSuite('Zend_Dojo_View_Helper_DropDownButtonTest');

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Zend_Dojo_View_Helper_AllTests::main') {
    Zend_Dojo_View_Helper_AllTests::main();
}
