<?php if(user_access('administer blocks')): ?>
  <div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
      <?php print render($title_prefix); ?>
      <?php if ($block->subject): ?>
        <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
      <?php endif;?>
      <?php print render($title_suffix); ?>
<?php endif; ?>

    <div id="<?php print $block_html_id; ?>" class="block"<?php print $attributes; ?>>
      <?php print $content ?>
    </div>

<?php if(user_access('administer blocks')): ?>
  </div>
<?php endif; ?>
