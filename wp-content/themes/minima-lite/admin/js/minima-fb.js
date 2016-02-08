jQuery(document).ready(function($){
    jQuery(".remove-image").live("click",function(e){
        e.preventDefault();
        $(this).siblings(".sp-img-preview").remove();
        $(this).siblings(".minima-fb-image").val('');
        $(this).remove();
    });
    if(jQuery("#minima-featured-image-upload").length){
        window.sp_curr_obj=0;
        jQuery(document.body).on('click',"#minima-featured-image-upload",function(evt) {
            /* prevent form submission */
            evt.preventDefault();
            window.sp_curr_obj=jQuery(this);
            tb_show('','media-upload.php?type=image&amp;TB_iframe=true');
            return false;
        });
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
            window.sp_curr_obj.siblings(".minima-fb-image").val(res[1]);
            var preview=window.sp_curr_obj.siblings(".sp-img-preview");
            if(!preview.length){
                window.sp_curr_obj.before('<img class="sp-img-preview" src="" alt="preview"/> <br/><button class="button-secondary remove-image">'+admin_text.remove_image+'</button>')
                preview=window.sp_curr_obj.siblings(".sp-img-preview");
            }
            preview.attr("src",res_hr[1]);
            //sp_admin_set_bg_img(res[1],res_hr[1]);
            tb_remove();
        }
    }
})