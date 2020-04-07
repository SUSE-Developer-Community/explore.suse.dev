<?php
/**
 * The Page content template file.
 *
 * @package ThinkUpThemes
 */
?>
<div id="content">
  <h2><?php thinkup_title_select() ?></h2>
  <div id="content-core">
    <div id="main">
      <div id="main-core">

<?php the_content(); ?>

      </div><!-- #main-core -->
    </div><!-- #main -->
    <?php thinkup_sidebar_html(); ?>
  </div>
</div><!-- #content -->

<?php thinkup_input_allowcomments2(); ?>
