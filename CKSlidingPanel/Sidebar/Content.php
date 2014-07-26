<style type="text/css">
  div#ckslidingpanel {
    display: none;
    position: fixed;
    border: 1px solid black;
    height: <?php echo esc_attr($options['height']) ?>;
    width: <?php echo $options['width'] ?>;
    <?php echo $options['align'] ?>: -<?php echo $options['width_with_border'] ?>;
    top: <?php echo esc_attr($options['top']) ?>;
    background-color: <?php echo esc_attr($options['backgroundColor']) ?>;
    color: <?php echo esc_attr($options['color']) ?>;
    z-index: 999999;
    <?php if ($options['align'] == 'left') : ?>
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    box-shadow: 1px 0px 1px 0px <?php echo esc_attr($options['color']) ?>;
    <?php else: ?>
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    box-shadow: -1px 0px 1px 0px <?php echo esc_attr($options['color']) ?>;
    <?php endif; ?>
  }
  div#ckslidingpanel_link_content {
    border: 0;
    padding: 0;
    margin: 0;
    width: 100%;
    position: absolute;
    top: 50%;
    <?php if ($options['align'] == 'left') : ?>
    left: <?php echo esc_attr($options['menu_left']) ?>;
    transform: rotate(90deg);
    <?php else: ?>
    right: <?php echo esc_attr($options['menu_left']) ?>;
    transform: rotate(-90deg);
    <?php endif; ?>
    display: block;
    text-align:center;
  }
  div#ckslidingpanel_link_area {
    background-color: <?php echo esc_attr($options['backgroundColor']) ?>;
    border: 1px solid <?php echo esc_attr($options['backgroundColor']) ?>;
    <?php if ($options['align'] == 'left') : ?>
    box-shadow: 1px 0px 1px 0px <?php echo esc_attr($options['color']) ?>;
    <?php else: ?>
    box-shadow: -1px 0px 1px 0px <?php echo esc_attr($options['color']) ?>;
    <?php endif; ?>
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    display: inline-block;
  }
  span#ckslidingpanel_link_text {
    padding-right: 20px;
    padding-left: 20px;
    display: inline-block;
    white-space: nowrap;
    font-size: 18px;
  }
  a#ckslidingpanel_link {
    color: <?php echo esc_attr($options['color']) ?>;
    text-decoration: none;
  }
  div#ckslidingpanel_content {
    width:  <?php echo esc_attr($options['width_content']) ?>;
    position: relative;                                                    
    height: 90%;
    top: 48px;
    left: 16px;
    overflow-y: auto;
    overflow-x: hidden;
    -ms-overflow-style: none;
    text-align: justify;
    text-justify: inter-word;
  }
  .ckwidget {
    color: <?php echo esc_attr($options['color']) ?>;
    background-color: <?php echo esc_attr($options['backgroundColor']) ?>;
  }
  .ckwidget a {
    color: <?php echo esc_attr($options['color']) ?>;
    background-color: <?php echo esc_attr($options['backgroundColor']) ?>;
  }

  div#ckslidingpanel_close_button {
    position: absolute;
    top: -32px;
    <?php if ($options['align'] == 'left') : ?>
    right: 8px;
    <?php else: ?>
    left: 8px;
    <?php endif; ?>
  }

  a#ckslidingpanel_close_button_link {
      color: <?php echo esc_attr($options['color']) ?>;
      background-color: <?php echo esc_attr($options['backgroundColor']) ?>;
      font-size: 32px;
      font-weight: bold;
      line-height: 30px;
      text-shadow: 0 1px 0 <?php echo esc_attr($options['backgroundColor']) ?>;
      opacity: 0.6;
      filter: alpha(opacity=60);
      text-decoration: none;
  }

  a#ckslidingpanel_close_button_link:hover {
      text-decoration: none;
      opacity: 1;
      filter: alpha(opacity=100);
      cursor: pointer;
  }
</style>

<div id="ckslidingpanel">
    <div id="ckslidingpanel_close_button">
        <h3><a href="#" id="ckslidingpanel_close_button_link">&times;</a></h3>
    </div>
    <div id="ckslidingpanel_link_content">
        <div id="ckslidingpanel_link_area">
            <span id="ckslidingpanel_link_text">
                <a href="#" id="ckslidingpanel_link"><?php echo esc_attr($options['text']) ?></a>
            </span>
        </div>
    </div>
    <div id="ckslidingpanel_content">
        <?php dynamic_sidebar('ckslidingpanel_sidebar') ?>
    </div>
</div>

<script type="text/javascript">
(function($) {
    var isOpen = sessionStorage.getItem('ckslidingpanel_open');
    $('a#ckslidingpanel_link, a#ckslidingpanel_close_button_link').click(function() {
        if (isOpen == 1) {
            sessionStorage.setItem('ckslidingpanel_open', isOpen = 0);
            $("div#ckslidingpanel").animate({"<?php echo $options['align'] ?>":"-=<?php echo $options['width_with_border'] ?>"}, "slow");
        } else {
            sessionStorage.setItem('ckslidingpanel_open', isOpen = 1);
            $("div#ckslidingpanel").animate({"<?php echo $options['align'] ?>":"+=<?php echo $options['width_with_border'] ?>"}, "slow");
        }
    });
    if (isOpen == 1) {
        $('div#ckslidingpanel').css("<?php echo $options['align'] ?>", "0px");
    }
    $('div#ckslidingpanel').show();
})(jQuery);
</script>
