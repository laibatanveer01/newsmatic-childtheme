<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Newsmatic
 */
use Newsmatic\CustomizerDefault as ND;
get_header();



?>
	<div id="theme-content">
		<?php
			/**
			 * hook - newsmatic_before_main_content
			 * 
			 */
			do_action( 'newsmatic_before_main_content' );
		?>
	
			<div class="newsmatic-container" >
				<div class="row">
			
					<div class="primary-content"style="max-width: 70%;
    flex: 0 1 70%;" >
				
					
							
<h2>Players</h2>



			
				<?php
				$args=array(
                 'category'=> 14,
                 'post_status'=> 'publish',
                
                'numberposts'=>-1
 );
				$post=get_posts($args);
				?>
			
  	<div class="Row">

				<?php

				foreach ($post as $key => $post) {
					$title=$post -> post_title;
					$content=$post-> post_content;

					$content=substr($content, 0,70).'.......';
					$img=get_the_post_thumbnail_url($post,$size='post-thuthumbnail'
					);
					$permalink=get_permalink($post);
					
					?>
					
					
<div class="column" style="background-color:#5cbb3d;text-align: center;margin-top: 15px;margin-left: 2px;">
				
			<img src="<?php echo $img;?>" style="width: 150px;height: 150px;border-radius: 80px;margin-top: 15px">	
			<a style="border:none;text-decoration: none;"  href="<?php echo $permalink;?>"><h4><?php  echo $title;?></h4></a>

			
	
</div>
				

			
		<?php
			}	
				
			?>
			</div>

	
		
			
				
			
			

				
			
		</div>	
				
			
						
						
					</div>
				</div>
					<!---------left section--------------------->
					
					
			

		
	</div><!-- #theme-content -->
<?php

get_footer();
