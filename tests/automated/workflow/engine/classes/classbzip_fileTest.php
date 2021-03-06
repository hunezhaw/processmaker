<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.archive.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:30.
*/

class classbzip_fileTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var bzip_file
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new bzip_file('bzipfile.bzip');
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
        $methods = get_class_methods('bzip_file');
        $this->assertTrue(count($methods) == 18);
    }

    /**
    * @covers bzip_file::bzip_file
    * @todo   Implement testbzip_file().
    */
    public function testbzip_file()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('bzip_file', $methods), 'exists method bzip_file');
        $r = new ReflectionMethod('bzip_file', 'bzip_file');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'name');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional () == false);
    }

    /**
    * @covers bzip_file::create_bzip
    * @todo   Implement testcreate_bzip().
    */
    public function testcreate_bzip()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('create_bzip', $methods), 'exists method create_bzip');
        $r = new ReflectionMethod('bzip_file', 'create_bzip');
        $params = $r->getParameters();
    }

    /**
    * @covers bzip_file::open_archive
    * @todo   Implement testopen_archive().
    */
    public function testopen_archive()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('open_archive', $methods), 'exists method open_archive');
        $r = new ReflectionMethod('bzip_file', 'open_archive');
        $params = $r->getParameters();
    }
}

