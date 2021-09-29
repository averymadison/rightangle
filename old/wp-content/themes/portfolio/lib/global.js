jQuery(document).ready(function($){

/*Get rid of floating image titles*/
$(document).ready(function() {
	$("img").removeAttr("title");
});

/*Homepage slideshow*/
$(document).ready(function() {
    $('.homepage .slideshow').cycle({
		fx: 'fade',
		speed:  1000, 
		timeout: 6000
	});
});

function onAfter(curr,next,opts) {
	var caption = (opts.currSlide + 1) + ' of ' + opts.slideCount;
	$('#info').html(caption);
}


/*Basic slideshow*/
$(document).ready(function($) {
		$(document).ready(function() {
		
			$(function() {
				var index = 0, hash = window.location.hash;
				if (hash) {
				index = /\d+/.exec(hash)[0];
				index = (parseInt(index) || 1) - 1; // slides are zero-based
			}
		
		$('.page-template-project-slideshow-php .slideshow').cycle({
					fx: 'fade',
					speed: 800,
					timeout: 0,
					next: $('.next'),
					startingSlide: index,
					prev: $('.prev'),
					before:     onBefore,
					after:     onAfter
		});
 
	$('.pause').click(function() { 
		$('.portfolio-slideshow').cycle('toggle'); 
	});
	
	function onBefore(curr,next,opts) {
		var $ht = $(this).height();
		$('.slidehow').css("height", $ht);	
		
		$('.slideshow').animate({
		height: $ht
		}, 400, function() {
		// Animation complete.
		});
	}
				
	function onAfter(curr,next,opts) {
		window.location.hash = opts.currSlide + 1;
		var caption = (opts.currSlide + 1) + ' of ' + opts.slideCount;
		$('#info').html(caption);
	}	}); }); });
	
/*Slideshow with thumbs*/
$(document).ready(function($) {
		$(document).ready(function() {
		
			$(function() {
				var index = 0, hash = window.location.hash;
				if (hash) {
				index = /\d+/.exec(hash)[0];
				index = (parseInt(index) || 1) - 1; // slides are zero-based
			}
		
		$('.page-template-project-slideshow-thumbs-php .slideshow').cycle({
					fx: 'fade',
					speed: 800,
					timeout: 0,
					next: $('.next'),
					startingSlide: index,
					prev: $('.prev'),
					before:     onBefore,
					after:     onAfter,
					pager:  '#slides',
					pagerAnchorBuilder: function(idx, slide) {
					// return sel string for existing anchor
					return '#slides li:eq(' + (idx) + ') a';
      }
	});
 
	$('.pause').click(function() { 
		$('.portfolio-slideshow').cycle('toggle'); 
	});
	
	function onBefore(curr,next,opts) {
		var $ht = $(this).height();
		$('.slidehow').css("height", $ht);	
		
		$('.slideshow').animate({
		height: $ht
		}, 400, function() {
		// Animation complete.
		});
	}
	
	function onAfter(curr,next,opts) {
		window.location.hash = opts.currSlide + 1;
		var caption = (opts.currSlide + 1) + ' of ' + opts.slideCount;
		$('#info').html(caption);
	}	}); }); });

function formatTitle(title, currentArray, currentIndex, currentOpts) {
    return '<div id="tip7-title">' + (title && title.length ? '<b>' + title + '</b>' : '' ) + ' Image ' + (currentIndex + 1) + ' of ' + currentArray.length + '</div>';
}

$('a.fancybox').fancybox({
		'overlayOpacity':	0.7,
		'titleShow'		:	true,
		'overlayColor'	:	'#666',
		'padding'		: 1,
		'titlePosition' : 'inside',
	'titleFormat'		: formatTitle
});


});
 
  
 

 
  
 