<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * tests for server_engines.lib.php
 *
 * @package PhpMyAdmin-test
 */

/*
 * Include to test.
 */
require_once 'libraries/Util.class.php';
require_once 'libraries/php-gettext/gettext.inc';
require_once 'libraries/url_generating.lib.php';
require_once 'libraries/server_engines.lib.php';
require_once 'libraries/Theme.class.php';
require_once 'libraries/Tracker.class.php';
require_once 'libraries/database_interface.inc.php';
require_once 'libraries/Message.class.php';
require_once 'libraries/sanitizing.lib.php';
require_once 'libraries/sqlparser.lib.php';
require_once 'libraries/js_escape.lib.php';
require_once 'libraries/StorageEngine.class.php';

/**
 * PMA_ServerEngines_Test class
 *
 * this class is for testing server_engines.lib.php functions
 *
 * @package PhpMyAdmin-test
 */
class PMA_ServerEngines_Test extends PHPUnit_Framework_TestCase
{
    /**
     * Prepares environment for the test.
     *
     * @return void
     */
    public function setUp()
    {
        //$_REQUEST
        $_REQUEST['log'] = "index1";
        $_REQUEST['pos'] = 3;
        
        //$GLOBALS
        $GLOBALS['cfg']['MaxRows'] = 10;
        $GLOBALS['cfg']['ServerDefault'] = "server";
        $GLOBALS['cfg']['RememberSorting'] = true;
        $GLOBALS['cfg']['SQP'] = array();
        $GLOBALS['cfg']['MaxCharactersInDisplayedSQL'] = 1000;
        $GLOBALS['cfg']['ShowSQL'] = true;
        $GLOBALS['cfg']['SQP']['fmtType'] = 'none';
        $GLOBALS['cfg']['TableNavigationLinksMode'] = 'icons';
        $GLOBALS['cfg']['LimitChars'] = 100;
        $GLOBALS['cfg']['DBG']['sql'] = false;
        $GLOBALS['cfg']['MySQLManualType'] = 'viewable';
        
        $GLOBALS['table'] = "table";
        $GLOBALS['pmaThemeImage'] = 'image';
        
        //$_SESSION
        $_SESSION['PMA_Theme'] = PMA_Theme::load('./themes/pmahomme');
        $_SESSION['PMA_Theme'] = new PMA_Theme();     
    }

    /**
     * Test for PMA_getHtmlForServerEngines for all engines
     *
     * @return void
     */
    public function testPMAGetPluginAndModuleInfo()
    {	
        //test PMA_getHtmlForAllServerEngines
        $html = PMA_getHtmlForServerEngines();

        //validate 1: Item header
        $this->assertContains(
            '<th>Storage Engine</th>',
            $html
        );
        $this->assertContains(
            '<th>Description</th>',
            $html
        );
        
        //validate 2: FEDERATED
        $this->assertContains(
            '<td>Federated MySQL storage engine</td>',
            $html
        );
        $this->assertContains(
            'FEDERATED',
            $html
        );
        $this->assertContains(
            'server_engines.php?engine=FEDERATED',
            $html
        );
        
        //validate 3: dummy
        $this->assertContains(
            '<td>dummy comment</td>',
            $html
        );
        $this->assertContains(
            'dummy',
            $html
        );
        $this->assertContains(
            'server_engines.php?engine=dummy',
            $html
        );
    }

    /**
     * Test for PMA_getHtmlForServerEngines for specific engines "FEDERATED"
     *
     * @return void
     */
    public function testPMAGetPluginAndModuleInfoSpecific()
    {   
        $_REQUEST['engine'] = "FEDERATED";
        //Mock DBI
        $dbi = $this->getMockBuilder('PMA_DatabaseInterface')
            ->disableOriginalConstructor()
            ->getMock();

        $GLOBALS['dbi'] = $dbi;

        //test PMA_getHtmlForAllServerEngines for specific engines "FEDERATED"
        $html = PMA_getHtmlForServerEngines();

        //validate 1: Engine header
        $this->assertContains(
            'FEDERATED',
            $html
        );
        $this->assertContains(
            'Federated MySQL storage engine',
            $html
        );
        $this->assertContains(
            'This MySQL server does not support the FEDERATED storage engine.',
            $html
        );
        $enginer_info = 'There is no detailed status information ' 
            . 'available for this storage engine';
        $this->assertContains(
            $enginer_info,
            $html
        );
    }
}
