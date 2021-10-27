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

<div class="container">

    <h1 class="title"><?php echo $title; ?></h1>

    <div class="column">

        <p class="desc"><?php echo $desc; ?></p>
        
        <img class="image" src="<?php echo $theImage; ?>">

    </div>

    <a class="link" href="<?php echo $link;?>" class="button" target="_blank"> Go to Link</button>

</div>




<?php
get_footer();