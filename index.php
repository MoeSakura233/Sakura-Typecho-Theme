<?php
/**
 * 这是 Typecho 的一套奇形怪状的皮肤
 * 
 * @package Sakura 
 * @author Sakura
 * @version 1.0
 * @link https://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('includes/header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <a href="<?php $this->permalink() ?>" class="moe-alink"><i class="moe-icon moe-headimg"><img src="https://q1.qlogo.cn/g?b=qq&nk=928338616&s=640"></i> <?php $this->title() ?></a>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->
<?php $this->need('includes/footer.php'); ?>
