<?php include('../ini.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>タイヘイフレッシュデリカ | 事業内容</title>
	<meta name="Keywords" content="タイヘイフレッシュデリカ,フレッシュデリカ,カット野菜,カットフルーツ,パン鍋キット,タイヘイ株式会社,タイヘイ,taihei,ファミリーセット,Family Life Supporter">
	<meta name="Description" content="株式会社タイヘイフレッシュデリカ事業部です。カット野菜カットフルーツの製造販売。惣菜キットの開発を行っています。">
	<meta name="viewport" content="width=device-width">
	<link href="../css/common.css" rel="stylesheet" type="text/css"/>
	<link href="../css/service.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="../css/slider-pro.css" media="screen"/>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="../js/jquery.sliderPro.min.js"></script>
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
	<script type="text/javascript" src="../js/jquery.matchHeight.js"></script>
	<script>
		$( function () {
			$( '.product_list li' ).matchHeight();
		} );
	</script>
	<script>
		$( document ).ready( function ( $ ) {
			$( '#thumb-v' ).sliderPro( {
				width: 960, //横幅
				orientation: 'horizontal', //スライドの方向
				arrows: false, //左右の矢印
				buttons: false, //ナビゲーションボタン
				loop: true, //ループ
				thumbnailsPosition: 'left', //サムネイルの位置
				thumbnailPointer: true, //アクティブなサムネイルにマークを付ける
				thumbnailWidth: 200, //サムネイルの横幅
				thumbnailHeight: 86, //サムネイルの縦幅
				breakpoints: {
					600: { //表示方法を変えるサイズ
						thumbnailsPosition: 'bottom',
						thumbnailWidth: 200,
						thumbnailHeight: 80
					},
					480: { //表示方法を変えるサイズ
						thumbnailsPosition: 'bottom',
						thumbnailWidth: 110,
						thumbnailHeight: 60
					}
				}
			} );
		} );
	</script>
	

	
</head>

<body>
	<!-- header -->
	<?php 
	$current = 'service';
	include($site_url.'./header.php'); 
	?>

	<div class="main_img">
		<img src="<?php echo $webroot; ?>img/service/service_main_img.jpg"/>
	</div>
	<!-- main_img -->

	<div class="container service">
		<div class="content">
			<h2 class="top"><img src="<?php echo $webroot; ?>img/service/service_main.png" alt="service 事業内容"/></h2>

			<p>数々の品種のカットはもちろん様々なキット商品、又はご希望の量目でご満足をいただいております。<br>また、私たちは野菜の美味しさの一つとして有機栽培（減農薬栽培）にも取り組んでおります。</p>
			<!--<h2>フレッシュなおいしさを、まごころ込めてお届けします。</h2>-->

			<div class="consumer">
				<h3>多様化する消費者のニーズ</h3>
				<p>生活スタイルの変化に伴い、、、云々　ダミーテキストですダミーテキストですダミーテキストですダミーテキストですダミーテキストですダミーテキストですダミーテキストですダミーテキストですダミーテキストですダミーテキストです</p>
				<ul class="consumer_img">
					<li><img src="<?php echo $webroot; ?>img/service/needs01.gif" alt="調理時間の短縮"/>
					</li>
					<li><img src="<?php echo $webroot; ?>img/service/needs02.gif" alt="簡単に調理したい"/>
					</li>
					<li><img src="<?php echo $webroot; ?>img/service/needs03.gif" alt="少量あればいい"/>
					</li>
					<li><img src="<?php echo $webroot; ?>img/service/needs04.gif" alt="美味しいが一番"/>
					</li>
					<li><img src="<?php echo $webroot; ?>img/service/needs05.gif" alt="安心・安全"/>
					</li>
					<li><img src="<?php echo $webroot; ?>img/service/needs06.gif" alt="からだに良い"/>
					</li>
					<li><img src="<?php echo $webroot; ?>img/service/needs07.gif" alt="野菜はきちんととりたい"/>
					</li>
					<li><img src="<?php echo $webroot; ?>img/service/needs08.gif" alt="生ごみがでない"/>
					</li>
				</ul>
			</div>
			<!-- consumer -->


			<div class="provider">
				<h3>お店のニーズ</h3>
				<p>お店のニーズの説明がはいります。お店のニーズの説明がはいります。お店のニーズの説明がはいります。お店のニーズの説明がはいります。<br/> お店のニーズの説明がはいります。お店のニーズの説明がはいります。お店のニーズの説明がはいります。お店のニーズの説明がはいります。</p>

				<div class="provider_img">
					<p><img src="<?php echo $webroot; ?>img/service/service_provider_img.png" alt="消費者のニーズ×お店のニーズ">
					</p>
				</div>
				<!-- provider_img -->
			</div>
			<!-- provider -->


			<div class="feature">
				<h2 class="top"><img src="<?php echo $webroot; ?>img/service/service_feature.png" alt="私たちにできること" /></h2>
				<div class="network">
					<h3>万全のチルド物流網 全国ネットワーク</h3>
					<div class="wrap01 wrap">
						<div class="left"><p>新鮮で安全な食品をお客様に提供するためには、リアルタイムに商品をお届けする配送網が不可欠です。タイヘイグループでは加工食品はもとより冷凍食品、チルド食品に至るまで三温度管理の幅広い配送ネットワークシステムを構築しております。</p><p>その中核をになうのがタイヘイ物流システムです。食品スーパー様・CVS様・レストラン様等の物流センターを持たない首都圏1,000店舗以上のお店への新鮮なチルド商品を毎日お届けしております。</p><p>タイヘイ物流システムのチルド商品の作りたての新鮮なおいしさを365日ジャストインタイムでお届けする物流ノウハウを企業の物流戦略にお役立てください。</p>
							</div><!-- left -->
						<div class="right"<p><img src="<?php echo $webroot; ?>img/service/service_img01.jpg"/>
						</p></div><!-- right -->
					</div>
					<!-- wrap01 -->
				</div>
				<!-- network  -->
				<div class="sanitary">
					<h3>安心の衛生基準</h3>
					<div class="wrap02 wrap">
					<div class="left"><p><img src="<?php echo $webroot; ?>img/service/service_img02.jpg"/></div>
					<div class="right"><p>昨今の食品に対する消費者ニーズは、衛生的で安心・安全であることが重要視されております。タイヘイでは、食の安全を基本かつ重要な項目と考え、原材料の入荷から加工・出荷に至るまでの各工程における管理を実施しております。</p>
						<p> また、この管理方法としてHACCPの概念を取り込み、管理の基本となる温度・濃度等のハード管理から従業員教育ソフト管理に至るまでのトータルな取り組みを致しております。さらに、商品の安全性の確認及びデータ蓄積のための商品検査を実施しております。</p><p> タイヘイの安心安全を皆様のオペレーションにお役立てください。</p>
						</div>
					</div><!-- wrap wrap02-->
				</div>
				<!-- sanitary -->
				<div class="process">
					<h4>原料検査工程</h4>
					<ul class="ability_content_list">
						<li>危害：原料規格違い、虫混入、原料劣化、原料庫温度上昇</li>
						<li>管理項目・管理基準：原料規格確認、目視チェック、原料庫温度</li>
						<li>測定・記録：温度チェック（4回/日）</li>
						<li>規格外の対応：返品、修理</li>
					</ul>

					<h4>製造工程一例・キャベツの千切り製造工程の流れ</h4>
					<div id="thumb-v" class="slider-pro">
						<div class="sp-slides">
							<div class="sp-slide">
								<img class="sp-image" src="<?php echo $webroot; ?>img/service/step1_img.jpg"/>
								<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-width="100%" data-show-transition="up" data-hide-transition="down">
									STEP1: 原産地・受け入れ日時の管理を徹底しています。
								</p>
							</div>
							<div class="sp-slide"> <img class="sp-image" src="<?php echo $webroot; ?>img/service/step2_img.jpg"/>
								<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-width="100%" data-show-transition="up" data-hide-transition="down">
									STEP2: カットの規格に合わせて事前処理をします。	</p>
							</div>
							<div class="sp-slide"> <img class="sp-image" src="<?php echo $webroot; ?>img/service/step3_img.jpg"/>
								<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-width="100%" data-show-transition="up" data-hide-transition="down">
									STEP3: 電解炭酸次亜でで殺菌処理をします。
								</p>
							</div>
							<div class="sp-slide"> <img class="sp-image" src="<?php echo $webroot; ?>img/service/step4_img.jpg"/>
								<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-width="100%" data-show-transition="up" data-hide-transition="down">
									STEP4: スライサーを使い多様なカット規格に対応いたします。</p>
							</div>
							<div class="sp-slide"> <img class="sp-image" src="<?php echo $webroot; ?>img/service/step5_img.jpg"/>
								<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-width="100%" data-show-transition="up" data-hide-transition="down">
									STEP5: チラー水（冷水）で洗います。
								</p>
							</div>
							<div class="sp-slide"> <img class="sp-image" src="<?php echo $webroot; ?>img/service/step6_img.jpg"/>
								<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-width="100%" data-show-transition="up" data-hide-transition="down">
									STEP6: 脱水します。
								</p>
							</div>
						</div>
						<!-- sp-slides -->
						<div class="sp-thumbnails">
							<img class="sp-thumbnail" src="<?php echo $webroot; ?>img/service/step1.jpg"/>
							<img class="sp-thumbnail" src="<?php echo $webroot; ?>img/service/step2.jpg"/>
							<img class="sp-thumbnail" src="<?php echo $webroot; ?>img/service/step3.jpg"/>
							<img class="sp-thumbnail" src="<?php echo $webroot; ?>img/service/step4.jpg"/>
							<img class="sp-thumbnail" src="<?php echo $webroot; ?>img/service/step5.jpg"/>
							<img class="sp-thumbnail" src="<?php echo $webroot; ?>img/service/step6.jpg"/>
						</div>
						<!-- sp-thumnails -->
					</div>
					<!-- #thumb-v -->
				</div>
				<!-- process -->
				<div class="recipe">
					<h3>具材とタレを調理加熱 簡単クッキングキット</h3>
					<div class="wrap03 wrap">
					<div class="left"><p>キット商品の説明文がはいります。キット商品の説明文がはいります。キット商品の説明文がはいります。キット商品の説明文がはいります。キット商品の説明文がはいります。キット商品の説明文がはいります。<br/> キット商品の説明文がはいります。キット商品の説明文がはいります。キット商品の説明文がはいります。キット商品の説明文がはいります。キット商品の説明文がはいります。キット商品の説明文がはいります。<br/> キット商品の説明文がはいります。キット商品の説明文がはいります。キット商品の説明文がはいります。</p></div><!-- left -->
					<div class="right"><p><img src="<?php echo $webroot; ?>img/service/service_img03.jpg"/> </p></div><!-- right -->
						</div><!-- wrap03 wrap -->
				</div>
				<!-- recipe -->

				<div class="origin">
					<h3>新鮮な野菜を調達</h3>
					<div class="wrap04 wrap">
						<div class="left"><p> <img src="<?php echo $webroot; ?>img/service/service_img04.jpg"/> </p></div><!-- left -->
						<div class="right"><p>野菜は産地より直送の説明文がはいります。野菜は産地より直送の説明文がはいります。野菜は産地より直送の説明文がはいります。野菜は産地より直送の説明文がはいります。野菜は産地より直送の説明文がはいります。野菜は産地より直送の説明文がはいります。野菜は産地より直送の説明文がはいります。野菜は産地より直送の説明文がはいります。	<br/> 野菜は産地より直送の説明文がはいります。野菜は産地より直送の説明文がはいります。野菜は産地より直送の説明文がはいります。野菜は産地より直送の説明文がはいります。
							</p></div><!-- right -->
					</div>
					<!-- wrap04 -->
				</div>
				<!-- origin -->
			</div>
			<!-- feature -->

			<div class="workflow">
				<h2 class="top"><img src="<?php echo $webroot; ?>img/service/service_workflow.png" alt="契約から納品までの流れ" /></h2>

				<div class="wrap wrap01">
					<div class="right image">
						<p><img src="<?php echo $webroot; ?>img/service/workflow_img1.jpg"/>
						</p>
					</div>
					<div class="left text">
						<h3>STEP1 お問い合わせ</h3>
						<p>・会社HPのお問い合わせから、メールを入れていただきます。<br/>・ご連絡頂いた内容を確認しだい担当営業員に引き継ぎます。<br/>・後日、担当営業員からアポイントのお電話</p>
					</div>
				</div>
				<!-- wrap01 -->
				<div class="wrap wrap02">
					<div class="right text">
						<h3>STEP2 ヒアリング</h3>
						<p>・担当営業員と商談を行います。<br/>・商品の規格・納品場所の確認</p>
					</div>
					<div class="left image">
						<p><img src="<?php echo $webroot; ?>img/service/workflow_img2.jpg"/>
						</p>
					</div>
				</div>
				<!-- wrap02 -->
				<p class="needs_img2"><img src="<?php echo $webroot; ?>img/service/needs_img_arrw.gif"/>
				</p>

				<div class="wrap wrap03">
					<div class="right image">
						<p><img src="<?php echo $webroot; ?>img/service/workflow_img3.jpg"/>
						</p>
					</div>
					<div class="left text">
						<h3>STEP3 物流確認</h3>
						<p>・納品場所をグループ会社に連絡します。<br/>・タイヘイ物流・グループ会社に確認<br/>・後日、物流からの返答でお客様とすり合わせを行います。</p>
					</div>
				</div>
				<!-- wrap03 -->
				<div class="wrap wrap04">
					<div class="right text">
						<h3>STEP4 お見積り</h3>
						<p>・納品に伴う諸経費を計算して作成</p>
					</div>
					<div class="left image">
						<p><img src="<?php echo $webroot; ?>img/service/workflow_img4.jpg"/>
						</p>
					</div>
				</div>
				<!-- wrap04 -->
				<div class="wrap wrap05">
					<div class="right image">
						<p><img src="<?php echo $webroot; ?>img/service/workflow_img5.jpg"/>
						</p>
					</div>
					<div class="left text">
						<h3>STEP5 仕様 規格 納品方法決定</h3>
						<p>・納品時間・納品に使用する容器（コンテナ等）の確認</p>
					</div>
				</div>
				<!-- wrap05 -->
				<div class="wrap wrap06">
					<div class="right text">
						<h3>STEP6 製造スタート</h3>
						<p>・工場に製造依頼をかける。<br/>・製造する時間帯を工場側と打ち合わせ</p>
					</div>
					<div class="left image">
						<p><img src="<?php echo $webroot; ?>img/service/workflow_img6.jpg"/>
						</p>
					</div>
				</div>
				<!-- wrap06 -->
				<div class="wrap wrap07">
					<div class="right image">
						<p><img src="<?php echo $webroot; ?>img/service/workflow_img7.jpg"/>
						</p>
					</div>
					<div class="left text">
						<h3>STEP7 計量 包装</h3>
						<p>・グラム量、包装資材の間違いがないかの確認</p>
					</div>
				</div>
				<!-- wrap07 -->
				<div class="wrap wrap08">
					<div class="right text">
						<h3>STEP8 ピッキング</h3>
						<p>・商品入り数、ヒット商品等の規格最終確認</p>
					</div>
					<div class="left image">
						<p><img src="<?php echo $webroot; ?>img/service/workflow_img8.jpg"/>
						</p>
					</div>
				</div>
				<!-- wrap08 -->
				<div class="wrap wrap09">
					<div class="right image">
						<p><img src="<?php echo $webroot; ?>img/service/workflow_img9.jpg"/>
						</p>
					</div>
					<div class="left text">
						<h3>STEP9 配送</h3>
						<p>・説明文が入ります。説明文が入ります。説明文が入ります。</p>
					</div>
				</div>
				<!-- wrap09-->

				<!--<p class="to_product_btn service"><a href="">製造工程の流れはこちら</a></p>-->
			</div>
			<!-- workflow -->


			<p>数々の品種のカットはもちろん様々なキット商品など、豊富なバリエーションでご希望にお応えします</p>
			<div class="subInfo">
				<p class="telephone">TEL. <span class="bold">048-949-0831</span><br>【受付時間】平日8:30～17:00 土・日曜、祝日、会社休業日を除く</p>
			</div>
			<!-- subInfo -->
			<p class="btn"><a href="<?php echo $webroot; ?>info/index.php">お問い合わせはこちら</a>
			</p>
		</div>
	</div>

	<!-- footer -->
	<?php include($site_url.'./footer.php'); ?>

</body>

</html>