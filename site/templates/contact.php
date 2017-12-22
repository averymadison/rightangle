<?php snippet('nav') ?>

<div class="wrapper">
  <div class="page-title">
    <h1><?php echo $page->title()->html() ?></h1>
  </div>

  <div class="page-content">
    <form class="contact-form" action="<?php echo $page->url() ?>" method="POST">
      <div class="form-group-row">
        <div class="form-group">
          <label for="name">Name</label>
          <input<?php if ($form->error('name')): ?> class="error"<?php endif; ?> id="name" name="name" type="text" value="<?php echo $form->old('name') ?>"/>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input<?php if ($form->error('email')): ?> class="error"<?php endif; ?> id="email" name="email" type="email" value="<?php echo $form->old('email') ?>"/>
        </div>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea<?php if ($form->error('message')): ?> class="error"<?php endif; ?> id="message" name="message"><?php echo $form->old('message') ?></textarea>
      </div>

      <?php echo csrf_field() ?>
      <?php echo honeypot_field() ?>
      <input type="submit" class="button" value="Submit">
    </form>
    <?php if ($form->success()): ?>
        Thank you for your message. We will get back to you soon!
    <?php else: ?>
        <?php snippet('uniform/errors', ['form' => $form]) ?>
    <?php endif; ?>
  </div>

<?php snippet('footer') ?>
