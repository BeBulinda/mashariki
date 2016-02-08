/* jQuery plugins for UI interfaces */
//carousel
jQuery.fn.UICarousel=function(options){
    var carousel=jQuery(this);
    var slides=carousel.find(".slide");
    var carouselInner=carousel.find(".carousel-inner");
    var bullets=carousel.find(".bullets");
    var caption=carousel.find(".carousel-text");
    for(var i=0;i<slides.length;i++){
        bullets.append('<li><a href="#"><span class="ui-bullet"></span></a></li>');
    };
    bullets.find("li").eq(0).addClass("active");
    var settings=jQuery.extend({
        // These are the defaults.
        width: false,
        duration:600,
        easing: 'linear',
        auto:3000 //can pass interval duration as value
    }, options);
    if(!settings.width){
        //use current height and width of carousel
        settings.width=jQuery(this).width();
    }
    //set slider sizes
    carousel.find(".slide").each(function(){
        jQuery(this).width(settings.width);
    })
//    carousel.find(".slide").on('swipeleft',function(){
//        console.log("swipe left");
//        goNext(bullets.find("li").index(bullets.find(".active")));
//    })
//    carousel.find(".slide").on('swiperight',function(){
//        goPrev(bullets.find("li").index(bullets.find(".active")));
//    })   
      carousel.find(".slide").swipe( {
        swipe:function(event, direction, distance, duration, fingerCount) {
            if(direction=='left'){
                goNext(bullets.find("li").index(bullets.find(".active")));
            }
            if(direction=='right'){
                goPrev(bullets.find("li").index(bullets.find(".active")));
            }
        },
        threshold:0,
        fingers:'all'
      });
    //check and prevent event if user wants to scroll down
    jQuery('.slide')
        .on('movestart', function(e) {
            // If the movestart is heading off in an upwards or downwards
            // direction, prevent it so that the browser scrolls normally.
            if ((e.distX > e.distY && e.distX < -e.distY) ||
                (e.distX < e.distY && e.distX > -e.distY)) {
                e.preventDefault();
            }
        });
    //bullet event handler
    bullets.find("li").on("click",function(e){
        e.preventDefault();
        var index=bullets.find("li").index(jQuery(this));
        switchSlides(index);
    });
    var goNext=function(index){
        if(index<(carousel.find(".slide").length-1)){
            switchSlides(index+1);
        }else{
            switchSlides(0);
        }
    }
    var goPrev=function(index){
        if(index>0){
            switchSlides(index-1);
        }else{
            switchSlides(carousel.find(".slide").length-1);
        }
    }
    carousel.find(".next").on("click",function(e){
        e.preventDefault();
        goNext(bullets.find("li").index(bullets.find(".active")));

    });

    carousel.find(".prev").on("click",function(e){
        e.preventDefault();
        goPrev(bullets.find("li").index(bullets.find(".active")));

    })
    var switchSlides=function(index){
        var marginLeft=index*settings.width;
        carouselInner.animate({
            'margin-left':'-'+marginLeft+'px'
        },settings.duration,function(){
            bullets.find(".active").removeClass("active");
            bullets.find("li").eq(index).addClass("active");
            caption.html(slides.eq(index).find(".caption").html());
        });
        if(settings.auto){
            clearTimeout(settings['timeout-id']);
            settings['timeout-id']=setTimeout(function() {
                if(index<(carousel.find(".slide").length-1)){
                    switchSlides(index+1);
                }else{
                    switchSlides(0);
                }
            }, settings.auto);
        }
    }
    //update carousel slide sizes on resize
    jQuery(window).resize(function(){
        var index=bullets.find("li").index(bullets.find(".active"));
        settings.width=carousel.width();
        carousel.find(".slide").each(function(){
            jQuery(this).width(settings.width);
        });
        //updates the marginlefr
        var index=bullets.find("li").index(bullets.find(".active"));
        carouselInner.css("margin-left",'-'+index*settings.width+"px");
    })
    //initialize the interface
    var index=bullets.find("li").index(bullets.find(".active"));
    if(isNaN(index)){
        index=0;
    }
    switchSlides(index);
}

/** featured box ui **/
jQuery.fn.UIFeatures=function(options){
    var slider=jQuery(this);
    //check if slider is required
    var min_count=4;
        var goToSlide=function(index,current){
            var box_count=slider.find(".featured-box").length;
            var bWidth=slider.find(".featured-box").width()+20;
            var total=Math.ceil(box_count/min_count);
            if((index)<=total&&index>0){
                //check if the final slide has four visible boxes
                var margLeft=0;
                if((index*min_count)<=box_count){
                    margLeft=min_count*bWidth*(index-1);
                }else{
                    var available=box_count-((index-1)*min_count);
                    margLeft=available*bWidth+(index-2)*min_count*bWidth;
                }
                slider.find(".featured-container").stop(true,true).animate({
                    'margin-left':'-'+margLeft+'px'
                },600,function(){
                    slider.find(".bullets .active").removeClass("active");
                    slider.find(".bullets li").eq(index-1).addClass("active");
                });
                return true;
            }
            if(index>total){
                goToSlide(1);
            }
            if(index<1){
                goToSlide(total);
            }
        }
        var setupSlides=function(){
            //set width of the boxes
            var bWidth=(slider.width()-20)/min_count;
            bWidth=bWidth-20;
            var container=slider.find(".featured-container");
            slider.find(".featured-box").each(function(){
                jQuery(this).width(bWidth);
                jQuery(this).css("margin-left","20px");
            });
            //setup navigation
            var nav=slider.find(".nav-container");
            var slides=Math.ceil(slider.find(".featured-box").length/min_count);
            var bullets=nav.find(".bullets");
            for(i=0;i<slides;i++){
                bullets.append('<li><a href="#"><span class="ui-bullet"></span></a></li>')
            }
            bullets.find("li").eq(0).addClass("active");
            
        }
        var nav=slider.find(".nav-container");
        var bullets=nav.find(".bullets");
        nav.find(".prev").on("click",function(e){
            e.preventDefault();
            var index=(bullets.find('li').index(bullets.find('.active')))+1;
            goToSlide(index-1,index);
        })
        nav.find(".next").on("click",function(e){
            e.preventDefault();
            var index=(bullets.find('li').index(bullets.find('.active')))+1;
            goToSlide(index+1,index);
        })
        bullets.find("a").on("click",function(e){
            e.preventDefault();
            var index=(bullets.find('li').index(jQuery(this).parents('li')))+1;
            var current=(bullets.find('li').index(bullets.find('.active')))+1;
            goToSlide(index,current);
        });
        slider.append('<div class="featured-container"></div>')
        //set width of the boxes
        var container=slider.find(".featured-container");
        slider.find(".featured-box").each(function(){
            jQuery(this).appendTo(container);
            jQuery(this).css("margin-left","20px");
        });
        if(slider.width()>1200){
            min_count=4;
        }else{
            if(slider.width()>800){
                min_count=3;
            }else{
                min_count=2;
            }
        }
        setupSlides();
        jQuery(window).resize(function(){
            if(slider.width()>1200){
            min_count=4;
            }else{
                if(slider.width()>800){
                    min_count=3;
                }else{
                    min_count=2;
                }
            }
            var bullets=slider.find(".bullets");
            var index=(bullets.find('li').index(bullets.find('.active')))+1;
            slider.find(".nav .bullets li").remove();
            slider.find(".featured-container").css('margin-left','0px');
            goToSlide(index);
            setupSlides();

        })
}
document.createElement("section");
document.createElement("article");
document.createElement("header");
document.createElement("footer");
//defind console.log if not present
jQuery(function($) {
    $(".ui-carousel").UICarousel({auto:false});
    $(".ui-featured-boxes").UIFeatures({auto:false});
});
if(!window.console){
    var console={
        log:function(){

        }
    }
}
jQuery(document).ready(function($){
    $( '.menu li:has(ul)' ).doubleTapToGo();
    $(".search-toggle a").on("click",function(e){
        e.preventDefault();
        if(!$(this).parent().hasClass("active")){
            $(this).parent().siblings("#search-container").removeClass("hide");
            $(this).parent().addClass("active");
        }else{
            $(this).parent().siblings("#search-container").addClass("hide");
            $(this).parent().removeClass("active");
        }
    })
    $(".dropdown").click(function(e){
        e.stopPropagation();
        if(!$(this).hasClass("open")){
            var html='';
            if($(this).siblings(".menu").is("ul")){
                html=$(this).siblings(".menu").html();;
            }else{
                html=$(this).siblings(".menu").find("ul").html();
            }
            html=html.replace(new RegExp('class="ti-sub-menu"', 'g'), 'class=""');
            $(this).find(".dropdown-menu").html(html);
            $(this).find(".dropdown-menu").show();
            $(this).addClass("open");
        }else{
            $(this).find(".dropdown-menu").hide();
            $(this).removeClass("open");
        }
    });
});