
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/graph.js') }}"></script>
    </head>
    <body>
        <canvas id="myCanvas" width="1000" height="1000"
           style="border:1px solid #c3c3c3;">
           Your browser does not support the canvas element.
       </canvas>
       <br>
       <input id="function">
       <br>
       <button onclick="graph()" >Graph</button>
       <button onclick="clea()" >Clear</button>
       <button onclick="zoomIn()" >Zoom+</button>
       <button onclick="zoomOut()" >Zoom-</button>
       <br>
       Exponents: x^2 = Math.pow(x,2)
       <br>
       Log: Math.log(x)
    </body>

</html>
