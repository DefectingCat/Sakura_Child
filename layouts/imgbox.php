<?php
/**
 * 修改首页logo文字
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Akina
 */
//https://api.mashiro.top/cover

?><!--centerbg -->
<figure id="centerbg" class="nobg">
<?php if ( !akina_option('focus_infos') ){ ?>
	<div class="focusinfo">
		<!--AH,Defectink-->
		<div class="Defectink">
			<h1>
				Ah,Defectink
			</h1>
		</div>
		<div class="header-info">
            <p><?php echo akina_option('admin_des', 'Hi, Mashiro?'); ?></p>
            <?php if (akina_option('social_style')=="v2"): ?>
            <div class="top-social_v2">
                <li id="bg-pre"><img class="flipx" src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/next-b.svg"/></li>
                <?php if (akina_option('github')){ ?>
                <li><a href="<?php echo akina_option('github', ''); ?>" target="_blank" class="social-github" title="github"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/github.png"/></a></li>
                <?php } ?>	
                <?php if (akina_option('sina')){ ?>
                <li><a href="<?php echo akina_option('sina', ''); ?>" target="_blank" class="social-sina" title="sina"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/sina.png"/></a></li>
                <?php } ?>
                <?php if (akina_option('telegram')){ ?>
                <li><a href="<?php echo akina_option('telegram', ''); ?>" target="_blank" class="social-lofter" title="telegram"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/telegram.svg"/></a></li>
                <?php } ?>	
                <?php if (akina_option('qq')){ ?>
                <li class="qq"><a href="<?php echo akina_option('qq', ''); ?>" title="Initiate chat ?"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/qq.png"/></a></li>
                <?php } ?>	
                <?php if (akina_option('qzone')){ ?>
                <li><a href="<?php echo akina_option('qzone', ''); ?>" target="_blank" class="social-qzone" title="qzone"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/qzone.png"/></a></li>
                <?php } ?>
                <?php if (akina_option('wechat')){ ?>
                <li class="wechat"><a href="#"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/wechat.png"/></a>
                    <div class="wechatInner">
                        <img src="<?php echo akina_option('wechat', ''); ?>" alt="WeChat">
                    </div>
                </li>
                <?php } ?> 
                <?php if (akina_option('lofter')){ ?>
                <li><a href="<?php echo akina_option('lofter', ''); ?>" target="_blank" class="social-lofter" title="lofter"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/lofter.png"/></a></li>
                <?php } ?>	
                <?php if (akina_option('bili')){ ?>
                <li><a href="<?php echo akina_option('bili', ''); ?>" target="_blank" class="social-bili" title="bilibili"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/bilibili.png"/></a></li>
                <?php } ?>
                <?php if (akina_option('youku')){ ?>
                <li><a href="<?php echo akina_option('youku', ''); ?>" target="_blank" class="social-youku" title="youku"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/youku.png"/></a></li>
                <?php } ?>
                <?php if (akina_option('wangyiyun')){ ?>
                <li><a href="<?php echo akina_option('wangyiyun', ''); ?>" target="_blank" class="social-wangyiyun" title="CloudMusic"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/wangyiyun.png"/></a></li>
                <?php } ?>
                <?php if (akina_option('twitter')){ ?>
                <li><a href="<?php echo akina_option('twitter', ''); ?>" target="_blank" class="social-wangyiyun" title="Twitter"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/twitter.png"/></a></li>
                <?php } ?>	
                <?php if (akina_option('facebook')){ ?>
                <li><a href="<?php echo akina_option('facebook', ''); ?>" target="_blank" class="social-wangyiyun" title="Facebook"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/facebook.png"/></a></li>
                <?php } ?>	
                <?php if (akina_option('googleplus')){ ?>
                <li><a href="<?php echo akina_option('googleplus', ''); ?>" target="_blank" class="social-wangyiyun" title="Google+"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/googleplus.png"/></a></li>
                <?php } ?>
                <?php if (akina_option('jianshu')){ ?>
                <li><a href="<?php echo akina_option('jianshu', ''); ?>" target="_blank" class="social-wangyiyun" title="Jianshu"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/jianshu.png"/></a></li>
                <?php } ?>
                <?php if (akina_option('zhihu')){ ?>
                <li><a href="<?php echo akina_option('zhihu', ''); ?>" target="_blank" class="social-wangyiyun" title="Zhihu"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/zhihu.png"/></a></li>
                <?php } ?>	
                <?php if (akina_option('csdn')){ ?>
                <li><a href="<?php echo akina_option('csdn', ''); ?>" target="_blank" class="social-wangyiyun" title="CSDN"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/csdn.png"/></a></li>
                <?php } ?>		
                <?php if (akina_option('email_name') && akina_option('email_domain')){ ?>
                <li><a onclick="mail_me()" class="social-wangyiyun" title="E-mail"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/email.svg"/></a></li>
                <?php } ?>	
                <li id="bg-next"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/next-b.svg"/></li>	
            </div>
            <?php endif; ?>
        </div>
        <?php if (akina_option('social_style')=="v1"): ?>
		<div class="top-social">
		<li id="bg-pre"><img class="flipx" src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/next-b.svg"/></li>
		<?php if (akina_option('github')){ ?>
		<li><a href="<?php echo akina_option('github', ''); ?>" target="_blank" class="social-github" title="github"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/github.png"/></a></li>
		<?php } ?>	
		<?php if (akina_option('sina')){ ?>
		<li><a href="<?php echo akina_option('sina', ''); ?>" target="_blank" class="social-sina" title="sina"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/sina.png"/></a></li>
		<?php } ?>
		<?php if (akina_option('telegram')){ ?>
		<li><a href="<?php echo akina_option('telegram', ''); ?>" target="_blank" class="social-lofter" title="telegram"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/telegram.svg"/></a></li>
		<?php } ?>	
		<?php if (akina_option('qq')){ ?>
		<li class="qq"><a href="<?php echo akina_option('qq', ''); ?>" title="Initiate chat ?"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/qq.png"/></a></li>
		<?php } ?>	
		<?php if (akina_option('qzone')){ ?>
		<li><a href="<?php echo akina_option('qzone', ''); ?>" target="_blank" class="social-qzone" title="qzone"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/qzone.png"/></a></li>
		<?php } ?>
		<?php if (akina_option('wechat')){ ?>
		<li class="wechat"><a href="#"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/wechat.png"/></a>
			<div class="wechatInner">
				<img src="<?php echo akina_option('wechat', ''); ?>" alt="WeChat">
			</div>
		</li>
		<?php } ?> 
		<?php if (akina_option('lofter')){ ?>
		<li><a href="<?php echo akina_option('lofter', ''); ?>" target="_blank" class="social-lofter" title="lofter"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/lofter.png"/></a></li>
		<?php } ?>	
		<?php if (akina_option('bili')){ ?>
		<li><a href="<?php echo akina_option('bili', ''); ?>" target="_blank" class="social-bili" title="bilibili"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/bilibili.png"/></a></li>
		<?php } ?>
		<?php if (akina_option('youku')){ ?>
		<li><a href="<?php echo akina_option('youku', ''); ?>" target="_blank" class="social-youku" title="youku"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/youku.png"/></a></li>
		<?php } ?>
		<?php if (akina_option('wangyiyun')){ ?>
		<li><a href="<?php echo akina_option('wangyiyun', ''); ?>" target="_blank" class="social-wangyiyun" title="CloudMusic"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/wangyiyun.png"/></a></li>
		<?php } ?>
		<?php if (akina_option('twitter')){ ?>
		<li><a href="<?php echo akina_option('twitter', ''); ?>" target="_blank" class="social-wangyiyun" title="Twitter"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/twitter.png"/></a></li>
		<?php } ?>	
		<?php if (akina_option('facebook')){ ?>
		<li><a href="<?php echo akina_option('facebook', ''); ?>" target="_blank" class="social-wangyiyun" title="Facebook"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/facebook.png"/></a></li>
		<?php } ?>	
		<?php if (akina_option('googleplus')){ ?>
		<li><a href="<?php echo akina_option('googleplus', ''); ?>" target="_blank" class="social-wangyiyun" title="Google+"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/googleplus.png"/></a></li>
		<?php } ?>
		<?php if (akina_option('jianshu')){ ?>
		<li><a href="<?php echo akina_option('jianshu', ''); ?>" target="_blank" class="social-wangyiyun" title="Jianshu"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/jianshu.png"/></a></li>
		<?php } ?>
		<?php if (akina_option('zhihu')){ ?>
		<li><a href="<?php echo akina_option('zhihu', ''); ?>" target="_blank" class="social-wangyiyun" title="Zhihu"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/zhihu.png"/></a></li>
		<?php } ?>	
		<?php if (akina_option('csdn')){ ?>
		<li><a href="<?php echo akina_option('csdn', ''); ?>" target="_blank" class="social-wangyiyun" title="CSDN"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/csdn.png"/></a></li>
		<?php } ?>		
		<?php if (akina_option('email_name') && akina_option('email_domain')){ ?>
		<li><a onclick="mail_me()" class="social-wangyiyun" title="E-mail"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/sns/email.svg"/></a></li>
		<?php } ?>	
		<li id="bg-next"><img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/next-b.svg"/></li>	
	  	</div>
        <?php endif; ?>
	</div>
	<?php } ?>
</figure>
<?php
echo bgvideo(); //BGVideo 
