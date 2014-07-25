<style type="text/css">
  div#ckslidingpanel {
    display: none;
    position: fixed;
    border: 1px solid black;
    height: 100%;
    width: 350px;
    <?php echo $options['align'] ?>: -354px;
    top: 0px;
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
    width: 350px;
    position: absolute;
    top: 50%;
    <?php if ($options['align'] == 'left') : ?>
    left: 191px;
    transform: rotate(90deg);
    <?php else: ?>
    right: 191px;
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
    width: 315px;
    position: relative;                                                    
    height: 90%;
    top: 5%;
    left: 4%;
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
</style>

<div id="ckslidingpanel">
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
    $('a#ckslidingpanel_link').click(function() {
        if (isOpen == 1) {
            sessionStorage.setItem('ckslidingpanel_open', isOpen = 0);
            $("div#ckslidingpanel").animate({"<?php echo $options['align'] ?>":"-=354px"}, "slow");
        } else {
            sessionStorage.setItem('ckslidingpanel_open', isOpen = 1);
            $("div#ckslidingpanel").animate({"<?php echo $options['align'] ?>":"+=354px"}, "slow");
        }
    });
    if (isOpen == 1) {
        $('div#ckslidingpanel').css("<?php echo $options['align'] ?>", "0px");
    }
    $('div#ckslidingpanel').show();
})(jQuery);
</script>
