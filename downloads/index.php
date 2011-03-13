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
			There are different ways to get Eclipse Scout. Using an update site is easier to install and allows you to stay up to date with the latest versions of Eclipse Scout.
			<ul>
				<li><a href="#install">Eclipse Scout versions</a></li>
				<li><a href="#included">Included version</a></li>
				<li><a href="#source">Source code</a></li>
			</ul>
		</p>
		<div style="clear: both;" class="homeitem3col" id="install">
			<h3>Eclipse Scout versions</h3>
  <?php
  if(is_null($repOverview)) {
  	echo '<p>No version of Eclipse Scout have been found. Please report it in <a href="'.URL_ECLIPSE_SCOUT_FORUM.'">our forum</a>.</p>'."\n";
  } else {
  	foreach($repOverview->release as $release) {
  		$version = is_null($release['version']) ? "<unknown version>" : $release['version'];
  		$url = $release['url'];
  		$eclipseMinVersion = is_null($release['eclipseMinVersion']) ? 0.0 : (float)$release['eclipseMinVersion'];
  		$eclipseMaxVersion = is_null($release['eclipseMaxVersion']) ? 10.0 : (float)$release['eclipseMaxVersion'];

  		echo "<h4>".$version."</h4>\n";

  		if(!is_null($url)) {
  			echo "<p>";
  			echo 'Use the update site from Eclipse (<a href="'.URL_UPDATE_SITE_HELP.'" >see how</a>):<br>';
  			echo '<a href="'.$url.'"><code>'.$url.'</code></a>';
  			echo "</p>";
  		}

  		$eclipseVersions = array();
  		foreach($ECLIPSE_VERSIONS as $v) {
  			if($v['version'] >= $eclipseMinVersion && $v['version'] <= $eclipseMaxVersion) {
  				$eclipseVersions[] = $v;
  			}
  		}
  		if(count($eclipseVersions) > 0) {
  			echo "<p>Compatible Eclipse version:";
  			echo "<ul>\n";
  			foreach($eclipseVersions as $v) {
  				echo '<li><a href="'.$v['url'].'">'.$v['name'].' ('.$v['version'].')</a> '.$v['name_info'].'</li>'."\n";
  			}
  			echo "</ul></p>\n";
  		}

  		if(count($release->zip) > 0) {
  			echo '<p>You can also download the files directly and install them manually (<a href="'.URL_INSTALL_MANUALLY_HELP.'" >see how</a>)</p>';
  			echo "<ul>\n";
  			date_default_timezone_set(TIME_ZONE);
  			foreach($release->zip as $zip) {
  				if(preg_match("/([0-9]{4})([0-9]{2})([0-9]{2})-([0-9]{2})([0-9]{2})/", $zip['date'], $m) >0) {
  					$date = date("d.m.Y H:i", strtotime($m[1].'-'.$m[2].'-'.$m[3].' '.$m[4].':'.$m[5]));
  				} else {
  					$date = $zip['date'];
  				}
  				echo '<li class="download" ><a href="'.$zip['url'].'" class="download" >'.pathinfo($zip['url'], PATHINFO_BASENAME).'</a> (<em>'.$date.'</em>)</li>'."\n"; //PATHINFO_FILENAME ist nicht bekannt.
  			}
  			echo "</ul></p>\n";
  		}
  	}
  }
  ?>
	</div>
		<div style="clear: both;" class="homeitem3col" id="included">
			<h3>Included version</h3>
			
			<p>Eclipse Scout is part of the release train of Eclipse Indigo (since release M5).</p>
			
			<p>If you work with this version, you can get Scout from the built-in update site:<br/><a href="<?php echo INDIGO_UPDATE_SITE; ?>"><code><?php echo INDIGO_UPDATE_SITE; ?></code></a></p>
			
			<p><img src="<?php echo PATH_SCOUT_HOME.'img/eclipse_install_scout.png'; ?>" width="476" height="317" alt="Eclipse Install Scout"></p>
			
			<p>You can enter <em>Scout</em> in the filter text or browse through the <em>Application Development Frameworks</em> category.</p>
		</div>

		<div style="clear: both;" class="homeitem3col" id="source">
			<h3>Source Code</h3>
			
			<p>The source code is available in the SVN repository:<br/><a href="<?php echo SOURCE_REPOSITORY; ?>"><code><?php echo SOURCE_REPOSITORY; ?></code></a></p>
			<p>It is also possible to <a href="<?php echo URL_REPOSITORY_BROWSER; ?>">browse SVN Repository online</a>.</p>
		</div>
	</div>
	
	<div id="rightcolumn">
	 <div class="sideitem">
	   <h6>Incubation</h6>
	   <div align="center"><a href="<?php echo URL_ECLIPSE_INCUBATION; ?>"><img align="center" src="<?php echo IMG_INCUBATION_EGG; ?>" border="0" alt="Incubation" /></a>
	   <p>Eclipse Scout is in the <a href="<?php echo URL_ECLIPSE_INCUBATION_PHASE; ?>">Incubation Phase</a>.</p>
	   </div>
	 </div> 
</div>
  <?php
  $html = ob_get_clean();

  # Generate the web page
  $App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
  ?>