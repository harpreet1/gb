$(document).ready(function(){

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
	
	
// Fly out menus

		//Menu animation						
		$('.navList ul').css({display: "none"}); //Fix Opera
  		
		$('.navList li').hover(function() { 
		$('.navList ul').css('background-color','3a3a3a');
		$(this).find('a').stop().animate({'width' : "225"});
   		$(this).find('ul:first').css({visibility : "visible", display : "none"}).show(400);
    
  		}, function() {
    		$(this).find('ul:first').css({visibility : "hidden"}).hide(400);
   			$(this).find('a').stop().animate({'width' : "225"});
			});
		
	
	

});
