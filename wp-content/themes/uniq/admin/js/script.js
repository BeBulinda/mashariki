( function( $ ) {
	// Add Make Plus message
		upgrade = $('<a class="uniq-buy-pro"></a>')
			.attr('href', 'http://www.webulousthemes.com/?add-to-cart=2215')
			.attr('target', '_blank')
			.text(uniq_upgrade.message)
		;

		demo = $('<a class="uniq-docs"></a>')
			.attr('href','http://uniq.webulous.in/')
			.attr('target','_blank')
			.text(uniq_upgrade.demo);

		docs = $('<a class="uniq-docs"></a>')
			.attr('href','http://docs.webulous.in/uniq-free/')
			.attr('target','_blank')
			.text(uniq_upgrade.docs);

		$('.preview-notice').append(upgrade);
		$('.preview-notice').append(demo);
		$('.preview-notice').append(docs);
		// Remove accordion click event
		$('.uniq-buy-pro').on('click', function(e) {
			e.stopPropagation();
		});
		$('.uniq-docs').on('click',function(e){
			e.stopPropagation();
		})
} )( jQuery );