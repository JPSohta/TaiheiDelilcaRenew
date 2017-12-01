<?php include('../ini.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>タイヘイフレッシュデリカ | 商品情報</title>
	<meta name="Keywords" content="タイヘイフレッシュデリカ,フレッシュデリカ,カット野菜,カットフルーツ,パン鍋キット,タイヘイ株式会社,タイヘイ,taihei,ファミリーセット,Family Life Supporter">
	<meta name="Description" content="株式会社タイヘイフレッシュデリカ事業部です。カット野菜カットフルーツの製造販売。惣菜キットの開発を行っています。">
	<meta name="viewport" content="width=device-width">
	<link href="../css/common.css" rel="stylesheet" type="text/css">
	<link href="../css/product.css" rel="stylesheet" type="text/css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script>
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
	</script>
</head>

<body>
	<!-- header -->
	<?php
	$current = 'product';
	include($site_url.'./header.php'); 
	?>

	<div class="main_img">
		<img src="<?php echo $webroot; ?>img/product/product_main_img.jpg">
	</div>
	<!-- main_img -->
	<div class="container product">
		<div class="content">
			<h2 class="top"><img src="<?php echo $webroot; ?>img/product/product_category.png" alt="カテゴリーを選ぶ"></h2>
			<p>手軽にそのまますぐ食べられるカットサラダやフルーツなどの加工製造と、<br/>使いきりに便利な大きさにカット・パッケージされた商品をお届けしています。<br/>量販店やスーパーなどできっと消費者のみなさまに一度はお目にかかった商品があるのではないかと思います。<br>数々の品種のカットはもちろん様々なキット商品など、豊富なバリエーションでご希望にお応えします</p>
			<ul class="tab">
				<li><a href="<?php echo $webroot; ?>product/vegitable.php">フレッシュカット野菜</a>
				</li>
				<li><a href="<?php echo $webroot; ?>product/fruit.php">フレッシュカットフルーツ</a>
				</li>
				<li><a href="<?php echo $webroot; ?>product/salad.php">インストアサラダキット</a>
				</li>
				<li><a href="<?php echo $webroot; ?>product/souzai.php">惣菜キット</a>
				</li>
			</ul>
			<div class="subInfo">
				<p class="telephone">TEL. <span class="bold">048-949-0831</span><br>【受付時間】平日8:30～17:00 土・日曜、祝日、会社休業日を除く</p>
			</div>
			<!-- subInfo -->
			<p class="btn"><a href="<?php echo $webroot; ?>info/index.php">お問い合わせはこちら</a>
			</p>
		</div>
		<!-- content -->
	</div>
	<!-- container -->
	<!-- footer -->
	<?php include($site_url.'/footer.php'); ?>

	<script src="<?php echo $webroot; ?>/js/jquery.mixitup.min.js"></script>
	<script>
		$( function () {
			$( '#vegitable' ).mixItUp();
		} );
	</script>
	<script>
		$( function () {
			$( '#vegitable' ).mixItUp();
		} );
	</script>
</body>
</html>