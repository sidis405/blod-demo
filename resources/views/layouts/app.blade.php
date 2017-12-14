<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blog Template for Bootstrap</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/blog.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('layouts.navigation')
        <div class="container">
            <div class="blog-header">
                <h1 class="blog-title">The Bootstrap Blog</h1>
                <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
            </div>
            @yield('content')
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                @include('layouts.sidebar')
            </div>
        </div>
    </div>

        @include('layouts.footer')

</body>
</html>
