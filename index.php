<?php include('./ini.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>タイヘイフレッシュデリカ | TOP</title>
	<meta name="Keywords" content="タイヘイフレッシュデリカ,フレッシュデリカ,カット野菜,カットフルーツ,パン鍋キット,タイヘイ株式会社,タイヘイ,taihei,ファミリーセット,Family Life Supporter">
	<meta name="Description" content="株式会社タイヘイフレッシュデリカ事業部です。カット野菜カットフルーツの製造販売。惣菜キットの開発を行っています。">
	<meta name="viewport" content="width=device-width">
	<link href="./css/common.css" rel="stylesheet" type="text/css">
	<link href="./css/top.css" rel="stylesheet" type="text/css">
	<link href="./css/jquery.bxslider.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="./js/jquery.bxslider.min.js"></script>
	<script>
		$( document ).ready( function () {
			$( '.bxslider' ).bxSlider( {
				mode: 'fade',
				speed: 1500,
				auto: true,
				pause: 4000
			} );
		} );
	</script>
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
	<script type="text/javascript" src="./js/jquery.matchHeight.js"></script>
	<script>
		$( function () {
			$( '.matchheight' ).matchHeight();
		} );
	</script>
	<script>
		$( function () {
			$( '#navi_list li a' ).on( 'click', function () {
				$( this ).parent('li').addClass( 'select' ).siblings( 'li.select' ).removeClass( 'select' );				
			} );
	} );
	</script>
</head>

<body>
<!-------------------------------------------------------------
header
-------------------------------------------------------------->
	<?php 
	$current = 'top';
	include($site_url.'./header.php'); 
	?>
<!-------------------------------------------------------------
bxslider
-------------------------------------------------------------->
	<div class="container slider">
		<ul class="bxslider">
			<li>
				<img src="<?php echo $webroot; ?>img/top/main_img01.jpg">
				<div class="slider_copy">
					<p class="first">あなたの街までお届けします</p>
					<p class="second">採れたての素材を、その日に加工<br/>新鮮さと安定した価格での供給に自信があります</p>
				</div>
			</li>
			<li>
				<img src="<?php echo $webroot; ?>img/top/main_img02.jpg">
				<div class="slider_copy">
					<p class="first">あなたの街までお届けします</p>
					<p class="second">採れたての素材を、その日に加工<br/>新鮮さと安定した価格での供給に自信があります</p>
				</div>
			</li>
			<li>
				<img src="<?php echo $webroot; ?>img/top/main_img03.jpg">
				<div class="slider_copy">
					<p class="first">あなたの街までお届けします</p>
					<p class="second">採れたての素材を、その日に加工<br/>新鮮さと安定した価格での供給に自信があります</p>
				</div>
			</li>
			<li>
				<img src="<?php echo $webroot; ?>img/top/main_img04.jpg">
				<div class="slider_copy">
					<p class="first">あなたの街までお届けします</p>
					<p class="second">採れたての素材を、その日に加工<br/>新鮮さと安定した価格での供給に自信があります</p>
				</div>
			</li>
			<li>
				<img src="<?php echo $webroot; ?>img/top/main_img05.jpg">
				<div class="slider_copy">
					<p class="first">あなたの街までお届けします</p>
					<p class="second">採れたての素材を、その日に加工<br/>新鮮さと安定した価格での供給に自信があります</p>
				</div>
			</li>
			<li>
				<img src="<?php echo $webroot; ?>img/top/main_img06.jpg">
				<div class="slider_copy">
					<p class="first">あなたの街までお届けします</p>
					<p class="second">採れたての素材を、その日に加工<br/>新鮮さと安定した価格での供給に自信があります</p>
				</div>
			</li>
		</ul>
		<!-- bxslider -->
	</div>
	<!-- slider -->

	<!-------------------------------------------------------------
guideline
-------------------------------------------------------------->
	<div class="container g_line">
		<div class="content">
			<h2 class="top"><img src="<?php echo $webroot; ?>img/top/top_guideline.png" alt="GUIDE LINE"/></h2>
			<ul class="g_line_list">
				<li class="matchheight">
					<dl>
						<dt><img src="<?php echo $webroot; ?>img/top/g_line_icn02.png" alt="商品" /></dt>
						<dd>
							<h3>商品</h3>
							<p>数々の品種のカットはもちろん様々なキット商品など、豊富なバリエーション 数々の品種のカットはもちろん様々なキット商品など、豊富なバリエーション 数々の品種のカットはもちろん様々なキット商品など、豊富なバリエーション 数々の品種のカットはもちろん様々なキット商品など、豊富なバリエーション 数々の品種のカットはもちろん様々なキット商品など、豊富なバリエーション</p>
						</dd>
					</dl>
				</li>

				<li class="matchheight">
					<dl>
						<dt><img src="<?php echo $webroot; ?>img/top/g_line_icn03.png" alt="パートナー" /></dt>
						<dd>
							<h3>パートナー</h3>
							<p>パートナー募集の説明文は入ります。パートナー募集の説明文は入ります。パートナー募集の説明文は入ります。パートナー募集の説明文は入ります。パートナー募集の説明文は入ります。パートナー募集の説明文は入ります。パートナー募集の説明文は入ります。パートナー募集の説明文は入ります。パートナー募集の説明文は入ります。パートナー募集の説明文は入ります。</p>
						</dd>
					</dl>
				</li>
			</ul>
		</div>
		<!-- content -->
	</div>
	<!-- g_line -->

	<!-------------------------------------------------------------
product
-------------------------------------------------------------->
	<div class="container product">
		<div class="content">
			<h2 class="top"><img src="<?php echo $webroot; ?>img/top/top_products.png" alt="products"></h2>
			<p>数々の品種のカットはもちろん 様々なキット商品など、<br>豊富なバリエーションでご希望にお応えします。</p>
		</div>
		<!-- content -->
	</div>
	<!-- container product -->

	<!-------------------------------------------------------------
product_category
-------------------------------------------------------------->
	<div class="container product_category">
		<div class="content">
			<!--<p>生鮮野菜の仕入、加工及びスーパーマーケット、コンビニエンスストア向けキット商品開発など。</p>-->
			<ul>
				<li>
					<dl><a href="<?php echo $webroot; ?>product/vegitable.php">
						<dt><img src="<?php echo $webroot; ?>img/top/product_img01.jpg"></dt>
						<dd>
							<h3 class="category01">フレッシュカット野菜 〈業務用〉</h3>
							<p class="matchheight">。取れたてを即、その日に加工。安定した価格と新鮮さが自慢です。野菜を産地で大量に一括購入。取れたてを即、その日に加工。安定した価格と新鮮さが自慢です。野菜を産地で大量に一括購入。取れたてを即、その日に加工。安定した価格と新鮮さが自慢です。</p>
						</dd>
					</a>			
					</dl>
				</li>
				<li>
					<dl><a href="<?php echo $webroot; ?>product/fruit.php">
						<dt><img src="<?php echo $webroot; ?>img/top/product_img02.jpg"></dt>
						<dd>
							<h3 class="category01">業務用カットフルーツ 〈業務用〉</h3>
							<p class="matchheight">売上急上昇のトレンディーなアイテム!苺やキウイをはじめ四季折々のバリエーションで売り場を演出。</p>
						</dd>
					</a>
					


					</dl>
				</li>
				<li>
					<dl><a href="<?php echo $webroot; ?>product/salad.php">
						<dt><img src="<?php echo $webroot; ?>img/top/product_img03.jpg"></dt>
						<dd>
							<h3 class="category01">インストアサラダキット 〈業務用〉</h3>
							<p class="matchheight">手作りサラダが店内でいつも簡単に作ることができ60アイテム以上のラインアップで差別化のお手伝いをいたします。</p>
						</dd>
					</a>
					</dl>
				</li>
				<li>
					<dl><a href="<?php echo $webroot; ?>product/souzai.php">
						<dt><img src="<?php echo $webroot; ?>img/top/product_img04.jpg"></dt>
						<dd>
							<h3 class="category01">手間のかかる素材の下処理 〈業務用〉</h3>
							<p class="matchheight">具材を調理加熱するだけの簡単クッキング食材セットです。</p>
						</dd>
					</a>
					</dl>
				</li>
				<li>
					<dl><a href="http://japanprint.biz/test/kazama/pannabekit/" target="_blank">
						<dt><img src="<?php echo $webroot; ?>img/top/product_img05.jpg"></dt>
						<dd>
							<h3 class="category01">パン鍋キット 〈コンシューマー向け〉</h3>
							<p class="matchheight">具材を調理加熱するだけの簡単クッキング食材セットです具材を調理加熱するだけの簡単クッキング食材セットです。具材を調理加熱するだけの簡単クッキング食材セットです。
								<p>
						</dd>
						</a>
					</dl>
				</li>
			</ul>
			<p class="btn"><a href="<?php echo $webroot; ?>product/index.php">商品情報を見る</a>
			</p>
		</div>
		<!-- content -->
	</div>
	<!-- product_category-->


	<!-------------------------------------------------------------
movie&safety コンテンツができるまで非表示
-------------------------------------------------------------->
	<!--<div class="container movie_safety">-->
	<!--<div class="movie box matchheight">-->
	<!--<p class="title"><img src="img/title_movie.png" alt="movie"/></p>-->
	<!--<p class="test">ムービーの説明文が入ります。</p>-->
	<!--<p class="btn"><a href="#">ムービーを見る</a></p>-->
	<!--</div>-->
	<!--<div class="safety box matchheight">-->
	<!--<p class="title"><img src="img/title_safety.png" alt="safety"/></p>-->
	<!--<p class="test">安心安全の取り組みの説明文が入ります。</p>-->
	<!--<p class="btn"><a href="#">安心安全の取り組みを見る</a>	</p>-->
	<!--</div>-->
	<!--</div>-->

	<!-------------------------------------------------------------
news
-------------------------------------------------------------->
	<div class="container news">
		<div class="content">
			<h2 class="top"><img src="<?php echo $webroot; ?>img/top/top_news.png" alt="NEWS"/></h2>

			<ul>
				<li>
					<dl>
						<dt class="date">2016.01.01</dt>
						<dd>
							<p class="label">お知らせ</p>
							<p class="resume">お知らせタイトルが入ります。お知らせタイトルが入ります。</p>
							<dd>
					</dl>
				</li>

				<li>
					<dl>
						<dt class="date">2016.01.01</dt>
						<dd>
							<p class="label">お知らせ</p>
							<p class="resume">お知らせタイトルが入ります。お知らせタイトルが入ります。</p>
							<dd>
					</dl>
				</li>

				<li>
					<dl>
						<dt class="date">2016.01.01</dt>
						<dd>
							<p class="label">お知らせ</p>
							<p class="resume">お知らせタイトルが入ります。お知らせタイトルが入ります。</p>
							<dd>
					</dl>
				</li>

				<li>
					<dl>
						<dt class="date">2016.01.01</dt>
						<dd>
							<p class="label">お知らせ</p>
							<p class="resume">お知らせタイトルが入ります。お知らせタイトルが入ります。</p>
							<dd>
					</dl>
				</li>
			</ul>
			<p class="btn"><a href="<?php echo $webroot; ?>news/index.php">お知らせの一覧を見る</a>
			</p>
		</div>
		<!-- content -->
	</div>
	<!-- container -->


	<!-------------------------------------------------------------
footer
-------------------------------------------------------------->
	<?php include($site_url.'./footer.php'); ?>

</body>

</html>