<footer id="footer" class="site-footer card shadow-sm border-0">
		<style>
    /* 备案样式 */
    .github-badge {
        display: inline-block;
        border-radius: 4px;
        text-shadow: none;
        font-size: 13.1px;
        color: #fff;
        line-height: 15px;
        margin-bottom: 5px;
        font-family: "Open Sans", sans-serif;
    }

    .github-badge .badge-subject {
        display: inline-block;
        background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
        padding: 4px 4px 4px 6px;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        font-family: "Open Sans", sans-serif;
    }

    .github-badge .badge-value {
        display: inline-block;
        padding: 4px 6px 4px 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        font-family: "Open Sans", sans-serif;
    }

    .github-badge-big {
        display: inline-block;
        border-radius: 6px;
        text-shadow: none;
        font-size: 14.1px;
        color: #fff;
        line-height: 18px;
        margin-bottom: 7px;
    }

    .github-badge-big .badge-subject {
        display: inline-block;
        background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
        padding: 4px 4px 4px 6px;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .github-badge-big .badge-value {
        display: inline-block;
        padding: 4px 6px 4px 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .bg-jianbian {
        background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
    }

    .bg-apricots {
        background-image: linear-gradient(-225deg, #B6CEE8 0%, #F578DC 100%) !important;
    }
</style>


<!-- 备案 -->
<div class="github-badge-big">
    <span class="badge-value bg-jianbian">

        <!-- <a href="http://gat.gxzf.gov.cn/wzxg/gxgawbq/gls/" target="_blank" one-link-mark="yes" style="font-size: 15px; text-decoration: none; color: #d90808;">
        <span>桂ICP备1234567890号</span>
        </a> -->

        <a href="http://gat.gxzf.gov.cn/wzxg/gxgawbq/gls/" target="_blank" one-link-mark="yes"
            style="text-decoration:none; color: red;">
            <img src="C:\Users\s'k'y\Desktop\jinghui.png" alt="" width="16px" height="15px">
             桂公网安备4503230200853号
        </a>
    </span>
</div>


<div class="github-badge-big">
    <span class="badge-subject">版本所有<i class="fa fa-copyright" aria-hidden="true"></i>2024 Alan Kevin</span>
</div>

<!-- 运行时间 -->
<div class="github-badge-big">
    <span class="badge-subject">创立时间</span><span class="badge-value bg-apricots"><span
            id="blog_running_days" class="odometer odometer-auto-theme"></span>
        天
        <span id="blog_running_hours" class="odometer odometer-auto-theme"></span> 时
        <span id="blog_running_mins" class="odometer odometer-auto-theme"></span> 分
        <span id="blog_running_secs" class="odometer odometer-auto-theme"></span>秒
    </span>


    <script no-pjax="">
        var blog_running_days = document.getElementById("blog_running_days");
        var blog_running_hours = document.getElementById("blog_running_hours");
        var blog_running_mins = document.getElementById("blog_running_mins");
        var blog_running_secs = document.getElementById("blog_running_secs");
        function refresh_blog_running_time() {
            var time = new Date() - new Date(2024, 1, 1, 0, 0, 0); /*此处日期的月份改为自己真正月份的前一个月*/
            var d = parseInt(time / 24 / 60 / 60 / 1000);
            var h = parseInt((time % (24 * 60 * 60 * 1000)) / 60 / 60 / 1000);
            var m = parseInt((time % (60 * 60 * 1000)) / 60 / 1000);
            var s = parseInt((time % (60 * 1000)) / 1000);
            blog_running_days.innerHTML = d;
            blog_running_hours.innerHTML = h;
            blog_running_mins.innerHTML = m;
            blog_running_secs.innerHTML = s;
        }
        refresh_blog_running_time();
        if (typeof bottomTimeIntervalHasSet == "undefined") {
            var bottomTimeIntervalHasSet = true;
            setInterval(function () {
                refresh_blog_running_time();
            }, 500);
        }
    </script>	
					</footer>
				</main>
			</div>
		</div>
		<script src="<?php echo $GLOBALS['assets_path']; ?>/argontheme.js?v<?php echo $GLOBALS['theme_version']; ?>"></script>
		<?php if (get_option('argon_math_render') == 'mathjax3') { /*Mathjax V3*/?>
			<script>
				window.MathJax = {
					tex: {
						inlineMath: [["$", "$"], ["\\\\(", "\\\\)"]],
						displayMath: [['$$','$$']],
						processEscapes: true,
						packages: {'[+]': ['noerrors']}
					},
					options: {
						skipHtmlTags: ['script', 'noscript', 'style', 'textarea', 'pre', 'code'],
						ignoreHtmlClass: 'tex2jax_ignore',
						processHtmlClass: 'tex2jax_process'
					},
					loader: {
						load: ['[tex]/noerrors']
					}
				};
			</script>
			<script src="<?php echo get_option('argon_mathjax_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml-full.js' : get_option('argon_mathjax_cdn_url'); ?>" id="MathJax-script" async></script>
		<?php }?>
		<?php if (get_option('argon_math_render') == 'mathjax2') { /*Mathjax V2*/?>
			<script type="text/x-mathjax-config" id="mathjax_v2_script">
				MathJax.Hub.Config({
					messageStyle: "none",
					tex2jax: {
						inlineMath: [["$", "$"], ["\\\\(", "\\\\)"]],
						displayMath: [['$$','$$']],
						processEscapes: true,
						skipTags: ['script', 'noscript', 'style', 'textarea', 'pre', 'code']
					},
					menuSettings: {
						zoom: "Hover",
						zscale: "200%"
					},
					"HTML-CSS": {
						showMathMenu: "false"
					}
				});
			</script>
			<script src="<?php echo get_option('argon_mathjax_v2_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/mathjax@2.7.5/MathJax.js?config=TeX-AMS_HTML' : get_option('argon_mathjax_v2_cdn_url'); ?>"></script>
		<?php }?>
		<?php if (get_option('argon_math_render') == 'katex') { /*Katex*/?>
			<link rel="stylesheet" href="<?php echo get_option('argon_katex_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/katex@0.11.1/dist/' : get_option('argon_katex_cdn_url'); ?>katex.min.css">
			<script src="<?php echo get_option('argon_katex_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/katex@0.11.1/dist/' : get_option('argon_katex_cdn_url'); ?>katex.min.js"></script>
			<script src="<?php echo get_option('argon_katex_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/katex@0.11.1/dist/' : get_option('argon_katex_cdn_url'); ?>contrib/auto-render.min.js"></script>
			<script>
				document.addEventListener("DOMContentLoaded", function() {
					renderMathInElement(document.body,{
						delimiters: [
							{left: "$$", right: "$$", display: true},
							{left: "$", right: "$", display: false},
							{left: "\\(", right: "\\)", display: false}
						]
					});
				});
			</script>
		<?php }?>

		<?php if (get_option('argon_enable_code_highlight') == 'true') { /*Highlight.js*/?>
			<link rel="stylesheet" href="<?php echo $GLOBALS['assets_path']; ?>/assets/vendor/highlight/styles/<?php echo get_option('argon_code_theme') == '' ? 'vs2015' : get_option('argon_code_theme'); ?>.css">
		<?php }?>

	</div>
</div>
<?php 
	wp_enqueue_script("argonjs", $GLOBALS['assets_path'] . "/assets/js/argon.min.js", null, $GLOBALS['theme_version'], true);
?>
<?php wp_footer(); ?>
</body>

<?php echo get_option('argon_custom_html_foot'); ?>

</html>
