
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/integration.js') }}"></script>
    </head>
    <body>
        <a href="/pi">Calculate Pi</a>
        <a href="/graph">Graph</a>
        <a href="/matrix">Matrix</a>
        <a href="/prime">Prime</a>
        <br>
        <h2> Numerical Integration </h2>
        <br>
        <br>
        Use x as a variable
        <br>
        Note: In order to use exponents you must use pow(), for example x^2 = pow(x, 2)
        <br>
        Function: <input type="text" id="function">
        <br>
        Rectangle Width: <input type="text" id="width">
        <br>
        From: <input type="text" id="from">
        <br>
        To: <input type="text" id="to">
        <br>
        <button type="button" onclick="calc()">Compute</button>
        <br>
        <textarea id="value" rows="4" cols="50"></textarea>
    </body>

</html>
