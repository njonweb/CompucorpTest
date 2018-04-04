<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/UFMatch.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:c83bd8ebf7ad3a71d2bdaae1767cdcbb)
 */

/**
 * Database access object for the UFMatch entity.
 */
class CRM_Core_DAO_UFMatch extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_uf_match';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * System generated ID.
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Which Domain is this match entry for
   *
   * @var int unsigned
   */
  public $domain_id;

  /**
   * UF ID
   *
   * @var int unsigned
   */
  public $uf_id;

  /**
   * UF Name
   *
   * @var string
   */
  public $uf_name;

  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $contact_id;

  /**
   * UI language preferred by the given user/contact
   *
   * @var string
   */
  public $language;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_uf_match';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'domain_id', 'civicrm_domain', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('UF Match ID'),
          'description' => 'System generated ID.',
          'required' => TRUE,
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('UF Match Domain ID'),
          'description' => 'Which Domain is this match entry for',
          'required' => TRUE,
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
        'uf_id' => [
          'name' => 'uf_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('CMS ID'),
          'description' => 'UF ID',
          'required' => TRUE,
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
        ],
        'uf_name' => [
          'name' => 'uf_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('CMS Unique Identifier'),
          'description' => 'UF Name',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('CiviCRM Contact ID'),
          'description' => 'FK to Contact ID',
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ],
        'language' => [
          'name' => 'language',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Preferred Language'),
          'description' => 'UI language preferred by the given user/contact',
          'maxlength' => 5,
          'size' => CRM_Utils_Type::SIX,
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'uf_match', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'uf_match', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'I_civicrm_uf_match_uf_id' => [
        'name' => 'I_civicrm_uf_match_uf_id',
        'field' => [
          0 => 'uf_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_uf_match::0::uf_id',
      ],
      'UI_uf_name_domain_id' => [
        'name' => 'UI_uf_name_domain_id',
        'field' => [
          0 => 'uf_name',
          1 => 'domain_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_uf_match::1::uf_name::domain_id',
      ],
      'UI_contact_domain_id' => [
        'name' => 'UI_contact_domain_id',
        'field' => [
          0 => 'contact_id',
          1 => 'domain_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_uf_match::1::contact_id::domain_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
