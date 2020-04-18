<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
              	<div id="moe-setting" style="display:block">
					<span class="moe-setting-title">设置面板</span>
					<span class="moe-setting-list">
    					<div>夜间模式 <span class="moe-setting-btn"><input type="checkbox" name="nad" id="1" class="moe-obut" onclick="setbutton('nad');" /><label for="1" id="nad" class="moe-obut-label"></label></span></div>
 					</span>
				</div>
				
			</div>
		</div>
		<!--鱿鱼部分原（yin因（yuan 注释了footer OMG不要来打我qvq
		<footer id="moe-foot">
			<div class="moe-foot-copy">
				Copyright © 2019-2020 <a href="https://imsakura.cn">Sakura</a> All rights reserved.<br/>Web & CSS Disign By <a href="https://ohmyga.cn/" target="_blank">Ohmyga</a>
			</div>
		</footer>-->
        <script src="<?php $this->options->themeUrl('others/js/highlight.min.js'); ?>"></script> 
        <script src="<?php $this->options->themeUrl('others/js/nprogress.min.js'); ?>"></script> 
		<script src="<?php $this->options->themeUrl('others/js/moe.js'); ?>"></script>
        <script>checkBtn();</script>
		<!-- 通过自有函数输出HTML足部信息 -->
		<?php $this->footer(); ?>
	</body>
</html>
