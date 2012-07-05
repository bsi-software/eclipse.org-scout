<?php
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *
 *******************************************************************************/
  define("PATH_SCOUT_HOME", "../");
  include_once(PATH_SCOUT_HOME."constants.php");

  # Eclipse Webpages Framework
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
  $App = new App();
  $Nav = new Nav();
  $Menu = new Menu();
  include($App->getProjectCommon());

  # Begin: page-specific settings.  Change these.
  $pageTitle 	= "Eclipse Scout - Documentation";
  $pageKeywords	= "documentation, information, eclipse, scout";
  $pageAuthor	= "BSI Business System Integration AG";

  # Paste your HTML content between the EOHTML markers!
  ob_start();
  ?>
	<div id="midcolumn">
		<h1>Documentation</h1>
		<p>Find the documentation you need.</p>

		<div style="clear: both;" class="homeitem3col" id="tutorials">
			<h3>Wiki Tutorials</h3>

			<p>Different <a href="<?php echo URL_TUTORIAL; ?>">tutorials</a> are available on Eclipsepedia.</p>

			<p>If you are new to Eclipse Scout, you should consider the <a href="<?php echo URL_TUTORIAL_HELLOWORLD; ?>">Hello World tutorial</a>. In a couple of minutes, you will create a very simple application step by step.</p>

			<p>Deploying a Scout Application on Tomcat is very easy, learn more in the <a href="<?php echo URL_TUTORIAL_TOMCAT; ?>">Deploy a Scout Application to Tomcat tutorial</a>.</p>

			<p><img alt="Eclipse Scout" src="<?php echo PATH_SCOUT_HOME; ?>/img/tutorial_screenshot.png" width="470" height="415"/></p>

    		<p></p>
		</div>

		<div style="clear: both;" class="homeitem3col" id="screencasts">
			<h3>Video Tutorials</h3>

			<p>Videos show you step by step how to use Eclipse Scout.</p>

			<p>
				<iframe title="YouTube video player" class="youtube-player" type="text/html" width="560" height="345" src="http://www.youtube.com/embed/cDsKszUY56Q" frameborder="0" allowFullScreen></iframe>
			</p>

    		<p>All screencasts are listed <a href="<?php echo URL_SCREENCASTS; ?>" title='Eclipse Scout Screencasts' >on this page</a></p>

		</div>

		<div style="clear: both;" class="homeitem3col" id="slides">
			<h3>Slides</h3>

			<p>Presentation material of the conferences on Eclipse Scout are listed <a href="<?php echo URL_SLIDES; ?>">on this page</a></p>

		</div>

		<div style="clear: both;" class="homeitem3col" id="wiki">
			<h3>Wiki</h3>

			<p>Documentation can be found here: <a href="<?php echo URL_WIKI; ?>" title='Eclipse Scout wiki' >Scout page on Eclipsepedia</a></p>

		</div>

	</div>

  <?php
  $html = ob_get_clean();

  # Generate the web page
  $App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
  ?>