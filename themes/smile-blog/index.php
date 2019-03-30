<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Tytuł bloga</title>
	
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />
	
	<!-- Fix for Internet Explorer prior to version 9
	     by Remy Sharp http://remysharp.com/2009/01/07/html5-enabling-script/ -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

	<div id="outer-wrap">
		<div id="inner-wrap">
		
			<header id="header-container">
			    <hgroup>
			    	<h1 id="site-title">Tytuł bloga</h1>
			    	<h2 id="site-description">Opis z ustawień bloga</h2>
			    </hgroup>
			    
			    <nav>
			    	<div class="menu">
			    		<ul>
			    			<li><a href="#">Element menu</a></li>
			    			<li><a href="#">Drugi element</a></li>
			    			<li><a href="#">Trzeci element</a></li>
			    		</ul>
			    	</div>
			    </nav>
			</header> <!-- #header-container ends -->
			
			<div id="main-container">
				<section id="content-container">
				    <article class="post">
				        <header>
				        	<h2 class="entry-title">Tytuł wpisu</h2>
				        	<p class="entry-meta">Opublikowano dnia <time datetime="2012-01-09">9 stycznia 2012 r.</time>, autor: <a href="#">TDH</a> &bull; <a href="#comments">12 komentarzy</a></p>
				        </header>
				        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna.</p>
				        <p>Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci.</p>
				    </article>
				
				    <article class="post">
				        <header>
				        	<h2 class="entry-title">Tytuł drugiego wpisu</h2>
				        	<p class="entry-meta">Opublikowano dnia <time datetime="2012-01-08">8 stycznia 2012 r.</time>, autor: <a href="#">TDH</a> &bull; <a href="#comments">12 komentarzy</a></p>
				        </header>
				        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna.</p>
				        <ol>
				        	<li>Lorem</li>
				        	<li>Ipsum</li>
				        	<li>Ciągle te lorem ipusm...</li>
				        </ol>
				        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in.</p>
				    </article>
				</section> <!-- #main-container ends -->
				
				<aside id="sidebar-container">
					<ul id="sidebar">
						<li class="widget-container">
							<h3 class="widget-title">Tytuł widżetu</h2>
							<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
						</li>
						<li class="widget-container">
							<h3 class="widget-title">Tytuł drugiego widżetu</h2>
							<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
						</li>
					</ul>
				</aside> <!-- #sidebar-container ends -->
			</div>
			
			<footer id="footer-container">
				<nav>
					<div class="menu">
						<ul>
			    			<li><a href="#">Element menu</a></li>
			    			<li><a href="#">Drugi element</a></li>
			    			<li><a href="#">Trzeci element</a></li>
						</ul>
					</div>
				</nav>
				
				<p>Copyright &copy; 2012 itp. informacje</p>
			</footer> <!-- #footer-container ends -->
			
		</div> <!-- #inner-wrap ends -->
	</div> <!-- #outer-wrap ends -->

</body>

</html>