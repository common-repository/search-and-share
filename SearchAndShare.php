<?php
/*
Plugin Name: Search and Share - Text Selection
Plugin URI: http://www.latentmotion.com/search-and-share/
Description: This plugin ensures that you get credit for content copied from your website, it improves traffic, it provides context for details in your blog, and it keeps visitors on your site longer. It does all this by providing a helpful set of options to any visitor who selects text on your page, including Copy (with credit), search (wiki, google, wolfram, amazon, ebay), and email (gmail, yahoo mail, outlook).
Author: Brett Barros
Version: 0.9.3
Author URI: http://www.latentmotion.com/
*/

if (!class_exists('sasSelection')) {
    class sasSelection	{

		
		/* PHP 4 Compatible Constructor */
		function sasSelection(){$this->__construct();}
		
		/* PHP 5 Constructor */		
		function __construct(){
		
		}
    }
}

wp_enqueue_script('jquery');

//instantiate the class
if (class_exists('sasSelection')) {
	$sasSelection = new sasSelection();

function sassIncludes()  {
	echo "
	
		<style type='text/css'>#copyMenu li span {background-image:url(" . get_bloginfo('wpurl') . "/wp-content/plugins/search-and-share/images/icons.gif);}</style>
		<script type='text/javascript'>var wpMoviePath = '" . get_bloginfo('wpurl') . "/wp-content/plugins/search-and-share/js/ZeroClipboard.swf';</script>
		<script type='text/javascript' src='" . get_bloginfo('wpurl') . "/wp-content/plugins/search-and-share/js/SearchAndShare.min.js'></script>
	<link type='text/css' href='" . get_bloginfo('wpurl') . "/wp-content/plugins/search-and-share/css/SearchAndShare.css' rel='stylesheet' />

	";

};

add_action ( 'wp_head', 'sassIncludes');





function sassMenu()  {
	echo "
	
<ul id='copyMenu' class='ampSwitch'> 
      <li id='copyLink' class='c1 keep' style='width:120px; height:25px;'><span>Copy / Paste</span></li> 
	  <li id='wp' class='short' title='/?s=[text][pop]'><span>Site Search</span></li>
      <li id='wiki' class='short' title='http://en.wikipedia.org/wiki/w/index.php?search=[text]'><span>Wikipedia</span></li> 
      <li id='google' class='short' title='http://www.google.com/cse?cx=partner-pub-7740231133366464:8kogvuvjbok&amp;ie=ISO-8859-1&amp;q=[text]'><span>Google</span></li> 
      <li id='wolfram' class='short' title='http://www.wolframalpha.com/input/?i=[text]'><span>Facts</span></li> 
      <li id='amazon' class='short' title='http://www.amazon.com/gp/redirect.html?ie=UTF8&amp;location=http%3A%2F%2Fwww.amazon.com%2Fs%3Fie%3DUTF8%26x%3D0%26ref%255F%3Dnb%255Fss%255Fgw%26y%3D0%26field-keywords%3D[text]%26url%3Dsearch-alias%253Daps&amp;tag=latemoti-20&amp;linkCode=ur2&amp;camp=1789&amp;creative=390957[pop]'><span>Amazon</span></li> 
      <li id='ebay' class='short' title='http://shop.ebay.com/items/?_nkw=[text][pop]'><span>eBay</span></li> 
      <li id='outlook' class='long' title='mailto:?subject=Check this out:[title]%22&amp;body=[text]%22... [url]'><span>Outlook</span></li> 
      <li id='gmail' class='long' title='https://mail.google.com/mail/?fs=1&amp;view=cm&amp;shva=1&amp;su=Check this out:%22[title]%22&amp;body=%22[text]...%0D%0D-- [url][pop]'><span>Gmail</span></li> 
      <li id='yahoo' class='long' title='http://compose.mail.yahoo.com/?Subject=[title]&amp;body=[text]... [url][pop]'><span>Y! Mail</span></li> 
      <li id='twitter' class='long' title='http://bit.ly/?url=[url]&amp;keyword=&amp;s=[text] - [pop]'><span>Twitter</span></li> 
      <!-- Please leave credit, I worked hard on this =) --> 
      <li id='credits' class='keep'><a href='http://www.latentmotion.com/search-and-share/' id='credit'>Search &amp; Share</a></li> 
    </ul> 

		
	";

};

add_action ( 'wp_footer', 'sassMenu');


}
?>