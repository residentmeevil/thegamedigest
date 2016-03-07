<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/dist/css/styles.css') ?>

</head>
<body>

  <header class="header cf" role="banner">

      <div class="col-sm-5">
        <a class="logo" href="<?php echo url() ?>">
          <img src="<?php echo url('assets/dist/img/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" class="responsive-image" />
        </a>
      </div>

      <div class="col-sm-6">
        <?php snippet('menu') ?>
      </div>
  </header>
