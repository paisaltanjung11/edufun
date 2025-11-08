<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}" defer></script>
    <title>EduFun</title>
    <style>
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            background: linear-gradient(135deg, #0a0e3a 0%, #1a1f5c 25%, #2d1b4e 50%, #1a1f5c 75%, #0a0e3a 100%);
            background-attachment: fixed;
            min-height: 100vh;
            color: #ffffff;
            overflow-x: hidden;
        }

        /* Performance optimizations */
        html {
            scroll-behavior: smooth;
        }

        img {
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
            loading: lazy;
        }

        /* GPU acceleration for animated elements */
        .article-card-modern,
        .carousel-card,
        .writer-card,
        .category-card,
        .article-item {
            backface-visibility: hidden;
            perspective: 1000px;
        }
    </style>
</head>

<body>
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
</body>

</html>