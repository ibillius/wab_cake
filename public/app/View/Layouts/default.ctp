<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$cakeDescription = __d('cake_dev', 'Brenna & Will\'s Wedding');
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="The official website for Brenna Haraldsen and Will Simpson's wedding!">

        
        <title>
          <?php echo $cakeDescription ?> |
		      <?php echo $title_for_layout; ?>
        </title>
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
        <?php
          echo $this->Html->meta('icon');

          echo $this->Html->css('bootstrap.min');
          echo $this->Html->css('bootstrap-responsive.min');
          echo $this->Html->css('main');

          echo $this->Html->script('/vendor/modernizr-2.6.2-respond-1.1.0.min.js');

          echo $this->fetch('meta');
          echo $this->fetch('css');
          echo $this->fetch('script');
        ?>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>

    </head>
    <body>
      <audio id="meow" controls style="display: none;">
        <source src="/audio/wab_meow.ogg" type="audio/ogg">
        <source src="/audio/wab_meow.mp3" type="audio/mpeg">
        <source src="/audio/wab_meow.wav" type="audio/wav">
      </audio>
      <!-- <img id="woozle" src="/img/ozy_tongue.png" style="position: fixed; bottom: -571px; left: -410px; display:none;" /> -->
      <img id="woozle" src="/img/ozy_tongue.png" style="position: fixed; bottom: -571px; left: -410px; z-index: 1000;" />
    
                <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container center">
          <div class="row">
            <div class="span10 offset1 wrapper_span">
              <img src="img/small_paper_texture.png" class="texture_image">
              <div class="row" id="header_row">
                <div class=" span10  wab_header">
                  <img src="img/wab_header.png" id="header_image" class="bg_image">
                  <div class="content_padding">
                    <h1><?php echo $title_for_layout; ?></h1>
                  </div>
                </div>
              </div><!-- End of row -->
              <div class="row" id="content_row">
                <div class=" span10 wab_content">
                  <img src="img/wab_border_background.png" class="bg_image" id="content-border">
                  <div class="content_padding">
                    <?php echo $this->fetch('content'); ?>
                    <?php echo $this->element('menu'); ?>
                  </div>
                </div>
              </div><!--End of row div -->
              <div class="row" id="footer_row">
                <div class=" span10  wab_footer">
                     <img src="img/wab_footer.png" class="bg_image" id="footer_image">
                </div>
              </div><!--End of row div -->
            </div><!--End of span10 offset1 -->
          </div><!--End of row div -->
        </div><!-- End of container div -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <?php
          echo $this->Html->script('/lightbox/js/lightbox.js');
          echo $this->Html->css('/lightbox/css/lightbox.css');
        ?>

        <?php
          echo $this->Html->script('/vendor/bootstrap.min.js"');
          echo $this->Html->script('main.js');
        ?>
        <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-41417307-1', 'weanandbrill.com');
	  ga('send', 'pageview');

	</script>
	</body>
</html>
