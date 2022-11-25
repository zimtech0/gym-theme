<!-- single post page layout -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();  ?>
</head>
<!-- header section goes below body tag -->
<body>

<!-- Header section -->
    <header class="site-header">

        <!-- container wrapper -->
        <div class="container header-grid">

            <!-- navigation wrapper -->
            <div class="navigation-bar">

                <!-- logo  wrapper -->
                <div class="logo">

                    <!-- pull in logo and create link back to homepage -->
                    <a href="<?php echo home_url();  ?>">
                        <img src="<?php echo get_template_directory_uri()  . "/img/logo.svg" ?>  " alt="site logo" />
                    </a>
                </div> <!-- .logo  -->

                <!--  TODO:  add menu to front  end -->

                <?php 
                    //$args is built in wp function which we assign an associate array too
                    $args  = array(
                        //wp parameters that will be passed to $args
                        'theme_location'  => 'main-menu',
                        'container' =>'nav',
                        'container_class' => 'main-menu',


                    );

                    //wp function $args variable  being passed
                    wp_nav_menu($args);
                ?>

            </div><!-- .navigation-bar  -->

        </div><!-- .container  -->


    </header>