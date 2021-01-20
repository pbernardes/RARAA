<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- Page Content -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Col-sm-8 -->
                <div class="col-sm-8">
                    <!-- About title-->
                    <h2 class="mt-4">Session: # 503 of the 27th Annual Meeting of the European Association of Archaeologists</h2>
                    <!-- About Content -->
                    <div class="d-block mw-100">
                        <p><img src="Img/News/News1/News1.jpg" >                      </p>
                        <p>The RARAA: Open Access Rock Art Repository and the Rock Art Scotland project are collaborating in organizing session # 503 at the 27th Annual Meeting of the European Association of Archaeologists 2021 in Kiel. The title of the session is "Towards an Inclusive Future: A Strategy for Rock Art Research, Management and Social Value", to discuss contemporary issues that affect rock art, such as accessibility to data and knowledge, climate change, rapid changes in land use and the role of digital technologies as methods of preservation and dissemination”. <a href="https://submissions.e-a-a.org/eaa2021/sessions/overview/preview.php?id=503" target="_blank">https://submissions.e-a-a.org/eaa2021/sessions/overview/preview.php?id=503</a><br><br>
                            The form for submitting proposals for contributions to the session is available at <a href="https://submissions.e-a-a.org/eaa2021/" target="_blank">https://submissions.e-a-a.org/eaa2021/</a>.</p>
                        <?php                        
                        //openText($raraa_about_text_path);
                        ?>                  
                    </div>     
                    <!-- /.d-bock -->
                </div>
                <!-- /.col-sm-8 -->
                <!-- News div-->
                <div class="col-sm-4">
                  <h2 class="mt-4"><?php echo $menu[4];?></h2>
                  <?php
                  include 'raraa_newsTopics.php';
                  ?>
                </div>
                <!-- /.col-sm-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
