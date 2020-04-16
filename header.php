<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name');
            echo "|";
            bloginfo('description'); ?></title>
    <meta charset=<?php bloginfo('charset'); ?> />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php bloginfo('template_directory_url') ?>/assets/img/fonte.png">
    <?php wp_head(); ?>
</head>

<body>
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <?php $template_directory = get_template_directory_uri(); ?>
                    <img src="<?php echo $template_directory; ?>/assets/img/9de.png" />
                </div>
                <div class="redes-sociais">
                    <ul>
                        <li><a href="">
                                <?php $template_directory = get_template_directory_uri(); ?>
                                <img src="<?php echo $template_directory; ?>/assets/img/wich.png" />
                            </a>
                        </li>
                        <li><a href="">
                                <?php $template_directory = get_template_directory_uri(); ?>
                                <img src="<?php echo $template_directory; ?>/assets/img/facebook.png" />
                            </a>
                        </li>
                        <li><a href="">
                                <?php $template_directory = get_template_directory_uri(); ?>
                                <img src="<?php echo $template_directory; ?>/assets/img/twitter.png" />
                            </a>
                        </li>
                        <li><a href="">
                                <?php $template_directory = get_template_directory_uri(); ?>
                                <img src="<?php echo $template_directory; ?>/assets/img/in.png" />
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </main>
    </header>