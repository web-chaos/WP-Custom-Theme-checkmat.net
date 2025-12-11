<?php if( get_field( 'select_view_post_type' ) == 'app' ){ ?>
    <div class="blog-item__item app" style="background-color: <?php echo get_field( 'background_color' ); ?>">
        <span style="color: <?php echo get_field( 'title_color' ); ?>"><?php echo get_the_title(); ?></span>

        <?php if ( get_field( 'show_arrow' ) == 1 ) { ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 18.3787L10.5 -4.17266e-07L13.5 -5.48401e-07L13.5 18.3787L20.4853 11.3934C21.0711 10.8076 22.0209 10.8076 22.6066 11.3934C23.1924 11.9792 23.1924 12.9289 22.6066 13.5147L13.0607 23.0607C12.4749 23.6464 11.5252 23.6464 10.9394 23.0607L1.39344 13.5147C0.807655 12.9289 0.807655 11.9792 1.39344 11.3934C1.97923 10.8076 2.92898 10.8076 3.51476 11.3934L10.5 18.3787Z" fill="<?php echo get_field('arrow_color') ? get_field('arrow_color') : '#9AFF00'; ?>"/></svg>
        <?php } ?>

        <div class="blog-item__item--store">
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
<?php } else { ?>
    <div class="blog-item__item">
        <a class="blog-item__title <?php if( get_field( 'select_view_post_type' ) == 'update' || get_field( 'select_view_post_type' ) == 'update_color' ) echo 'update'; ?>" href="<?php the_permalink(); ?>">
            <span><?php echo get_the_title(); ?></span>
        </a>
        <div class="blog-item__item--wrapper">
            <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
            <div class="blog-item__item--meta">
                <date><?php echo get_the_date( 'd/m/Y' ); ?></date>
                <span>
                    <svg width="41" height="18" viewBox="0 0 41 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_814_51582)"><path d="M37.8318 9.74648C38.4766 5.67733 34.1759 1.65421 28.2258 0.760575C22.2758 -0.133061 16.9296 2.44119 16.2847 6.51033C15.6399 10.5795 19.9407 14.6026 25.8907 15.4962C31.8408 16.3899 37.187 13.8156 37.8318 9.74648Z" fill="white" stroke="#19181A" stroke-width="0.72" stroke-miterlimit="10" stroke-linecap="round"/><mask id="mask0_814_51582" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="16" y="0" width="22" height="16"><path d="M37.8308 9.74648C38.4756 5.67733 34.1749 1.65421 28.2248 0.760575C22.2748 -0.133061 16.9286 2.44119 16.2838 6.51033C15.6389 10.5795 19.9397 14.6026 25.8897 15.4962C31.8398 16.3899 37.186 13.8156 37.8308 9.74648Z" fill="white"/></mask><g mask="url(#mask0_814_51582)"><path d="M32.9262 17.4302C37.3852 17.4302 40.9999 13.9112 40.9999 9.5702C40.9999 5.22925 37.3852 1.71021 32.9262 1.71021C28.4672 1.71021 24.8525 5.22925 24.8525 9.5702C24.8525 13.9112 28.4672 17.4302 32.9262 17.4302Z" fill="#19181A"/></g><path d="M11.4479 15.585C17.4683 15.585 22.3488 12.2473 22.3488 8.13005C22.3488 4.01277 17.4683 0.675049 11.4479 0.675049C5.42741 0.675049 0.546875 4.01277 0.546875 8.13005C0.546875 12.2473 5.42741 15.585 11.4479 15.585Z" fill="white" stroke="#19181A" stroke-width="0.72" stroke-miterlimit="10" stroke-linecap="round"/><mask id="mask1_814_51582" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="16"><path d="M11.4566 15.5924C17.4771 15.5924 22.3576 12.2547 22.3576 8.13737C22.3576 4.02009 17.4771 0.682373 11.4566 0.682373C5.43619 0.682373 0.555664 4.02009 0.555664 8.13737C0.555664 12.2547 5.43619 15.5924 11.4566 15.5924Z" fill="white"/></mask><g mask="url(#mask1_814_51582)"><path d="M16.5492 17.9998C21.0082 17.9998 24.6229 14.4807 24.6229 10.1398C24.6229 5.79883 21.0082 2.27979 16.5492 2.27979C12.0903 2.27979 8.47559 5.79883 8.47559 10.1398C8.47559 14.4807 12.0903 17.9998 16.5492 17.9998Z" fill="#19181A"/></g><path d="M27.0562 7.93495C28.222 7.93495 29.167 7.0149 29.167 5.87995C29.167 4.74501 28.222 3.82495 27.0562 3.82495C25.8904 3.82495 24.9453 4.74501 24.9453 5.87995C24.9453 7.0149 25.8904 7.93495 27.0562 7.93495Z" fill="white"/><path d="M10.5845 7.51503C11.7503 7.51503 12.6954 6.59497 12.6954 5.46003C12.6954 4.32508 11.7503 3.40503 10.5845 3.40503C9.4187 3.40503 8.47363 4.32508 8.47363 5.46003C8.47363 6.59497 9.4187 7.51503 10.5845 7.51503Z" fill="white"/></g><defs><clipPath id="clip0_814_51582"><rect width="41" height="18" fill="white"/></clipPath></defs></svg>
                    <?php echo get_post_views( get_the_ID() ); ?>
                </span>
                <a class="blog-item__readmore <?php if( get_field( 'select_view_post_type' ) == 'update' ) echo 'update'; ?>" href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read more', 'chess' ); ?> <svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M32.6427 8.93893C33.1259 9.43204 33.1178 10.2235 32.6247 10.7066L24.589 18.58C24.0959 19.0631 23.3045 19.0551 22.8213 18.562C22.3382 18.0688 22.3463 17.2774 22.8394 16.7943L28.7195 11.0329L0.987109 10.75L1.01261 8.25008L28.745 8.53303L22.9836 2.65288C22.5005 2.15977 22.5086 1.36835 23.0017 0.8852C23.4948 0.40205 24.2862 0.410125 24.7694 0.903235L32.6427 8.93893Z" fill="#19181A"/></svg></a>
            </div>
        </div>
    </div>
<?php } ?>