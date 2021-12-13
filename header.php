<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head()?>
</head>
<body>

    <div class="header_section">
            <header>
                <?php
                   $nav_property =  array( 'menu' => 'primary', 'container' => '', 'theme_location' => 'primary' );
                   wp_nav_menu($nav_property);
                ?> 
            </header>

            <h2 class="d-flex justify-content-center" ><?php the_title(); ?></h2>  <!-- show page name -->
    </div>



  <hr>
    <div class="body_content">

    