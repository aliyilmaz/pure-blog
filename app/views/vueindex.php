<!doctype html>
<html lang="en">
<head>
    <base href="<?=$this->baseurl; ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Blog &ndash; Layout Examples &ndash; Pure</title>
    
    <link rel="stylesheet" href="public/pure-release-1.0.0/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="public/pure-release-1.0.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="public/pure-release-1.0.0/grids-responsive-min.css">
    <!--<![endif]-->
    
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="public/css/layouts/blog-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="public/css/layouts/blog.css">
    <!--<![endif]-->

    <!-- production version, optimized for size and speed -->
    <script src="public/vue-2.6.8/dist/vue.min.js"></script>
</head>
<body>







<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div id="general" class="header">
            <h1 class="brand-title">{{ title }}</h1>
            <h2 class="brand-tagline">{{ description }}</h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item" v-for="button in buttons">
                        <a class="pure-button" v-bind:href="button.href">{{ button.text }}</a> 
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <div v-for="post in posts">
                <!-- A wrapper for all the blog posts -->
                <div class="posts" v-if="post.pinstatus">
                    <h1 class="content-subhead">Pinned Post</h1>

                    <!-- A single blog post -->
                    <section class="post">
                        <header class="post-header">
                            <img width="48" height="48" alt="Author &#x27;s avatar" class="post-avatar" src="img/common/tilo-avatar.png">

                            <h2 class="post-title">{{ post.title }}</h2>

                            <p class="post-meta">
                                By <a href="#" class="post-author">{{ post.author }}</a> under <a class="post-category post-category-design" href="#">CSS</a> <a class="post-category post-category-pure" href="#">Pure</a>
                            </p>
                        </header>

                        <div class="post-description">
                            <p>
                            {{ post.content }}
                            </p>
                        </div>
                    </section>
                </div>

                <div class="posts" v-else="post.pinstatus">
                    <h1 class="content-subhead">Recent Posts</h1>

                    <section class="post">
                        <header class="post-header">
                            <img width="48" height="48" alt="Eric Ferraiuolo&#x27;s avatar" class="post-avatar" src="img/common/ericf-avatar.png">

                            <h2 class="post-title">{{ post.title }}</h2>

                            <p class="post-meta">
                                By <a class="post-author" href="#">Eric Ferraiuolo</a> under <a class="post-category post-category-js" href="#">JavaScript</a>
                            </p>
                        </header>

                        <div class="post-description">
                            <p>
                            {{ post.content }}
                            </p>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        
        <div id="general" class="footer">
            <div class="pure-menu pure-menu-horizontal">
                <ul>
                    <li class="pure-menu-item" v-for="fbutton in fbuttons"><a v-bind:href="fbutton.href" class="pure-menu-link">{{ fbutton.text }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<script>
    window.addEventListener('load', () => {
        new Vue({
            el: '#layout',
            data:{
                posts: [],
                title: '',
                description:'',
                buttons:'',
                fbuttons:'',
                created_at:'',
                updated_at:'',
                avatar:'',
                username:''
            },
            created(){

                fetch('api/posts')
                .then((res) => {return res.json()})
                .then((res) => {
                    this.posts = res;
                })

                fetch('api/general')
                .then((res) => {return res.json()})
                .then((res) => {
                    this.title = res[0].title;
                    this.description = res[0].description;
                    this.buttons = JSON.parse(res[0].buttons);
                    this.fbuttons = JSON.parse(res[0].fbuttons);
                    this.created_at = res[0].created_at;
                    this.updated_at = res[0].updated_at;
                })
            },
            methods: {
                user: function (id) {
                    fetch('api/user/'+id)
                    .then((res) => {return res.json()})
                    .then((res) => {
                        this.avatar = res[0].avatar;
                        this.username = res[0].username;
                    })
                }
            }
        })
    });
</script>
</body>
</html>
