<?php
header('Content-Type: text/html; charset=UTF-8');
// Echoed because short_open_tag = On would cause problems otherwise
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>CrazyStat - Example file</title>
  <style type="text/css">
  .crazystat_counter /* Layout of the textcounter (if activated) */
   {
   /* you can modify these as desired */
   font-family: Arial;
   font-size: 16pt;   
   font-weight: bold; 
   font-style: italic;
   color: #0033CC;    
   }
  </style>
 </head>
 <body>
 <h1>Example file</h1>
 <p>This is some dummy text... and now CrazyStat is included:</p>
 <?php
 @include_once("stat/src/include.php");
 // Output text counter (if activated)
 if(isset($counter_value)) echo '<span class="crazystat_counter">'.$counter_value.'</span>';
 ?>
 <p>
 That's the include-code:</p>
 <p><code style="font-family:Courier">&lt;?php @include_once("stat/src/include.php"); ?&gt;</code></p>
 <p>
 You have to put this code between &lt;body&gt; and &lt;/body&gt; because the statistic includes an image (even if counter is disabled).<br />
 <strong>Files in which this code is included must have '.php' as file extension.</strong><br />
 More information in <a href="stat/doc/README_en.html#installation">README_en.html</a> (English) or <a href="stat/doc/README_de.html#installation">README_de.html</a> (German).<br />
 This is a XHTML-page and <u>if you set $config_xhtml=true</u>, this page is valid XHTML.
 </p>
 </body>
</html>