<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Argent
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
        <table>
            <tr>
                <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/leftArrow.png" style="height:50px;" alt="" width="" height="" /></td>
                <td><?php the_title( '<h1 class="page-title">', '</h1>' ); ?></td>
                <td style="text-align:right;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rightArrow.png" style="height:50px;" alt="" width="" height="" /></td>
            </tr>
        </table>


	</header><!-- .page-header -->

	<div class="page-content">

		<?php the_content(); ?>
	</div><!-- .page-content -->

	<footer class="entry-footer entry-meta">
		<?php edit_post_link( __( 'Edit', 'argent' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
