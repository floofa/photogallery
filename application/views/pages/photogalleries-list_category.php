<h1 class="nadpis-hlavni"><?=$category->name?></h1>

<?foreach ($items as $item):?>
  <div>
    <h2><a href="<?=$item->get_url()?>"><?=$item->name?></a></h2>
  </div>
<?endforeach;?>