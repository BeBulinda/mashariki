<?php
/**
 * Displays a chat post format post
 */
?>
<div class="ti-chat-post">
    <?php
    $content = get_the_content();
    $content = nl2br($content);
    $content=preg_replace('/\n(\<br\s\/\>)/','',$content);
    //convert brs into paragraphs containg each line and add an icon to each line
    $content = str_replace('<br />', '</p><p><span class="icon-chat"></span>', $content);
    echo '<p><span class="icon-chat"></span>' . $content . '</p>';
    ?>
</div>