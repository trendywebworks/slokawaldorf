<?php
/*
Template Name: InnerPage
*/
?>

<?php include (get_stylesheet_directory() . '/header.php');  ?>
  	
		
<!-- end slider section --> 
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>
 <!-- start section -->
 
		
		
<?php include (get_stylesheet_directory() . '/footer.php');  ?> 