jQuery(document).ready(function() {

	jQuery('.wp-full-overlay-sidebar-content').prepend('<a style="width: 48%; display: inline-block; text-align: center; margin: 15px 1%;" href="'+objectL10n.doc_url+'" class="button" target="_blank">{doc}</a>'.replace('{doc}',objectL10n.doc));
	
	jQuery('.wp-full-overlay-sidebar-content').prepend('<a style="width: 48%; display: inline-block; text-align: center; margin: 15px 1%;;" href="'+objectL10n.pro_url+'" class="button button-primary" target="_blank">{pro}</a>'.replace('{pro}',objectL10n.pro));
	
});
