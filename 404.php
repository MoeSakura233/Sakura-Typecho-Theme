<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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
    <title>Not Found - <?php $this->options->title() ?></title>
</head> 
<body>
<div id="moe-bg" class="moe-bg" style="background-image: url('https://ae01.alicdn.com/kf/HTB1c4jZarj1gK0jSZFO7637GpXaV.png');"></div>
<div id="moe-apps">
	<div id="moe-404">
		<div class="moe-404-card">
			<div class="moe-404-an" onclick="setp();">
				<img src="https://s1.ax1x.com/2020/04/13/GvYvKH.png">
			</div>
			<div class="moe-404-title">404 Not Found</div>
          <div class="moe-404-text">页面找不到了...<br>大概...<del>没写！</del></div><br>
			<a href="<?php $this->options ->siteUrl(); ?>" class="moe-404-alink" data-pjax-state=""><i class="moe-icon moeicon i-back"></i> 返回首页</a>
		</div>
	</div>
</div>
<script src="<?php $this->options->themeUrl('others/js/highlight.min.js'); ?>"></script> 
<script src="<?php $this->options->themeUrl('others/js/nprogress.min.js'); ?>"></script> 
<script src="<?php $this->options->themeUrl('others/js/moe.js'); ?>"></script>
</body>
</html>
