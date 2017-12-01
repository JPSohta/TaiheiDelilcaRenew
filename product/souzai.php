<?php include('../ini.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>タイヘイフレッシュデリカ | 惣菜キット</title>
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
	include($site_url.'header.php'); 
	?>
	<div class="container product">
		<div class="content">
			<div id="souzai">
				<h2 class="top"><img src="<?php echo $webroot; ?>img/product/product_souzai.png" alt="惣菜キット"></h2>
				<p>手間のかかる素材の下処理済み、具材とタレを調理加熱するだけの簡単クッキング食材セットです。<br>&nbsp;</p>
				<p>惣菜キットの種類を選ぶ</p>
				<div class="controls">
					<button type="button" class="return"><a href="<?php echo $webroot; ?>product/index.php">カテゴリーの一覧に戻る</a></button>
					<button type="button" class="filter" data-filter=".category_souzai"><a href="#">すべての惣菜kit</a></button>
					<button type="button" class="filter" data-filter=".category_japanese"><a href="#">和惣菜キット</a></button>
					<button type="button" class="filter" data-filter=".category_chinese"><a href="#">中華惣菜キット</a></button>
					<button type="button" class="filter" data-filter=".category_tenpura"><a href="#">天ぷらキット</a></button>
				</div>
				<!-- controls -->

				<div class="targets">
					<div class="mix category_souzai category_japanese" data-myorder="400" name="肉じゃがキット"><img src="<?php echo $webroot; ?>img/product/souzai/japanese_01.jpg" alt="肉じゃが">
					</div>
					<div class="mix category_souzai category_chinese" data-myorder="401" name="酢豚キット"><img src="<?php echo $webroot; ?>img/product/souzai/chinese_01.jpg" alt="酢豚">
					</div>
					<div class="mix category_souzai category_tenpura" data-myorder="402" name="野菜天ぷらキット"><img src="<?php echo $webroot; ?>img/product/souzai/tenpura_01.jpg" alt="野菜天ぷら">
					</div>
					<div class="gap"></div>
					<div class="gap"></div>
				</div>
				<!-- targets -->
			</div>
			<!-- #souzai -->
		</div>
		<!-- content -->
	</div>
	<!-- container -->

	<!-- footer -->
	<?php include($site_url.'footer.php'); ?>

	<script src="<?php echo $webroot; ?>js/jquery.mixitup.min.js"></script>
	<script>
		$( function () {
			$( '#souzai' ).mixItUp();
		} );
	</script>
</body>

</html>