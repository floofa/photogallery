<?php defined('SYSPATH') or die('No direct script access.');

return array
(
  'cms_menu_photogalleries_module' => 'Fotogalerie',
  'cms_menu_photogalleries_module_photogalleries' => 'Fotogalerie',
  'cms_menu_photogalleries_module_photogalleries_categories' => 'Kategorie fotogalerií',

  // fotogalerie
  'navigation_photogalleries' => 'Fotogalerie',
  'list_photogallery_heading' => 'Výpis fotogalerií',
  'list_photogallery_new_button' => 'Nová fotogalerie',
  'list_photogallery_fields' => array ('date' => 'Datum', 'name' => 'Název', 'category' => 'Kategorie', 'cms_status' => 'Zobrazit'),

  // kategorie fotogalerii
  'navigation_photogalleries_categories' => 'Kategorie fotogalerií',
  'list_photogallery_category_heading' => 'Výpis kategorií fotogalerií',
  'list_photogallery_category_new_button' => 'Nová kategorie',
  'list_photogallery_category_fields' => array ('name' => 'Název', 'cms_status' => 'Zobrazit'),
  
  //-------- FORMS ------------ //
  
  // fotogalerie
  'form_photogallery_edit_heading' => 'Editace novinky',
  'form_photogallery_edit_group_photogallery_images' => 'Obrázky',
  'form_photogallery_edit_field_name' => 'Nadpis',
  'form_photogallery_edit_field_rew_id' => 'Url',
  'form_photogallery_edit_field_timestamp' => 'Datum',
  'form_photogallery_edit_field_photogallery_category_id' => 'Kategorie',
  'form_photogallery_edit_field_cms_status' => 'Zobrazit',
  'form_photogallery_edit_field_description' => 'Popis',
  
  // kategorie fotogalerii
  'form_photogallery_category_edit_heading' => 'Editace kategorie fotogalerie',
  'form_photogallery_category_edit_field_name' => 'Název',
  'form_photogallery_category_edit_field_rew_id' => 'Url',
  'form_photogallery_category_edit_field_description' => 'Popis',
  'form_photogallery_category_edit_field_cms_status' => 'Zobrazit',
);