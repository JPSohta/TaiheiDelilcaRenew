<?php include('../ini.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>タイヘイフレッシュデリカ | サラダキット</title>
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
			<div id="salad">
				<h2 class="top"><img src="<?php echo $webroot; ?>img/product/product_salad.png" alt="インストアサラダキット"></h2>
				<p>手作りサラダが店内でいつでも簡単に作ることができ60アイテム以上のラインアップで差別化のお手伝いをいたします。<br>&nbsp;</p>
				<p>サラダの種類を選ぶ</p>
				<div class="controls">
					<button type="button" class="return" ><a href="<?php echo $webroot; ?>product/index.php">カテゴリーの一覧に戻る</a></button>
					<button type="button" class="filter" data-filter=".category_salad"><a href="#">すべてのサラダキット</a></button>
					<button type="button" class="filter" data-filter=".category_a"><a href="#">aキット</a></button>
					<button type="button" class="filter" data-filter=".category_b"><a href="#">bキット</a></button>
					<button type="button" class="filter" data-filter=".category_c"><a href="#">cキット</a></button>
				</div>
				<!-- controls -->
				<div class="targets">
					<div class="mix category_salad category_a" data-myorder="300" name="aキット"><img src="<?php echo $webroot; ?>img/product/salad/a_01.jpg" alt="a">
					</div>
					<div class="mix category_salad category_b" data-myorder="301" name="bキット"><img src="<?php echo $webroot; ?>img/product/salad/b_01.jpg" alt="b">
					</div>
					<div class="mix category_salad category_c" data-myorder="302" name="cキット"><img src="<?php echo $webroot; ?>img/product/salad/c_01.jpg" alt="c">
					</div>
					<div class="gap"></div>
					<div class="gap"></div>
				</div>
				<!-- targets -->
			</div>
			<!-- #salad -->
		</div>
		<!-- content -->
	</div>
	<!-- container -->

	<!-- footer -->
	<?php include($site_url.'footer.php'); ?>

	<script src="<?php echo $webroot; ?>js/jquery.mixitup.min.js"></script>
	<script>
		$( function () {
			$( '#salad' ).mixItUp();
		} );
	</script>
</body>

</html>