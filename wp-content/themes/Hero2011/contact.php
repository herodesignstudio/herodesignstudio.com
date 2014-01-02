<?php
/*
Template Name: Contact
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="sopHSa-hZlO76Cw9smKb3AiYnBLAuphg3k_WGyZorOI" />
<meta name="google-site-verification" content="dWKn1AaRB5GoI2Tx_G0m4YlHUR0ewlX3oCpfMEaYAeo" />
<meta name="description" content="Hero Design Studio is a design and marketing agency located in downtown Denver, Colorado." />
<meta name="keywords" content="Design and Marketing Agency, Denver Colorado, Graphic Design Studio, Web Design Denver, Denver Design Agency, Denver Marketing Agency, Inbound Marketing Agency" />
<title><?php if (is_home()) { ?> Denver Graphic Design Studio and Marketing Agency :: Hero Design Studio <?php } else { ?> <?php wp_title('', true, 'right'); ?> ::  <?php bloginfo('name'); ?> <?php } ?></title>

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/fav_ico.ico" type="image/x-icon"/>
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/fav_ico.ico" type="image/x-icon"/>
<link rel="alternate" type="application/rss+xml" title="Hero Design Studio (RSS 2.0)" href="http://blog.herodesignstudio.com/?feed=rss2" />

<?php if (is_page('about')) { ?>
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/SpryTabbedPanels.js" type="text/javascript"></script>
<?php } ?>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.smooth-scroll.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/twitter-1.13.1.min.js"></script>
<?php if (is_home()) { ?> <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.lazyload.js"></script> <?php } ?>
<script type="text/javascript">
	$("img").lazyload();
</script>
<script type="text/javascript">
$(document).ready(function() {
      $('.goingUp a').smoothScroll({
        afterScroll: function() {
        }
      });
    });
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<script type="text/javascript">	
	getTwitters('tweet', { 
	id: 'HeroStudio', 	
	count: 4, 
	enableLinks: true, 
	ignoreReplies: true, 
	clearContents: true,
	template: '<a target="_blank" href="http://twitter.com/HeroStudio"><strong>@HeroStudio</strong></a> "%text%"'
	});
</script>

<?php wp_head(); ?>

</head>

<body onload="MM_preloadImages('<?php bloginfo('stylesheet_directory'); ?>/images/more-work-roll.gif','<?php bloginfo('stylesheet_directory'); ?>/images/going-up-roll.gif','<?php bloginfo('stylesheet_directory'); ?>/images/connect-roll.gif')">
<!--Begin Wrapper-->
<div class="wrapper">

	<span class="redLine"></span>
    
    <!--Begin Header-->
  <div class="header">
    	
        <a href="http://www.herodesignstudio.com/"><img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/hero-design-studio.gif" height="72" width="210" alt="Hero Design Studio" title="Hero Design Studio" /></a>
        
		<ul class="nav">
        <li><a href="/our-work">Work</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="http://blog.herodesignstudio.com/" >Blog</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        
        <div class="connect">
        	
			<div style="display:none;">
            	<ul>
                    <li><a href="http://twitter.com/HeroStudio" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" width="22" height="22" alt="Twitter" title="Twitter"  /></a></li>
                    <li><a href="http://www.facebook.com/home.php?#/pages/Denver-CO/Hero-Design-Studio/43191417668?ref=ts" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" width="22" height="22" alt="Facebook" title="Facebook"  /></a></li>
                    <li><a href="http://www.linkedin.com/companies/115526?trk=ape_s000001e_1000" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedIn.png" width="22" height="22" alt="LinkedIn" title="LinkedIn"  /></a></li>
                    <li><a href="http://blog.herodesignstudio.com/feed/?cat=-8" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" width="22" height="22" alt="RSS" title="RSS"  /></a></li>
                </ul>
			</div>
        	<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('connect','','<?php bloginfo('stylesheet_directory'); ?>/images/connect-roll.gif',1)"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/connect.gif" alt="Connect With Hero" name="connect" width="21" height="27" border="0" id="connect" title="Connect with Hero" /></a>
        
        </div>
    
    </div>
    <!--End Header-->

		<!--Begin Content-->
    		<div class="content">
            
            	<div class="contact-Desc">
                <h1>A good conversation is a great start.</h1>
                <h2>Give us a call or drop us a line and let's talk about translating <br />your marketing strategies from thinking into doing.</h2>
                </div>
				
  <div class="contact-body">
                
                	<div id="inputArea" class="contact-services">
					
                    <h4>Contact Us</h4>

                    <form action="http://herodesignstudio.web11.hubspot.com/Default.aspx?app=iframeform&hidemenu=true&ContactFormID=67958" method="post">
                        <input type="hidden" name="FormSubmitRedirectURL" id="FormSubmitRedirectURL" value="http://www.herodesignstudio.com/contact/" >
                        <input type="hidden" name="Lead_Src" id="LeadSrc" value="Contact Us" />
                        
                        
                    <script type='text/javascript' language='javascript'>/* <![CDATA[ */
                       HubSpotFormSpamCheck_LeadGen_ContactForm_67958_m0 = function() {
                           var key = document.getElementById('LeadGen_ContactForm_67958_m0spam_check_key').value;
                           var sig = '';
                           for (var x = 0; x< key.length; x++ ) {
                                    sig += key.charCodeAt(x)+13;
                           }
                           document.getElementById('LeadGen_ContactForm_67958_m0spam_check_sig').value = sig; 
                           /* Set the hidden field to contain the user token */
                           var results = document.cookie.match ( '(^|;) ?hubspotutk=([^;]*)(;|$)' );
                            if (results && results[2]) {
                                document.getElementById('LeadGen_ContactForm_67958_m0submitter_user_token').value =  results[2];
                            } else if (window['hsut']) {
                                document.getElementById('LeadGen_ContactForm_67958_m0submitter_user_token').value = window['hsut'];
                            }
                            return true;
                       };
                    /*]]>*/</script>
                    
                    <input type='hidden' id='LeadGen_ContactForm_67958_m0submitter_user_token' name='LeadGen_ContactForm_67958_m0submitter_user_token'  value='' /><input type='hidden' name='ContactFormId'  value='67958' /><input type='hidden' id='LeadGen_ContactForm_67958_m0spam_check_key' name='LeadGen_ContactForm_67958_m0spam_check_key'  value='nqdqmmkgqkqseflpjnkohplplfknhirjpinlqsjskdgmjukuoinqehoporpc' /><input type='hidden' id='LeadGen_ContactForm_67958_m0spam_check_sig' name='LeadGen_ContactForm_67958_m0spam_check_sig'  value='' /><div class='ContactFormItems FormClassID_67958'><table border="0" cellspacing="0" cellpadding="5">
                    <tr><td>&nbsp;</td><td>First Name <span style='color: red'> *</span></td></tr>
                    <tr><td>&nbsp;</td><td><input type="Text" name="LeadGen_ContactForm_67958_m0:FirstName" class="StandardI AutoFormInput LeadGen_ContactForm_67958_m0_AutoForm" id="LeadGen_ContactForm_67958_m0_FirstName" value="" /><div class="fieldclear"></div></td></tr>
                    <tr><td>&nbsp;</td><td>Last Name <span style='color: red'> *</span></td></tr>
                    <tr><td>&nbsp;</td><td><input type="Text" name="LeadGen_ContactForm_67958_m0:LastName" class="StandardI AutoFormInput LeadGen_ContactForm_67958_m0_AutoForm" id="LeadGen_ContactForm_67958_m0_LastName" value="" /><div class="fieldclear"></div></td></tr>
                    <tr><td>&nbsp;</td><td>Email <span style='color: red'> *</span></td></tr>
                    <tr><td>&nbsp;</td><td><input type="Text" name="LeadGen_ContactForm_67958_m0:Email" class="StandardI AutoFormInput LeadGen_ContactForm_67958_m0_AutoForm" id="LeadGen_ContactForm_67958_m0_Email" value="" /><div class="fieldclear"></div></td></tr>
                    <tr><td>&nbsp;</td><td>Company <span style='color: red'> *</span></td></tr>
                    <tr><td>&nbsp;</td><td><input type="Text" name="LeadGen_ContactForm_67958_m0:Company" class="StandardI AutoFormInput LeadGen_ContactForm_67958_m0_AutoForm" id="LeadGen_ContactForm_67958_m0_Company" value="" /><div class="fieldclear"></div></td></tr>
                    <tr><td>&nbsp;</td><td>Phone</td></tr>
                    <tr><td>&nbsp;</td><td><input type="Text" name="LeadGen_ContactForm_67958_m0:Phone" class="StandardI AutoFormInput LeadGen_ContactForm_67958_m0_AutoForm" id="LeadGen_ContactForm_67958_m0_Phone" value="" /><div class="fieldclear"></div></td></tr>
                    <tr><td>&nbsp;</td><td>Message</td></tr>
                    <tr><td>&nbsp;</td><td><textarea type="Text" name="LeadGen_ContactForm_67958_m0:Message" class="StandardI AutoFormInput LeadGen_ContactForm_67958_m0_AutoForm" id="LeadGen_ContactForm_67958_m0_Message"  ></textarea><div class='fieldclear'></div></td></tr>
                    <tr><td></td><td><input onclick='return HubSpotFormSpamCheck_LeadGen_ContactForm_67958_m0();' class='FormSubmitButton' type='submit' name='LeadGen_ContactForm_Submit_LeadGen_ContactForm_67958_m0' value="Submit"></td></tr>
                    </table></div>
                    
                        </form>
    

                    </div>
                    
                    <div class="contact-services">
                      <h4>Hero on Earth</h4>
                      <p>If you want to send a package or<br />
                      give us a ring, you'll find us here:</p>
                      <p><b><a href="http://maps.google.com/maps?q=802+E.+19th+Avenue,+Denver+CO+80218&amp;hl=en&amp;hnear=802+E+19th+Ave,+Denver,+Colorado+80218&amp;gl=us&amp;sqi=2&amp;t=m&amp;z=16&amp;vpsrc=0" target="_blank">802 E 19th Ave, Denver 80218</a></b></p>
                      <p><b>303.832.3310</b></p>
                      <p><b><a href="mailto:info@herodesignstudio.com">info@herodesignstudio.com</a></b></p>
    </div>
                    
                    <div class="contact-services rightServices">
                      <h4>Let's be social</h4>
                      <p>Want to keep up to date with<br /> what we're up to?</p>
                      <ul>
                      	<li><a href="http://www.linkedin.com/companies/115526?trk=ape_s000001e_1000" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.jpg" width="22" height="22"  /> <b>Expand your network</b></a></li>
                        <li><a href="http://www.facebook.com/home.php?#/pages/Denver-CO/Hero-Design-Studio/43191417668?ref=ts" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb_icon.jpg" width="22" height="22"  /> <b>Become a fan of ours</b></a></li>
                        <li><a href="http://twitter.com/HeroStudio" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.jpg" width="22" height="22"  /> <b>What we're thinking about<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; right. this. instant.</b></a></li>
                      </ul>
</div>
                    
                
                </div>
    
    		</div>
            <!--End Content-->
	
<?php get_footer(); ?>