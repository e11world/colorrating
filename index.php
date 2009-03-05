<?php
	$title = "ColorRating: Ajax and PHP 5-Star Rating Script";
	$description = "ColorRating is a jQuery/PHP based 5-star ajax rating script that was created to be extremely easy for users to deploy on their websites.  No setup necessary.";
	$head = '<link rel="stylesheet" type="text/css" href="rating/rating.css" media="screen"/>
			 <script type="text/javascript" src="rating/rating.js"></script>';
	$page = "page_apps";

	ob_start();
	?>
		<div class="title"><h1>Web Applications</h1></div>
		<div id="tabnav">
			<ul>
			<li><a href="../colorbox/">Lightbox</a></li>
			<li><a class="current">5 Star Rating System</a></li>
			</ul>
		</div>
		<div class="section">
			<div class="info">
				<h2 id="h_ColorRating">ColorRating</h2>
				<p>A PHP/jQuery based 5-star Ajax rating script.</p>
				<div class="hr"></div>
			</div>
		</div>
		<div class="section">
			<div class="info">
				<h2 id="h_deploy">Easy To Deploy</h2>
				<p>ColorRating requires no database setup or administration as it comes with it’s own SQLite database, making deployment as easy as unzipping the files.</p>
				<p>ColorRating is <em>small</em> - only 5kbs of CSS/JS/PHP - and degrades gracefully for users without JavaScript.</p>
			</div>
			<div class="callout">
				<div class="box download">
					<div class="download_hover"></div>
					<h3 id="h_downloads">Downloads</h3>
					<p class="download_links"><a href="http://github.com/jackmoore/colorbox/zipball/master">Version 1.0</a> | <a href="http://github.com/jackmoore/colorbox/tree/master">GitHub</a></p>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="info">
				<h2 id="h2_demonstration">Demonstration</h2>
				<img src="../images/comic.png" width='590' height='199' />
				<?php include("rating/rating.php"); ?>
				<?php rating_form("test1"); ?>
			</div>
		</div>
		<div class="section">
			<div class="info">
				<h2 id="h_documentation">Documentation</h2>
				<h4>Instructions:</h4>
				<p>Add the following to the head of your php/html document:<br />
				<span class="code">
				&lt;link rel="stylesheet" type="text/css" href="rating/rating.css" media="screen"/&gt;<br/>
				&lt;script type="text/javascript" src="http://www.google.com/jsapi"&gt;&lt;/script&gt;<br/>
				&lt;script type="text/javascript" &gt;google.load("jquery","1.3.2");&lt;/script&gt;<br/>
				&lt;script type="text/javascript" src="rating/rating.js"&gt;&lt;/script&gt;<br/>
				&lt;?php include('rating/rating.php'); ?&gt;
				</span></p>
				<p>Add the following to the body of your document for each instance of the rating script and replace "unique_table_name" with your own unique name for the object being scored:<br />
				<span class="code">&lt;?php rating_form("unique_table_name"); ?&gt;</span></p>

				<h4>Requirements:</h4>
				<p>ColorRating requires the PDO extension for PHP with the sqlite driver enabled.<br/>
				ColorRating works with or without javascript, but requires jQuery for Ajax functionality.
				</p>
				<h4>How to check if your hosting service provides sqlite support</h4>
				<p>Type <span class="code">&lt;?php phpinfo(); ?&gt;</span> into a new .php file and save.  Upload this to your host and open it in your browser.  This should display your php configuration.  Search the page for 'PDO' and check to confirm that it is 'enabled' and that 'sqlite' is listed as one of the drivers.</p>
				<p>Released under the <a href="http://www.opensource.org/licenses/mit-license.php">MIT License</a>.  Read the <a href="README">Release Notes</a>.</p>
			</div>
			<div class="callout">
			</div>
		</div>
	<?php
	$content = ob_get_clean();
	include("../template.php");
?>