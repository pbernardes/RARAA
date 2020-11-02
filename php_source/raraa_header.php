<?php

/* 
 * Manage the header with background carousel
 * 
 * @author: Paulo Bernardes
 */

// image source path
$image_source_directory_path = "Img/Home/Header/";

// image array
$image_array = scandir($image_source_directory_path);

// array size
$image_array_size = sizeof($image_array);

?>
    <header class="raraa-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                            <?php
                                for( $i = 0; $i < ( $image_array_size - 2 ); $i++ ){
                            ?>
                                <li data-target="#carouselExampleSlidesOnly" data-slide-to="<?php echo $i ?>" <?php if ($i==0) {echo 'class="active"';}?> ></li>
                            <?php
                            }
                            ?>
                            </ul>
                            
                            <!-- Images -->
                            <div class="carousel-inner">
                                <?php
                                // build the carousel
                                for( $i = 0; $i < ( $image_array_size - 2 ); $i++){
                                ?>
                                <div class="carousel-item <?php if ( $i == 0 ) echo 'active'; ?>">
                                    <a>
                                        <img class="d-block w-100" src="<?php echo $image_source_directory_path.$image_array[ $i + 2 ];?>" alt="Slide <?php echo ( $i + 1 );?>">
                                    </a>                                    
                                </div>
                                <?php
                                }
                                ?>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </header>