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

  if(defined(PATH_SCOUT_HOME)) {
	  define("PATH_SCOUT_HOME", $_SERVER['DOCUMENT_ROOT'] . "/scout/");
  }
  include_once(PATH_SCOUT_HOME."constants.php");


	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "Nova";

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional

	# Break the navigation into sections
	$Nav->setHTMLBlock('<p id="logo"><a href="'.PATH_SCOUT_HOME.'"><img src="'.PATH_SCOUT_HOME.'img/scout-logo.png'.'" width="150" height="150" alt="Scout Logo" id="logo"></a></p>');
	$Nav->addCustomNav("About This Project", URL_SUMMARY, "_self", 3);

	$Nav->addNavSeparator("Downloads", SITE_DOWNLOAD); 
	$Nav->addCustomNav("Source Code (SVN)", URL_REPOSITORY_BROWSER, "_self", 3);
	
//	$Nav->addNavSeparator("Get Started", SITE_START); 
//	$Nav->addCustomNav("Screencasts", URL_SCREENCAST_YOUTUBE, "_self", 3);
//	$Nav->addCustomNav("Tutorial", URL_TUTORIAL, "_self", 3);

//  $Nav->addNavSeparator("Documentation", SITE_DOC); 
//  $Nav->addCustomNav("Wiki", URL_WIKI, "_self", 3);
//	$Nav->addCustomNav("Javadoc", URL_JAVADOC, "_self", 3);

//  $Nav->addNavSeparator("Eclipse resources", SITE_RESOURCES); 
//	$Nav->addCustomNav("Forum", URL_SCOUT_FORUM, "_self", 3);
//	$Nav->addCustomNav("Bugzilla", URL_BUGZILLA, "_self", 3);

	# Define keywords, author and title here, or in each PHP page specifically
	$pageKeywords	= "eclipse, project, scout, application framework";
	$pageAuthor		= "Matthias Zimmermann";
	$pageTitle 		= "Eclipse Scout";


	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	# $Menu->setMenuItemList(array());
	# $Menu->addMenuItem("Home", "/project", "_self");
	# $Menu->addMenuItem("Download", "/project/download.php", "_self");
	# $Menu->addMenuItem("Documentation", "/project/documentation.php", "_self");
	# $Menu->addMenuItem("Support", "/project/support.php", "_self");
	# $Menu->addMenuItem("Developers", "/project/developers", "_self");

	# To define additional CSS or other pre-body headers
  $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="'.PATH_SCOUT_HOME.'scout_style.css"/>');

	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;

	# If you have Google Analytics code, use it here
	# $App->SetGoogleAnalyticsTrackingCode("YOUR_CODE");
?>