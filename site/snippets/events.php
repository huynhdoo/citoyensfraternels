<!-- snippet events -->
<?php 
  if ($content) : $page = page($content); endif 
?>
<div id="homenews" class="clearfix">
  <div class="title"><a href="<?php echo $page->url() ?>"><h3><?php echo $page->title() ?></h3></a></div>
  <?php foreach($page->children()->visible()->sortBy('time', 'desc')->limit($limit) as $event): ?>
  <!-- event -->
  <div class="newsitem clearfix">
    <div class="date"><?php echo $event->date('d/m/Y','time') ?></div>
    <div class="newstitle"><a href="<?php echo $event->url() ?>"><?php echo $event->title()->html() ?></a></div>
  </div>
  <!-- end event -->
  <?php endforeach ?>
  <div class="new clearfix">
    <div class="left">// Partagez-nous vos événements : <a href='mailto:<?php echo $site->email() ?>'><?php echo $site->email() ?></a>.</div>
    <div class="right"><a href="./actualites">Voir toutes les &eacute;v&eacute;nements &rarr;</a></div>
  </div>
</div>
<!-- snippet events -->