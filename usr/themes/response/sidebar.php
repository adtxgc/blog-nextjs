<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="secondary" role="complementary">
  <div class="side-top">

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('分类'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
	  </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('归档'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y \年 n \月')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
	  </section>
    <?php endif; ?>
  </div>
</div><!-- end #sidebar -->
