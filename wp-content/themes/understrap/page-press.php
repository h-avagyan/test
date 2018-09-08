<?php
    get_header();

    $cat_args = array('orderby' => 'term_id', 'order' => 'ASC','hide_empty' => false );
    $goroda = get_terms('Города', $cat_args);


    if (isset($_GET['gorod'])) {

		$post_releases = get_posts( array('post_type' =>'nedvizhimost_','tax_query' => array(array('taxonomy' => 'Города','field' => 'slug','terms' =>$_GET['gorod'])), 'posts_per_page' => 20) );
    } else {

		$post_releases = get_posts( array('post_type' => 'nedvizhimost_','posts_per_page' => 20) );
    }
    //print "<pre>";var_dump($post_releases);die;
?>

    <div class="dropdown button_for_city">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Города </button>
    <div class="dropdown-menu">
        <?php foreach ($goroda as $index => $gorod) : ?>
            <a class="dropdown-item" href="<?php print get_page_link().'?gorod='.$gorod->name ?>"><?php print $gorod->name ?></a>
        <?php endforeach; ?>
    </div>
  </div>
<div class="container">
<div class="row" >    
	<?php foreach ($post_releases as $index => $post) : ?>
    <?php $term_list = wp_get_post_terms($post->ID, 'Тип недвижимости');?>
			<div class="col-6 div_for_posts">
				<div class="row">
		            <div class="col-4">
		                <a href="<?php print $post->guid; ?>">
						    <img src="<?php print get_the_post_thumbnail_url( $post->ID ); ?>" class="img-responsive">
		                </a>
					</div>
					<div class="col-8">
		                <a href="<?php print $post->guid; ?>">
		                    <p><?php print $post->post_title; ?></p>
		                </a>
                        <p><?php print $term_list[0]->name; ?></p>
						<p><?php print date('M. d, Y', strtotime($post->post_date)); ?></p>
					</div>
				</div>
			</div>
	<?php endforeach; ?>
</div>
</div>

<!-- New Post Form -->
<div id="postbox">
<form id="new_post" name="new_post" method="post" class='form-group col-4 offset-4 text-center' action="">

<!-- post name -->
<p><label for="title">Title</label><br />
<input type="text" id="title" class='form-control' value="" tabindex="1" size="20" name="title" />
</p>

<!-- post Category -->
<p><label for="Category">Category:</label><br />
<p><?php wp_dropdown_categories(array('hide_empty'=> false ,'name'=>'tip_nedvizhimosti','id' => 'tip_nedvizhimosti', 'show_option_none' => 'Тип недвижимости', 'taxonomy' => 'Тип недвижимости' , 'class' => 'form-control' )); ?></p>



<!-- post Category -->
<p><label for="Category">Category:</label><br />
<p><?php wp_dropdown_categories(array('hide_empty' => false ,'show_option_none' => 'Города', 'name'=> 'goroda', 'id'=>'goroda', 'taxonomy' => 'Города' , 'class' => 'form-control' )); ?></p>

<!-- post Content -->
<p><label for="description">Content</label><br />
<textarea id="description" tabindex="3" name="description" cols="50" class='form-control' rows="6"></textarea>
</p>

<!-- post tags -->
<p><label for="post_tags">Tags:</label>
<input type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" class='form-control' /></p>
<p align="right"><input type="submit" value="Publish" class='btn btn-primary' tabindex="6" id="submit" name="submit" /></p>

<input type="hidden" name="action" value="new_post" />
<?php wp_nonce_field( 'new-post' ); ?>
</form>
</div>

<?php

if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {

    // Do some minor form validation to make sure there is content
    if (isset ($_POST['title'])) {
        $title =  $_POST['title'];
    } else {
        echo 'Please enter a  title';
    }
    if (isset ($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        echo 'Please enter the content';
    }
    $tags = $_POST['post_tags'];

    // Add the content of the form to $post as an array
    $new_post = array(
        'post_title'    => $title,
        'post_content'  => $description,
        'post_category' => array(),
        'taxonomies'    => array($_POST['tip_nedvizhimosti'],$_POST['goroda'] ),  // Usable for custom taxonomies too
        'tags_input'    => array($tags),
        'post_status'   => 'publish',           // Choose: publish, preview, future, draft, etc.
        'post_type' => 'nedvizhimost_'  //'post',page' or use a custom post type if you want to
    );
    //save the new post
    $pid = wp_insert_post($new_post); 
    //insert taxonomies
}



 ?>

<?php  
	get_footer();
?>	