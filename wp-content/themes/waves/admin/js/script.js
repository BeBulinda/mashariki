( function( $ ) {
	// Add Make Plus message
		upgrade = $('<a class="waves-buy-pro"></a>')
			.attr('href', 'http://www.webulousthemes.com/?add-to-cart=3941')
			.attr('target', '_blank')
			.text(waves_upgrade.message)
		;
		demo = $('<a class="waves-docs"></a>')
			.attr('href','http://waves.webulous.in/')
			.attr('target','_blank')
			.text(waves_upgrade.demo);
		docs = $('<a class="waves-docs"></a>')
			.attr('href','http://docs.webulous.in/waves-free/')
			.attr('target','_blank')
			.text(waves_upgrade.docs);
		support = $('<a class="waves-docs"></a>')
			.attr('href','http://www.webulousthemes.com/forums/forum/free-support/waves/')
			.attr('target','_blank')
			.text(waves_upgrade.support);

		$('.preview-notice').append(upgrade);
		$('.preview-notice').append(demo);    
		$('.preview-notice').append(docs);
		$('.preview-notice').append(support);
		// Remove accordion click event
		$('.waves-buy-pro').on('click', function(e) {
			e.stopPropagation();
		});
		$('.waves-docs').on('click',function(e){
			e.stopPropagation();      
		})
} )( jQuery );