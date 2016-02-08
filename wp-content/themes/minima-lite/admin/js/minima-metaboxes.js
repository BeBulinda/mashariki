var slide_html=function(){
    window.minima_slides_count++;
    var index=window.minima_slides_count;
    return '<div class="minima-slide" id="minima-slide-'+index+'"><span class="minima-delete-slide" title="'+admin_text.delete_title+'">x</span>' +
    '<label>&nbsp;</label><span class="description">'+admin_text.slide_hint+'</span> ' +
    '<p><label for="min-image-upload-'+index+'">'+admin_text.image_lbl+'</label>' +
    '<span class="image-wrapper">' +
        '<button class="button-primary min-image-upload" id="min-image-upload-'+index+'">'+admin_text.upload_lbl+'</button>' +
    '</span></p>' +
    '<p><label for="min-slide-title-'+index+'">'+admin_text.title_lbl+'</label>' +
    '<input type="text" class="min-slide-title" id="min-slide-title-'+index+'"/></p>' +
    '<p><label for="min-slide-url-'+index+'">'+admin_text.url_lbl+'</label>' +
    '<input type="text" class="min-slide-url" id="min-slide-url-'+index+'"/></p>' +
    '</div>';
}
jQuery(document).ready(function($){
    window.minima_slider_editor=$("#min-slider-editor")
    window.minima_slides_count=window.minima_slider_editor.find(".minima-slide").length;
    window.slider_val=$("#min-slider-slides");
    var slides=window.minima_page_slides;
    //check if slides are not empty
    if(!$.isEmptyObject(slides)){
        console.log(slides);
        $.each(slides,function(k,slide){
            console.log(slide);
            window.minima_slider_editor.find(".no-items").remove();
            window.minima_slider_editor.append(slide_html());
            /* Update all values */
            $("#minima-slide-"+window.minima_slides_count).find(".min-slide-title").val(slide.title);
            $("#minima-slide-"+window.minima_slides_count).find(".min-slide-url").val(slide.url);
            $("#minima-slide-"+window.minima_slides_count).find(".min-image-upload").before('<img class="sp-img-preview" src="'+slide.image+'" alt="preview"/> <br/>');
        });
    }
    window.slider_val.val(jQuery.toJSON(slides));
    $("#add_new_slide").on("click",function(e){
        e.preventDefault();
        window.minima_slider_editor.find(".no-items").remove();
        window.minima_slider_editor.append(slide_html());
        //disable the slide by default and only enable after image has been choosen
        $("#minima-slide-"+window.minima_slides_count).find("input,textarea").attr("disabled",true);
        //add the slide to the editor
        var slides=jQuery.parseJSON(window.slider_val.val());
        if(window.slider_val.val()==''){
            slides={};
        }
        slides[window.minima_slides_count]={
            url:'',
            attachment:'',
            title:''
        };
        window.slider_val.val(jQuery.toJSON(slides));
    })
    $(document.body).on("click",".minima-delete-slide",function(){
        var id=$(this).parents(".minima-slide").attr("id").match(/\d/);
        id=id[0];
        $(this).parents(".minima-slide").remove();
        if(!window.minima_slider_editor.find(".minima-slide").length){
            window.minima_slider_editor.append('<p class="no-items">'+admin_text.no_slides+'</p>');
        }
        //remove the key from the array
        var slides=jQuery.parseJSON(window.slider_val.val());
        console.log(slides);
        if(slides!=null){
            delete slides[id];
        }
        window.slider_val.val(jQuery.toJSON(slides));
    })


    window.sp_curr_obj=0;
    jQuery(document.body).on('click',".min-image-upload",function(evt) {
        /* prevent form submission */
        evt.preventDefault();
        window.sp_curr_obj=jQuery(this);
        tb_show('','media-upload.php?type=image&amp;TB_iframe=true');
        /**
         *Overides default wordpress send_to_editor for sending images to image uploader
         *@param {String} html html of image selected
         *@memberOf window
         */
        window.send_to_editor = function(html) {
            var re_attach_id=/wp-image-(\d*)/;
            var res=html.match(re_attach_id);
            var re_attach_href=/src\=\"(.*?)\"/;
            var res_hr=html.match(re_attach_href);
            window.sp_curr_obj.siblings(".minima-slide-image").val(res[1]);
            var preview=window.sp_curr_obj.siblings(".sp-img-preview");
            if(!preview.length){
                window.sp_curr_obj.before('<img class="sp-img-preview" src="" alt="preview"/> <br/>')
                preview=window.sp_curr_obj.siblings(".sp-img-preview");
            }
            var current_slides=jQuery.parseJSON(window.slider_val.val());
            preview.attr("src",res_hr[1]);
            var parent=window.sp_curr_obj.parents(".minima-slide");
            var id=parent.attr("id").match(/\d/);
            id=id[0];
            //update the attachment id
            var slides=jQuery.parseJSON(window.slider_val.val());
            if(slides!=null){
                slides[id].attachment=res[1];
            }
            window.slider_val.val(jQuery.toJSON(slides));
            //enable the slide form
            parent.find("input,textarea").attr("disabled",false);
            tb_remove();
        }
        return false;
    });
    /** Update slides attributes based on id and propery
     */
    var update_slide_attr=function(id,attr,val){
        var slides=jQuery.parseJSON(window.slider_val.val());
        if(slides!=null){
            slides[id][attr]=val;
        }
        window.slider_val.val(jQuery.toJSON(slides));
        console.log(slides);
    }
    $(document.body).on("blur",".min-slide-title",function(){
        console.log($(this).val());
        var id=$(this).parents(".minima-slide").attr("id").match(/\d/);
        id=id[0];
        update_slide_attr(id,'title',$(this).val());
    })
    $(document.body).on("blur",".min-slide-url",function(){
        console.log($(this).val());
        var id=$(this).parents(".minima-slide").attr("id").match(/\d/);
        id=id[0];
        update_slide_attr(id,'url',$(this).val());
    })
    $(document.body).on("blur",".min-slide-caption",function(){
        console.log($(this).val());
        var id=$(this).parents(".minima-slide").attr("id").match(/\d/);
        id=id[0];
        update_slide_attr(id,'caption',$(this).val());
    })
    $(document.body).on("blur",".min-slide-label",function(){
        console.log($(this).val());
        var id=$(this).parents(".minima-slide").attr("id").match(/\d/);
        id=id[0];
        update_slide_attr(id,'buttonLabel',$(this).val());
    })
})