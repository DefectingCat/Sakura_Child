<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sakura
 */

?>
	</div><!-- #content -->
	<?php 
		if(akina_option('general_disqus_plugin_support')){
			get_template_part('layouts/duoshuo');
		}else{
			comments_template('', true); 
		}
	?>
	</div><!-- #page Pjax container-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="footer-device">
				<p class="foot-logo" style="background-image: url('https://cdn.defectink.com/images/tx.png');"></p>
				<!--typing特效-->
				<div id="typing" >Defectink</div>
				<script>
var typing = function(r) {
		function t() {
			return b[Math.floor(Math.random() * b.length)]
		}
		function e() {
			return String.fromCharCode(94 * Math.random() + 33)
		}
		function n(r) {
			for (var n = document.createDocumentFragment(), i = 0; r > i; i++) {
				var l = document.createElement("span");
				l.textContent = e(), l.style.color = t(), n.appendChild(l)
			}
			return n
		}
		function i() {
			var t = o[c.skillI];
			c.step ? c.step-- : (c.step = g, c.prefixP < l.length ? (c.prefixP >= 0 && (c.text += l[c.prefixP]), c.prefixP++) : "forward" === c.direction ? c.skillP < t.length ? (c.text += t[c.skillP], c.skillP++) : c.delay ? c.delay-- : (c.direction = "backward", c.delay = a) : c.skillP > 0 ? (c.text = c.text.slice(0, -1), c.skillP--) : (c.skillI = (c.skillI + 1) % o.length, c.direction = "forward")), r.textContent = c.text, r.appendChild(n(c.prefixP < l.length ? Math.min(s, s + c.prefixP) : Math.min(s, t.length - c.skillP))), setTimeout(i, d)
		}
		var l = "欢迎来到",
			o = ["" + "Defectink~" ].map(function(r) {
				return r + ""
			}),
			a = 2,
			g = 1,
			s = 5,
			d = 75,
			b = ["rgb(110,64,170)", "rgb(150,61,179)", "rgb(191,60,175)", "rgb(228,65,157)", "rgb(254,75,131)", "rgb(255,94,99)", "rgb(255,120,71)", "rgb(251,150,51)", "rgb(226,183,47)", "rgb(198,214,60)", "rgb(175,240,91)", "rgb(127,246,88)", "rgb(82,246,103)", "rgb(48,239,130)", "rgb(29,223,163)", "rgb(26,199,194)", "rgb(35,171,216)", "rgb(54,140,225)", "rgb(76,110,219)", "rgb(96,84,200)"],
			c = {
				text: "",
				prefixP: -s,
				skillI: 0,
				skillP: 0,
				direction: "forward",
				delay: a,
				step: g
			};
		i()
	};
typing(document.getElementById('typing')); 
				</script>
				<!--页面加载时间-->
				<div id="TimeShow">统计时间中( ╯▽╰)</div>
				<script type="text/javascript">
						window.onload = function() 
					{ 
					document.getElementById("TimeShow").innerHTML = "页面加载生成所用时间 "+ (new Date().getTime()-t1) +" 毫秒"; 
					} 
				</script> 
				<!--运行时间-->
				   <span id="sitetime"></span>
                <script type="text/javascript">
                    function siteTime(){
									window.setTimeout("siteTime()", 1000);
									var seconds = 1000
									var minutes = seconds * 60
									var hours = minutes * 60
									var days = hours * 24
									var years = days * 365
									var today = new Date()
									var todayYear = today.getFullYear()
									var todayMonth = today.getMonth()
									var todayDate = today.getDate()
									var todayHour = today.getHours()
									var todayMinute = today.getMinutes()
									var todaySecond = today.getSeconds()

									/* Date.UTC() -- 返回date对象距世界标准时间(UTC)1970年1月1日午夜之间的毫秒数(时间戳) 
									year - 作为date对象的年份，为4位年份值
									month - 0-11之间的整数，做为date对象的月份
									day - 1-31之间的整数，做为date对象的天数
									hours - 0(午夜24点)-23之间的整数，做为date对象的小时数
									minutes - 0-59之间的整数，做为date对象的分钟数
									seconds - 0-59之间的整数，做为date对象的秒数
									microseconds - 0-999之间的整数，做为date对象的毫秒数 */
									var t1 = Date.UTC(2017,5,21,13,0,00)
									var t2 = Date.UTC(todayYear,todayMonth,todayDate,todayHour,todayMinute,todaySecond)
									var diff = t2-t1
									var diffYears = Math.floor(diff/years)
									var diffDays = Math.floor((diff/days)-diffYears*365)
									var diffHours = Math.floor((diff-(diffYears*365+diffDays)*days)/hours)
									var diffMinutes = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours)/minutes)
									var diffSeconds = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours-diffMinutes*minutes)/seconds)
									document.getElementById("sitetime").innerHTML=" 已运行"+diffYears+" 年 "+diffDays+" 天 "+diffHours+" 小时 "+diffMinutes+" 分钟 "+diffSeconds+" 秒"
									}
									siteTime()
                </script>
			</div>
			<div class="footertext">
				<div class="img-preload">
					<img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/wordpress-rotating-ball-o.svg">
					<img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/disqus-preloader.svg">
				</div>
					<?php echo akina_option('footer_info', ''); ?>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="openNav no-select">
		<div class="iconflat no-select">	 
			<div class="icon"></div>
		</div>
		<div class="site-branding">
			<?php if (akina_option('akina_logo')){ ?>
			<div class="site-title"><a href="<?php bloginfo('url');?>" ><img src="<?php echo akina_option('akina_logo'); ?>"></a></div>
			<?php }else{ ?>
			<h1 class="site-title"><a href="<?php bloginfo('url');?>" ><?php bloginfo('name');?></a></h1>
			<?php } ?>
		</div>
	</div><!-- m-nav-bar -->
	</section><!-- #section -->
	<!-- m-nav-center -->
	<div id="mo-nav">
		<div class="m-avatar">
			<?php $ava = akina_option('focus_logo') ? akina_option('focus_logo') : get_template_directory_uri().'/images/avatar.jpg'; ?>
			<img src="<?php echo $ava ?>">
		</div>
		<div class="m-search">
			<form class="m-search-form" method="get" action="<?php echo home_url(); ?>" role="search">
				<input class="m-search-input" type="search" name="s" placeholder="<?php _e('搜索...', 'akina') ?>" required>
			</form>
		</div>
		<?php wp_nav_menu( array( 'depth' => 2, 'theme_location' => 'primary', 'container' => false ) ); ?>
	</div><!-- m-nav-center end -->
	<a href="#" class="cd-top faa-float animated "></a>
	<button onclick="topFunction()" id="moblieGoTop" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
	<!-- search start -->
	<form class="js-search search-form search-form--modal" method="get" action="<?php echo home_url(); ?>" role="search">
		<div class="search-form__inner">
			<div>
				<p class="micro mb-"><?php _e('想要找点什么呢？', 'akina') ?></p>
				<i class="iconfont icon-search"></i>
				<input class="text-input" type="search" name="s" placeholder="<?php _e('Search', 'akina') ?>" required>
			</div>
		</div>
		<div class="search_close"></div>
	</form>
	<!-- search end -->
<?php wp_footer(); ?>
<?php if(akina_option('site_statistics')){ ?>
<div class="site-statistics">
<script type="text/javascript"><?php echo akina_option('site_statistics'); ?></script>
</div>
<?php } ?>
<!--
<div class="changeSkin-gear no-select">
    <div class="keys">
        <span id="open-skinMenu">
		<i class="iconfont icon-gear inline-block rotating"></i>&nbsp; 切换滤镜 | ( ╯▽╰) 
        </span>
    </div>
</div>
-->
<div class="skin-menu no-select">
    <div class="theme-controls row-container">
        <ul class="menu-list">
            <li id="white-bg">
                <i class="fa fa-television" aria-hidden="true"></i>
            </li><!--Default-->
            <li id="sakura-bg">
                <i class="iconfont icon-sakura"></i>
            </li><!--Sakura-->
            <li id="gribs-bg">
                <i class="fa fa-slack" aria-hidden="true"></i>
            </li><!--Grids-->
            <li id="KAdots-bg">
                <i class="iconfont icon-dots"></i>
            </li><!--Dots-->
            <li id="totem-bg">
                <i class="fa fa-superpowers" aria-hidden="true"></i>
            </li><!--Orange-->
            <li id="pixiv-bg">
                <i class="iconfont icon-pixiv"></i>
            </li><!--Start-->
            <li id="bing-bg">
                <i class="iconfont icon-bing"></i>
            </li><!--Bing-->
            <li id="dark-bg">
                <i class="fa fa-moon-o" aria-hidden="true"></i>
            </li><!--Night-->
        </ul>
    </div>
    <div class="font-family-controls row-container">
        <button type="button" class="control-btn-serif selected" data-mode="serif" 
                onclick="mashiro_global.font_control.change_font()">Serif</button>
        <button type="button" class="control-btn-sans-serif" data-mode="sans-serif" 
                onclick="mashiro_global.font_control.change_font()">Sans Serif</button>
    </div>
</div>
<!--/*蜂窝*/-->
<script type="text/javascript">
    if (screen && screen.width > 480) {
        document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/canvas-nest.min.js" type="text/javascript"><\/script>');
    }
</script>
<!-- 鼠标❤特效 -->
<script type="text/javascript">
    if (screen && screen.width > 480) {
        document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/canvas-heart.min.js" type="text/javascript"><\/script>');
    }
</script>
<!-- 和泉纱雾 -->
<canvas id="paul" width="255" height="455"></canvas>
<script src="https://cdn.defectink.com/js/live2d.js"></script>
<!-- 加载并手机端不显示live2d -->
<script type="text/javascript">
	    if (screen && screen.width > 480) {
        loadlive2d("paul", "https://cdn.defectink.com/live2d/sagiri/model.json");
    }
				else {
				   document.getElementById("paul").width="0";
					document.getElementById("paul").height="0";
			}
</script>
<!--js对顶栏的控制-->
<script>
	$(document).ready(function(){
	var p=0,t=0;
	$(window).scroll(function(e){
			p = $(this).scrollTop();
			if(t<=p){//下滚
				$(".gizle").css("top","-101%");
				$(".gizle").css("transition","all 1s");
			}
			
			else{//上滚
				$(".gizle").css("top","0");
				$(".gizle").css("transition","all .5s");
			}
			setTimeout(function(){t = p;},0);		
	});
});
</script>
<!--console彩蛋 -->
<script>
	console.warn('\n %c 东方肥羊 %c © 小肥羊 http://Defectink.com \n\n', 'color:#FFFFFB;background:#1abc9c;padding:5px 0;border-radius:.5rem 0 0 .5rem;', 'color:#FFFFFB;background:#080808;padding:5px 0;border-radius:0 .5rem .5rem 0;');
</script>
<canvas id="night-mode-cover"></canvas>
<?php if (akina_option('playlist_id', '')): ?>
<div id="aplayer-float" style="z-index: 100;"
	class="aplayer"
    data-id="<?php echo akina_option('playlist_id', ''); ?>"
    data-server="netease"
    data-type="playlist"
    data-fixed="true"
    data-theme="orange">
</div>
<style>.skin-menu{left:auto;right:10px;}.changeSkin-gear{left:auto;right:5px;}</style>
<?php endif; ?>
<?php 
if (akina_option('adobe_id_1', '')) {
	$adobe = rand(0,2);
	switch ($adobe) {
		case 0:
			$adobe_id = akina_option('adobe_id_1', '');
			break;
		case 1:
			if (akina_option('adobe_id_2', '')) {
				$adobe_id = akina_option('adobe_id_2', '');
			} else {
				$adobe_id = akina_option('adobe_id_1', '');
			}
			break;
		default:
			if (akina_option('adobe_id_3', '')) {
				$adobe_id = akina_option('adobe_id_3', '');
			} else {
				$adobe_id = akina_option('adobe_id_1', '');
			}
	}
	if(!wp_is_mobile()): 
	?>
	<script src="https://use.typekit.net/<?php echo $adobe_id; ?>.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<?php 
	endif;
} ?>
</body>
</html>