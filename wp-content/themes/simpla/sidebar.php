<div id="sidebar">
<h2>Search</h2>
<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input class="entry" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input class="send" type="submit" value="OK"/>
</form>

<h2>Subscribe via Email</h2>
<form method="post" action="http://www.feedblitz.com/f/f.fbz?AddNewUserDirect">
<div>Enter your Email</div>
<input name="EMAIL" class="entry" maxlength="255" type="text" value=""/>
<input class="send" type="submit" value="OK"/>
    <input name="FEEDID" type="hidden" value="78294"/>
<div style="clear: both">Powered by <a href="http://www.feedblitz.com">FeedBlitz</a></div>
</form>

<h2>Contact</h2>
<ul>
<li><a href="mailto:r.houtman@gmail.com">r.houtman@gmail.com</a></li>
</ul>

            <h2>Recent Comments</h2>
                <ul>
		<?php blc_latest_comments(12, 6, false, "<li>", "</li>", true, 10, "#BDE271"); ?>
                </ul>
            <h2>Recent Posts</h2>
                <ul>
<?php mdv_recent_posts(12); ?>
                </ul>
<h2>Pages</h2>
<ul>
<li><a href="<?php echo get_settings('home'); ?>/">Home</a></li>
<?php wp_list_pages('title_li='); ?> 
</ul>
<h2>Categories</h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>

<!--
<ul>
<?php get_links_list(); ?>
</ul>
    -->

			<h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>

<?php if (function_exists('wp_theme_switcher')) : ?>
			<h2><?php _e('Themes'); ?></h2>
				<?php wp_theme_switcher(); ?>
<?php endif; ?>

    <!--  START META  -->
    <h2><?php _e('Meta'); ?></h2>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
        <li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
        <li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
        <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
        <li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
        <?php wp_meta(); /* do not remove this line */ ?>
      </ul>
    <!--  END META  -->

    <ul class="icons">
    <li>
    <a href="http://clustrmaps.com/counter/maps.php?url=http://beckyhoutman.com"><img src="http://clustrmaps.com/counter/index2.php?url=http://beckyhoutman.com"alt="Locations of visitors to this page"/></a>
    </li>
    <li>
   <a href="http://validator.w3.org/check?uri=referer"><img
           src="http://www.w3.org/Icons/valid-xhtml10"
                   alt="Valid XHTML 1.0 Transitional" height="31"
                   width="88" /></a></li>
    </ul>

    <ul class="chicklets">
        <li>
<!-- Site Meter XHTML Strict 1.0 -->
<script type="text/javascript"
src="http://s26.sitemeter.com/js/counter.js?site=s26beckyhoutman">
</script>
<!-- Copyright (c)2006 Site Meter -->
        </li>
        <li>
        <a href="http://feeds.feedburner.com/beckyhoutman"><img src="http://feeds.feedburner.com/~fc/beckyhoutman?bg=99CCFF&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a>
        </li>
        <li>
        <a href="http://www.feedblitz.com/f/?Sub=78294"><img title="Subscribe and get your updates by email" border="0" src="http://www.feedblitz.com/i/d5/78294.bmp"/></a>
        </li>
    </ul>

</div>
