//code for roundabout
	jQuery(document).ready(function() {
	  jQuery('#myRoundabout').roundabout({
		duration: 3000,
		 reflect: true,
		 shape: "waterWheel",
		 autoplay: true,
		 autoplayInitialDelay: 0, 
		 autoplayDuration: 2000,
		 autoplayPauseOnHover: true,
		 enableDrag: true,
		 responsive: true,
		 easing: "swing",
		 dropEasing: "swing",
		 dropDuration: 600,
		 dropAnimateTo:"nearest",
		 dropCallback: function() {},
		 dragAxis: "y",
		 dragFactor: 4,
		 tilt: 0
		});
	});