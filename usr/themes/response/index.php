<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤改造之后的
 *
 * @package adtxgc's Theme
 * @author adtxgc
 * @version 0.1
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <div class="main">
     <div class="contain">
         <div class="post-wrapper">
          	<?php while($this->next()): ?>
                  <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
          			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
          			<ul class="post-meta">
          				<!-- <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li> -->
          				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
          				<!-- <li><?php _e('分类: '); ?><?php $this->category(','); ?></li> -->
          				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
          			</ul>
                      <div class="post-content" itemprop="articleBody">
              			  <?php $this->content('>> 阅读剩余部分 <<'); ?>
                      </div>
                  </article>
          	<?php endwhile; ?>

              <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
<?php $this->need('footer.php'); ?>
