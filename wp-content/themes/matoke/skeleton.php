<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><! --> <html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/style.css"> 
   	<script src="js/vendor/jquery-1.8.3.min.js"></script>
   	<script src="//cdnjs.cloudflare.com/ajax/libs/masonry/2.1.08/jquery.masonry.min.js"></script>	<!-- or local at js/vendor/jquery.masonry.min.js -->
	<script src="js/vendor/jquery.dotdotdot-1.5.9.min.js"></script>
	<script>
		$(document).ready(function()   {
			$('.ellipsis').dotdotdot();
			$('#elsewhere-container').masonry({
            	itemSelector : '.elsewhere-item',
				columnWidth : 217,   // 3.75, three and three quarters times $basic-grid-unit (58px, but defined in line 26 of base.scss
				gutterWidth: 1
          });
		});	
	</script>
	
<!--     <script src="js/vendor/modernizr-2.6.2.min.js"></script> -->
</head>

<body>



   <!--[if IE]>
    <script src= »
    "http://html5shiv.googlecode.com/svn/trunk/html5.js">
    </script>
  <![endif]-->

<div id="page-frame">




	<header>
		<div id="masthead">
			<h1>Voice, Data: Africa</h1>
			<h2>Photographs of the technology explosion</h2>
			<p id="credit-author" itemscope itemtype="http://schema.org/Person">A project by <span itemprop="name"><a href="martinstorey.com">Martin Storey</a></span></p>

		</div>

	</header>
	
	<nav>
	</nav>
	
	<section id="lead-story">
			<img src="img/lead_story_photo.jpg" alt="lead_story_photo">
				<div id="lead-story-text-group">
					<div id="lead-story-titles">
						<h3>Selling Safaricom</h3>
						<h2>Beach Party</h2>
					</div>
					<div id="lead-story-details">
							<p>On the beach at Diani, Mombassa, during the shooting of a Safaricom video.</p>
							<ul class="keywords">
								<li class="keywords"><a href="#">Kenya</a></li>
								<li class="keywords"><a href="#">Networks</a></li>
								<li class="keywords"><a href="#">Advertising</a></li>
							</ul>
					</div>
				</div>
	</section>
	
	<section id="featured-photostories">
			<h1>Photostories  <a href="#" class="button">View All Stories</a></h1>
								

			
		<ul>
			<li>
				<a href="#">
					<h3>Teledensity explosion</h3>
					<h2>A mobile for everyone</h2>
					<img src="img/thumb-placeholder.png" alt="thumb-placeholder" width="230" height="154">
				</a>
				<p  class="ellipsis">Simeon Oriko supporting the next generation of mobile developers.</p>
			</li>
			
			
			<li>
				<a href="#">
					<h3>Outdoor branding this one is particularly long</h3>
					<h2>Red & blue & yellow </h2>
					<img src="img/thumb-placeholder.png" alt="thumb-placeholder" width="230" height="154">
				</a>	
				<div style="word-wrap: break-word;" class="ellipsis"><p>p inside a div In the past, it was Soap Powder. Now, the mobile networks have painted a continent in their own unmistakable colours.In the past, it was Soap Powder. Now, the mobile networks have painted a continent in their own unmistakable colours.</p></div>
			</li>
			<li>
				<a href="#">
					<h3>Teledensity explosion</h3>
					<h2>A mobile for everyone</h2>
					<img src="img/thumb-placeholder.png" alt="thumb-placeholder" width="230" height="154">
				</a>
				<p class="ellipsis">just a div inside the li, with class Simeon Oriko supporting the next generation of mobile developers. Simeon Oriko supporting the next generation of mobile developers. Simeon Oriko supporting the next generation of mobile developers.</p>
			</li>
			<li>
				<a href="#">
					<h3>Vodafone Ghana</h3>
					<h2>The Main Mast</h2>
					<img src="img/thumb-placeholder.png" alt="thumb-placeholder" width="230" height="154">
				</a>	
				<p  class="ellipsis">Umbelically joined to the engineering building, grows the centre of Vodafone Ghana’s network.</p>
			</li>
			<li>
				<a href="#">
					<h3>iCow</h3>
					<h2>Your calf's birthdate this one goes one a bit</h2>
					<img src="img/thumb-placeholder.png" alt="thumb-placeholder" width="230" height="154">
				</a>
				<p  class="ellipsis">Prompts farmers on vital days of cows gestation period. Helps farmers find the nearest Vet and AI providers; collects and stores farmer milk and breeding records. Find the nearest Vet and AI providers; collects and stores farmer milk and breeding records.</p>
			</li>
			<li>
				<a href="#">
					<h3>mPesa</h3>
					<h2>Money Real Quick</h2>
					<img src="img/thumb-placeholder.png" alt="thumb-placeholder" width="230" height="154">
				</a>
				<p class="ellipsis">A disruptive innovation that threatens incumbent businesses and is sparking new business formation and entrepreneurship. Nowhere is this mobile money phenomenon more prevalent and successful than in Kenya. Mobile money is the rare case in which a poor African country is the global market leader and an exporter of innovation.</p>
			</li>
			<li>
				<a href="#">
					<h3>Nairobits</h3>
					<h2>Young design talent growth headline</h2>
					<img src="img/thumb-placeholder.png" alt="thumb-placeholder" width="230" height="154">
				</a>
				<p  class="ellipsis">NairoBits Trust is a youth based organization that uses ICT multimedia creatively to improve the lives of less privileged children and youth from the non-formal settlement.</p>
			</li>
		</ul>
	</section>
	
	<section id="explore" class="cf">
		<h1>Explore photographs</h1>
		<div id="countries" class="keywords narrow">
			<h4>Countries</h4>
				<ul>
					<li><a href="#">Ghana</a></li>
					<li><a href="#">Uganda</a></li>
					<li><a href="#">Kenya</a></li>
					<li><a href="#">Liberia</a></li>
					<li><a href="#">Zimbabwe</a></li>
				</ul>
		</div>
		<div id="keywords" class="keywords wide">
			<h4>Topics</h4>
				<ul>
					<li><a href="#">Meetups</a></li>
					<li><a href="#">Bloggers</a></li>
					<li><a href="#">Hardware</a></li>
					<li><a href="#">KenyaMeetups</a></li>
					<li><a href="#">Bloggers</a></li>
					<li><a href="#">Hardware</a></li>
					<li><a href="#">KenyaStartups</a></li>
					<li><a href="#">Off the grid</a></li>
					<li><a href="#">Shopping</a></li>
					<li><a href="#">Call centre</a></li>
					<li><a href="#">mAgriculture</a></li>
					<li><a href="#">Networks</a></li>
					<li><a href="#">Education</a></li>
					<li><a href="#">Hubs</a></li>
					<li><a href="#">Teenage fashion</a></li>
					<li><a href="#">Teledensity</a></li>
				</ul>
		</div>
	</section>
		
	<section id="elsewhere" class="cf">
		
			<h1>Elsewhere <a href="#" class="button">Link Archive</a></h1>
			<h4>Research scrapbook</h4>
		</a>
		<div class="js-masonry" id="elsewhere-container"> 
			<div class="elsewhere-item">
				<h2><a href="#">Radio silence in Congo</a></h2>
				<h3><a href="#">voa.org/africa</a></h3>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<time datetime="1905-11-13">13-Nov-2013</time>
			</div>	
			
			<div class="elsewhere-item">
				<h2><a href="#">Radio silence in Congo</a></h2>
				<h3><a href="#">voa.org/africa</a></h3>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<time datetime="1905-11-13">13-Nov-2013</time>
			</div>	
			
			
			<div class="elsewhere-item">
				<h2><a href="#">Radio silence in Congo</a></h2>
				<h3><a href="#">voa.org/africa</a></h3>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<time datetime="1905-11-13">13-Nov-2013</time>
			</div>
			
			
			<div class="elsewhere-item">
				<h2><a href="#">Radio silence in Congo</a></h2>
				<h3><a href="#">voa.org/africa</a></h3>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<time datetime="1905-11-13">13-Nov-2013</time>
			</div>				
			
			
			<div class="elsewhere-item">
				<h2><a href="#">Radio silence in Congo</a></h2>
				<h3><a href="#">voa.org/africa</a></h3>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<time datetime="1905-11-13">13-Nov-2013</time>
			</div>				
						
			<div class="elsewhere-item">
				<h2><a href="#">Radio silence in Congo</a></h2>
				<h3><a href="#">voa.org/africa</a></h3>
				<p>A lively news magals, opposition leaders, NGOs and human rights activists.</p>
				<time datetime="1905-11-13">13-Nov-2013</time>
			</div>				
						
			<div class="elsewhere-item">
				<h2><a href="#">Radio silence in Congo</a></h2>
				<h3><a href="#">voa.org/africa</a></h3>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<time datetime="1905-11-13">13-Nov-2013</time>
			</div>				
						
			<div class="elsewhere-item">
				<h2><a href="#">Radio silence in Congo</a></h2>
				<h3><a href="#">voa.org/africa</a></h3>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<time datetime="1905-11-13">13-Nov-2013</time>
			</div>				
						
			<div class="elsewhere-item">
				<h2><a href="#">Radio silence in Congo</a></h2>
				<h3><a href="#">voa.org/africa</a></h3>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<time datetime="1905-11-13">13-Nov-2013</time>
			</div>				
						
			<div class="elsewhere-item">
				<h2><a href="#">Radio silence in Congo</a></h2>
				<h3><a href="#">voa.org/africa</a></h3>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<p>A lively news magazine show featuring VOA correspondent reports, interviews with African officials, opposition leaders, NGOs and human rights activists.</p>
				<time datetime="1905-11-13">13-Nov-2013</time>
			</div>				
		</div>
	</section>
						
		
	<footer>
		<div id="footer-container" class="cf"> 
			<section id="colophon">
				<h1>Voice, Data: Africa.</h1>
				<p>I feel that the ways am interested in technologies as they are used by everyday people - I feel that there is a moment in history - love of the place - diversity of experience - the visual and technology.</p>
				<p>Set in Sentinel from Typekit. Running on Wordpress at Dreamhost. Design by Cassiocassio
				</p>
		
				
			</section>
			
			<section id="contact">
				<h1>Contact me</h1>
				<p><a href="mailto:contact@martinstorey.com">contact@martinstorey.com</a></p>
			
				<div itemscope itemtype="http://schema.org/Person">
					<p>London
						<span itemprop="telephone" class="telephone-number"><a href="tel:+447961507427">
							+44 7961 507427</a>
					</span>
					</p>
				</div>
				
				<div itemscope itemtype="http://schema.org/Person">
					<p>Kampala
					<span itemprop="telephone" class="telephone-number">
						<a href="tel:+256784164441">+256 7841 64441</a>
					</span>
					</p>
				</div>
				
				<div itemscope itemtype="http://schema.org/Person">
					<p>Accra
					<span itemprop="telephone" class="telephone-number">
						<a href="tel:++233547862807">+233 54 7862807</a>
					</span>
					</p>
				</div>
				
				<div itemscope itemtype="http://schema.org/Person">
					<p>Nairobi
					<span itemprop="telephone" class="telephone-number">
						<a href="tel:+234547862807">+234 54 7862807</a>
					</span>
					</p>
				</div> <!-- end elesewhere-container reference by masony -->
			</section>  <!-- end section for semantics -->
			
			
			
			<section id="image-use">
				<h1>To use these images</h1>
				<p>Images and text &copy;2013 Martin Storey, all rights reserved.</p>
				<p>Ask me about terms for any use of these images, commercial or otherwise.</p>
				<p>I’m available for commissions and assignments.</p>
			</section>
			
			<section id="looking-for-more">
				<h1>Looking for more?</h1>
				<p>This site is a selection. You can <a href="#">browse more</a> at the full archive.</p>
			</section>
			
			
			<section id="clients">
				<h1>Clients</h1>
				<p><a href="#">Login here</a> to download your images.</p>
			</section>
		
		</div> <!-- end footer content container --> 
	</footer>

</div> <!-- end of  #content-frame -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>

</html>
