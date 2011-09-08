<?php
if(defined(PATH_SCOUT_HOME)) {
	define("PATH_SCOUT_HOME", "./");
}

define("TIME_ZONE", "Europe/Berlin");

define("REPOSITORY_OVERVIEW", "http://download.eclipse.org/scout/repositoryOverview.xml");

define("SOURCE_REPOSITORY", "http://dev.eclipse.org/svnroot/technology/org.eclipse.scout");
define("INDIGO_UPDATE_SITE", "http://download.eclipse.org/release/indigo");

$ECLIPSE_VERSIONS = array();
$ECLIPSE_VERSIONS[] = array("version" => 3.5, "name" => "Eclipse Galileo", "name_info" => "(older version)", "url" => "http://www.eclipse.org/downloads/packages/release/galileo/sr2");
$ECLIPSE_VERSIONS[] = array("version" => 3.6, "name" => "Eclipse Helios", "name_info" => "(older version)", "url" => "http://www.eclipse.org/downloads/packages/release/helios/sr2");
$ECLIPSE_VERSIONS[] = array("version" => 3.7, "name" => "Eclipse Indigo", "name_info" => "(current release)", "url" => "http://www.eclipse.org/downloads/");
$ECLIPSE_VERSIONS[] = array("version" => 3.8, "name" => "Eclipse Juno", "name_info" => "(developer build)", "url" => "http://www.eclipse.org/downloads/index-developer.php");

define("IMG_INCUBATION_EGG", "/images/egg-incubation.png");

/**
 urls
**/
define("URL_WIKI", "http://wiki.eclipse.org/Scout");
define("URL_LEARN_MORE", "http://wiki.eclipse.org/Scout/Overview");
define("URL_TUTORIAL", "http://wiki.eclipse.org/Scout/Tutorial");
define("URL_TUTORIAL_HELLOWORLD", "http://wiki.eclipse.org/Scout/Tutorial/HelloWorld");
define("URL_TUTORIAL_TOMCAT", "http://wiki.eclipse.org/Scout/Tutorial/Deploy_to_Tomcat");
define("URL_SCREENCASTS", "http://wiki.eclipse.org/Scout/Overview/Screencasts");
define("URL_SCREENCASTS_YOUTUBE", "http://www.youtube.com/eclipsescout#p/a/u/2/1iCKib1gTkk");
define("URL_SCREENCAST_LAST", "http://www.bsiag.com/scout/screencast");
define("URL_SLIDES", "http://wiki.eclipse.org/Scout/Overview/Slides");
define("URL_BLOG", "http://www.bsiag.com/scout/");
define("URL_TWITTER", "http://twitter.com/eclipseScout");
define("URL_SUMMARY", "/projects/project_summary.php?projectid=technology.scout");
define("URL_ECLIPSE_DOWNLOAD", "http://www.eclipse.org/downloads");
define("URL_ECLIPSE_INCUBATION", "http://www.eclipse.org/projects/what-is-incubation.php");
define("URL_ECLIPSE_INCUBATION_PHASE", "http://www.eclipse.org/projects/dev_process/incubation-phase.php");
define("URL_SCOUT_FORUM", "http://www.eclipse.org/forums/eclipse.scout");
define("URL_REPOSITORY_BROWSER", "http://dev.eclipse.org/viewcvs/viewvc.cgi/?root=Technology_SCOUT");
define("URL_UPDATE_SITE_HELP", "http://help.eclipse.org/helios/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-127.htm");
define("URL_INSTALL_MANUALLY_HELP", "http://wiki.eclipse.org/Scout/HowTo/Install_Scout_manually");
define("URL_JAVADOC", "#");
define("URL_BUGZILLA", "https://bugs.eclipse.org/bugs/buglist.cgi?product=scout");
define("URL_CONTRIBUTION_GUIDE","http://wiki.eclipse.org/Scout/Contribution");

define("URL_MAILING_LIST", "https://dev.eclipse.org/mailman/listinfo/scout-dev");
define("URL_OHLOH", "http://www.ohloh.net/p/eclipsescout");
define("URL_PLAN", "http://eclipse.org/projects/project-plan.php?projectid=technology.scout");

/**
internal links
**/
define("SITE_DOWNLOAD", PATH_SCOUT_HOME."downloads/");
define("SITE_DOC", PATH_SCOUT_HOME."documentation/");
define("SITE_SUPPORT", PATH_SCOUT_HOME."support/");
define("SITE_GETINVOLVED", PATH_SCOUT_HOME."developers/");