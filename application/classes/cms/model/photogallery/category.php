<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Photogallery_Category extends ORM 
{
  protected $_sorting = array ('sequence' => 'DESC');
  protected $_has_many = array ('photogallery' => array ());
  
  public function set_show_conditions()
  {
    $this->where('cms_status', '=', 1);
    
    return $this;
  }
  
  public function get_url()
  {
    return Route::url('photogalleries-category', array ('category_rew_id' => $this->rew_id), TRUE);
  }
}
