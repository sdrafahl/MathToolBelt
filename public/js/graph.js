var values = [];

window.onload = function() {
    localStorage.setItem("zoom", 35.0);
}

function graph() {
    values = [];
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    ctx.restore();
    var func = Function("x", " return " + document.getElementById('function').value);
    for(var x = 0; x < 1000;x += .05) {
        var obj = {
            'beg': x,
            'end': x + .05,
            'height1': func(x),
            'height2': func(x + .05),
        };
        values.push(obj);
    }
    render();
}

function render() {
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.beginPath();
    var zoom = localStorage.getItem("zoom");
    for(var y = 0;y<values.length;y++) {
        ctx.moveTo(values[y].beg, 1000 - values[y].height1/zoom);
        ctx.lineTo(values[y].end, 1000 - values[y].height2/zoom);
    }
    ctx.closePath();
    ctx.stroke();
}

function clea() {
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}

function zoomIn() {
    var zoom = localStorage.getItem("zoom");
    zoom = (zoom * 1.0) + 5;
    localStorage.setItem("zoom", zoom);
    render();
}

function zoomOut() {
    var zoom = localStorage.getItem("zoom");
    zoom = zoom - 5;
    localStorage.setItem("zoom", zoom);
    render();
}
