<?php  
var_dump('aaaaaaaaaaaaaa');die;
get_header();
global $post;
?>

<div class="col-xs-offset-1 col-xs-10 back-to-press">
	<a href="<?php print get_permalink( get_page_by_title( 'Press' ) ); ?>"><i class="fas fa-angle-double-left"></i>&emsp;<span>Back To Press</span></a>
</div>
<div class="col-xs-offset-1 col-xs-10" id="post-releases">
	<div class="col-xs-12 col-md-6">
		<p class="post-title"><?php print $post->post_title; ?></p>
		<p class="post-date"><?php print date('F d, Y', strtotime($post->post_date)) ?></p>
		<div class="post-content"><?php print $post->post_content; ?></div>
	</div>
	<div class="col-xs-12 col-md-6">
		<img src="<?php print get_the_post_thumbnail_url(); ?>" class="img-responsive">
	</div>
</div>
<div class="col-xs-12" id="press-footer">
	<div class="col-md-6 col-xs-12 fact-sheet">
		<a href="#" class="col-md-5 col-xs-12">
			<p><span>FACT SHEET</span> &emsp;<i class="far fa-file-alt"></i></p>
		</a>
	</div>
	<div class="col-md-6 col-xs-12">
		<a href="/press-releases" class="col-md-5 col-xs-12">
			<p><span>PRESS RELEASES</span> &emsp;<i class="far fa-newspaper"></i></p>
		</a>
	</div>
</div>

<?php 

get_footer();

?>