<?php
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: BSI AG
 *
 *******************************************************************************/
	define("PATH_SCOUT_HOME", "./");
	include_once(PATH_SCOUT_HOME."constants.php");
	
	//Eclipse Webpages Framework
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());

	$localVersion = false;

	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, project, scout, application framework";
	$pageAuthor		= "Matthias Zimmermann";
	$pageTitle 		= "Eclipse Scout - Project Home";

	# Paste your HTML content between the EOHTML markers!	
	ob_start();
?>
  <div id="page">
    <div id="page_left">
      <div id="scout_header">
        <h1>Eclipse Scout</h1>
        <p>Business application framework</p>
        <p><a href="<?php echo SITE_DOWNLOAD; ?>"><img src="img/download.png" title="Download Eclipse Scout" /></a></p>      
		</div>
      <div id="scout_description">
        <p>The objective of Eclipse Scout is to substantially reduce the development time needed for SOA and Java-conforming business software. Scout includes: an application model, a reference implementation, proven development functions and a comprehensive tool: the Scout SDK. <a href="<?php echo URL_LEARN_MORE; ?>"> Learn more >></a></p>
      </div>
      <div id="scout_value1" class="scout_value">
        <h3>Simple</h3>
        <p> Looking for an an application framework where you really get what you see? Then you might really like to have a look at the <a href="<?php echo URL_SCREENCASTS; ?>">Eclipse Scout Screencasts >></a></p>
        <p><a href="<?php echo URL_SCREENCAST_YOUTUBE; ?>"><img src="img/foto1.png" title="Scout is simple" /></a></p>
      </div>
      <div id="scout_value2" class="scout_value">
        <h3>Stable</h3>
        <p>Searching for an application framework that surprises you with reliability, and not with bugs and error messages? Welcome to the <a href="<?php echo SITE_DOWNLOAD; ?>">Eclipse Scout download >></a></p>
        <p><a href="<?php echo SITE_DOWNLOAD; ?>"><img src="img/download_big.png" title="Download Eclipse Scout" /></a></p>      
      </div>
      <div id="scout_value3" class="scout_value">
        <h3>Flexible</h3>
        <p>Dreaming of an application framework that combines easy learning with powerful adapting?<br />
        Why don't you check out our <a href="<?php echo URL_TUTORIAL; ?>">Eclipse Scout tutorial >></a></p>
        <p><a href="<?php echo URL_TUTORIAL; ?>"><img src="img/foto2.png" title="Scout is flexible" /></a></p>
      </div>
    </div>
    <div id="page_right">
    	<div class="scout_boxtop">
           <h2>INFO</h2>
       </div>
       <div class="scout_boxmid">
       		<p><a href="<?php echo URL_SUMMARY; ?>">Project Summary</a></p>
       		<p>&nbsp;</p>
       		<p>Read the <a href="<?php echo URL_WIKI; ?>">Scout wiki</a>: Screencasts, tutorials, and more... 
       			Visit the <a href="<?php echo URL_SCOUT_FORUM; ?>">Forum</a> to ask questions, provide feedback, get in touch. </p>
	        <p>&nbsp;</p>
       		<p>Our <a href="<?php echo URL_BLOG; ?>">Blog</a> is pushing out information to you. If that's not enough you can also <a href="<?php echo URL_TWITTER; ?>">follow us on Twitter</a>.
       			Read the  Screencasts, tutorials, and more... 
       			Visit the  to ask questions, provide feedback, get in touch. </p>
	     </div>
       <div class="scout_boxbot">
           &nbsp;
       </div>
    	<p id="incubation"><a href="<?php echo URL_ECLIPSE_INCUBATION; ?>"><img src="img/egg-incubation.png" title="Eclipse incubation" /></a></p>
    </div>
  </div>
<?php
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>