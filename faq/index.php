<?php include('../ini.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>タイヘイフレッシュデリカ | よくある質問</title>
	<meta name="Keywords" content="タイヘイフレッシュデリカ,フレッシュデリカ,カット野菜,カットフルーツ,パン鍋キット,タイヘイ株式会社,タイヘイ,taihei,ファミリーセット,Family Life Supporter">
	<meta name="Description" content="株式会社タイヘイフレッシュデリカ事業部です。カット野菜カットフルーツの製造販売。惣菜キットの開発を行っています。">
<meta name="viewport" content="width=device-width">
<link href="../css/common.css" rel="stylesheet" type="text/css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>
<link href="../css/jquery.bxslider.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/slider-pro.css" media="screen">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="../js/respond.min.js"></script>
<script src="/js/html5shiv.js"></script>
<![endif]-->
<script src="../js/jquery.sliderPro.min.js"></script>
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
<script>
(function($) {
    $(function() {
        var $header = $('#top-head');
        // Nav Fixed
        $(window).scroll(function() {
            if ($(window).scrollTop() > 73) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
        // Nav Toggle Button
        $('#nav-toggle').click(function(){
            $header.toggleClass('open');
        });
    });
})(jQuery);
</script>
<script type="text/javascript" src="../js/jquery.matchHeight.js"></script>
<script>
	$(function(){
	$('.product_list li').matchHeight();
	});
</script>

<script>
$(document).ready(function(){
  $(".qhead a").on("click", function(e){
    e.preventDefault();
    var href = $(this).attr("href");
     
    $(href).fadeToggle(450);
  });
});
</script>
</head>
<body>
<!-- header -->
<?php 
	$current = 'faq';
	include($site_url.'./header.php'); 
?>	
	
<div class="main_img">
  <img src="../img/faq/main_img_faq.jpg" />
</div><!-- main_img -->
<div class="container faq">
		<div class="content">
			<h2 class="top"><img src="../img/faq/faq_main_txt.png" alt="よくあるご質問"></h2>

			
			
    <div id="w">
<div class="q">
  <h3 class="qhead"><a href="#q01">1. よくある質問よくある質問よくある質問よくある質問？</a></h3>
  <div class="answer" id="q01"><p>回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。</p></div>
</div>
 
<div class="q">
  <h3 class="qhead"><a href="#q02">2. よくある質問よくある質問？</a></h3>
  <div class="answer" id="q02"><p>回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。</p></div>
</div>

<div class="q">
  <h3 class="qhead"><a href="#q03">3. よくある質問よくある質問？</a></h3>
  <div class="answer" id="q03"><p>回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。</p></div>
</div>

<div class="q">
  <h3 class="qhead"><a href="#q04">4. よくある質問よくある質問？</a></h3>
  <div class="answer" id="q04"><p>回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。</p></div>
</div>

<div class="q">
  <h3 class="qhead"><a href="#q05">5. よくある質問よくある質問？</a></h3>
  <div class="answer" id="q05"><p>回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。回答がはいります。</p></div>
</div>
</div>
  </div>
</div>
	
<!-- footer -->
        <?php include($site_url.'./footer.php'); ?>	
</body>
</html>
