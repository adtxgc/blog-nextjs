<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="mobile-index">
  <a href="<?php $this->options->siteUrl(); ?>"<?php $this->options->siteUrl(); ?>><i class="iconfont">&#xe607;</i></a>
</div>
<div class="footer">
  <p>
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('基于 <a href="http://www.typecho.org">Typecho</a>'); ?>.
  </p>
</div><!-- end #footer -->

<?php $this->footer(); ?>
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('./js/header.js'); ?>"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?096a60fdf44b9d9611f9736b597b8dea";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
