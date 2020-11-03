<!DOCTYPE html>
<html lang="en">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>RARAA</title>
      <link rel="shortcut icon" href="Img/Logo/RARAA_1.ico" type="image/x-icon"/>
      
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/raraa-frontpage.css" rel="stylesheet">

    </head>

    <body>
    <?php
    
    if( isset( $_GET['page'] ) ){

        $pageid = $_GET['page'];

    }else{

        $pageid = 1;

        }

    // set language    
    if( isset( $_GET['lg'] )){

        $langid = $_GET['lg'];

    }else{

        $langid = 1;

    }
?>    
    
    <?php
    
    include 'php_source/raraa_auxFuncPHP.php';
    
    // sets the page menu
    $menu = chooseMenu( $langid );
    
    include 'php_source/raraa_navbar.php';
    include 'php_source/raraa_header.php';
    
    switch ( $pageid ){
        case 2:
            include 'php_source/raraa_about.php';
            break;
        case 3:
            include 'php_source/raraa_members.php';
            break;
        case 4:
            include 'php_source/raraa_news.php';
            break;
        case 5:
            
        default:                        
            include 'php_source/raraa_home.php';
            break;
    }
    
    include 'php_source/raraa_footer.php';
    ?>                   

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
