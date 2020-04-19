<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('includes/header.php'); ?>
<a href="<?php $this->options ->siteUrl(); ?>" class="moe-alink"><i class="moe-icon moeicon i-back"></i> 返回首页</a>

				    <div align="left" style="float:left">
    					<?php _e('时间: '); ?><?php $this->date(); ?>
					</div>
					<div align="right">
    					<?php _e('分类: '); ?><?php $this->category(','); ?>
					</div>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <!--<p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>-->

				    <div align="left" style="float:left">
    					上一篇: <?php $this->thePrev('%s','没有了'); ?>
					</div>
					<div align="right">
    					下一篇: <?php $this->theNext('%s','没有了'); ?>
					</div>
					<?php $this->need('includes/comments.php'); ?>
</div><!-- end #main-->
<?php $this->need('includes/footer.php'); ?>
