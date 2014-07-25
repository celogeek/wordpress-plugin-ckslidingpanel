<style type="text/css">
  div#ckslidingpanel {
    background-color: black;
  }
</style>
<div id="ckslidingpanel">
    <div id="ckslidingpanel_links">
        <span class="ckslidingpanel_menu_text">
        <a href="#" id="ckslidingpanel_menu_link"><?php esc_attr($options['text']) ?></a>
        </span>
    </div>
    <div class="mcontent">
        <?php dynamic_sidebar('ckslidingpanel_sidebar') ?>
    </div>
</div>

