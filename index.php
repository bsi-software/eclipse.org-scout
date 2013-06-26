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
  include_once(PATH_SCOUT_HOME."script/rss2html.php");
  
  //Talks:
  define("LOCATION_CITY", "City");
  define("LOCATION_NAME", "Name");
  define("LOCATION_URL", "Url");
  define("TALK_LOCATION", "Location");
  define("TALK_DATE", "Date");
  define("TALK_URL", "Url");
  define("TALK_TITLE", "Title");

  $eclipseConFrance = array(LOCATION_CITY => "Toulouse",
                            LOCATION_NAME => "EclipseCon France",
                            LOCATION_URL => "http://www.eclipsecon.org/france2013/");

  $demoCampMunich = array(LOCATION_CITY => "Munich",
                          LOCATION_NAME => "DemoCamp Kepler 2013 Munich",
                          LOCATION_URL => "http://wiki.eclipse.org/Eclipse_DemoCamps_Kepler_2013/Munich");

  $demoCampZurich = array(LOCATION_CITY => "Zurich",
                          LOCATION_NAME => "DemoCamp Kepler 2013 Zurich",
                          LOCATION_URL => "http://wiki.eclipse.org/Eclipse_DemoCamps_Kepler_2013/Zurich");

  $talks = array();
  //mktime: hour, minute, second, month, day, year 
  $talks[] = array(TALK_LOCATION => $eclipseConFrance,
                   TALK_DATE => mktime(0, 0, 0, 6, 8, 2013),
                   TALK_URL => "http://www.eclipsecon.org/france2013/",
                   TALK_TITLE => "Meet us at EclipseCon France in Toulouse");

  $talks[] = array(TALK_LOCATION => $demoCampMunich,
                   TALK_DATE => mktime(0, 0, 0, 6, 12, 2013),
                   TALK_URL => "http://wiki.eclipse.org/Eclipse_DemoCamps_Kepler_2013/Munich",
                   TALK_TITLE => "Mobile Business Applications with Eclipse Scout");

  $talks[] = array(TALK_LOCATION => $demoCampZurich,
                   TALK_DATE => mktime(0, 0, 0, 6, 27, 2013),
                   TALK_URL => "http://wiki.eclipse.org/Eclipse_DemoCamps_Kepler_2013/Zurich",
                   TALK_TITLE => "Mobile Business Applications with Eclipse Scout");


  //Eclipse Webpages Framework
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
  $App   = new App();  $Nav  = new Nav();  $Menu   = new Menu();    include($App->getProjectCommon());

  $localVersion = false;

  # Define these here, or in _projectCommon.php for site-wide values
  $pageKeywords  = "eclipse, project, scout, application framework";
  $pageAuthor    = "BSI AG";
  $pageTitle     = "Eclipse Scout - Project Home";

  # Paste your HTML content between the EOHTML markers!
  ob_start();
?>
<div id="page">
  <div id="scout_header">
      <div id="scout_banner">
        <h1>Eclipse Scout</h1>
        <p>Business application framework</p>
        <p><a href="<?php echo SITE_DOWNLOAD; ?>"><img src="img/download.png" title="Download Eclipse Scout" /></a></p>
    </div>
    <div id="scout_buttons">
        <p><a href="<?php echo SITE_DOC; ?>"><img src="img/read.png" title="Eclipse Scout - Documentation" /></a></p>
        <p><a href="<?php echo SITE_SUPPORT; ?>"><img src="img/ask.png" title="Eclipse Scout - Support" /></a></p>
        <p><a href="<?php echo SITE_GETINVOLVED; ?>"><img src="img/engage.png" title="Eclipse Scout - Getting Involved" /></a></p>
      </div>
  </div>
  <div id="page_left">
    <div class="scout_description">
      <p>Eclipse Scout is a mature and open framework for modern, service oriented business applications. It substantially boosts developer productivity and is simple to learn. <a href="<?php echo URL_LEARN_MORE; ?>"> Learn more >></a></p>
    </div>

    <div id="scout_value1" class="scout_value">
      <h3>Simple</h3>
      <p> Looking for an an application framework where you really get what you see? Then you might really like to have a look at the <a href="<?php echo URL_SCREENCASTS; ?>">Eclipse Scout Screencasts >></a></p>
      <p><a href="<?php echo URL_SCREENCAST_LAST; ?>"><img src="img/videotutorial1.png" title="Scout is simple" /></a></p>
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
    <div>
      <h3>Current Status</h3>
      <p>Read more <a href="<?php echo URL_SUMMARY; ?>">about this project</a> and get all useful information and links about it in a nutshell. </p>
    </div>

    <div>
      <h3>News</h3>
      <p>Our <a href="<?php echo URL_BLOG; ?>">blog</a> is pushing out information to you:

       <?php
       /**
        *  $newsConverter = new RSS2HTML();
        *  $news = $newsConverter->convert();
        *  echo $news;
        */
       ?>
      </p>
      <p>You can also <a href="<?php echo URL_TWITTER; ?>">follow us on Twitter</a>.
    </div>
    
    <?php
    if(isset($talks) && is_array($talks) && count($talks) > 0) {
      $display_talks = array();
      $display_locations = array();
      foreach ($talks as &$t) {
        if($t[TALK_DATE] > (time() - 86400)) { // 86400 = (one day) = 24 * 60 * 60
          if(!array_key_exists($t[TALK_LOCATION][LOCATION_NAME], $display_talks)) {
            $display_locations[$t[TALK_LOCATION][LOCATION_NAME]] = $t[TALK_LOCATION];
            $display_talks[$t[TALK_LOCATION][LOCATION_NAME]] = array();
          }
          $key = $t[TALK_DATE];
          while(array_key_exists($key, $display_talks[$t[TALK_LOCATION][LOCATION_NAME]])) {
            $key = $key + 1;
          }
          $display_talks[$t[TALK_LOCATION][LOCATION_NAME]][$key] = $t;
        }
      }
      if(count($display_talks) > 0) {
    ?>
    <div>
      <h3>Next Talks</h3>
        <?php
        foreach ($display_talks as $location_name => $talks) {
          echo '<p>Meet Eclipse Scout in '.$display_locations[$location_name][LOCATION_CITY].' ';
          echo 'at <a href="'.$display_locations[$location_name][LOCATION_URL].'">'.$display_locations[$location_name][LOCATION_NAME].'</a>:</p>';
          echo '<ul>';
		  ksort($talks);
          foreach ($talks as $dt) {
            echo '<li><a href="'.$dt[TALK_URL].'">'.$dt[TALK_TITLE].'</a></li>';
          }
        }
        ?>
        </ul>
    </div>
    <?php
      } //end if $display_talks
    } //end if $talks
    ?>
  </div>
</div>
<?php
  $html = ob_get_clean();

  # Generate the web page
  $App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>