<?php

/* 
 * Manage the side column of"News" 
 * 
 * @author: Paulo Bernardes
 */

include 'raraa_newsAuxFuncPHP.php';
?>

    <div class="border border-warning pl-2 py-2">
        <div class="image-wrapper float-left pr-2">
            <img src=<?php echo $raraa_news_image_source_directory_path.$raraa_news_image_array[0]?>  alt="">
        </div>
        <h6>Session: # 503 of the 27th Annual Meeting of the European Association of Archaeologists</h6>
        <div class="single-post-content-wrapper">
            <p><?php echo strstr( file_get_contents($raraa_news_text_directory_path.$raraa_news_text_array[0].'/body.txt'), '.', true); ?>.</p>
            <p><a class="btn btn-secondary" href="?page=4&lg=<?php echo $langid;?>&news_id=1" role="button">+ info &raquo;</a> </p>
        </div>        
    </div>

    <div class="border border-warning mt-4 pl-2 py-2">
         <div class="image-wrapper float-left pr-2">
             <img src="Img/News/News1.jpg" alt="">
        </div>
        <h6>Semantic Web projects developed with MIEGSI and MTI students</h6>
        <div class="single-post-content-wrapper">
            <p>Project 8 - Archeology - rock / plaque characterization</p>
            <p><a class="btn btn-secondary" href="?page=4&lg=<?php echo $langid;?>&news_id=2" role="button">+ info &raquo;</a></p>
        </div>
     </div>

