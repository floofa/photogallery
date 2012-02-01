<h1 class="nadpis-hlavni">Fotogalerie</h1>

<?foreach ($categories as $category):?>
  <div>
    <h2><a href="<?=$category->get_url()?>"><?=$category->name?></a></h2>
  </div>
<?endforeach;?>