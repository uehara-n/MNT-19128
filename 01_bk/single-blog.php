<?php
get_header();

$terms = get_the_terms( $post->ID, 'staffblog_cat' );
if ( $terms && !is_wp_error( $terms ) ) {
	foreach ( $terms as $term ) {
		$blog_name = $term->name;
		$blog_slug = $term->slug;
		$blog_url = get_term_link( $term, 'staffblog_cat' );
	}
} else {
	$blog_name = "������";
	$blog_slug = "no_cat";
	$blog_url = "/staffblog/";
}
?> <?php

function change_any_texts( $text ) {
	$replace = array(
		//'�ύX�O' => '�ύX��',
		'rel="attachment' => 'rel="lightbox[blog] attachment',
		'<a href="/wp-content/uploads/' => '<a rel="lightbox[blog]" href="/wp-content/uploads/',
		'class="' => 'class="img-responsive center_block pic '
	);
	$text = str_replace( array_keys( $replace ), $replace, $text );
	return $text;
}
add_filter( 'the_content', 'change_any_texts' );
?>
<!-- ======================�R���e���c��������======================= -->
<main id="page_contents">

<!-- ======================�E�R���e���c��������======================= -->
	<ul id="pankuzu" class="clearfix">
		<?php the_pankuzu_keni( ' &gt; ' ); ?>
	</ul>
	<h2 class="page_tit"><span class="inner">�X�^�b�t�u���O</span></h2>

<div id="blog_single">
		<p class="date">�X�V���F
			<?php the_time('Y�Nn��j��(D)'); ?>
		</p>
		<article class="box">
			<h3 class="stit">
				<?php echo the_title();?>
			</h3>
			<?php the_content(); ?>
		</article>



          		<!--customer_navi-->
          		<div class="customer_navi_c clearfix" style="margin-bottom:20px;">
          			<div class="page_back_btn01">
          				<p class="page_back_text01">
          					<?php previous_post_link('%link', '&lt; �O�̃u���O��'); ?>
          				</p>
          			</div>

          			<div class="page_back_btn02">
          				<p class="page_back_text02"><a href="<?php echo get_post_type_archive_link( 'seko' ); ?>">�u���O �ꗗ</a></p>
          			</div>

          			<div class="page_back_btn02">
          					<p class="page_back_text02">
          					<?php next_post_link('%link', '���̃u���O�� &gt;'); ?>
          					</p>
          			</div>
          		</div>
          		<!--customer_navi-->

		<select class="monthly_select" name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
			<option value="">
				<?php echo attribute_escape(__('Select Month')); ?>
			</option>
			<?php wp_get_archives('post_type=blog&type=monthly&format=option&show_post_count=1'); ?>
			</select>
	</div>
	
	
	<?php gr_contact_banner(); ?>

</main>
<!-- ======================�R���e���c�����܂�======================= -->


<?php get_footer(); ?>
