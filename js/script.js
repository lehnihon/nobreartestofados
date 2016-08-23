( function( $ ) {
	$(function() {
        $('.videoWrapper').click(function () {
            $('.videoWrapper iframe').css("pointer-events", "auto");
        });
        $(".anima-a").css('visibility','hidden');
        $(".anima-b").css('visibility','hidden');
        $(".anima-c").css('visibility','hidden');
        $(".anima-d").css('visibility','hidden');
        $(".anima-e").css('visibility','hidden');
        $(".anima-f").css('visibility','hidden');
        $(".anima-g").css('visibility','hidden');
        $(".anima-h").css('visibility','hidden');
        $(".anima-i").css('visibility','hidden');
	});

	$(window).scroll(function() {
        if ($(this).scrollTop() > 600) {
			var FunctionOne = function () {
				var r = $.Deferred();

	        	$(".anima-a").css('visibility','visible');
	        	$(".anima-a").addClass('animated bounceInLeft');
	        	$(".anima-c").css('visibility','visible');
	        	$(".anima-c").addClass('animated bounceInRight');
				setTimeout(function () {
				r.resolve();
				}, 500);
				return r;
			};
	
			FunctionOne().done(
				function () {
		        	$(".anima-b").css('visibility','visible');
		        	$(".anima-b").addClass('animated fadeIn');
				}
			);

        }

        if ($(this).scrollTop() > 900) {
        	$(".anima-d").css('visibility','visible');
        	$(".anima-d").addClass('animated bounceInLeft');
        	$(".anima-e").css('visibility','visible');
        	$(".anima-e").addClass('animated bounceInLeft');

        	$(".anima-f").css('visibility','visible');
        	$(".anima-f").addClass('animated bounceInRight');
        	$(".anima-g").css('visibility','visible');
        	$(".anima-g").addClass('animated bounceInRight');

        }
        if($(this).scrollTop() > 1300) {
			var FunctionOne = function () {
				var r = $.Deferred();

	        	$(".anima-h").css('visibility','visible');
	        	$(".anima-h").addClass('animated fadeIn');

				setTimeout(function () {
				r.resolve();
				}, 500);
				return r;
			};
	
			FunctionOne().done(
				function () {
		        	$(".anima-i").css('visibility','visible');
		        	$(".anima-i").addClass('animated fadeIn');
				}
			);
        } 
	});

} )( jQuery );