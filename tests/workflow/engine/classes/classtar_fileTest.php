<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php' ;
  require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php' ;
  require_once PATH_TRUNK . 'workflow/engine/classes/class.archive.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:56:17.
  */ 

  class classtar_fileTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers tar_file::tar_file
    * @todo   Implement testtar_file().
    */
    public function testtar_file() 
    { 
        if (class_exists('tar_file')) {
             $methods = get_class_methods( 'tar_file');
            $this->assertTrue( in_array( 'tar_file', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers tar_file::create_tar
    * @todo   Implement testcreate_tar().
    */
    public function testcreate_tar() 
    { 
        if (class_exists('tar_file')) {
             $methods = get_class_methods( 'tar_file');
            $this->assertTrue( in_array( 'create_tar', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers tar_file::extract_files
    * @todo   Implement testextract_files().
    */
    public function testextract_files() 
    { 
        if (class_exists('tar_file')) {
             $methods = get_class_methods( 'tar_file');
            $this->assertTrue( in_array( 'extract_files', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers tar_file::open_archive
    * @todo   Implement testopen_archive().
    */
    public function testopen_archive() 
    { 
        if (class_exists('tar_file')) {
             $methods = get_class_methods( 'tar_file');
            $this->assertTrue( in_array( 'open_archive', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 
