<?php defined('SYSPATH') or die('No direct script access.');

class Form_Photogallery_Edit extends Forms_List
{
  public function build()
  {
    $this->group('group1');
    $this->col('col1')
      ->add('name')
      ->add('photogallery_category_id', 'select', array ('options' => array ('' => '--- Vyberte ---') + ORM::factory('photogallery_category')->order_by('name', 'ASC')->find_all()->as_array('id', 'name')))
      ->add('timestamp', 'date', date('d.m.Y'));
      
    $this->col('col2')
      ->add('rew_id')
      ->add('cms_status', 'bool', TRUE);
      
    $this->col('col')
      ->add('description', 'textarea');
      
      
    $this->add_gallery();
  }
  
  public function set_rules()
  {
    $this->rules('name', array (
      array ('not_empty'),
      array ('max_length', array (':value', 100)),
    ));
    
    $this->rules('rew_id', array (
      array ('max_length', array (':value', 102)),
    ));
    
    $this->rules('photogallery_category_id', array (
      array ('not_empty'),
    ));
    
    $this->rules('timestamp', array (
      array('date'),
    ));
  }
}
