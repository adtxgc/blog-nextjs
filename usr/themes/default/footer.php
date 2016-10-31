<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer id="footer" role="contentinfo" class="footer_div">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('基于 <a href="http://www.typecho.org">Typecho</a>'); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js">
</body>
</html>
