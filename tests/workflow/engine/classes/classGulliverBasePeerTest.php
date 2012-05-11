<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php' ;
  require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php' ;
  require_once PATH_TRUNK . 'workflow/engine/classes/class.BasePeer.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:56:11.
  */ 

  class classGulliverBasePeerTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers GulliverBasePeer::getMapBuilder
    * @todo   Implement testgetMapBuilder().
    */
    public function testgetMapBuilder() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'getMapBuilder', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::getPhpNameMap
    * @todo   Implement testgetPhpNameMap().
    */
    public function testgetPhpNameMap() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'getPhpNameMap', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::translateFieldName
    * @todo   Implement testtranslateFieldName().
    */
    public function testtranslateFieldName() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'translateFieldName', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::getFieldNames
    * @todo   Implement testgetFieldNames().
    */
    public function testgetFieldNames() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'getFieldNames', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::alias
    * @todo   Implement testalias().
    */
    public function testalias() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'alias', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::addSelectColumns
    * @todo   Implement testaddSelectColumns().
    */
    public function testaddSelectColumns() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'addSelectColumns', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::doCount
    * @todo   Implement testdoCount().
    */
    public function testdoCount() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'doCount', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::doSelectOne
    * @todo   Implement testdoSelectOne().
    */
    public function testdoSelectOne() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'doSelectOne', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::doSelect
    * @todo   Implement testdoSelect().
    */
    public function testdoSelect() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'doSelect', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::doSelectRS
    * @todo   Implement testdoSelectRS().
    */
    public function testdoSelectRS() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'doSelectRS', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::populateObjects
    * @todo   Implement testpopulateObjects().
    */
    public function testpopulateObjects() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'populateObjects', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::getTableMap
    * @todo   Implement testgetTableMap().
    */
    public function testgetTableMap() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'getTableMap', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::getOMClass
    * @todo   Implement testgetOMClass().
    */
    public function testgetOMClass() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'getOMClass', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::doInsert
    * @todo   Implement testdoInsert().
    */
    public function testdoInsert() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'doInsert', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::doUpdate
    * @todo   Implement testdoUpdate().
    */
    public function testdoUpdate() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'doUpdate', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::doDeleteAll
    * @todo   Implement testdoDeleteAll().
    */
    public function testdoDeleteAll() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'doDeleteAll', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::doDelete
    * @todo   Implement testdoDelete().
    */
    public function testdoDelete() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'doDelete', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::doValidate
    * @todo   Implement testdoValidate().
    */
    public function testdoValidate() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'doValidate', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::retrieveByPK
    * @todo   Implement testretrieveByPK().
    */
    public function testretrieveByPK() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'retrieveByPK', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers GulliverBasePeer::retrieveByPKs
    * @todo   Implement testretrieveByPKs().
    */
    public function testretrieveByPKs() 
    { 
        if (class_exists('GulliverBasePeer')) {
             $methods = get_class_methods( 'GulliverBasePeer');
            $this->assertTrue( in_array( 'retrieveByPKs', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 
