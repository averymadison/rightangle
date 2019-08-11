<?php snippet('nav') ?>

<div class="wrapper">
  <div class="page-title">
    <h1><?php echo $page->title()->html() ?></h1>
  </div>

  <div class="page-content">
    <?= $page->text()->kirbytext() ?>

    <div class="contact-info">
      <div class="contact-phone">
        <h4 class="contact-label">Call</h4>
        <a class="contact-link" href="tel:<?= $site->phone()->text() ?>">
          <?= $site->phone()->html() ?>
        </a>
      </div>
      <div class="contact-email">
        <h4 class="contact-label">Email</h4>
        <a class="contact-link" href="mailto:<?= $site->email()->text() ?>">
          <?= $site->email()->html() ?>
        </a>
      </div>
    </div>
  </div>

<?php snippet('footer') ?>
