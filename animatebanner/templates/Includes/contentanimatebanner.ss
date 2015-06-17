<div ng-app="myApp" ng-controller="myCtrl">
	<sprite-sheet-canvas width="gameWidth" height="gameHeight"></sprite-sheet-canvas>
</div>

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
