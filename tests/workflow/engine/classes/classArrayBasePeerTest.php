<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php' ;
  require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php' ;
  require_once PATH_TRUNK . 'workflow/engine/classes/class.ArrayPeer.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:56:17.
  */ 

  class classArrayBasePeerTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers ArrayBasePeer::getMapBuilder
    * @todo   Implement testgetMapBuilder().
    */
    public function testgetMapBuilder() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'getMapBuilder', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::getPhpNameMap
    * @todo   Implement testgetPhpNameMap().
    */
    public function testgetPhpNameMap() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'getPhpNameMap', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::translateFieldName
    * @todo   Implement testtranslateFieldName().
    */
    public function testtranslateFieldName() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'translateFieldName', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::getFieldNames
    * @todo   Implement testgetFieldNames().
    */
    public function testgetFieldNames() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'getFieldNames', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::alias
    * @todo   Implement testalias().
    */
    public function testalias() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'alias', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::addSelectColumns
    * @todo   Implement testaddSelectColumns().
    */
    public function testaddSelectColumns() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'addSelectColumns', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::doCount
    * @todo   Implement testdoCount().
    */
    public function testdoCount() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'doCount', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::doSelectOne
    * @todo   Implement testdoSelectOne().
    */
    public function testdoSelectOne() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'doSelectOne', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::createSelectSql
    * @todo   Implement testcreateSelectSql().
    */
    public function testcreateSelectSql() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'createSelectSql', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::doSelect
    * @todo   Implement testdoSelect().
    */
    public function testdoSelect() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'doSelect', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::doSelectRS
    * @todo   Implement testdoSelectRS().
    */
    public function testdoSelectRS() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'doSelectRS', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::populateObjects
    * @todo   Implement testpopulateObjects().
    */
    public function testpopulateObjects() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'populateObjects', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::getTableMap
    * @todo   Implement testgetTableMap().
    */
    public function testgetTableMap() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'getTableMap', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::getOMClass
    * @todo   Implement testgetOMClass().
    */
    public function testgetOMClass() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'getOMClass', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::doInsert
    * @todo   Implement testdoInsert().
    */
    public function testdoInsert() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'doInsert', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::doUpdate
    * @todo   Implement testdoUpdate().
    */
    public function testdoUpdate() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'doUpdate', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::doDeleteAll
    * @todo   Implement testdoDeleteAll().
    */
    public function testdoDeleteAll() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'doDeleteAll', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::doDelete
    * @todo   Implement testdoDelete().
    */
    public function testdoDelete() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'doDelete', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::doValidate
    * @todo   Implement testdoValidate().
    */
    public function testdoValidate() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'doValidate', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::retrieveByPK
    * @todo   Implement testretrieveByPK().
    */
    public function testretrieveByPK() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'retrieveByPK', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers ArrayBasePeer::retrieveByPKs
    * @todo   Implement testretrieveByPKs().
    */
    public function testretrieveByPKs() 
    { 
        if (class_exists('ArrayBasePeer')) {
             $methods = get_class_methods( 'ArrayBasePeer');
            $this->assertTrue( in_array( 'retrieveByPKs', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 
