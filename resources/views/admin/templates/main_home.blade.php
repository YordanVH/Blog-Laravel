<!DOCTYPE HTML>
<html>
	<head>
		<title>Pinball Website Template | Home :: w3layouts</title>
		<link href="template_blog/css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="{{ asset('template_blog/css/nav.css') }}">
		

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="template_blog/images/fav-icon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  		<link rel="stylesheet" href="template_blog/css/main.css">
		<script src="template_blog/js/jquery.min.js"></script>

         <script type="text/javascript">
			var $ = jQuery.noConflict();
				$(function() {
					$('#activator').click(function(){
						$('#box').animate({'top':'0px'},500);
					});
					$('#boxclose').click(function(){
					$('#box').animate({'top':'-700px'},500);
					});
				});
				$(document).ready(function(){
				$(".toggle_container").hide();
				$(".trigger").click(function(){
					$(this).toggleClass("active").next().slideToggle("slow");
						return false;
				});
									
			});
		</script>
	</head>
	<body>

		<div class="content">
			<div class="wrap">
			 <div id="main" role="main">
			      <ul id="tiles">
			      	@include('admin.templates.partials.nav_slider')
			        @yield('content')  
			      </ul>
			    </div>
			</div>
		</div>
		
		  <script src="template_blog/js/jquery.imagesloaded.js"></script>
		  <script src="template_blog/js/jquery.wookmark.js"></script>
		  <script type="text/javascript">
		    (function ($){
		      var $tiles = $('#tiles'),
		          $handler = $('li', $tiles),
		          $main = $('#main'),
		          $window = $(window),
		          $document = $(document),
		          options = {
		            autoResize: true,
		            container: $main,
		            offset: 20,
		            itemWidth:280
		          };
		      
		      function applyLayout() {
		        $tiles.imagesLoaded(function() {
		          
		          if ($handler.wookmarkInstance) {
		            $handler.wookmarkInstance.clear();
		          }
		
		          
		          $handler = $('li', $tiles);
		          $handler.wookmark(options);
		        });
		      }
		      
		      function onScroll() {
		        
		        var winHeight = window.innerHeight ? window.innerHeight : $window.height(),
		            closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 100);
		
		      };
		
		      applyLayout();
		
		      $window.bind('scroll.wookmark', onScroll);
		    })(jQuery);
		  </script>
		</body>
</html>

