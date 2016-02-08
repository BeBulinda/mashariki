/*	Responsive Menu
------------------------------------------------------------------------*/
jQuery(document).ready(function($) {
	$( ".main_menu ul.menu" ).clone().appendTo( $( ".responsive-menu" ) );
    $( "<i class='fa fa-angle-down'></i>" ).appendTo( $( ".responsive-menu ul.menu li.menu-item-has-children" ) );
    
    var tally_resMpanels = $('.responsive-menu ul.menu li.menu-item-has-children ul.sub-menu').hide();
    $('.responsive-menu ul.menu li.menu-item-has-children i').click(function() {
		if($(this).prev('ul.sub-menu, ul.children').hasClass('active')){
			$(this).prev('ul.sub-menu, ul.children').slideUp();
			$(this).prev('ul.sub-menu, ul.children').removeClass('active');
		}else{
			if(!$(this).parent().parent().hasClass('active')){
				tally_resMpanels.slideUp();
				tally_resMpanels.removeClass('active');
			}
			
			$(this).prev('ul.sub-menu, ul.children').slideDown();
			$(this).prev('ul.sub-menu, ul.children').addClass('active');
		}
		return false;
	});
    
	$('a.responsive-menu-hand').click(function() {
		if($(".responsive-menu ul.menu").hasClass('active')){
        
			$(".responsive-menu ul.menu").hide();
			$(".responsive-menu ul.menu").removeClass('active');
		}else{
			$(".responsive-menu ul.menu").show();
			$(".responsive-menu ul.menu").addClass('active');
		}
		return false;
	})
    
    if(jQuery().swipebox){
    	$( '.swipebox' ).swipebox();
    }
    
    if(jQuery().owlCarousel){
    	$( '.owl-carousel' ).owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                960:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        });
    }
});