//typing
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

//运行时间
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
//蜂窝
if (screen && screen.width > 480) {
    document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/canvas-nest.min.js" type="text/javascript"><\/script>');
}
//鼠标❤特效
if (screen && screen.width > 480) {
    document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/canvas-heart.min.js" type="text/javascript"><\/script>');
}
//加载并手机端不显示live2d
if (screen && screen.width > 480) {
    loadlive2d("paul", "https://cdn.defectink.com/live2d/sagiri/model.json");
}
            else {
               document.getElementById("paul").width="0";
                document.getElementById("paul").height="0";
        }
//console彩蛋
console.warn('\n %c 东方肥羊 %c © 小肥羊 http://Defectink.com \n\n', 'color:#FFFFFB;background:#1abc9c;padding:5px 0;border-radius:.5rem 0 0 .5rem;', 'color:#FFFFFB;background:#080808;padding:5px 0;border-radius:0 .5rem .5rem 0;');
//js对顶栏的控制
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