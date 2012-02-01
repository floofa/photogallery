<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Photogallery extends ORM_Classic 
{
  protected $_sorting = array ('timestamp' => 'DESC');
  protected $_belongs_to = array ('photogallery_category' => array ());
  protected $_form_date_fields = array ('timestamp');
  
  public function set_list_item_default(&$arr, $item) 
  {
    $arr['date'] = date('d.m.Y', $item->timestamp);
    $arr['category'] = $item->photogallery_category->name;
    $arr['cms_status'] = ($item->cms_status) ? ___('basic_yes') : ___('basic_no');
  }
}
