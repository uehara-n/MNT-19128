<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=640"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/allpage.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<?php if ( is_home() || is_front_page() ) : ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet">

<link href="<?php bloginfo('template_directory'); ?>/css/slider.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slider.js"></script>

	<?php else:?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/common/page.css" rel="stylesheet">
	<?php if(is_page()&&!is_404()): ?>
	<?php
	$root_slug = ps_get_root_page( $post );
	$root_slug = $root_slug->post_name;
	?>
	<link href="<?php bloginfo('template_directory'); ?>/css/<?php echo $root_slug; ?>.css" rel="stylesheet" type="text/css"/>
	<!-- /固定ページcss -->
	<?php else: ?>
	<link href="<?php bloginfo('template_directory'); ?>/css/<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>.css" rel="stylesheet" type="text/css"/>
	<!-- 各ページcss -->
	<?php endif; ?>
	<?php endif; ?>
	<?php if( is_404( )):?>
	<!-- 404の時-->
	<link href="<?php echo get_template_directory_uri(); ?>/css/common/notfound.css" rel="stylesheet">
	<?php endif; ?>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.dlmenu.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/component.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/lightbox.css" media="screen"/>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lightbox.js"></script>


	<script type="text/javascript">
		//■page topボタン
		jQuery( function () {
			var topBtn = jQuery( '#pageTop' );

			// ◇ボタンをクリックしたら、スクロールして上に戻る
			topBtn.click( function () {
				jQuery( 'body,html' ).animate( {
					scrollTop: 0
				}, 500 );
				return false;
			} );

		} );
	</script>
	<script>
		jQuery( function () {
			jQuery( '#dl-menu' ).dlmenu();
		} );
	</script>
	<script>
		( function ( i, s, o, g, r, a, m ) {
			i[ 'GoogleAnalyticsObject' ] = r;
			i[ r ] = i[ r ] || function () {
				( i[ r ].q = i[ r ].q || [] ).push( arguments )
			}, i[ r ].l = 1 * new Date();
			a = s.createElement( o ),
				m = s.getElementsByTagName( o )[ 0 ];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore( a, m )
		} )( window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga' );

		ga( 'create', 'UA-106055077-1', 'auto' );
		ga( 'send', 'pageview' );
	</script>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="masthead" class="site-header-area" role="banner">
		<div class="site-description">
			<h1>伊勢市の外壁塗装・屋根塗装の専門店</h1>
		</div>
		<div class="component-inner">
			<div id="header-title-area" class="header-title-area">

				<div class="site-title-img">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" alt="ロゴ" />
						</a>
				</div>
			</div>
			<!-- #header-title-area -->

			<div id="header-widget-area">
				<div class="header-wi-l">
					<a href="tel:05073022085"><img src="<?php echo get_template_directory_uri(); ?>/images/common/tel.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" alt="電話番号" /></a>
				</div>
			</div>

			<!-- #masthead -->
			<div id="dl-menu" class="dl-menuwrapper">
				<div class="dl-trigger header-wi-r"><img src="<?php echo get_template_directory_uri(); ?>/images/common/menu.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="imgposi"/>
				</div>

				<ul class="dl-menu">
					<li><a href="<?php bloginfo('url'); ?>/">HOME</a>
					</li>
					<li><a href="<?php bloginfo('url'); ?>/riyu">選ばれる理由</a>
					</li>
					<li><a href="#">サービス内容</a>
						<ul class="dl-submenu">
								<li><a href="<?php site_url(); ?>/amamori">雨漏り診断</a></li>
								<li><a href="<?php site_url(); ?>/amadoi">雨樋交換</a></li>
								<li><a href="<?php site_url(); ?>/ceiling">シーリング</a></li>
								<li><a href="<?php site_url(); ?>/siroari">シロアリ</a></li>
								<li><a href="<?php site_url(); ?>/shindan">建物劣化診断</a></li>
								<li><a href="<?php site_url(); ?>/kasaihoken">火災保険</a></li>
						</ul>
					</li>
					<li>
						<a href="#">塗料プラン</a>
						<ul class="dl-submenu">
							<li><a href="<?php bloginfo('url'); ?>/silicone">シリコンプラン<br/>
									クリーンマイルド</a>
							</li>
							<li><a href="<?php bloginfo('url'); ?>/astec1">アステックプラン<br/>
									EC5000PCM</a>
							</li>
							<li><a href="<?php bloginfo('url'); ?>/astec2">アステックプラン<br/>
									EC5000PCM-IR</a>
							</li>
							<li><a href="<?php bloginfo('url'); ?>/astec3">アステックプラン<br/>
									リファイン1000MF-IR</a>
							</li>
							<li><a href="<?php bloginfo('url'); ?>/gaina">遮熱プラン<br/>
									ガイナ</a>
							</li>
							<li><a href="<?php bloginfo('url'); ?>/original">無機フッ素プラン<br/>
									塗り件セレクション<br/>
									ガイナ</a>
							</li>
						</ul>

					</li>
					<li><a href="/seko">施工事例</a>
						<ul class="dl-submenu">
								<li><a href="<?php echo home_url(); ?>/seko_cat/gaiheki">外壁塗装</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/yane">屋根塗装</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/other">その他リフォーム</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/ise">伊勢市</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/matsusaka">松阪市</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/shima">志摩市</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/takigun">多気郡</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/watarai">度会郡</a></li>
						</ul>
					</li>
					<li><a href="<?php bloginfo('url'); ?>/company">会社案内</a>
						<ul class="dl-submenu">
							<li><a href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
							<li><a href="<?php bloginfo('url'); ?>/staff">スタッフ紹介</a></li>
							<li><a href="<?php bloginfo('url'); ?>/news-letter">ニュースレター</a></li>
							</li>
						</ul>
					</li>
				</ul>

			</div>
			<!-- /dl-menuwrapper -->

			<br style="clear:both;"/>


		</div>
		<!-- .component-inner -->

	</div>
	<!-- #header-nav-area -->
