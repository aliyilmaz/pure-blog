<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- production version, optimized for size and speed -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
    <div id="app">

    <ul>
        <li v-for="post in posts">
        <h1 v-if="post.pinstatus">pinned - {{ post.title }}</h1>
        <h1 v-else>no pinned - {{ post.title }}</h1>
        
        </li>
    </ul>
    </div>
    <script>
        window.addEventListener('load', () => {
            new Vue({
                el: '#app',
                data:{
                    posts: []
                },
                created(){
                    fetch('api/posts')
                    .then((res) => {return res.json()})
                    .then((res) => {
                        this.posts = res;
                    })
                }
            })
        });
</script>
</body>
</html>