<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Photogallery extends ORM 
{
  protected $_sorting = array ('timestamp' => 'DESC');
  protected $_belongs_to = array ('photogallery_category' => array ());
  
  public function list_count_all()
  {
    $ids = ORM::factory('photogallery_category')->where('cms_status', '=', 1)->find_all()->as_array('id', 'id');
    
    return $this->where('photogallery_category_id', 'IN', $ids)->count_all();
  }
  
  public function list_all($limit = FALSE, $offset = FALSE)
  {
    // id kategorii povolenych k zobrazeni
    $ids = ORM::factory('photogallery_category')->set_show_conditions()->find_all()->as_array('id', 'id');
    
    $this->where('photogallery_category_id', 'IN', $ids)->set_show_conditions();
    
    if ($limit !== FALSE)
      $this->limit($limit);
    
    if ($offset !== FALSE)
      $this->offset($offset);
    
    return $this->find_all();
  }
  
  public function set_show_conditions()
  {
    $this->where('cms_status', '=', 1);
    $this->where('timestamp', '<=', time());
    
    return $this;
  }
  
  public function get_url()
  {
    return Route::url('photogalleries-get', array ('category_rew_id' => $this->photogallery_category->rew_id, 'rew_id' => $this->rew_id), TRUE);
  }
}
