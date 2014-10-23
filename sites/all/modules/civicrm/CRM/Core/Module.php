<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.5                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2014                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 * A module is any software package that participates in the hook
 * system, such as CiviCRM Module-Extension, a Drupal Module, or
 * a Joomla Plugin.
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 * $Id$
 *
 */
class CRM_Core_Module {

  /**
   * @var string
   */
  public $name;

  /**
   * @var bool, TRUE if fully enabled; FALSE if module exists but is disabled
   */
  public $is_active;

  /**
   * @param $name
   * @param $is_active
   */
  public function __construct($name, $is_active) {
    $this->name = $name;
    $this->is_active = $is_active;
  }

  /**
   * Get a list of all known modules
   */
  public static function getAll($fresh = FALSE) {
    static $result;
    if ($fresh || !is_array($result)) {
      $result = CRM_Extension_System::singleton()->getMapper()->getModules();
      $result[] = new CRM_Core_Module('civicrm', TRUE); // pseudo-module for core

      $config = CRM_Core_Config::singleton();
      if (is_callable(array($config->userSystem, 'getModules'))) {
        $result = array_merge($result, $config->userSystem->getModules());
      }
    }
    return $result;
  }
}
