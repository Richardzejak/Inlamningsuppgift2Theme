<?php
// this is the home page

// variables
$title = get_field('title');
$desc = get_field('description');
$image = get_field('image');
$theImage = $image['sizes']['large'];
$link = get_field('link');



get_header();
?>

<h1><?php echo $title; ?></h1>
<p><?php echo $desc; ?></p>
<img src="<?php echo $theImage; ?>">
<a href="<?php echo $link;?>" class="button" target="_blank"> Go to Link</button>





<?php
get_footer();