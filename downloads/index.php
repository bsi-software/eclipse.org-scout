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
  $pageTitle 		= "Eclipse Scout - Downloads";
  $pageKeywords	= "download, eclipse, scout, application framework";
  $pageAuthor		= "BSI AG";


  //Get the downloads
  $repositoryOverviewStr = @file_get_contents(REPOSITORY_OVERVIEW, true);
  if($repositoryOverviewStr) {
	  $repOverview = new SimpleXMLElement($repositoryOverviewStr);	//TODO: test error
  } else {
	  $repOverview = NULL;
  }

  # Paste your HTML content between the EOHTML markers!
  ob_start();
  ?>
	<div id="midcolumn">
		<h1>Downloads</h1>
		<p>
			There is a number of ways to get Eclipse Scout.
			Below, the two most common and simple approaches are described.
			Detailed information on all available methods to download Eclipse
			Scout and access its Source code is provided in the
			<a href="http://wiki.eclipse.org/Scout/HowTo/Install_Scout_SDK">Scout Wiki pages</a>.
		</p>
		<div style="clear: both;" class="homeitem3col" id="package">
			<h3>Download the Package "Eclipse for Scout Developers"</h3>
			<p>If you don't have an Eclipse installation yet or don't want to add Scout to your existing Eclipse IDE, the method described below is for you.</p>
			<p>The easiest way to download Eclipse Scout is to get the packaged distribution from the <a href="<?php echo URL_ECLIPSE_DOWNLOAD; ?>">Eclipse download page</a>.</p>
			<p><a href="<?php echo URL_ECLIPSE_DOWNLOAD; ?>"><img src="<?php echo PATH_SCOUT_HOME.'img/epp_juno.png'; ?>" width="732" height="60" alt="Eclipse for Scout Developers"></a></p>
		</div>
		<div style="clear: both;" class="homeitem3col" id="updatesite">
			<h3>Using the Release update Site</h3>

			<p>If you already have an existing Eclipse IDE, you might want to add the Scout functionalities to your current Eclipse installation.
			Select Help > Install new Software in the menu bar and work with the built in update site:
				<br/><a href="<?php echo JUNO_UPDATE_SITE; ?>"><code>Juno - <?php echo JUNO_UPDATE_SITE; ?></code></a></p>

			<p><img src="<?php echo PATH_SCOUT_HOME.'img/updatesite_juno.PNG'; ?>" width="478" height="515" alt="Eclipse Install Scout"></p>

			<p>You can enter <em>Scout</em> in the filter text or browse through the <em>Application Development Frameworks</em> category.</p>
		</div>
		<div style="clear: both;" class="homeitem3col" id="source">
			<h3>Getting the Source Code</h3>

			<p>The source code is available in the Git repository:<br/><a href="<?php echo SOURCE_REPOSITORY; ?>"><code><?php echo SOURCE_REPOSITORY; ?></code></a></p>
			<p>Accessing specific released versions or branches is described on our <a href="http://wiki.eclipse.org/Scout/Contribution#Getting_the_Scout_Sources">Wiki pages</a>.</p>
		</div>
	</div>
  <?php
  $html = ob_get_clean();

  # Generate the web page
  $App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
  ?>