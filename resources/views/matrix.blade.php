
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/matrix.js') }}"></script>
    </head>
    <body>
        <h2>Matrix Computation </h2>

        <table style="width:100%" id="table1">
            <tr id="columns">
              <th> </th>
              <th>1</th>
              <th>2</th>
            </tr>
            <tr>
              <th> A </th>
              <th> <input value=0 type="text" id="1A"> </th>
              <th> <input value=0 type="text" id="2A"> </th>
            </tr>
            <tr>
              <th> B </th>
              <th> <input value=0 type="text" id="1B"> </th>
              <th> <input value=0 type="text" id="2B"> </th>
            </tr>
        </table>
        <br>
        <button onclick="addRows()"> Add Row </button>
        <button onclick="addColumns()"> Add Row </button>
        <br>
        <br>
        <textarea id="sumBox" rows="4" cols="50"></textarea>
        <br>
        <button onclick="computeSum()">Add Sum</button>
    </body>
</html>
