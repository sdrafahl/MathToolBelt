
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/welcome.js') }}"></script>
    </head>
    <body>
        <a href="/integrate">Integrate</a>
        <a href="/graph">Graph</a>
        <a href="/matrix">Matrix</a>
        <a href="/prime">Prime</a>
        <a href="/pi">Calculate Pi</a>
        <h1>Math Tool Belt</h1>
        <p> Welcome to math toolbelt. This is a website that has different usefull pages
            to evaluate different mathmatical functions and properties.
        </p>
    </body>
</html>
