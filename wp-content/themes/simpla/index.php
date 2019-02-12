<?php
function stupid_hack($str) {
return preg_replace('|</ul>\s*<ul class="asides">|', '', $str);
}
ob_start('stupid_hack');
?>
<?php get_header(); ?>
<div id="content">
<?php /* If this is a category archive */ if (is_category() && strcmp(single_cat_title('', false), 'Event') == 0) : ?>				
		<h2 class="pagetitle">Upcoming Gallery Events</h2>
 	  <?php /* If this is a daily archive */ elseif (is_category()) : ?>
		<h2 class="pagetitle">Entries for the '<?php single_cat_title(); ?>' Category</h2>
		
 	  <?php /* If this is a daily archive */ elseif (is_day()) : ?>
		<h2 class="pagetitle">Entries for <?php the_time('F jS, Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ elseif (is_month()) : ?>
		<h2 class="pagetitle">Entries for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ elseif (is_year()) : ?>
		<h2 class="pagetitle">Entries for <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ elseif (is_search()) : ?>
		<h2 class="pagetitle">Search Results</h2>
		
	  <?php /* If this is an author archive */ elseif (is_author()) : ?>
		<h2 class="pagetitle">Entries by Author</h2>

		<?php /* If this is a paged archive */ elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php endif; ?>
        <?php if (is_tag()) : ?>
    <div class="utwtagheader">Posts tagged <?php single_tag_title(); ?></div>
    <?php endif; ?>
    <?php if (is_single()) : ?>
		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>
    <?php endif; ?>
	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
			<?php $postCount++;?>

    <?php   if (!is_single() && in_category(2)) : ?>
        <ul class="asides">
           <li>
        <div class="aside entry-<?php echo $postCount ;?>" >
            <span class="asidetitle"><a href="<?php the_permalink() ?>"
            rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title() ?> &raquo;</a></span>
<?php if (function_exists('do_textile')) : ?>
		<?php echo do_textile($post->post_content); ?>
<?php else : ?>
		<?php echo wptexturize($post->post_content); ?>
<?php endif; ?>
        <a href="<?php
        the_permalink(); ?>"><?php comments_number(' Comments (0)',
        ' Comments (1)', ' Comments (%)'); ?></a> <?php edit_post_link('e', '<small>(', ')</small>'); ?>
        </div>
            </li>
         </ul>
    <? else : ?>
	<div class="entry entry-<?php echo $postCount ;?>">
		<div class="entrytitle">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> 
			<h3><?php the_time('F jS, Y') ?></h3>
		</div>
		<div class="entrybody">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
		</div>
		
            <div class="utwtags"><span class="tags"><?php the_tags(); ?></span></div>
		<div class="entrymeta">
		<div class="postinfo">
			<span class="postedby">Posted by <?php the_author() ?></span>
			<span class="filedto">Filed in <?php the_category(', ') ?> <?php edit_post_link('Edit', ' | ', ''); ?></span>
		</div>
		<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;', 'commentslink'); ?>
		</div>
		
	</div>
	<div class="commentsblock">
		<?php comments_template(); ?>
	</div>
	    <? endif; ?>	
	<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
	<?php else : ?>

		<h2>Not Found</h2>
		<div class="entrybody">Sorry, but you are looking for something that isn't here.</div>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
