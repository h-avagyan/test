<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<img width="100%" src="<?php print get_the_post_thumbnail_url(); ?>" class="img-responsive">
    <br><br>
	<div class="entry-content">

		<?php the_content(); ?>
            <p>Площадь : <?php the_field('площадь') ?> кв/м</p>
            <p>Стоимость : <?php the_field('стоимость') ?> руб./мес.</p>
            <p>Адрес : <?php the_field('адрес') ?> </p>
            <p>Жилая площадь : <?php the_field('жилая_площадь') ?> кв/м</p>
            <p>Этаж : <?php the_field('этаж') ?></p>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
	