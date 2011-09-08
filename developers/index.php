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
  $pageTitle 	= "Eclipse Scout - Developers";
  $pageKeywords	= "contribution, involve, community, eclipse, scout";
  $pageAuthor	= "BSI Business System Integration AG";

  # Paste your HTML content between the EOHTML markers!
  ob_start();
  ?>
	<div id="midcolumn">
		<h1>Get Involved!</h1>
		<p>We are actively looking for project contributors. We want to build a community around Eclipse Scout. On this page you find some resources to get involved.</p>
<?php /*	<ul>
				<li><a href="#dashboard">Project Dashboards</a></li>
				<li><a href="#code">Source Code</a></li>
		</ul> */ ?>
		</p>

        <div style="clear: both;" class="homeitem3col" id="dashboard">
            <h3>Project Dashboards</h3>

            <p>The <a href="<?php echo URL_SUMMARY; ?>">Project Summary</a> provides you all useful information and links about Eclipse Scout in a nutshell.</p>

            <p>The <a href="<?php echo URL_PLAN; ?>">Project Plan</a> explains you what is coming up.</p>
        </div>

        <div style="clear: both;" class="homeitem3col" id="code">
            <h3>Contribution Guide</h3>

            <p>Using Scout and wanting to contribute? Check out our <a href="<?php echo URL_CONTRIBUTION_GUIDE; ?>">Contribution guide</a>.</p>
        </div>

		<div style="clear: both;" class="homeitem3col" id="code">
			<h3>Source Code</h3>

			<p>The source code is available in the SVN repository:<br/><a href="<?php echo SOURCE_REPOSITORY; ?>"><code><?php echo SOURCE_REPOSITORY; ?></code></a></p>

			<p><a href="<?php echo URL_MAILING_LIST; ?>">Developer Mailing List</a>: Subscribe to the developer list and get updates about the project's code aspects.</p>

    		<p>Visit the <a href="<?php echo URL_OHLOH; ?>">Eclipse Scout page at Ohloh</a> to find project's code aspects, metrics, comments ratio...</p>

		</div>
	</div>

  <?php
  $html = ob_get_clean();

  # Generate the web page
  $App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
  ?>