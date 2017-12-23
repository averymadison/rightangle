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

    <form class="contact-form" action="<?= $page->url() ?>" method="POST">
      <div class="form-messages">
        <?php if ($form->success()): ?>
          <div class="form-success">
            <?= $page->success(); ?>
          </div>
        <?php else: ?>
          <?php snippet('uniform/errors', ['form' => $form]) ?>
        <?php endif; ?>
      </div>
      <div class="form-group-row">
        <div class="form-group">
          <label for="name">Name</label>
          <input<?php if ($form->error('name')): ?> class="error"<?php endif; ?> id="name" name="name" type="text" value="<?= $form->old('name') ?>" placeholder="<?= $page->name_placeholder(); ?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input<?php if ($form->error('email')): ?> class="error"<?php endif; ?> id="email" name="email" type="email" value="<?= $form->old('email') ?>" placeholder="<?= $page->email_placeholder(); ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea<?php if ($form->error('message')): ?> class="error"<?php endif; ?> id="message" name="message" placeholder="<?= $page->message_placeholder(); ?>"><?= $form->old('message') ?></textarea>
      </div>

      <?php echo csrf_field() ?>
      <?php echo honeypot_field() ?>

      <div class="form-submit">
        <input type="submit" class="button primary" value="Send Message">
      </div>
    </form>
  </div>

<?php snippet('footer') ?>
