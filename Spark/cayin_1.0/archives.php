<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content_right">
		<div id="content_right_top_newscenter"></div>

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

</div>

<?php get_footer(); ?>