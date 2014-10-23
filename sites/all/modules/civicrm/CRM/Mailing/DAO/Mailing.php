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
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 *
 * Generated from xml/schema/CRM/Mailing/Mailing.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Mailing_DAO_Mailing extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_mailing';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Which site is this mailing for
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   * FK to the header component.
   *
   * @var int unsigned
   */
  public $header_id;
  /**
   * FK to the footer component.
   *
   * @var int unsigned
   */
  public $footer_id;
  /**
   * FK to the auto-responder component.
   *
   * @var int unsigned
   */
  public $reply_id;
  /**
   * FK to the unsubscribe component.
   *
   * @var int unsigned
   */
  public $unsubscribe_id;
  /**
   *
   * @var int unsigned
   */
  public $resubscribe_id;
  /**
   * FK to the opt-out component.
   *
   * @var int unsigned
   */
  public $optout_id;
  /**
   * Mailing Name.
   *
   * @var string
   */
  public $name;
  /**
   * From Header of mailing
   *
   * @var string
   */
  public $from_name;
  /**
   * From Email of mailing
   *
   * @var string
   */
  public $from_email;
  /**
   * Reply-To Email of mailing
   *
   * @var string
   */
  public $replyto_email;
  /**
   * Subject of mailing
   *
   * @var string
   */
  public $subject;
  /**
   * Body of the mailing in text format.
   *
   * @var longtext
   */
  public $body_text;
  /**
   * Body of the mailing in html format.
   *
   * @var longtext
   */
  public $body_html;
  /**
   * Should we track URL click-throughs for this mailing?
   *
   * @var boolean
   */
  public $url_tracking;
  /**
   * Should we forward replies back to the author?
   *
   * @var boolean
   */
  public $forward_replies;
  /**
   * Should we enable the auto-responder?
   *
   * @var boolean
   */
  public $auto_responder;
  /**
   * Should we track when recipients open/read this mailing?
   *
   * @var boolean
   */
  public $open_tracking;
  /**
   * Has at least one job associated with this mailing finished?
   *
   * @var boolean
   */
  public $is_completed;
  /**
   * FK to the message template.
   *
   * @var int unsigned
   */
  public $msg_template_id;
  /**
   * Should we overrite VERP address in Reply-To
   *
   * @var boolean
   */
  public $override_verp;
  /**
   * FK to Contact ID who first created this mailing
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * Date and time this mailing was created.
   *
   * @var datetime
   */
  public $created_date;
  /**
   * FK to Contact ID who scheduled this mailing
   *
   * @var int unsigned
   */
  public $scheduled_id;
  /**
   * Date and time this mailing was scheduled.
   *
   * @var datetime
   */
  public $scheduled_date;
  /**
   * FK to Contact ID who approved this mailing
   *
   * @var int unsigned
   */
  public $approver_id;
  /**
   * Date and time this mailing was approved.
   *
   * @var datetime
   */
  public $approval_date;
  /**
   * The status of this mailing. Values: none, approved, rejected
   *
   * @var int unsigned
   */
  public $approval_status_id;
  /**
   * Note behind the decision.
   *
   * @var longtext
   */
  public $approval_note;
  /**
   * Is this mailing archived?
   *
   * @var boolean
   */
  public $is_archived;
  /**
   * In what context(s) is the mailing contents visible (online viewing)
   *
   * @var string
   */
  public $visibility;
  /**
   * The campaign for which this mailing has been initiated.
   *
   * @var int unsigned
   */
  public $campaign_id;
  /**
   * Remove duplicate emails?
   *
   * @var boolean
   */
  public $dedupe_email;
  /**
   *
   * @var int unsigned
   */
  public $sms_provider_id;
  /**
   * Key for validating requests related to this mailing.
   *
   * @var string
   */
  public $hash;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_mailing
   */
  function __construct()
  {
    $this->__table = 'civicrm_mailing';
    parent::__construct();
  }
  /**
   * return foreign keys and entity references
   *
   * @static
   * @access public
   * @return array of CRM_Core_Reference_Interface
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'domain_id', 'civicrm_domain', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'header_id', 'civicrm_mailing_component', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'footer_id', 'civicrm_mailing_component', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'reply_id', 'civicrm_mailing_component', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'unsubscribe_id', 'civicrm_mailing_component', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'optout_id', 'civicrm_mailing_component', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'msg_template_id', 'civicrm_msg_template', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'scheduled_id', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'approver_id', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'campaign_id', 'civicrm_campaign', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'sms_provider_id', 'civicrm_sms_provider', 'id');
    }
    return self::$_links;
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing ID') ,
          'required' => true,
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Domain') ,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => array(
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'header_id' => array(
          'name' => 'header_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Header') ,
          'FKClassName' => 'CRM_Mailing_DAO_Component',
        ) ,
        'footer_id' => array(
          'name' => 'footer_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Footer') ,
          'FKClassName' => 'CRM_Mailing_DAO_Component',
        ) ,
        'reply_id' => array(
          'name' => 'reply_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Reply') ,
          'FKClassName' => 'CRM_Mailing_DAO_Component',
        ) ,
        'unsubscribe_id' => array(
          'name' => 'unsubscribe_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Unsubscribe') ,
          'FKClassName' => 'CRM_Mailing_DAO_Component',
        ) ,
        'resubscribe_id' => array(
          'name' => 'resubscribe_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Resubscribe') ,
        ) ,
        'optout_id' => array(
          'name' => 'optout_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Opt Out') ,
          'FKClassName' => 'CRM_Mailing_DAO_Component',
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Name') ,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'from_name' => array(
          'name' => 'from_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing From Name') ,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'from_email' => array(
          'name' => 'from_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing From Email') ,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'replyto_email' => array(
          'name' => 'replyto_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Replyto Email') ,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'subject' => array(
          'name' => 'subject',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Subject') ,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'body_text' => array(
          'name' => 'body_text',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Body Text') ,
        ) ,
        'body_html' => array(
          'name' => 'body_html',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Body Html') ,
        ) ,
        'url_tracking' => array(
          'name' => 'url_tracking',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Url Tracking') ,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'forward_replies' => array(
          'name' => 'forward_replies',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Forward Replies') ,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'auto_responder' => array(
          'name' => 'auto_responder',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Auto Responder') ,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'open_tracking' => array(
          'name' => 'open_tracking',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Track Mailing?') ,
        ) ,
        'is_completed' => array(
          'name' => 'is_completed',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Mailing Completed') ,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'msg_template_id' => array(
          'name' => 'msg_template_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Message Template') ,
          'FKClassName' => 'CRM_Core_DAO_MessageTemplate',
        ) ,
        'override_verp' => array(
          'name' => 'override_verp',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Override Verp') ,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Creator') ,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Mailing Created Date') ,
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'scheduled_id' => array(
          'name' => 'scheduled_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Scheduled By') ,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'scheduled_date' => array(
          'name' => 'scheduled_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Mailing Scheduled Date') ,
        ) ,
        'approver_id' => array(
          'name' => 'approver_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Approved By') ,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'approval_date' => array(
          'name' => 'approval_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Mailing Approved Date') ,
        ) ,
        'approval_status_id' => array(
          'name' => 'approval_status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Approval Status') ,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'mail_approval_status',
          )
        ) ,
        'approval_note' => array(
          'name' => 'approval_note',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Approval Note') ,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'is_archived' => array(
          'name' => 'is_archived',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Mailing Archived?') ,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'visibility' => array(
          'name' => 'visibility',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Visibility') ,
          'maxlength' => 40,
          'size' => CRM_Utils_Type::BIG,
          'default' => 'Public Pages',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::groupVisibility',
          )
        ) ,
        'campaign_id' => array(
          'name' => 'campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Campaign') ,
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_campaign',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ) ,
        'dedupe_email' => array(
          'name' => 'dedupe_email',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('No Duplicate emails?') ,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'sms_provider_id' => array(
          'name' => 'sms_provider_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing SMS Provider') ,
          'FKClassName' => 'CRM_SMS_DAO_Provider',
          'html' => array(
            'type' => 'Select',
          ) ,
        ) ,
        'hash' => array(
          'name' => 'hash',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Hash') ,
          'maxlength' => 16,
          'size' => CRM_Utils_Type::TWELVE,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'domain_id' => 'domain_id',
        'header_id' => 'header_id',
        'footer_id' => 'footer_id',
        'reply_id' => 'reply_id',
        'unsubscribe_id' => 'unsubscribe_id',
        'resubscribe_id' => 'resubscribe_id',
        'optout_id' => 'optout_id',
        'name' => 'name',
        'from_name' => 'from_name',
        'from_email' => 'from_email',
        'replyto_email' => 'replyto_email',
        'subject' => 'subject',
        'body_text' => 'body_text',
        'body_html' => 'body_html',
        'url_tracking' => 'url_tracking',
        'forward_replies' => 'forward_replies',
        'auto_responder' => 'auto_responder',
        'open_tracking' => 'open_tracking',
        'is_completed' => 'is_completed',
        'msg_template_id' => 'msg_template_id',
        'override_verp' => 'override_verp',
        'created_id' => 'created_id',
        'created_date' => 'created_date',
        'scheduled_id' => 'scheduled_id',
        'scheduled_date' => 'scheduled_date',
        'approver_id' => 'approver_id',
        'approval_date' => 'approval_date',
        'approval_status_id' => 'approval_status_id',
        'approval_note' => 'approval_note',
        'is_archived' => 'is_archived',
        'visibility' => 'visibility',
        'campaign_id' => 'campaign_id',
        'dedupe_email' => 'dedupe_email',
        'sms_provider_id' => 'sms_provider_id',
        'hash' => 'hash',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['mailing'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['mailing'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
