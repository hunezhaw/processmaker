<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php' ;
  require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php' ;
  require_once PATH_TRUNK . 'workflow/engine/classes/class.processes.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:56:12.
  */ 

  class classObjectCellectionTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers ObjectCellection::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct() 
    { 
        if (class_exists('ObjectCellection')) {
             $methods = get_class_methods( 'ObjectCellection');
            $this->assertTrue( in_array( '__construct', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ObjectCellection::add
    * @todo   Implement testadd().
    */
    public function testadd() 
    { 
        if (class_exists('ObjectCellection')) {
             $methods = get_class_methods( 'ObjectCellection');
            $this->assertTrue( in_array( 'add', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ObjectCellection::get
    * @todo   Implement testget().
    */
    public function testget() 
    { 
        if (class_exists('ObjectCellection')) {
             $methods = get_class_methods( 'ObjectCellection');
            $this->assertTrue( in_array( 'get', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 
