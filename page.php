<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('includes/header.php'); ?>
<a href="<?php $this->options ->siteUrl(); ?>" class="moe-alink"><i class="moe-icon moeicon i-back"></i> 返回首页</a>

        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>

    <?php $this->need('includes/comments.php'); ?>
</div><!-- end #main-->
<?php $this->need('includes/footer.php'); ?>
