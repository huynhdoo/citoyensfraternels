<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo strip_tags($site->description()->kt()) ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <meta property="og:title" content="<?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?>" />
	<meta property="og:description" content="<?php echo substr(strip_tags($page->text()->kt()), 0, 200).'... #'.$site->hastag() ?>" />
	<meta property="og:site_name" content="<?php echo $site->title() ?>" />
	<meta property="og:type" content="<?php echo $page->template() ?>" />
	<meta property="og:url" content="<?php echo $page->url() ?>" />
	<?php if($image = $page->image($page->cover())): ?>
    <meta property="og:image" content="<?php echo $image->url() ?>" />
  <?php endif ?>

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@citoyensfrat">
	<meta name="twitter:title" content="<?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?> | <?php echo $page->template() ?>">
	<meta name="twitter:description" content="<?php echo substr(strip_tags($page->text()->kt()), 0, 200).'... #'.$site->hastag() ?>">
	<meta name="twitter:creator" content="@citoyensfrat">
  <?php if($image = $page->image($page->cover())): ?>
	<meta name="twitter:image:src" content="<?php echo $image->url() ?>">
	<?php endif ?>
  <meta name="twitter:domain" content="<?php echo $site->url() ?>">

  <?php echo css($site->url().'/assets/css/normalize.css') ?>
  <?php echo css($site->url().'/assets/css/main.css') ?>
  <?php echo css($site->url().'/assets/css/jquery.fancybox.css') ?>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" />
  <script src="<?php echo $site->url() ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-69737808-1', 'auto');
    ga('send', 'pageview');
  </script>

  <!-- Add your site or application content here -->
  <header id="header">
    <div class="container">
      <a href="<?php echo $site->url() ?>">
        <div id="logo">
          <?php if($cover = $site->image($site->cover())): ?>
          <img src="<?php echo thumb($cover, array('width' => 70, 'height' => 70, 'crop' => false))->url()?>" width="70px" height="70px">
          <?php endif ?>
          <div class="logotext">
            <?php echo $site->title()->html() ?><br />
            <div class="desc"><?php echo $site->subtitle()->html() ?></div>
          </div>
        </div>
      </a>
      <?php snippet('menu') ?>
    </div>
  </header>
  <div id="wrapper">
    <div class="container clearfix">
      <div id="content">