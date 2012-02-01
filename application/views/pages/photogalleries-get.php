<h1 class="nadpis-hlavni"><?=$item->name?></h1>

<?if (strlen($item->description)):?>
  <p><?=$item->description?></p>
<?endif;?>

<?if ($images = $item->get_gallery_items()):?>
  <?foreach ($images as $key => $image):?>
    <a href="<?=$image->get_src()?>" class="fancybox" title="<?=$image->description?>" rel="photogallery-<?=$item->id?>"><img src="<?=$image->get_src('s')?>" alt="<?=$image->description?>" /></a>
  <?endforeach;?>
<?endif;?>