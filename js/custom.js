(function (jQuery) {
	window.$ = jQuery.noConflict();
})(jQuery);
$(document).ready(function(){
	// testimonios
	$('.slider').slick({
		infinite: true,
		dots: true,
		arrow: true
	});    
})
//Boton para subir
$(document).ready(function() {
	// Show or hide the sticky footer button
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.go-top').fadeIn(200);
		} else {
			$('.go-top').fadeOut(200);
		}
	});
	
	// Animate the scroll to top
	$('.go-top').click(function(event) {
		event.preventDefault();
	$('html, body').animate({scrollTop: 0}, 300);
	});
	// Han confiado
	$('.galeria-logos').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 6,
		dots: true,
		arrow: false,
		autoplay: true,
		responsive: [
			{
			  breakpoint: 1199,
			  settings: {
				slidesToShow: 5,
				slidesToScroll: 5
			  }
			},
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 4
			  }
			},
			{
			  breakpoint: 800,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			  }
			},
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				dots: false
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false
			  }
			}
		]
	});
});
//counter home
(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, '.');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});





// formulario contacto
$(document).on('keypress', '.onlytext', function (event) {
	var regex = new RegExp("^[A-Za-z äÄëËïÏöÖüÜáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙñÑ.]$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (event.keyCode !== 8) {
		if (!regex.test(key)) {
			event.preventDefault();
			return false;
		}
	}
});
$(document).ready(function() {
	$('input,textarea').bind('cut copy paste', function (e) {
		e.preventDefault();
	});
});
