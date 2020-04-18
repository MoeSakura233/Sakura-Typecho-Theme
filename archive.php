<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('includes/header.php'); ?>

        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
        <a href="<?php $this->permalink() ?>" class="moe-alink"><i class="moe-icon moe-headimg"><img src="https://q1.qlogo.cn/g?b=qq&nk=928338616&s=640"></i> <?php $this->title() ?></a>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

	
	<?php $this->need('includes/footer.php'); ?>
