<?php if( get_field( 'select_view_post_type' ) == 'app' ){ ?>
    <div class="recent-posts__item app" style="background-color: <?php echo get_field( 'background_color' ); ?>">
        <span style="color: <?php echo get_field( 'title_color' ); ?>"><?php echo get_the_title(); ?></span>

        <?php if ( get_field( 'show_arrow' ) == 1 ) { ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 18.3787L10.5 -4.17266e-07L13.5 -5.48401e-07L13.5 18.3787L20.4853 11.3934C21.0711 10.8076 22.0209 10.8076 22.6066 11.3934C23.1924 11.9792 23.1924 12.9289 22.6066 13.5147L13.0607 23.0607C12.4749 23.6464 11.5252 23.6464 10.9394 23.0607L1.39344 13.5147C0.807655 12.9289 0.807655 11.9792 1.39344 11.3934C1.97923 10.8076 2.92898 10.8076 3.51476 11.3934L10.5 18.3787Z" fill="<?php echo get_field('arrow_color') ? get_field('arrow_color') : '#9AFF00'; ?>"/></svg>
        <?php } ?>

        <div class="recent-posts__item--store">
            <?php if( get_field( 'appstore' ) ){ ?>
                <a href="<?php echo get_field( 'appstore' ); ?>" rel="nofollow" target="_blank">
                    <?php get_template_part( 'template-parts/appstore' ); ?>
                </a>
            <?php } ?>

            <?php if( get_field( 'google_play' ) ){ ?>
                <a href="<?php echo get_field( 'google_play' ); ?>" rel="nofollow" target="_blank">
                    <?php get_template_part( 'template-parts/google-play' ); ?>
                </a>
            <?php } ?>
        </div>
    </div>
<?php } elseif( get_field( 'select_view_post_type' ) == 'update_color' ) { ?>
    <div class="recent-posts__item update-color" style="background-color: <?php echo get_field( 'update_background' ); ?>">
        <a class="recent-posts__item--title" style="color: <?php echo get_field( 'update_title' ); ?>">
            <span><?php echo get_the_title(); ?></span>
        </a>
        <div class="recent-posts__item--read">
            <a href="<?php the_permalink(); ?>" style="color: <?php echo get_field( 'update_read_more' ); ?>">
                <span><?php echo esc_html__( 'Read More', 'chess' ); ?></span>
                <svg width="310" height="33" viewBox="0 0 310 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M308.005 0.982388C309.109 0.984872 310.002 1.88231 310 2.98688L309.96 20.9868C309.957 22.0914 309.06 22.9848 307.955 22.9823C306.85 22.9798 305.957 22.0824 305.96 20.9778L305.989 7.8063L281.285 32.3998C280.91 32.7729 280.403 32.9824 279.874 32.9824H2C0.89543 32.9824 0 32.087 0 30.9824C0 29.8778 0.89543 28.9824 2 28.9824H279.048L303.167 4.97152L289.996 4.94189C288.891 4.9394 287.998 4.04196 288 2.9374C288.003 1.83283 288.9 0.939415 290.005 0.9419L308.005 0.982388Z" fill="<?php echo get_field('update_read_more') ? get_field('update_read_more') : '#9AFF00'; ?>"/></svg>
            </a>   
        </div>
    </div>
<?php } else { ?>
    <div class="recent-posts__item <?php if( get_field( 'select_view_post_type' ) == 'update' ) echo 'update'; ?>">
        <a class="recent-posts__item--title " href="<?php the_permalink(); ?>">
            <span><?php echo get_the_title(); ?></span>
        </a>
        <div class="recent-posts__item--wrapper">
            <p><?php echo wp_trim_words( get_the_content(), 12, '...' ); ?></p>
            <a class="recent-posts__readmore" href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read more', 'chess' ); ?></a>
        </div>
    </div>
<?php } ?>