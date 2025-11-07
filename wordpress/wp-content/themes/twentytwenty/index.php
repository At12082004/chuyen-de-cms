<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<?php if ( is_home() ) : ?>
<style>
.home-archive-layout {
    display: grid;
    grid-template-columns: 260px minmax(0, 1fr) 260px;
    gap: 36px;
    align-items: flex-start;
    width: 100vw;
    max-width: none;
    padding: 40px 0;
    margin: 0;
    box-sizing: border-box;
    margin-left: calc((100vw - 100%) / -2);
}
.home-archive-left,
.home-archive-right {
    position: sticky;
    top: 120px;
}
.home-archive-content {
    min-width: 0;
}
.archive-card {
    background: #ffffff;
    border: 1px solid #e6e6e6;
    border-radius: 16px;
    box-shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
    padding: 28px 30px 32px;
}
.archive-card h2 {
    font-size: 20px;
    font-weight: 700;
    margin: 0 0 20px;
    color: #0f172a;
}
.archive-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px 28px;
}
.archive-list li {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    border-bottom: 1px solid #f0f0f0;
    padding-bottom: 10px;
}
.archive-list li:nth-child(odd) {
    border-right: 1px solid #f0f0f0;
    padding-right: 18px;
}
.archive-list .archive-rank {
    font-size: 28px;
    font-weight: 700;
    color: #0f172a;
    line-height: 1;
    min-width: 28px;
    text-align: center;
}
.archive-list .archive-link {
    color: #1f2937;
    font-size: 15px;
    font-weight: 500;
    line-height: 1.4;
    text-decoration: none;
    flex: 1;
}
.archive-list .archive-link:hover {
    color: #2563eb;
}
.archive-empty {
    color: #6b7280;
    font-size: 14px;
    margin: 0;
}
.home-comments-card {
    background: #ffffff;
    border: 1px solid #e6e6e6;
    border-radius: 16px;
    box-shadow: 0 18px 35px rgba(15, 23, 42, 0.08);
    padding: 24px 26px;
}
.home-comments-card h3 {
    font-size: 18px;
    font-weight: 700;
    margin: 0 0 18px;
    color: #0f172a;
    position: relative;
}
.home-comments-card h3::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -8px;
    width: 40px;
    height: 2px;
    background: #2563eb;
}
.home-comments-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.home-comments-list li {
    border-bottom: 1px solid #edf2f7;
    padding-bottom: 10px;
}
.home-comments-list li:last-child {
    border-bottom: none;
    padding-bottom: 0;
}
.home-comments-list a {
    color: #2563eb;
    font-size: 15px;
    text-decoration: none;
    transition: color 0.2s ease;
}
.home-comments-list a:hover {
    color: #1d4ed8;
}
#site-content.home-full-width {
    width: 100%;
    max-width: none;
    padding: 0;
}
/* @media (max-width: 992px) {
    .home-archive-layout {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        grid-template-rows: auto auto;
    }
    .home-archive-left,
    .home-archive-right {
        position: static;
    }
    .home-archive-right {
        grid-column: 1 / -1;
    }
}
@media (max-width: 640px) {
    .archive-list {
        grid-template-columns: 1fr;
    }
    .archive-list li:nth-child(odd) {
        border-right: none;
        padding-right: 20px;
    }
} */
 @media (max-width: 992px) {
    .home-archive-layout {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        grid-template-rows: auto auto;
    }
    .home-archive-left,
    .home-archive-right {
        position: static;
    }
    .home-archive-right {
        grid-column: 1 / -1;
    }
}
@media (max-width: 640px) {
    .archive-list {
        grid-template-columns: 1fr;
    }
    .archive-list li:nth-child(odd) {
        border-right: none;
        padding-right: 20px;
    }
}
</style>
<?php endif; ?>

<main id="site-content" class="home-full-width">

<?php if ( is_home() ) : ?>
<div class="home-archive-layout">
    <aside class="home-archive-left">
        <div class="archive-card">
            <h2><?php esc_html_e( 'Archive', 'twentytwenty' ); ?></h2>
            <?php
            $archive_query = new WP_Query(
                array(
                    'posts_per_page'      => 8,
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true,
                    'orderby'             => 'date',
                    'order'               => 'DESC',
                )
            );

            if ( $archive_query->have_posts() ) :
                echo '<ol class="archive-list">';
                $rank = 1;
                while ( $archive_query->have_posts() ) :
                    $archive_query->the_post();
                    ?>
                    <li>
                        <span class="archive-rank"><?php echo esc_html( $rank++ ); ?></span>
                        <a class="archive-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php
                endwhile;
                echo '</ol>';
                wp_reset_postdata();
            else :
                echo '<p class="archive-empty">' . esc_html__( 'No posts available.', 'twentytwenty' ) . '</p>';
            endif;
            ?>
        </div>
    </aside>
    <div class="home-archive-content">
<?php endif; ?>

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		/**
		 * @global WP_Query $wp_query WordPress Query object.
		 */
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( is_archive() && ! have_posts() ) {
		$archive_title = __( 'Nothing Found', 'twentytwenty' );
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			++$i;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'aria_label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>

	<?php
	get_template_part( 'template-parts/pagination' );
	?>

<?php if ( is_home() ) : ?>
    </div><!-- .home-archive-content -->
    <aside class="home-archive-right">
        <div class="home-comments-card">
            <h3><?php esc_html_e( 'Comments', 'twentytwenty' ); ?></h3>
            <?php
            $comments_query = get_comments(
                array(
                    'number'  => 5,
                    'status'  => 'approve',
                    'orderby' => 'comment_date_gmt',
                    'order'   => 'DESC',
                )
            );

            if ( ! empty( $comments_query ) ) :
                echo '<ul class="home-comments-list">';
                foreach ( $comments_query as $comment ) :
                    $comment_link = get_comment_link( $comment );
                    ?>
                    <li>
                        <a href="<?php echo esc_url( $comment_link ); ?>">
                            <?php echo esc_html( wp_trim_words( $comment->comment_content, 12, '…' ) ); ?>
                        </a>
                    </li>
                    <?php
                endforeach;
                echo '</ul>';
            else :
                echo '<p class="archive-empty">' . esc_html__( 'No comments yet.', 'twentytwenty' ) . '</p>';
            endif;
            ?>
        </div>
    </aside>
</div><!-- .home-archive-layout -->
<?php endif; ?>

</main>#site-content

<?php
get_footer();
