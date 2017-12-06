
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/pi.js') }}"></script>
    </head>
    <body>
        <b> Calculate Pi <b>
        <br>
        Iterations: <input type="text" id="itrations">
        <br>
        <button type="button" onclick="calc()" id="login">Compute</button>
        <br>
        <textarea id="piBox" rows="4" cols="50"></textarea>
    </body>

</html>
