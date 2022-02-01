<?php

    if(!is_user_logged_in()) {

        auth_redirect();
    }

    
?>

<!DOCTYPE html>
<html lang="fr" class="app">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php bloginfo('name'); ?></title>
        
        <!-- CSS -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css" />

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"
            integrity="sha512-UxP+UhJaGRWuMG2YC6LPWYpFQnsSgnor0VUF3BHdD83PS/pOpN+FYbZmrYN+ISX8jnvgVUciqP/fILOXDjZSwg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>

        <script src="<?php bloginfo('template_url') ?>/js/main.js" defer></script>
        <?php wp_head(); ?>
        <?php echo "<script>const chemin = '".get_template_directory_uri()."'</script>";?>
    </head>

    <body <?php body_class(); ?>>
        <div class="app-container">
            <header class="header">
                <div class="wrapper">
                    <a href="<?php echo home_url(); ?>" class="logo">
                        <img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="logo" />    
                    </a>

                    <nav class="header-navigation">
                        <div class="header-user">
                                                                                <!-- On click logout user from wp -->
                            <button type="button" class="header-user_current" onClick="window.location.href = '<?php echo wp_logout_url(); ?>'">
                                <span>Déconnecter <?php echo wp_get_current_user()->display_name; ?></span>
                                <!-- <i class="fas fa-chevron-down"></i> -->
                            </button>
                        </div>
                        <?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>   
                    </nav>

                </div>
            </header>