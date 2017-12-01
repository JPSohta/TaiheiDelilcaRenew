<?php include('../ini.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>タイヘイフレッシュデリカ | おしらせ</title>
	<meta name="Keywords" content="タイヘイフレッシュデリカ,フレッシュデリカ,カット野菜,カットフルーツ,パン鍋キット,タイヘイ株式会社,タイヘイ,taihei,ファミリーセット,Family Life Supporter">
	<meta name="Description" content="株式会社タイヘイフレッシュデリカ事業部です。カット野菜カットフルーツの製造販売。惣菜キットの開発を行っています。">
	<meta name="viewport" content="width=device-width">
	<link href="../css/common.css" rel="stylesheet" type="text/css">
	<link href="../css/info.css" rel="stylesheet" type="text/css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

	<!--[if lt IE 9]>
<script src="../js/respond.min.js"></script>
<script src="/js/html5shiv.js"></script>
<![endif]-->

	<script>
		( function ( $ ) {
			$( function () {
				var $header = $( '#top-head' );
				// Nav Fixed
				$( window ).scroll( function () {
					if ( $( window ).scrollTop() > 73 ) {
						$header.addClass( 'fixed' );
					} else {
						$header.removeClass( 'fixed' );
					}
				} );
				// Nav Toggle Button
				$( '#nav-toggle' ).click( function () {
					$header.toggleClass( 'open' );
				} );
			} );
		} )( jQuery );
	</script>

	</head>

<body>
	<!-- header -->
	<?php 
	$current = 'info';
	include($site_url.'./header.php'); 
	?>

	<!--<div class="main_img">
		<img src="../img/info/info_main_img.jpg"/>
	</div>-->
	<div class="container news">
		<div class="content">
			<h2 class="top"><img src="../img/info/info_main_txt.png" alt="お問い合わせフォーム"></h2>

<!----------------------------------------------------
製作中
------------------------------------------------------->
			
		</div>
		<!-- content -->
	</div>
	<!-- container -->


	<!-- footer -->
	<?php include($site_url.'./footer.php'); ?>
</body>

</html>