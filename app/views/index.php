<!doctype html>
<html lang="en">
<head>
    <base href="<?=$this->baseurl; ?>" target="_blank">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Blog &ndash; Layout Examples &ndash; Pure</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <!--<![endif]-->


        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="public/css/layouts/blog.css">
        <!--<![endif]-->
</head>
<body>







<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title"><?=$title; ?></h1>
            <h2 class="brand-tagline"><?=$description; ?></h2>

            <nav class="nav">
                <ul class="nav-list">
                
                <?php foreach ($buttons as $button) {
    ?>
                    <li class="nav-item">
                        <a class="pure-button" href="<?=$button['href']; ?>"><?=$button['text']; ?></a>
                    </li>
                <?php
} ?>
                
                </ul>
            </nav>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">Pinned Post</h1>

                <!-- A single blog post -->
                <?php foreach ($pinned_posts as $post) {
        ?>
                <?php extract($post); ?>
                <?php extract(get_data('users', array('id' => $author))); ?>
                <section class="post">
                    <header class="post-header">
                        <img width="48" height="48" alt="<?=$username; ?>&#x27;s avatar" class="post-avatar" src="<?=$avatar; ?>">

                        <h2 class="post-title"><?=$title; ?></h2>

                        <p class="post-meta">
                            By <a href="#" class="post-author"><?=$username; ?></a> under 
                            <?php foreach (json_decode($category, true) as $cat_id) {
            ?>
                            <?php $cat = get_data('categories', array('id' => $cat_id)); ?>
                            <a class="post-category <?=$cat['class_name']; ?>" href="#"><?=$cat['text']; ?></a> 
                            <?php
        } ?>
                        </p>
                    </header>

                    <div class="post-description">
                        <?php if (!empty($content)) {
            ?>
                            <p>
                            <?=$content; ?>
                            </p>
                        <?php
        } ?>
                        <div class="post-images pure-g">
                        <?php $pimages = json_decode($pimages, true); ?> 
                        <?php if (!empty($pimages)) {
            ?>

                            <?php if (!empty($pimages)) {
                ?>
                                <?php foreach ($pimages as $image) {
                    ?>
                                <div class="pure-u-1 pure-u-md-1-2">
                                    <a href="<?=$image['href']; ?>">
                                        <img alt="<?=$image['alt']; ?>"
                                            class="pure-img-responsive"
                                            src="<?=$image['src']; ?>">
                                    </a>

                                    <div class="post-image-meta">
                                        <h3><?=$image['h3']; ?></h3>
                                    </div>
                                </div>
                                <?php
                } ?>
                            </div>
                            <?php
            } ?>
                            
                        <?php
        } ?>
                    </div>
                </section>
                <?php
    } ?>
            </div>

            <div class="posts">
                <h1 class="content-subhead">Recent Posts</h1>
                   
                <?php foreach ($recent_posts as $post) {
        ?>
                <?php extract($post); ?>
                <?php extract(get_data('users', array('id' => $author))); ?>
                
                <section class="post">
                    <header class="post-header">
                        <img width="48" height="48" alt="<?=$username; ?>&#x27;s avatar" class="post-avatar" src="<?=$avatar; ?>">

                        <h2 class="post-title"><?=$title; ?></h2>

                        <p class="post-meta">
                            By <a href="#" class="post-author"><?=$username; ?></a> under 
                            <?php foreach (json_decode($category, true) as $cat_id) {
            ?>
                            <?php $cat = get_data('categories', array('id' => $cat_id)); ?>
                            <a class="post-category <?=$cat['class_name']; ?>" href="#"><?=$cat['text']; ?></a> 
                            <?php
        } ?>
                        </p>
                    </header>

                    <div class="post-description">
                        <?php if (!empty($content)) {
            ?>
                            <p>
                            <?=$content; ?>
                            </p>
                        <?php
        } ?>
                        <div class="post-images pure-g">
                        <?php $pimages = json_decode($pimages, true); ?> 
                        <?php if (!empty($pimages)) {
            ?>

                            <?php if (!empty($pimages)) {
                ?>
                                <?php foreach ($pimages as $image) {
                    ?>
                                <div class="pure-u-1 pure-u-md-1-2">
                                    <a href="<?=$image['href']; ?>">
                                        <img alt="<?=$image['alt']; ?>"
                                            class="pure-img-responsive"
                                            src="<?=$image['src']; ?>">
                                    </a>

                                    <div class="post-image-meta">
                                        <h3><?=$image['h3']; ?></h3>
                                    </div>
                                </div>
                                <?php
                } ?>
                            </div>
                            <?php
            } ?>
                            
                        <?php
        } ?>
                    </div>
                </section>
                <?php
    } ?>

            </div>

            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                    <?php foreach ($fbuttons as $button) {
        ?>
                    <?php extract($button); ?>
                        <li class="pure-menu-item"><a href="<?=$href; ?>" class="pure-menu-link"><?=$text; ?></a></li>
                    <?php
    } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>
