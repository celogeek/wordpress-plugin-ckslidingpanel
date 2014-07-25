<style type="text/css">
  div#ckslidingpanel {
    position: fixed;
    border: 1px solid black;
    height: 100%;
    width: 350px;
    left: -354px;
    top: 0px;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    background-color: #000;
    color: #FFF;
    z-index: 999999;
    box-shadow: 1px -1px 1px #FFF;
  }
  div#ckslidingpanel_link_area {
    background-color: #000;
    border: 1px solid #000;
    box-shadow: 1px -1px 1px #FFF;
    position: absolute;
    display: block;
    top: 50%;
    left: 325px;
    text-align: center;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    transform: rotate(90deg);
  }
  div#ckslidingpanel_link_area:hover {
    box-shadow: 0px 0px 0px #000;
  }
  span#ckslidingpanel_link_text {
    padding-right: 20px;
    padding-left: 20px;
    display: inline-block;
    white-space: nowrap;
    font-size: 18px;
  }
  a#ckslidingpanel_link {
    color: #FFF;
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
</style>

<div id="ckslidingpanel">
    <div id="ckslidingpanel_link_area">
        <span id="ckslidingpanel_link_text">
            <a href="#" id="ckslidingpanel_link"><?php echo esc_attr($options['text']) ?></a>
        </span>
    </div>
    <div id="ckslidingpanel_content">
        <?php dynamic_sidebar('ckslidingpanel_sidebar') ?>
    </div>
</div>

<script type="text/javascript">
(function($) {
    var isOpen = sessionStorage.getItem('ckslidingpanel_open');
    $('a#ckslidingpanel_menu_link').click(function() {
        if (isOpen == 1) {
            sessionStorage.setItem('ckslidingpanel_open', isOpen = 0);
            $("div#ckslidingpanel").animate({"left":"-=354px"}, "slow");
        } else {
            sessionStorage.setItem('ckslidingpanel_open', isOpen = 1);
            $("div#ckslidingpanel").animate({"left":"+=354px"}, "slow");
        }
    });
    if (isOpen == 1) {
        $('div#ckslidingpanel').css("left", "0px");
    }
})(jQuery);
</script>
