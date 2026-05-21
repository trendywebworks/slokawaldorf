<?php include (get_stylesheet_directory() . '/header.php');  ?>

<section class="wow fadeIn padding-40px-tb sm-padding-40px-tb bg-extra-dark-gray" style="border-top:2px solid #d2232a;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 center-col position-relative text-center">
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								// Your loop code
							endwhile;
						else :
							echo ( 'Sorry, no posts were found' );
						endif;
						?>
					</div>
				</div>
			</div>
</section>

<?php include (get_stylesheet_directory() . '/footer.php');  ?> 