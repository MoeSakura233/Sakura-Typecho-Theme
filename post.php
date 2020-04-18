<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('includes/header.php'); ?>
<a href="<?php $this->options ->siteUrl(); ?>" class="moe-alink"><i class="moe-icon moeicon i-back"></i> 返回首页</a>

        <!--<ul class="post-meta">
            <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
            <?php _e('分类: '); ?><?php $this->category(','); ?>
        </ul>-->
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <!--<p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>-->


    <?php $this->need('includes/comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->
<?php $this->need('includes/footer.php'); ?>
