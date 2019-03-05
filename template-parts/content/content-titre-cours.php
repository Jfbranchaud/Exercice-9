<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
		<?php
		switch(substr(get_the_title(),4,1)){

		case 1:the_title( sprintf( '<h2 class="box annee1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			break;
		case 2:the_title( sprintf( '<h2 class="box annee2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			break;
		case 3:the_title( sprintf( '<h2 class="box annee3"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			break;
		case 4:the_title( sprintf( '<h2 class="box annee4"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			break;
		case 5:the_title( sprintf( '<h2 class="box annee5"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			break;
		case 6:the_title( sprintf( '<h2 class="box annee6"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			break;

		}
			
?>

