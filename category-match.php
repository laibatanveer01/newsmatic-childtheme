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
				
					<h2>Matches</h2>
					<div class="Row">
						<div class="col-10">
							<table >
							
								<tr class="table-style heading-style">
									<th class="table-style">
										Date & Time
									</th>
									<th class="table-style">
										Match Details
									</th>
									<th class="table-style">
										Action
									</th>
								</tr>
							
						<?php
						$args=array(
							 'category'=> 15,
                 'post_status'=> 'publish',
                
                'numberposts'=>-1
 );
				$post=get_posts($args);
				foreach ($post as $key => $post) {
					$title=$post-> post_title;
					$content=$post-> post_content;
					?>
					
					<tr >
						<td class="table-style">
							<?php echo $title;?>
						</td>
						<td class="table-style">
							<?php echo $content;?>
						</td>
						<td class="table-style">
							<a class="button-style" href="" style="color: white;">Buy Ticket</a>
						</td>
					</tr>


			<?php	}




					
						?>
						</table>
					</div>
				</div>
				
							

				
			
						
						
					</div>
				</div>
					<!---------left section--------------------->
					
					
			

		
	</div><!-- #theme-content -->
</div>
<?php

get_footer();

