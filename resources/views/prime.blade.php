
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/prime.js') }}"></script>
    </head>
    <body>
        <a href="/integrate">Integrate</a>
        <a href="/graph">Graph</a>
        <a href="/matrix">Matrix</a>
        <a href="/pi">Calculate Pi</a>
        <br>
        <h2>Prime Number Test </h2>
        <br>
        Number To Test: <input type="text" id="value">
        <br>
        <button type="button" onclick="prime()">Compute</button>
        <br>
        <br>
        Is Prime: <textarea id="piBox" rows="1" cols="5"></textarea>
        <br>
        <h3>Prime Number List</h3>
        <br>
        <textarea id="primes" rows="50" cols="50"></textarea>
        <br>
        Range Of Numbers: <input type="text" id="range">
        <button type="button" onclick="numbers()">Get Primes</button>
    </body>
</html>
