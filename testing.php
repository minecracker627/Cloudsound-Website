<!DOCTYPE html>
<html>
	<head>
		<title>bootstrap-player : Live Demo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="/bootstrap-combined.no-icons.min.css" type="text/css" rel="stylesheet">
		<link href="/font-awesome.css" type="text/css" rel="stylesheet">
		<link href="/bootstrap-player.css" type="text/css" rel="stylesheet">
		<link href="/purdy.css" type="text/css" rel="stylesheet">
		<link href="/bootstrap-player/css/style.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><i class="icon-reorder"></i></button>
					<ul class="nav">
						<li>
							<a class="brand" href="/bootstrap-player/index.html"><i class="icon-home"></i> bootstrap-player</a>
						</li>
					</ul>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active">
								<a href="/bootstrap-player/demo"><i class="icon-play"></i> Live Demo</a>
							</li>
						</ul>
						<ul class="nav pull-right" >
							<li class="nav-primary">
								<a href="https://github.com/WilliamRandol/bootstrap-player"><i class="icon-github"></i> GitHub Page</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<header>
			<div class="container">
				<h1 id="project_title">Bootstrap-player</h1>
				<p id="project_tagline">A Non-Intrusive HTML5 Audio Player Skin For Twitter Bootstrap</p>
				<div class="btn-toolbar">
					<div class="btn-group pull-right">
					  <a class="btn dropdown-toggle btn-success" data-toggle="dropdown">
						<i class="icon-download-alt"></i>&nbsp; Download &nbsp;<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu">
						<li>
							<a href="https://github.com/WilliamRandol/bootstrap-player/zipball/master">.zip</a>
						</li>
						<li>
							<a href="https://github.com/WilliamRandol/bootstrap-player/tarball/master">.tar.gz</a>
						</li>
					  </ul>
					</div>
				</div>
			</div>
		</header>
		<section class="container">
			<section class="row">
				<div class="span12">
					<div class="hero-unit">
						<h2>bootstrap-player:</h2>
						<p>I know that this is not 100% pixel perfect accross all the browsers, but at least it gives some consistancy to the audio player. Please feel free to fork this and make improvements.</p>
						<p>Below are two examples of the bootstrap-player, the first one has additonal data using the html5 data- attribute. The second is nothing but the audio tag.</p>
					</div>
				</div>
			</section>
			<section class="row">
				<div class="span4">
					<h4>Audio Player With Data</h4>
					<audio controls
						data-info-album-art="http://farm5.staticflickr.com/4050/4353986539_ec89b52698_d.jpg"
						data-info-album-title="8874"
						data-info-artist="Billy Murray"
						data-info-title="Come, take a trip in my air-ship"
						data-info-label="Edison Gold Moulded Record"
						data-info-year="1905"
						data-info-att="University of California, Santa Barbara Library."
						data-info-att-link="http://cylinders.library.ucsb.edu/search.php?query=8874">
						<source src="/bootstrap-player/media/cusb-cyl2985d.ogg" type="audio/ogg" />
						<source src="/bootstrap-player/media/cusb-cyl2985d.mp3" type="audio/mpeg" />
						<a href="/bootstrap-player/media/cusb-cyl2985d.mp3">cusb_cyl2985d</a>
					</audio>
					Airship Image From <a href="http://www.flickr.com/photos/mykeamend/4353986539/in/photostream/">Myke Amend</a>.
				</div>
				<div class="span8">
					<h4>HTML Code</h4>
<pre class="pre prettyprint linenums"><code class="language-html">&lt;audio controls
	data-info-album-art="http://farm5.staticflickr.com/4050/4353986539_ec89b52698_d.jpg"
	data-info-album-title="8874"
	data-info-artist="Billy Murray"
	data-info-title="Come, take a trip in my air-ship"
	data-info-label="Edison Gold Moulded Record"
	data-info-year="1905"
	data-info-att="University of California, Santa Barbara Library."
	data-info-att-link="http://cylinders.library.ucsb.edu/search.php?query=8874"&gt;
	&lt;source src="/bootstrap-player/media/cusb-cyl2985d.ogg" type="audio/ogg" /&gt;
	&lt;source src="/bootstrap-player/media/cusb-cyl2985d.mp3" type="audio/mpeg" /&gt;
	&lt;a href="/bootstrap-player/media/cusb-cyl2985d.mp3"&gt;cusb_cyl2985d&lt;/a&gt;
&lt;/audio&gt;</code></pre>
				</div>
			</section>
			<hr />
			<section class="row">
				<div class="span4">
					<h4>Audio Player Alone</h4>
					<audio controls>
						<source src="http://www.w3schools.com/html/horse.ogg" type="audio/ogg" />
						<source src="http://www.w3schools.com/html/horse.mp3" type="audio/mpeg" />
						<a href="http://www.w3schools.com/html/horse.mp3">horse</a>
					</audio>
				</div>
				<div class="span8">
					<h4>HTML Code</h4>
<pre class="pre prettyprint linenums"><code class="language-html">&lt;audio controls&gt;
	&lt;source src="http://www.w3schools.com/html/horse.ogg" type="audio/ogg" /&gt;
	&lt;source src="http://www.w3schools.com/html/horse.mp3" type="audio/mpeg" /&gt;
	&lt;a href="http://www.w3schools.com/html/horse.mp3"&gt;horse&lt;/a&gt;
&lt;/audio&gt;</code></pre>
				</div>
			</section>
		</section>
		<footer>
			<div class="container">
				<p class="copyright">Bootstrap-player maintained by <a href="https://github.com/WilliamRandol">WilliamRandol</a></p>
			</div>
		</footer>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/js/bootstrap.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.js" type="text/javascript"></script>
		<script src="/bootstrap-player/js/html5slider.js"></script>
		<script src="/bootstrap-player/js/bootstrap-player.js"></script>
		<script>
			addEventListener('load', function (event) { prettyPrint() }, false);
		</script>
	</body>
</html>
