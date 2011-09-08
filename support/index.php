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
  $pageTitle 	= "Eclipse Scout - Support";
  $pageKeywords	= "support, community, eclipse, scout";
  $pageAuthor	= "BSI Business System Integration AG";
		
  # Paste your HTML content between the EOHTML markers!
  ob_start();
  ?>
	<div id="midcolumn">
		<h1>Get Support</h1>
		<p>Do you need help with Eclipse Scout?
<?php /*	<ul>
				<li><a href="#community">Community support</a></li>
		</ul> */ ?>
		</p>
		
		<div style="clear: both;" class="homeitem3col" id="community">
			<h3>Community support</h3>
			<p>There are different way to get support from the community:</p>
			<p><a href="<?php echo URL_WIKI; ?>">Eclipsepedia</a>: Documentation including a simple "Getting Started" tutorial can be found on the Eclipse wiki.</p>
			<p><a href="<?php echo URL_SCOUT_FORUM; ?>">Eclipse Scout Forum</a>: Ask every question you like to on the forum.</p>
			<p><a href="<?php echo URL_BUGZILLA; ?>">Eclipse Scout Bugzilla</a>: review and create Bugzilla entries.</p>
		</div>
	</div>

  <?php
  $html = ob_get_clean();

  # Generate the web page
  $App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
  ?>