function calc() {
    var func = document.getElementById('function').value;
    var char = '';
    var processed = "";

    for(var x=0;x<func.length;x++) {
        char = func.charAt(x);
        if(char == 'x') {
            processed += "$x";
        } else {
            processed += char;
        }
    }
    console.log(func);

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/calcNumericalIntegration',
        type: 'POST',
        contentType: 'application/json',
        dataType: 'text',
        data: JSON.stringify ({
            'function': processed,
            'width': document.getElementById('width').value,
            'from': document.getElementById('from').value,
            'to': document.getElementById('to').value,
        }),
        success: function(response) {
            var box = document.getElementById('value');
            var data = JSON.parse(response);
            box.innerHTML = data.sum;
        },
        error: function(xhr, status, error) {
            console.log('error');
        }
    });
}


function isOperator(x) {
    return x == '+' || x == '/' || x == '*' || x == '-';
}

function isNumber(x) {
    return x == '0' || x == '1' || x == '2' || x == '3' || x == '4' || x == '5' || x == '6' || x == '7' || x == '8' || x == '9';
}
