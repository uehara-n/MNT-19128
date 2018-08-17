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
	<!-- /�Œ�y�[�Wcss -->
	<?php else: ?>
	<link href="<?php bloginfo('template_directory'); ?>/css/<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>.css" rel="stylesheet" type="text/css"/>
	<!-- �e�y�[�Wcss -->
	<?php endif; ?>
	<?php endif; ?>
	<?php if( is_404( )):?>
	<!-- 404�̎�-->
	<link href="<?php echo get_template_directory_uri(); ?>/css/common/notfound.css" rel="stylesheet">
	<?php endif; ?>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.dlmenu.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/component.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/lightbox.css" media="screen"/>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lightbox.js"></script>


	<script type="text/javascript">
		//��page top�{�^��
		jQuery( function () {
			var topBtn = jQuery( '#pageTop' );

			// ���{�^�����N���b�N������A�X�N���[�����ď�ɖ߂�
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
			<h1>�ɐ��s�̊O�Ǔh���E�����h���̐��X</h1>
		</div>
		<div class="component-inner">
			<div id="header-title-area" class="header-title-area">

				<div class="site-title-img">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" alt="���S" />
						</a>
				</div>
			</div>
			<!-- #header-title-area -->

			<div id="header-widget-area">
				<div class="header-wi-l">
					<a href="tel:05073022085"><img src="<?php echo get_template_directory_uri(); ?>/images/common/tel.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" alt="�d�b�ԍ�" /></a>
				</div>
			</div>

			<!-- #masthead -->
			<div id="dl-menu" class="dl-menuwrapper">
				<div class="dl-trigger header-wi-r"><img src="<?php echo get_template_directory_uri(); ?>/images/common/menu.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="imgposi"/>
				</div>

				<ul class="dl-menu">
					<li><a href="<?php bloginfo('url'); ?>/">HOME</a>
					</li>
					<li><a href="<?php bloginfo('url'); ?>/riyu">�I�΂�闝�R</a>
					</li>
					<li><a href="#">�T�[�r�X���e</a>
						<ul class="dl-submenu">
								<li><a href="<?php site_url(); ?>/amamori">�J�R��f�f</a></li>
								<li><a href="<?php site_url(); ?>/amadoi">�J�����</a></li>
								<li><a href="<?php site_url(); ?>/ceiling">�V�[�����O</a></li>
								<li><a href="<?php site_url(); ?>/siroari">�V���A��</a></li>
								<li><a href="<?php site_url(); ?>/shindan">�����򉻐f�f</a></li>
								<li><a href="<?php site_url(); ?>/kasaihoken">�΍Еی�</a></li>
						</ul>
					</li>
					<li>
						<a href="#">�h���v����</a>
						<ul class="dl-submenu">
							<li><a href="<?php bloginfo('url'); ?>/silicone">�V���R���v����<br/>
									�N���[���}�C���h</a>
							</li>
							<li><a href="<?php bloginfo('url'); ?>/astec1">�A�X�e�b�N�v����<br/>
									EC5000PCM</a>
							</li>
							<li><a href="<?php bloginfo('url'); ?>/astec2">�A�X�e�b�N�v����<br/>
									EC5000PCM-IR</a>
							</li>
							<li><a href="<?php bloginfo('url'); ?>/astec3">�A�X�e�b�N�v����<br/>
									���t�@�C��1000MF-IR</a>
							</li>
							<li><a href="<?php bloginfo('url'); ?>/gaina">�ՔM�v����<br/>
									�K�C�i</a>
							</li>
							<li><a href="<?php bloginfo('url'); ?>/original">���@�t�b�f�v����<br/>
									�h�茏�Z���N�V����<br/>
									�K�C�i</a>
							</li>
						</ul>

					</li>
					<li><a href="/seko">�{�H����</a>
						<ul class="dl-submenu">
								<li><a href="<?php echo home_url(); ?>/seko_cat/gaiheki">�O�Ǔh��</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/yane">�����h��</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/other">���̑����t�H�[��</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/ise">�ɐ��s</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/matsusaka">����s</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/shima">�u���s</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/takigun">���C�S</a></li>
								<li><a href="<?php echo home_url(); ?>/seko_cat/watarai">�x��S</a></li>
						</ul>
					</li>
					<li><a href="<?php bloginfo('url'); ?>/company">��Јē�</a>
						<ul class="dl-submenu">
							<li><a href="<?php bloginfo('url'); ?>/company">��ЊT�v</a></li>
							<li><a href="<?php bloginfo('url'); ?>/staff">�X�^�b�t�Љ�</a></li>
							<li><a href="<?php bloginfo('url'); ?>/news-letter">�j���[�X���^�[</a></li>
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
