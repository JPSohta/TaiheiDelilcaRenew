<?php include('./ini.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>タイヘイフレッシュデリカ | 事業内容</title>
	<meta name="Keywords" content="タイヘイフレッシュデリカ,フレッシュデリカ,カット野菜,カットフルーツ,パン鍋キット,タイヘイ株式会社,タイヘイ,taihei,ファミリーセット,Family Life Supporter">
	<meta name="Description" content="株式会社タイヘイフレッシュデリカ事業部です。カット野菜カットフルーツの製造販売。惣菜キットの開発を行っています。">
<meta name="viewport" content="width=device-width">
<link href="./css/common.css" rel="stylesheet" type="text/css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>


	
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
	mode: 'fade',
	speed: 500,
	auto: true,
	pause: 7000
  });
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
<script type="text/javascript" src="./js/jquery.matchHeight.js"></script>
<script>
	$(function(){
	$('.container.p_none div').matchHeight();
	});
</script>
</head>

<body>
<!-- header -->
        <?php include($site_url.'./header.php'); ?>	

<!-- このページのコンテンツはここから -->
	
	
	
<!-- ここまで -->	

<!-- footer -->
        <?php include($site_url.'./footer.php'); ?>	

</body>
</html>
