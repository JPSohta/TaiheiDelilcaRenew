<div class="container top">
  <div class="content pc_top">
    <h1><a href="<?php echo $webroot; ?>"><img src="<?php echo $webroot; ?>img/top/logo.gif" alt="タイヘイグループ" ></a></h1>
    <ul id="h_social_list">
      <li><a href=""><img src="<?php echo $webroot; ?>img/common/h_fb_icn.gif" alt="facebook" /></a></li>
      <li><a href=""><img src="<?php echo $webroot; ?>img/common/h_tw_icn.gif" alt="twitter" /></a></li>
    </ul>
  </div><!-- content pc_top -->
</div><!-- container top -->


<header id="top-head">
  <div class="inner">	  
    <div id="mobile-head">
      <h1 class="logo"><a href="<?php echo $webroot; ?>"><img src="<?php echo $webroot; ?>img/top/logo.gif" alt="タイヘイグループ" /></a></h1>		
      <div id="nav-toggle">
        <div> <span></span> <span></span> <span></span> </div>
      </div><!-- nav-toggle humbergerMENU  -->		
    </div><!-- #mobile-head -->
	  
    <nav id="global-nav">
      <ul id="navi_list">
        <li class="<?php echo $current == 'top' ? 'select':'' ?>"><a href="<?php echo $webroot; ?>">ホーム</a></li>
        <li class="<?php echo $current == 'service' ? 'select':'' ?>"><a href="<?php echo $webroot; ?>service/index.php">事業内容</a></li>
        <li class="<?php echo $current == 'product' ? 'select':'' ?>"><a href="<?php echo $webroot; ?>product/index.php">商品情報</a></li>
        <li class="<?php echo $current == 'pannabe' ? 'select':'' ?>"><a href="http://japanprint.biz/test/kazama/pannabekit/" target="_blank">パン鍋キット</a></li>
        <li class="<?php echo $current == 'faq' ? 'select':'' ?>"><a href="<?php echo $webroot; ?>faq/index.php">よくある質問</a></li>
        <li class="<?php echo $current == 'news' ? 'select':'' ?>"><a href="<?php echo $webroot; ?>news/index.php">お知らせ</a></li>
        <li class="red <?php echo $current == 'info' ? 'select':'' ?>"><a href="<?php echo $webroot; ?>info/index.php">お問い合わせ</a></li>
      </ul>
    </nav>	  
  </div><!-- inner -->
</header>


