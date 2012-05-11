<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php' ;
  require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php' ;
  require_once PATH_TRUNK . 'workflow/engine/classes/class.spool.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:56:18.
  */ 

  class classspoolRunTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers spoolRun::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( '__construct', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::getSpoolFilesList
    * @todo   Implement testgetSpoolFilesList().
    */
    public function testgetSpoolFilesList() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'getSpoolFilesList', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::create
    * @todo   Implement testcreate().
    */
    public function testcreate() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'create', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::setConfig
    * @todo   Implement testsetConfig().
    */
    public function testsetConfig() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'setConfig', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::setData
    * @todo   Implement testsetData().
    */
    public function testsetData() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'setData', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::sendMail
    * @todo   Implement testsendMail().
    */
    public function testsendMail() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'sendMail', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::updateSpoolStatus
    * @todo   Implement testupdateSpoolStatus().
    */
    public function testupdateSpoolStatus() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'updateSpoolStatus', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::handleFrom
    * @todo   Implement testhandleFrom().
    */
    public function testhandleFrom() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'handleFrom', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::handleEnvelopeTo
    * @todo   Implement testhandleEnvelopeTo().
    */
    public function testhandleEnvelopeTo() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'handleEnvelopeTo', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::handleMail
    * @todo   Implement testhandleMail().
    */
    public function testhandleMail() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'handleMail', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::resendEmails
    * @todo   Implement testresendEmails().
    */
    public function testresendEmails() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'resendEmails', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::getWarnings
    * @todo   Implement testgetWarnings().
    */
    public function testgetWarnings() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'getWarnings', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers spoolRun::db_insert
    * @todo   Implement testdb_insert().
    */
    public function testdb_insert() 
    { 
        if (class_exists('spoolRun')) {
             $methods = get_class_methods( 'spoolRun');
            $this->assertTrue( in_array( 'db_insert', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 
