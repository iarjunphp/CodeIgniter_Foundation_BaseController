<!DOCTYPE html>
<!--[if IE 8]> 				 
<html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.css">
<script src="<?php echo base_url(); ?>assets/js/vendor/custom.modernizr.js"></script>
<?php 
/*meta data*/
echo meta($name = 'viewport', $content = 'width=device-width, initial-scale=1.0');
echo meta('description',$description);
echo meta('keywords',$keywords);
echo meta('author',$author);

/*extra CSS*/
foreach($css as $c):
     echo link_tag(CSS.$c);
 endforeach;

/*extra fonts*/
foreach($fonts as $f):
 echo link_tag("http://fonts.googleapis.com/css?family=".$f);
endforeach;

?>
</head>
<body>
<?php

// load view data
echo $body; 

?>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'assets/js/vendor/zepto' : 'assets/js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation.min.js"></script>
  <!--
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.alerts.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.clearing.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.cookie.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.dropdown.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.forms.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.joyride.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.magellan.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.orbit.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.reveal.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.section.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.tooltips.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.topbar.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.interchange.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.placeholder.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/foundation/foundation.abide.js"></script>
  
  -->
  
<script>
    $(document).foundation();
</script>
<?php
// load Extra javascript
foreach($javascript as $js): ?>
 <script src="<?php echo base_url('assets/js/'.$js); ?>"></script>
<?php endforeach;
?>
</body>
</html>
