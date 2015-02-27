<!DOCTYPE html>
<html lang="pt">
  <head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Smartbyte">
    <meta name="keyword" content="smartbyte, sistema, licitações, acompanhamento">

    <title>SAL PLUS :: Login</title>
    <?php
    echo $this->Html->css("/assets/css/bootstrap.css");
    echo $this->Html->css("/assets/font-awesome/css/font-awesome.css");
    echo $this->Html->css("/assets/css/style.css");
    echo $this->Html->css("/assets/css/style-responsive.css");
    echo $scripts_for_layout;
    ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

    <div id="login-page">
          <div class="container">
              <div class="row mt">
                  <?php echo $this->Session->flash('auth'); ?>         
              </div>                        
          <?php echo $content_for_layout; ?>           
          </div>
    </div>
    <?php 
    echo $this->Html->script(array("/assets/js/jquery.js"));
    echo $this->Html->script(array("/assets/js/bootstrap.min.js"));
    echo $this->Html->script(array("/assets/js/jquery.backstretch.min.js"));    
    ?>
    <script>
        $.backstretch("<?php echo $this->Html->url('/'); ?>assets/img/login-bg.jpg", {speed: 500});
        if ( $('#authMessage').length){
            $("#authMessage").addClass( "alert alert-danger" );
        }
    </script>
    <?php echo $this->element('sql_dump'); ?>
  </body>
</html>
