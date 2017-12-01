<?php include('../ini.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>タイヘイフレッシュデリカ | カット野菜</title>
	<meta name="Keywords" content="タイヘイフレッシュデリカ,フレッシュデリカ,カット野菜,カットフルーツ,パン鍋キット,タイヘイ株式会社,タイヘイ,taihei,ファミリーセット,Family Life Supporter">
	<meta name="Description" content="株式会社タイヘイフレッシュデリカ事業部です。カット野菜カットフルーツの製造販売。惣菜キットの開発を行っています。">
	<meta name="Description" content="創業130年、快適生活を応援します。「未来はいつもそばにある」">
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
			<div id="vegitable">
				<h2 class="top"><img src="../img/product/product_vegitable.png" alt="野菜"></h2>
				<p>野菜の種類を選ぶ</p>
				<div class="controls">
					<button type="button" class="return" ><a href="<?php echo $webroot; ?>product/index.php">カテゴリーの一覧に戻る</a></button>
					<button type="button" class="filter" data-filter=".category_vegitable"><a href="#">すべての野菜</a></button>
					<button type="button" class="filter" data-filter=".category_broccoli"><a href="#">ブロッコリー</a></button>
					<button type="button" class="filter" data-filter=".category_cabbage"><a href="#">キャベツ</a></button>
					<button type="button" class="filter" data-filter=".category_carrot"><a href="#">ニンジン</a></button>
					<button type="button" class="filter" data-filter=".category_celery"><a href="#">セロリ</a></button>
					<button type="button" class="filter" data-filter=".category_cucumber"><a href="#">胡瓜</a></button>
					<button type="button" class="filter" data-filter=".category_eggplant"><a href="#">茄子</a></button>
					<button type="button" class="filter" data-filter=".category_gobou"><a href="#">ゴボウ</a></button>
					<button type="button" class="filter" data-filter=".category_hakusai"><a href="#">白菜</a></button>
					<button type="button" class="filter" data-filter=".category_konegi"><a href="#">小葱</a></button>
					<button type="button" class="filter" data-filter=".category_leaflettuce"><a href="#">グリーンカール</a></button>
					<button type="button" class="filter" data-filter=".category_leek"><a href="#">長葱</a></button>
					<button type="button" class="filter" data-filter=".category_lettuce"><a href="#">レタス</a></button>
					<button type="button" class="filter" data-filter=".category_mituba"><a href="#">三つ葉</a></button>
					<button type="button" class="filter" data-filter=".category_mizuna"><a href="#">水菜</a></button>
					<button type="button" class="filter" data-filter=".category_ninniku"><a href="#">にんにくの芽</a></button>
					<button type="button" class="filter" data-filter=".category_nira"><a href="#">にら</a></button>
					<button type="button" class="filter" data-filter=".category_onion"><a href="#">玉ねぎ</a></button>
					<button type="button" class="filter" data-filter=".category_pepper"><a href="#">ピーマン</a></button>
					<button type="button" class="filter" data-filter=".category_potato"><a href="#">ジャガイモ</a></button>
					<button type="button" class="filter" data-filter=".category_pumpkin"><a href="#">南瓜</a></button>
					<button type="button" class="filter" data-filter=".category_raddish"><a href="#">大根</a></button>
					<button type="button" class="filter" data-filter=".category_redcabbage"><a href="#">紫キャベツ</a></button>
					<button type="button" class="filter" data-filter=".category_torebisu"><a href="#">トレビス</a></button>
					<button type="button" class="filter" data-filter=".category_redonion"><a href="#">紫玉ねぎ</a></button>
					<button type="button" class="filter" data-filter=".category_redpepper"><a href="#">赤パプリカ</a></button>
					<button type="button" class="filter" data-filter=".category_shimeji"><a href="#">しめじ</a></button>
					<button type="button" class="filter" data-filter=".category_shungiku"><a href="#">春菊</a></button>
					<button type="button" class="filter" data-filter=".category_sweetpotato"><a href="#">さつま芋</a></button>
					<button type="button" class="filter" data-filter=".category_yellowpepper"><a href="#">黄パプリカ</a></button>
				</div>
				<!-- controls -->

				<div class="targets" id="targets">
					<div class="mix category_vegitable category_broccoli" data-myorder="01" name="ブロッコリー子房分け10g"><img src="<?php echo $webroot; ?>img/product/vegitable/broccoli_01.jpg" alt="broccoli">
					</div>
					<div class="mix category_vegitable category_cabbage" data-myorder="02" name="キャベツスライス1mm"><img src="<?php echo $webroot; ?>img/product/vegitable/cabbage_01.jpg" alt="cabbage">
					</div>
					<div class="mix category_vegitable category_cabbage" data-myorder="03" name="キャベツカット手切り 40mm"><img src="<?php echo $webroot; ?>img/product/vegitable/cabbage_02.jpg" alt="cabbage">
					</div>
					<div class="mix category_vegitable category_carrot" data-myorder="04" name="ニンジンスティック 3×3×50mm"><img src="<?php echo $webroot; ?>img/product/vegitable/carrot_01.jpg" alt="carrot">
					</div>
					<div class="mix category_vegitable category_carrot" data-myorder="05" name="ニンジン乱切り 10g"><img src="<?php echo $webroot; ?>img/product/vegitable/carrot_02.jpg" alt="carrot">
					</div>
					<div class="mix category_vegitable category_carrot" data-myorder="06" name="ニンジン短冊 2×10×50mm"><img src="<?php echo $webroot; ?>img/product/vegitable/carrot_03.jpg" alt="carrot">
					</div>
					<div class="mix category_vegitable category_celery" data-myorder="07" name="セロリ斜めスライス5mm"><img src="<?php echo $webroot; ?>img/product/vegitable/celery_01.jpg" alt="celery">
					</div>
					<div class="mix category_vegitable category_cucumber" data-myorder="08" name="胡瓜スティック 3×3×50"><img src="<?php echo $webroot; ?>img/product/vegitable/cucumber_01.jpg" alt="cucumber">
					</div>
					<div class="mix category_vegitable category_cucumber" data-myorder="09" name="胡瓜スライス 2mm"><img src="<?php echo $webroot; ?>img/product/vegitable/cucumber_02.jpg" alt="cucumber">
					</div>
					<div class="mix category_vegitable category_cucumber" data-myorder="10" name="胡瓜芯抜き 1/8"><img src="<?php echo $webroot; ?>img/product/vegitable/cucumber_03.jpg" alt="cucumber">
					</div>
					<div class="mix category_vegitable category_eggplant" data-myorder="11" name="茄子へタ付き縦1/2カット袴５本"><img src="<?php echo $webroot; ?>img/product/vegitable/eggplant_01.jpg" alt="eggplant">
					</div>
					<div class="mix category_vegitable category_eggplant" data-myorder="12" name="茄子乱切り 10g"><img src="<?php echo $webroot; ?>img/product/vegitable/eggplant_02.jpg" alt="eggplant">
					</div>
					<div class="mix category_vegitable category_gobou" data-myorder="13" name="ゴボウ乱切り 10g"><img src="<?php echo $webroot; ?>img/product/vegitable/gobou_01.jpg" alt="gobou">
					</div>
					<div class="mix category_vegitable category_gobou" data-myorder="14" name="ゴボウささがき"><img src="<?php echo $webroot; ?>img/product/vegitable/gobou_02.jpg" alt="gobou">
					</div>
					<div class="mix category_vegitable category_hakusai" data-myorder="15" name="白菜角切り 40mm"><img src="<?php echo $webroot; ?>img/product/vegitable/hakusai_01.jpg" alt="hakusai">
					</div>
					<div class="mix category_vegitable category_konegi" data-myorder="16" name="小葱スライス 2mm"><img src="<?php echo $webroot; ?>img/product/vegitable/konegi_01.jpg" alt="konegi">
					</div>
					<div class="mix category_vegitable category_leaflettuce" data-myorder="17" name="グリーンカールカット 手切り 40mm"><img src="<?php echo $webroot; ?>img/product/vegitable/leaflettuce_01.jpg" alt="leaflettuce">
					</div>
					<div class="mix category_vegitable category_leaflettuce" data-myorder="18" name="グリーンカールリーフ"><img src="<?php echo $webroot; ?>img/product/vegitable/leaflettuce_02.jpg" alt="leaflettuce">
					</div>
					<div class="mix category_vegitable category_leek" data-myorder="19" name="長葱スライス 2mm"><img src="<?php echo $webroot; ?>img/product/vegitable/leek_01.jpg" alt="leek">
					</div>
					<div class="mix category_vegitable category_leek" data-myorder="20" name="長葱斜めカット 手切り 10×60"><img src="<?php echo $webroot; ?>img/product/vegitable/leek_02.jpg" alt="leek">
					</div>
					<div class="mix category_vegitable category_leek" data-myorder="21" name="長葱白髪（芯なし） 2mm"><img src="<?php echo $webroot; ?>img/product/vegitable/leek_03.jpg" alt="leek">
					</div>
					<div class="mix category_vegitable category_lettuce" data-myorder="22" name="レタスカット 手切り 40mm"><img src="<?php echo $webroot; ?>img/product/vegitable/lettuce_01.jpg" alt="lettuce">
					</div>
					<div class="mix category_vegitable category_mituba" data-myorder="23" name="三つ葉カット 30mm"><img src="<?php echo $webroot; ?>img/product/vegitable/mituba_01.jpg" alt="mituba">
					</div>
					<div class="mix category_vegitable category_mizuna" data-myorder="24" name="水菜ざく切り 40mm"><img src="<?php echo $webroot; ?>img/product/vegitable/mizuna_01.jpg" alt="mizuna">
					</div>
					<div class="mix category_vegitable category_ninniku" data-myorder="25" name="にんにくの芽カット 40mm"><img src="<?php echo $webroot; ?>img/product/vegitable/ninniku_01.jpg" alt="ninniku">
					</div>
					<div class="mix category_vegitable category_nira" data-myorder="26" name="にらカット 50mm"><img src="<?php echo $webroot; ?>img/product/vegitable/nira_01.jpg" alt="nira">
					</div>
					<div class="mix category_vegitable category_onion" data-myorder="27" name="玉ねぎ乱切り 30mm"><img src="<?php echo $webroot; ?>img/product/vegitable/onion_01.jpg" alt="onion">
					</div>
					<div class="mix category_vegitable category_onion" data-myorder="28" name="玉ねぎスライス 2mm"><img src="<?php echo $webroot; ?>img/product/vegitable/onion_02.jpg" alt="onion">
					</div>
					<div class="mix category_vegitable category_pepper" data-myorder="29" name="ピーマンスライス縦 3mm"><img src="<?php echo $webroot; ?>img/product/vegitable/pepper_01.jpg" alt="pepper">
					</div>
					<div class="mix category_vegitable category_pepper" data-myorder="30" name="ピーマン乱切り 5g"><img src="<?php echo $webroot; ?>img/product/vegitable/pepper_02.jpg" alt="pepper">
					</div>
					<div class="mix category_vegitable category_potato" data-myorder="31" name="メーク乱切り 10g"><img src="<?php echo $webroot; ?>img/product/vegitable/potato_01.jpg" alt="potato">
					</div>
					<div class="mix category_vegitable category_pumpkin" data-myorder="32" name="南京櫛切り 10mm"><img src="<?php echo $webroot; ?>img/product/vegitable/pumpkin_01.jpg" alt="pumpkin">
					</div>
					<div class="mix category_vegitable category_pumpkin" data-myorder="33" name="南京皮むきダイス 10mm"><img src="<?php echo $webroot; ?>img/product/vegitable/pumpkin_02.jpg" alt="pumpkin">
					</div>
					<div class="mix category_vegitable category_raddish" data-myorder="34" name="大混乱切り 10g"><img src="<?php echo $webroot; ?>img/product/vegitable/raddish_01.jpg" alt="raddish">
					</div>
					<div class="mix category_vegitable category_raddish" data-myorder="35" name="大根スティック 3×3×50mm"><img src="<?php echo $webroot; ?>img/product/vegitable/raddish_02.jpg" alt="raddish">
					</div>
					<div class="mix category_vegitable category_redcabbage" data-myorder="36" name="紫キャベツスライス 1mm"><img src="<?php echo $webroot; ?>img/product/vegitable/redcabbage_01.jpg" alt="redcabbage">
					</div>
					<div class="mix category_vegitable category_torebisu" data-myorder="37" name="トレビス角切り 20mm"><img src="<?php echo $webroot; ?>img/product/vegitable/torebisu_01.jpg" alt="redcabbage">
					</div>
					<div class="mix category_vegitable category_redonion" data-myorder="38" name="紫玉葱スライス 1mm"><img src="<?php echo $webroot; ?>img/product/vegitable/redonion_01.jpg" alt="redonion">
					</div>
					<div class="mix category_vegitable category_redpepper" data-myorder="39" name="赤パプリカスライス縦 3mm"><img src="<?php echo $webroot; ?>img/product/vegitable/redpepper_01.jpg" alt="redpepper">
					</div>
					<div class="mix category_vegitable category_redpepper" data-myorder="40" name="赤パプリカ乱切り 10g"><img src="<?php echo $webroot; ?>img/product/vegitable/redpepper_02.jpg" alt="redpepper">
					</div>
					<div class="mix category_vegitable category_shimeji" data-myorder="41" name="しめじほぐし"><img src="<?php echo $webroot; ?>img/product/vegitable/shimeji_01.jpg" alt="shimeji">
					</div>
					<div class="mix category_vegitable category_shungiku" data-myorder="42" name="春菊リーフ"><img src="<?php echo $webroot; ?>img/product/vegitable/shungiku_01.jpg" alt="shungiku">
					</div>
					<div class="mix category_vegitable category_sweetpotato" data-myorder="43" name="さつま芋ダイス 10mm"><img src="<?php echo $webroot; ?>img/product/vegitable/sweetpotato_01.jpg" alt="sweetpotato">
					</div>
					<div class="mix category_vegitable category_sweetpotato" data-myorder="44" name="さつま芋斜めスライス 15g"><img src="<?php echo $webroot; ?>img/product/vegitable/sweetpotato_02.jpg" alt="sweetpotato">
					</div>
					<div class="mix category_vegitable category_sweetpotato" data-myorder="45" name="さつま芋斜めスライス 40g"><img src="<?php echo $webroot; ?>img/product/vegitable/sweetpotato_03.jpg" alt="sweetpotato">
					</div>
					<div class="mix category_vegitable category_yellowpepper" data-myorder="46" name="黄パプリカスライス縦 3mm"><img src="<?php echo $webroot; ?>img/product/vegitable/yellowpepper_01.jpg" alt="yellowpepper">
					</div>
					<div class="mix category_vegitable category_yellowpepper" data-myorder="47" name="黄パプリカ乱切り 10g"><img src="<?php echo $webroot; ?>img/product/vegitable/yellowpepper_02.jpg" alt="yellowpepper">
					</div>
				</div>
				<!-- targets -->
			</div>
			<!-- #vegitable -->
		</div>
		<!-- content -->
	</div>
	<!-- container -->

	<!-- footer -->
	<?php include($site_url.'./footer.php'); ?>

	<script src="<?php echo $webroot; ?>js/jquery.mixitup.min.js"></script>
	<script>
		$( function () {
			$( '#vegitable' ).mixItUp();
		} );
	</script>
</body>

</html>