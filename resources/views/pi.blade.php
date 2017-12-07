
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/pi.js') }}"></script>
    </head>
    <body>
        <a href="/integrate">Integrate</a>
        <a href="/graph">Graph</a>
        <a href="/matrix">Matrix</a>
        <a href="/prime">Prime</a>
        <br>
        <h2>Calculate Pi </h2>
        <br>
        Iterations: <input type="text" id="itrations">
        <br>
        <button type="button" onclick="calc()" id="login">Compute</button>
        <br>
        <textarea id="piBox" rows="4" cols="50"></textarea>
    </body>

</html>
