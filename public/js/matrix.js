var alphabet = ["A", "B", "C", "D", "E", "F", "G", "H", "I",
 "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U",
  "V", "W", "X", "Y", "Z"];

window.onload = function() {
      localStorage.setItem("status", "noDfa");
      localStorage.setItem("height", 2);
      localStorage.setItem("width", 2);
}

function computeSum() {
    var dat = {
        'height': localStorage.getItem("height"),
        'width': localStorage.getItem("width"),
    };

    for(var x=0;x<localStorage.getItem("height");x++) {
        for(var y=1;y<=localStorage.getItem("width");y++) {
            dat[y + "" + alphabet[x]] = document.getElementById(y + "" + alphabet[x]).value;
        }
    }
    console.log(dat);

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/calcMatrixSum',
        type: 'POST',
        contentType: 'application/json',
        dataType: 'text',
        data: JSON.stringify (dat),
        success: function(response) {
            console.log(response);
            var box = document.getElementById('sumBox');
            var data = JSON.parse(response);
            box.innerHTML = data.sum;
        },
        error: function(xhr, status, error) {
            console.log('error');
        }
    });
}

function addColumns() {
  th = document.createElement("th");
  th.innerHTML = localStorage.getItem("width") * 1 + 1;
  tr = document.getElementById("columns");
  tr.appendChild(th);
  columns = document.getElementById("table1").childNodes[1].childNodes;
  for(var x=2;x<document.getElementById("table1").childNodes[1].childNodes.length;x++) {
    if(x % 2 == 0 || x > 6) {
      newth = document.createElement("th");
      newInput = document.createElement("input");
      newInput.value = 0;
      var a = "";
      if(x > 6) {
        a = alphabet[(x-1)/2];
      } else {
        a = alphabet[(x/2)-1];
      }
      newInput.id = localStorage.getItem("width") * 1 + 1 + a;
      newth.appendChild(newInput);
      document.getElementById("table1").childNodes[1].childNodes[x].appendChild(newth);
    }
  }
  w = localStorage.getItem("width");
  w = w * 1;
  localStorage.setItem("width", w + 1);
}

function addRows() {
  tr = document.createElement("tr");
  table = document.getElementById("table1").childNodes[1];
  lab = document.createElement("th");
  index = localStorage.getItem("height") * 1;
  lab.innerHTML = alphabet[index];
  tr.appendChild(lab);
  for(var x=0;x<localStorage.getItem("width");x++) {
    th = document.createElement("th");
    input = document.createElement("input");
    input.value = 0;
    input.id = "" + (x + 1) + alphabet[localStorage.getItem("height")];
    th.appendChild(input);
    tr.appendChild(th);
    table.appendChild(tr);
  }
  var h = localStorage.getItem("height");
  h = h * 1;
  localStorage.setItem("height", h+1);
}
