<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.Installer.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 20:28:39.
*/

class classInstallerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Installer
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new Installer();
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
        $this->assertTrue( count($methods) == 11);
    }

    /**
    * @covers Installer::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__construct', $methods ), 'exists method __construct' );
        $r = new ReflectionMethod('Installer', '__construct');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Installer::create_site
    * @todo   Implement testcreate_site().
    */
    public function testcreate_site()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('create_site', $methods ), 'exists method create_site' );
        $r = new ReflectionMethod('Installer', 'create_site');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'config');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == 'Array');
        $this->assertTrue( $params[1]->getName() == 'confirmed');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Installer::isset_site
    * @todo   Implement testisset_site().
    */
    public function testisset_site()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('isset_site', $methods ), 'exists method isset_site' );
        $r = new ReflectionMethod('Installer', 'isset_site');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == 'workflow');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Installer::set_admin
    * @todo   Implement testset_admin().
    */
    public function testset_admin()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('set_admin', $methods ), 'exists method set_admin' );
        $r = new ReflectionMethod('Installer', 'set_admin');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Installer::query_sql_file
    * @todo   Implement testquery_sql_file().
    */
    public function testquery_sql_file()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('query_sql_file', $methods ), 'exists method query_sql_file' );
        $r = new ReflectionMethod('Installer', 'query_sql_file');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'file');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'connection');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Installer::file_permisions
    * @todo   Implement testfile_permisions().
    */
    public function testfile_permisions()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('file_permisions', $methods ), 'exists method file_permisions' );
        $r = new ReflectionMethod('Installer', 'file_permisions');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'file');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'def');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '777');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Installer::is_dir_writable
    * @todo   Implement testis_dir_writable().
    */
    public function testis_dir_writable()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('is_dir_writable', $methods ), 'exists method is_dir_writable' );
        $r = new ReflectionMethod('Installer', 'is_dir_writable');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'dir');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Installer::getDirectoryFiles
    * @todo   Implement testgetDirectoryFiles().
    */
    public function testgetDirectoryFiles()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getDirectoryFiles', $methods ), 'exists method getDirectoryFiles' );
        $r = new ReflectionMethod('Installer', 'getDirectoryFiles');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'dir');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'extension');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Installer::check_db_empty
    * @todo   Implement testcheck_db_empty().
    */
    public function testcheck_db_empty()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('check_db_empty', $methods ), 'exists method check_db_empty' );
        $r = new ReflectionMethod('Installer', 'check_db_empty');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'dbName');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Installer::check_db
    * @todo   Implement testcheck_db().
    */
    public function testcheck_db()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('check_db', $methods ), 'exists method check_db' );
        $r = new ReflectionMethod('Installer', 'check_db');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'dbName');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers Installer::log
    * @todo   Implement testlog().
    */
    public function testlog()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('log', $methods ), 'exists method log' );
        $r = new ReflectionMethod('Installer', 'log');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'text');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'failed');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

  } 
