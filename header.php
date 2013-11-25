<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    </head>

    <body>
        <header>
            <div class="row header-row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="pull-left header-title">
                        <?php bloginfo('title'); ?>
                    </div>
                    <div class="pull-right header-menu">
                        <ul class="list-inline">
                            <?php wp_list_pages(
                                    array(
                                        'walker' => new ColonWalker(),
                                        'title_li' => ''
                                    )
                            ); ?>
                        </ul>
                    </div>
                </div>
            </div>

        </header>
    </body>