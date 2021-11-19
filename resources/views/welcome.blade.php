<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="/js/manifest.js"></script>
    <script defer src="/js/vendor.js"></script>
    <script defer src="/js/app.js"></script>

    <title>Snippets App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    <h3>Hello</h3>
    <div id="snippets-app"></div>
    <script src="{{mix('js/app.js')}}"></script>
</body>


</html>
