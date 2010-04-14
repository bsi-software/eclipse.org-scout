<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
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

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nova #midcolumn Template";
	$pageKeywords	= "Nova, template, #midcolumn";
	$pageAuthor		= "Nathan Gervais";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>
	<div id="midcolumn">
		<h1>&lt;H1&gt; tag</h1>
		
		<p>
			This is a &lt;p&gt; tag.  
		</p>
		
		<p>
			This is a &lt;p&gt; tag.  With a lot of text. <br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		
		
		<h3>&lt;h3&gt; tag</h3>
		<div class="homeitem">
			<ul>
				<li>This is an unordered list</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
				<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
 				<li>Curabitur vel lorem in turpis adipiscing dictum. Nunc mi est, scelerisque vitae, venenatis et, euismod et, sem. Praesent aliquet mi vel felis. Pellentesque pellentesque convallis ante. Praesent imperdiet velit vitae justo. Nullam quis purus. Aenean neque enim, consequat non, mattis eu, gravida sed, massa.</li>
			</ul>
			<ol> 
				<li>This is an ordered list</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
				<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
 				<li>Curabitur vel lorem in turpis adipiscing dictum. Nunc mi est, scelerisque vitae, venenatis et, euismod et, sem. Praesent aliquet mi vel felis. Pellentesque pellentesque convallis ante. Praesent imperdiet velit vitae justo. Nullam quis purus. Aenean neque enim, consequat non, mattis eu, gravida sed, massa.</li>
			</ol>				
		</div>
		
		<h2>&lt;h2&gt; tag</h2>
		<table>
			<tr>
				<td>Tables look </td>
				<td>like this</td>
			</tr>
			<tr>
				<td>Data</td>
				<td>Data</td>
			</tr>
			<tr>
				<td>Data</td>
				<td>Data</td>
			</tr>
		</table>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="midcolumn.php">#midcolumn Template</a></li>
				<li><a href="fullcolumn.php">#fullcolumn Template</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>&lt;h6&gt; tag</h6>
				<div class="modal">
					Wrapping your content using a div.modal tag here will add the gradient background
				</div>
		</div>
	</div>

	
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>