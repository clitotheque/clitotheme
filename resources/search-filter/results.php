<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

if ( $query->have_posts() )
{
	?>
	
	<!-- Found <?php echo $query->found_posts; ?> Results<br /> -->
	<div class='search-filter-results-list'>
	<?php
		while ($query->have_posts())
		{
			$query->the_post();
			
			?>
			<div class='search-filter-result-item'>
				<div class="result-header">
					
				<?php 
						if ( has_post_thumbnail() ) {
					  ?>
						<div class="result-image"
							style="background: url('<?php 
								the_post_thumbnail_url('small') 
							?>') center / cover"> </div>
							<?php
						} else {
							?> <div class="result-image"></div> <?php
						}
						?>
					<div class="result-meta">
						<h4 class="mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<h5><?php the_category(); ?>
						|<?php 
						//the_tags(); 
						?>
					|<?php 
					  //the_date(); 
					?></h5>
					</div>
				</div>
				
				<p><?php the_excerpt(); ?>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			</p>
			</div>
			
			<?php
		}
	?>
	</div>
<?php
}
else
{
	?>
	<div class='search-filter-results-list' data-search-filter-action='infinite-scroll-end'>
		<span>End of Results</span>
	</div>
	<?php
}
?>