<?php defined('SYSPATH') or die('No direct script access.');

Route::set('photogalleries-get', 'fotogalerie/<category_rew_id>/<rew_id>')
  ->defaults(array(
    'controller' => 'photogalleries',
    'action' => 'get',
));

Route::set('photogalleries-category', 'fotogalerie/<category_rew_id>')
  ->defaults(array(
    'controller' => 'photogalleries',
    'action' => 'list_category',
));

Route::set('photogalleries', 'fotogalerie')
  ->defaults(array(
    'controller' => 'photogalleries',
    'action' => 'list',
));


