<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" type="image/x-icon">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<div id="headerV" class="header-wrap header-wrap-v">
  <div class="top">
    <a class="index" href="<?php $this->options->siteUrl(); ?>" title="首页">
      <i class="iconfont">&#xe603</i>
    </a>
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
    <?php while($pages->next()): ?>
    <a class="about" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
      <i class="iconfont">&#xe605</i>
    </a>
    <?php endwhile; ?>
  </div>
  <div class="bottom">
    <a class="github" href="https://github.com/adtxgc" target="_blank" title="进入我的github主页">
      <i class="iconfont">&#xe600</i>
    </a>
    <a class="jianshu" href="http://www.jianshu.com/users/29a35f796c7f/latest_articles" target="_blank" title="进入我的简书主页">
      <i class="iconfont">&#xe602</i>
    </a>
    <?php if($this->user->hasLogin()): ?>
      <a class="goin" href="<?php $this->options->adminUrl(); ?>" title="进入后台" target="_blank">
        <i class="iconfont">&#xe606</i>
      </a>
      <a class="loginout" href="<?php $this->options->logoutUrl(); ?>" title="退出登录">
        <i class="iconfont">&#xe601</i>
      </a>
    <?php else: ?>
      <a class="login" href="<?php $this->options->adminUrl('login.php'); ?>" title="登录">
        <i class="iconfont">&#xe604</i>
      </a>
    <?php endif; ?>
  </div>
</div>

<div id="headerH" class="header-wrap header-wrap-h">
  <div class="top">
    <a class="index" href="<?php $this->options->siteUrl(); ?>" title="首页">
      <i class="iconfont">&#xe607</i>
    </a>
  </div>
  <div class="bottom">
    <?php if($this->user->hasLogin()): ?>
      <a class="goin" href="<?php $this->options->adminUrl(); ?>" title="进入后台" target="_blank">
        <i class="iconfont">&#xe606</i>
      </a>
      <a class="loginout" href="<?php $this->options->logoutUrl(); ?>" title="退出登录">
        <i class="iconfont">&#xe601</i>
      </a>
    <?php else: ?>
      <a class="login" href="<?php $this->options->adminUrl('login.php'); ?>" title="登录">
        <i class="iconfont">&#xe604</i>
      </a>
    <?php endif; ?>
    <a class="jianshu" href="http://www.jianshu.com/users/29a35f796c7f/latest_articles" target="_blank" title="进入我的简书主页">
      <i class="iconfont">&#xe602</i>
    </a>
    <a class="github" href="https://github.com/adtxgc" target="_blank" title="进入我的github主页">
      <i class="iconfont">&#xe600</i>
    </a>
  </div>
</div>
