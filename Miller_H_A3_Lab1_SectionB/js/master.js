(function() {      //JQUERY METHOD
	$('div img').on ('click', function() {
		$.getJSON('includes/ajaxQuery.php', {model : this.id}, function(data){
			console.log(data);

			$('.subhead').text(data.modelName);
			$('.car-thumbs').attr('src', 'images/' + data.modelImage + '.png');
			$('.modelName').text(data.modelName);
			$('.priceInfo').text(data.pricing);
			$('.modelDetails').text(data.modelDetails);
		});
	});

})();