<?php wp_footer(); ?>
<footer>
    <div class="col-100 footer">
        <div class="content">
            <div class="col-4">
                <h3><b>Populr Post</b></h3>
                <p> Lorem Ipsum is simply dummy
                    text of the printing.</p>
                <p class="clock" style="color: #6e6b6d">
                    <p class="text-muted">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span></p>
                </p>
                <p><?php the_title(); ?>.</p>
                <p class="clock" style="color: #6e6b6d">
                </p>
                <p class="text-muted">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span></p>
            </div>
            <div class="col-4 str-01">
                <h3><b>Tags</b></h3>
                <p>apps <em>blog</em> logroll christmas cms coda concert <em>daily</em> <br />
                    <em>design</em> develop dialog drinks envato food fun
                    gallery gift holiday icon <em>illustration</em> ipad iphone journal <em>jquery</em>
                    lel link marketing bile motion music photo <em>profession</em> quotation
                    recipes show sound strategy tvtypography <em>video</em>.
                </p>
            </div>
            <div class="col-4">
                <h3><b>A little about us</b></h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                    anything.</p>
            </div>
            <div class="col-4">
                <h3><b>Get in touch</b></h3>
                <p>Lorem Ipsum is simply dummy
                    of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    text ever since.</p>
                <p class="local">Texas, US</p>
                <p class="email">email@email.com</p>
                <p class="phone">890-09880-45590</p>
            </div>
        </div>
    </div>
</footer>
<div class="col-100 footer-2">
    <div class="content-002">
        <div class="black-03">
            <?php $template_directory = get_template_directory_uri(); ?>
            <p> <?php echo date('Y'); ?> Web World. All rights reserved. Theme by cssautther</p>
            <div class="social-media-footer">
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
    </div>

    </body>

    </html>