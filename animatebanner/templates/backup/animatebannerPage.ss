<!DOCTYPE html>
<html lang="$ContentLocale">

<head>
<% include Metadata %>
<% base_tag %>
<% include Favicon %>
<% include Html5Shiv %>
</head>

<body>
<% include Navbar %>

<div ng-app="myApp" ng-controller="myCtrl">
	<sprite-sheet-canvas width="gameWidth" height="gameHeight"></sprite-sheet-canvas>
</div>

<div class="container">
	<% include ContentHeader %>
	
	<% include ContentBody %>
</div>



<% include Sitemap %>
<% include Footer %>

<% include Silverstrap %>
<script>
var stickyNavTop = $('.navbar').offset().top;  
  
	var stickyNav = function(){  
	var scrollTop = $(window).scrollTop();  
	       
	if (scrollTop > stickyNavTop) {   
	    $('.navbar').addClass('sticky');  
	} else {  
	    $('.navbar').removeClass('sticky');   
	}  
	};  
	  
	stickyNav();  
	  
	$(window).scroll(function() {  
	    stickyNav();  
	});  
</script>
</body>

</html>




