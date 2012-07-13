<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.jrml.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 20:28:32.
*/

class classJrmlTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Jrml
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new Jrml();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having 
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $this->assertTrue( count($methods) == 7);
    }

    /**
    * @covers Jrml::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__construct', $methods ), 'exists method __construct' );
        $r = new ReflectionMethod('Jrml', '__construct');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'data');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == 'Array');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Jrml::get_md
    * @todo   Implement testget_md().
    */
    public function testget_md()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('get_md', $methods ), 'exists method get_md' );
        $r = new ReflectionMethod('Jrml', 'get_md');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Jrml::get_header
    * @todo   Implement testget_header().
    */
    public function testget_header()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('get_header', $methods ), 'exists method get_header' );
        $r = new ReflectionMethod('Jrml', 'get_header');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Jrml::get_column_header
    * @todo   Implement testget_column_header().
    */
    public function testget_column_header()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('get_column_header', $methods ), 'exists method get_column_header' );
        $r = new ReflectionMethod('Jrml', 'get_column_header');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Jrml::get_detail
    * @todo   Implement testget_detail().
    */
    public function testget_detail()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('get_detail', $methods ), 'exists method get_detail' );
        $r = new ReflectionMethod('Jrml', 'get_detail');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Jrml::get_footer
    * @todo   Implement testget_footer().
    */
    public function testget_footer()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('get_footer', $methods ), 'exists method get_footer' );
        $r = new ReflectionMethod('Jrml', 'get_footer');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Jrml::export
    * @todo   Implement testexport().
    */
    public function testexport()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('export', $methods ), 'exists method export' );
        $r = new ReflectionMethod('Jrml', 'export');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

  } 
