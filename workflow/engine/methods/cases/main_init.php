<?php
/**
 * main.php Cases List main processor
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.23
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * For more information, contact Colosa Inc, 2566 Le Jeune Rd.,
 * Coral Gables, FL, 33134, USA, or email info@colosa.com.
 *
 */

  $oHeadPublisher =& headPublisher::getSingleton(); 
  //$oHeadPublisher->usingExtJs('ux/XmlTreeLoader');
  $oHeadPublisher->addExtJsScript('cases/main', false );    //adding a javascript file .js
  $oHeadPublisher->addContent( 'cases/main'); //adding a html file  .html.
  
  G::loadClass('configuration');
  $oConf = new Configurations; 
  $oConf->loadConfig($x, 'USER_PREFERENCES','','',$_SESSION['USER_LOGGED'],'');
  $confDefaultOption='';
  if( sizeof($oConf->Fields) > 0 && isset($oConf->aConfig['DEFAULT_CASES_MENU']) ){ #this user has a configuration record  
    $confDefaultOption = $oConf->aConfig['DEFAULT_CASES_MENU'];
    global $G_TMP_MENU;
    $oMenu = new Menu();
    $oMenu->load('cases');
    $defaultOption = '';
    //g::pr($oMenu); die; 
    foreach($oMenu->Id as $i=>$id){
      if( $id == $confDefaultOption ){
         $defaultOption = $oMenu->Options[$i];
         break;
      }
    }
    $defaultOption = $defaultOption != '' ? $defaultOption : 'casesListExtJs';
  
  } else {
    $defaultOption = 'casesListExtJs';
    $confDefaultOption = 'CASES_INBOX';
  }
  
  $oHeadPublisher->assign( 'defaultOption', $defaultOption); // user menu permissions
  $oHeadPublisher->assign( '_nodeId', isset($confDefaultOption)?$confDefaultOption:'PM_USERS'); // user menu permissions
  
  $translations = G::getTranslations(Array(
    'ID_DEATACH', 'ID_ALL', 'ID_DYNAFORM', 'ID_SYSTEM', 'ID_VARIABLES', 'ID_TRIGGERS', 'ID_OPEN_IN_POPUP'
  ));
  $oHeadPublisher->assign('TRANSLATIONS', $translations);
  G::RenderPage('publish', 'extJs');
  
