<?php

/* 
 * Manage the side column of"News" 
 * 
 * @author: Paulo Bernardes
 */

include 'raraa_newsAuxFuncPHP.php';
?>

<!-- First News (the one with higher id) -->
    <div class="border border-warning pl-2 py-2">
        <div class="image-wrapper float-left pr-2">
            <img src="<?php echo $raraa_news_image_source_directory_path.$raraa_news_image_array[0]?>"  alt="">
        </div>
        <!-- /.image-wrapper -->
         
        <h6><?php echo file_get_contents($raraa_news_text_directory_path.$raraa_news_text_array[0].'/title.txt');?></h6>
        <!-- /.news title header -->
        
        <div class="single-post-content-wrapper">
            <p><?php echo strstr( file_get_contents($raraa_news_text_directory_path.$raraa_news_text_array[0].'/body.txt'), '.', true); ?>.</p>
            <p><a class="btn btn-secondary" href="?page=4&lg=<?php echo $langid;?>&news_id=<?php echo $raraa_news_image_array_size?>" role="button">+ info &raquo;</a> </p>
        </div>        
        <!-- /.single-post-content-wrapper -->
        
    </div>
    <!-- /.border -->
     
    <!-- Second News  -->
<?php
    if ( $raraa_news_image_array_size > 1){
?>
    <div class="border border-warning mt-4 pl-2 py-2">
        <div class="image-wrapper float-left pr-2">
             <img src="<?php echo $raraa_news_image_source_directory_path.$raraa_news_image_array[1]?>" alt="">
        </div>
        <!-- /.image-wrapper -->
        
        <h6><?php echo file_get_contents($raraa_news_text_directory_path.$raraa_news_text_array[1].'/title.txt');?></h6>
        <!-- /.news title header -->
        
        <div class="single-post-content-wrapper">
            <p><?php echo strstr( file_get_contents($raraa_news_text_directory_path.$raraa_news_text_array[1].'/body.txt'), '.', true); ?>.</p>
            <p><a class="btn btn-secondary" href="?page=4&lg=<?php echo $langid;?>&news_id=<?php echo ($raraa_news_image_array_size-1);?>" role="button">+ info &raquo;</a></p>
        </div>
        <!-- /.single-post-content-wrapper -->
        
    </div>
    <!-- /.border -->
    
<?php
    }// end IF
    
    // Link to the list of all news
    if ( $raraa_news_image_array_size > 1 ){
?>
        <div class="border border-warning mt-4 pl-2 pt-3">
            <p><a href="?page=4&lg=<?php echo $langid;?>&news_id=-1" role="button">All News &raquo;</a></p>
        </div>
        <!-- /.border -->
    
<?php
    }// end IF
?>
