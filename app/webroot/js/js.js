$(document).ready(function(){

	//$("input:text:visible:first").focus();

	$("#ProductSearch").autocomplete({
		minLength: 2,
		select: function(event, ui) {
			$("#s").val(ui.item.label);
			$("#searchform").submit();
		},
		source: function (request, response) {
			$.ajax({
				url: Shop.basePath + "products/searchjson",
				data: {
					search: request.term,
				},
				dataType: "json",
				success: function(data) {
					response($.map(data, function(el, index) {
						return {
							value: el.Product.name,
							name: el.Product.name,
							image: el.Product.image
						};
					}));
				}
			});
		}
	}).data("autocomplete")._renderItem = function (ul, item) {
		return $("<li />")
			.data("item.autocomplete", item)
			.append("<a><img width='25' src='" + Shop.basePath + "img/products/image/" + item.image + "' /> " + item.name + "</a>")
			.appendTo(ul);
	};
	

	// Popover
	
	//$('.pop').popover('toggle');
	
    		$("a[rel=pop_generic]").popover({html:'true'}).click(function(e) {
		})
		
    		$("a[rel=pop_brand]").popover({html:'true'}).click(function(e) {
		})
		
		
	// Product Display Slider
	
		
			$('#carousel').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				itemWidth: 50,
				itemMargin: 5,
				
				asNavFor: '#slider'
		  });
		  
		  $('#slider').flexslider({
				animation: "fade",
				animationSpeed: 400,
				easing: "swing",//{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				sync: "#carousel",
				start: function(slider){
				  $('body').removeClass('loading');
				}
		  });
		
			

});
