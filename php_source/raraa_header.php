<?php

/* 
 * Manage the header with background carousel
 * 
 * @author: Paulo Bernardes
 */

include 'raraa_headerAuxFuncPHP.php';
?>
    <header class="raraa-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                            <?php
                            for( $i = 0; $i < ( $raraa_header_image_array_size - 2 ); $i++ ){
                            ?>
                                <li data-target="#carouselExampleSlidesOnly" data-slide-to="<?php echo $i ?>" <?php if ($i==0) {echo 'class="active"';}?> ></li>
                            <?php
                            }// end for()
                            ?>
                            </ul>
                            <!-- /.Indicators --
                            <!-- Images -->
                            <div class="carousel-inner">
                                <?php
                                // build the carousel
                                for( $i = 0; $i < ( $raraa_header_image_array_size - 2 ); $i++){
                                ?>
                                <div class="carousel-item <?php if ( $i == 0 ) echo 'active'; ?>">
                                    <a>
                                        <img class="d-block w-100" src="<?php echo $raraa_header_image_source_directory_path.$raraa_header_image_array[ $i + 2 ];?>" alt="Slide <?php echo ( $i + 1 );?>">
                                    </a>                                    
                                </div>
                                <!-- /.carousel-item -->
                                <?php
                                }// end for()
                                ?>                                
                            </div>
                            <!-- ./carousel-inner -->
                        </div>
                        <!-- /.carousel slide/carouselExampleSlidesOnly -->
                    </div>
                    <!-- /.col-lg-12-->
                </div>
                <!-- /.row-->
            </div>  
            <!-- /.container -->
        </header>
        <!-- /.header/raraa-header -->