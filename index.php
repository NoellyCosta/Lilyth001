<?php get_header(); ?>

<main class="col-100 menu-urls">
    <div class="header-2">
        <div class="menu">
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">About Us</a>
                </li>
                <li>
                    <a href="">Service</a>
                </li>
                <li>
                    <a href="">Pages</a>
                </li>
                <li>
                    <a href="">Blog</a>
                </li>
                <li>
                    <a href="">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="busca-aqui">
            <input placeholder="Search Something" type="text" />
        </div>
    </div>
</main>
<div class="col-100">
    <div class="slider-principal">
        <?php $template_directory = get_template_directory_uri(); ?>
        <img src="<?php echo $template_directory; ?>/assets/img/layer1.png" />
        <?php $template_directory = get_template_directory_uri(); ?>
        <img src="<?php echo $template_directory; ?>/assets/img/layer1.png" />
        <?php $template_directory = get_template_directory_uri(); ?>
        <img src="<?php echo $template_directory; ?>/assets/img/layer1.png" />
        <?php $template_directory = get_template_directory_uri(); ?>
        <img src="<?php echo $template_directory; ?>/assets/img/layer1.png" />
        <?php $template_directory = get_template_directory_uri(); ?>
        <img src="<?php echo $template_directory; ?>/assets/img/layer1.png" />
    </div>
</div>

<div class="col-100">
    <div class="content texto-destaque">
        <div>
            <h1>LOREM IPSUM IS<strong> SIMPLY DUMMY</strong> OF THE PRINTING.</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                <br>1500s, when an unknown printer took a galley of type and scrambled it to make atype specimen book.</br>
                It has survived not only five centuries. but also the leap into electronic typesetting, remaining essentially unchanged.</p>

        </div>



        <div class="col-3 bloco-texto">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img src="<?php echo $template_directory; ?>/assets/img/img003.png">
            <h3><b>Lorem Ipsum</b> is simply</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting of the industry. Lorem
                Ipsum has been
            </p>
        </div>
        <div class="col-3 bloco-texto" style="margin-top: 5em">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img src="<?php echo $template_directory; ?>/assets/img/img002.png">
            <h3><b>Lorem Ipsum</b> is simply</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting of the industry. Lorem
                Ipsum has been
            </p>
        </div>
        <div class="col-3 bloco-texto">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img src="<?php echo $template_directory; ?>/assets/img/img001.png">
            <h3><b>Lorem Ipsum</b> is simply</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting of the industry. Lorem
                Ipsum has been
            </p>
        </div>
    </div>
</div>
<!---Post--->
<div class="col-100 bloco-imagens-texto">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="content">
                <div class="col-3 bloco-texto bloco-imagem">
                    <?php the_post_thumbnail('post_thumbnail', array('class' => 'img-Fluid')); ?>
                    <p><b><?php the_title(); ?></b></p>
                    <p><?php the_excerpt(); ?>
                        <p class="text-muted">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span></p>
                </div>
            </div>
</div>
<?php endwhile; ?>

<?php else : get_404_template();
    endif; ?>

<div class="col-100 bloco-logos">
    <div class="content">
        <div class="col-4 hvr-sink">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img alt="logo" title="logo" src="<?php echo $template_directory; ?>/assets/img/logo01.png">
        </div>
        <div class=" col-4 hvr-sink">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img alt="logo" title="logo" src="<?php echo $template_directory; ?>/assets/img/logo02.png">
        </div>
        <div class=" col-4 hvr-sink" style="margin-top: 1em">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img alt="logo" title="logo" src="<?php echo $template_directory; ?>/assets/img/logo03.png">
        </div>
        <div class=" col-4 hvr-sink">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img alt="logo" title="logo" src="<?php echo $template_directory; ?>/assets/img/logo04.png">
        </div>
    </div>
</div>


<?php
get_footer(); ?>