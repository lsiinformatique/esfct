<!--********************************************* Footer start *********************************************-->
    <div id="footer">
    <div class="row">
      <div class="footer_widget">
        <div class="header"><a href="#">About ESFCT</a></div>
        <div class="body">
          <p><img alt="alt_example" src="./images/about_img.png" align="left" style="margin:0px 15px 5px 0px;"  />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <p>Praesent aliquet justo quis lacus mollis molestie pellentesque habitant morbi tristique senectus et e. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque pulvinar urna eget ante pharetra vitae fermentum dui sagittis. Vivamus non ipsum elit, et tincidunt quam.</p>
          <img alt="alt_example" src="./images/orizon_about.png" style="margin:11px 0px 0px 55px;"/></div>
      </div>
      <div class="divider_footer"></div>
<!--       <div id="latest_media">
        <div class="header"><a href="#">latest media</a></div>
        <div class="body">
          <ul id="l_media_list">
            <li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
            <li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
            <li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
            <li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
            <li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
            <li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
            <li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
            <li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
            <li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
            <li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
          </ul>
        </div>
      </div> -->
      <div class="clear"></div>
    </div>
    </div>
    <!--********************************************* Footer end *********************************************--> 
        <div class="clear"></div>
    <!--********************************************* Twitter feed start *********************************************-->
    <div id="twitter_last"> 

      <div id="tr_right">
        <ul id="tw">
          <li>Salut</li>
        </ul>
      </div>
    </div>
    <!--********************************************* Twitter feed end *********************************************--> 
  
  </div>
  <!--********************************************* Main_in end *********************************************--> 
  
  <a id="cop_text" href="#"> Copyright &copy; ESFCT 2013 Tous droit réservé.</a> 
  </div>
</div>
<!--********************************************* Main wrapper end *********************************************--> 

<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>javascript/jquery.carouFredSel-6.1.0.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>javascript/jquery.cslider.js" type="text/javascript" ></script> 
<script src="<?php echo $rootsite; ?>javascript/modernizr.custom.28468.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>javascript/getTweet.js" type="text/javascript" ></script> 
<script src="<?php echo $rootsite; ?>javascript/jquery.fancybox.js?v=2.1.3" type="text/javascript" ></script> 

<!--******* Javascript Code for the Hot news carousel *******--> 
<script type="text/javascript">
  $(document).ready(function() {
  
    // Using default configuration
    $("#sd").carouFredSel();
    
    // Using custom configuration
    $("#hot_news_box").carouFredSel({
      items       : 3,
      direction     : "right",
      prev: '#prev',
      next: '#next',
      scroll : {
        items     : 1,
        height      : 250,
        easing      : "quadratic",
        duration    : 2000,             
        pauseOnHover  : true
      } 
    }); 
  })
</script> 


<!--******* Javascript Code for the Main banner *******--> 
<script type="text/javascript">
  $(function() {
  
    $('#da-slider').cslider({
      autoplay  : true,
      bgincrement : 450
    });
  
  });
</script> 

<!--******* Javascript Code for the image shadowbox *******--> 
<script type="text/javascript">
$(document).ready(function() {
  /*
  *  Simple image gallery. Uses default settings
  */
  
  $('.shadowbox').fancybox();
});
</script>

<!--******* Javascript Code for the menu *******-->

<script type="text/javascript">
    $(document).ready(function() {
        $('#menu li').bind('mouseover', openSubMenu);
        $('#menu > li').bind('mouseout', closeSubMenu);

        function openSubMenu() {
            $(this).find('ul').css('visibility', 'visible');
        };

        function closeSubMenu() {
            $(this).find('ul').css('visibility', 'hidden');
        };
    });
</script>

<script type="text/javascript">
    $(function() {
        var pull    = $('#pull');
        menu    = $('ul#menu');

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w > 767 && $('ul#menu').css('visibility', 'hidden')) {
                $('ul#menu').removeAttr('style');
            };
            var menu = $('#menu_wrapper').width();
            $('#pull').width(menu - 20);
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        var menu = $('#menu_wrapper').width();
        $('#pull').width(menu - 20);
    });
</script>
</body>
</html>