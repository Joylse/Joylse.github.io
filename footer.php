<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
<?php
$footerHideBlog = false;
$footerHidePost = false;
$pagePost = is_single();
$pageBlog = is_home(); ?>
		</div><!-- #content -->
<?php if (!$pageBlog && !$pagePost || $pageBlog && !$footerHideBlog || $pagePost && !$footerHidePost) { ?>
        <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-90 u-footer" id="sec-39b8">
  <div class="u-clearfix u-sheet u-sheet-1">
    <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-white u-text-1">Copyright © 2021 Joylse - All Rights Reserved.<br>
    </p>
  </div>
</footer>
        
<?php } ?>
        
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
