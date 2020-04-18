<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!--
Web & CSS Disign By Ohmyga .
Theme by sakura.
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?php $this->options->themeUrl('others/css/moe.css'); ?>">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('others/css/roboto.min.css'); ?>" /> 
        <link rel="stylesheet" href="<?php $this->options->themeUrl('others/css/nprogress.min.css'); ?>" /> 
        <link rel="stylesheet" href="<?php $this->options->themeUrl('others/css/highlight.min.css'); ?>" /> 
		<link rel="stylesheet" href="https://at.alicdn.com/t/font_1663474_kzedlt5dt8k.css">
		<link rel="icon" type="image/png" href="https://i.loli.net/2020/03/30/KsQ6z7Xf3SWEq9y.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
		<script src="https://cdn.jsdelivr.net/npm/pjax@0.2.8/pjax.min.js"></script>
      	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
		
        <!-- 通过自有函数输出HTML头部信息 -->
        <?php $this->header(); ?>
	</head>
	<body>
    	<!--[if lt IE 8]>
    		<div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
	    <![endif]-->
		<div id="moe-bg" class="moe-bg" style="background-image: url('https://ae01.alicdn.com/kf/HTB1c4jZarj1gK0jSZFO7637GpXaV.png');"></div>
		<div id="moe-apps">
			<div id="moe-body">
				<div class="moe-title"><?php $this->options->title(); ?><br><span><?php $this->options->description() ?></span></div>
              	<div class="moe-an" onclick="setp();"><img src="https://s1.ax1x.com/2020/04/13/GvYvKH.png"></div>
				    <div align="left" style="float:left">
    					<a href="<?php $this->options ->siteUrl(); ?>/links.html" class="moe-alink"> 友情链接</a>
					</div>
					<div align="right">
    					<a href="<?php $this->options ->siteUrl(); ?>/about.html" class="moe-alink"> 关于本站</a>
					</div>