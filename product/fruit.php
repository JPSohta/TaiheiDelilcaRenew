<?php include('../ini.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>タイヘイフレッシュデリカ | カットフルーツ</title>
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
		});
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
				<div id="fruit">
					<h2 class="top"><img src="<?php echo $webroot; ?>img/product/product_fruit.png" alt="フルーツ"></h2>
					<p>果物の種類を選ぶ</p>
					<div class="controls">
						<button type="button" class="return"><a href="<?php echo $webroot; ?>product/index.php">カテゴリーの一覧に戻る</a></button>
						<button type="button" class="filter" data-filter=".category_fruit"><a href="#">すべての果物</a></button>
						<button type="button" class="filter" data-filter=".category_grapefruit"><a href="#">グレープフルーツ</a></button>
						<button type="button" class="filter" data-filter=".category_kiwi"><a href="#">キウイフルーツ</a></button>
						<button type="button" class="filter" data-filter=".category_orange"><a href="#">オレンジ</a></button>
						<button type="button" class="filter" data-filter=".category_watermelon"><a href="#">すいか</a></button>
						<button type="button" class="filter" data-filter=".category_pineapple"><a href="#">パイナップル</a></button>
						<button type="button" class="filter" data-filter=".category_melon"><a href="#">メロン</a></button>
					</div>
					<!-- controls -->
					<div class="targets">
						<div class="mix category_fruit category_grapefruit" data-myorder="200" name="グレープフルーツ（ホワイト）皮むき 1/8カット"><img src="<?php echo $webroot; ?>img/product/fruit/grapefruit_01.jpg" alt="grapefruit">
						</div>
						<div class="mix category_fruit category_grapefruit" data-myorder="201" name="グレープフルーツ（ルビー）皮むき 1/8カット"><img src="<?php echo $webroot; ?>img/product/fruit/grapefruit_02.jpg" alt="grapefruit">
						</div>
						<div class="mix category_fruit category_kiwi" data-myorder="203" name="キウイフルーツ"><img src="<?php echo $webroot; ?>img/product/fruit/kiwi_01.jpg" alt="kiwifruit">
						</div>
						<div class="mix category_fruit category_orange" data-myorder="204" name="オレンジ皮むき 1/6カット"><img src="<?php echo $webroot; ?>img/product/fruit/orange_01.jpg" alt="orange">
						</div>
						<div class="mix category_fruit category_watermelon" data-myorder="205" name="すいかブロック"><img src="<?php echo $webroot; ?>img/product/fruit/watermelon_01.jpg" alt="watermelon">
						</div>
						<div class="mix category_fruit category_melon" data-myorder="206" name="ハネージュメロン 15g カット"><img src="<?php echo $webroot; ?>img/product/fruit/melon_01.jpg" alt="melon">
						</div>
						<div class="mix category_fruit category_pineapple" data-myorder="207" name="パイン 15g カット"><img src="<?php echo $webroot; ?>img/product/fruit/pineapple_01.jpg" alt="pineapple">
						</div>						
					</div>
					<!-- targets -->
				</div>
				<!-- #fruit -->			
		</div>
		<!-- content -->
	</div>
	<!-- container -->	

	<!-- footer -->
	<?php include($site_url.'./footer.php'); ?>	
	
	<script src="<?php echo $webroot; ?>js/jquery.mixitup.min.js"></script>	
	<script>
    $(function(){
	$('#fruit').mixItUp();
    });
    </script>	
</body>
</html>