function prime() {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/calcPrime',
        type: 'POST',
        contentType: 'application/json',
        dataType: 'text',
        data: JSON.stringify ({
            'val': document.getElementById('value').value,
        }),
        success: function(response) {
            console.log(response);
            var box = document.getElementById('piBox');
            var data = JSON.parse(response);
            box.innerHTML = data.prime;
        },
        error: function(xhr, status, error) {
            console.log('error');
        }
    });
}

function numbers() {
    var primes = [];
    var range = document.getElementById('range').value;
    for(let x=0;x<=range;x++) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/calcPrime',
            type: 'POST',
            contentType: 'application/json',
            dataType: 'text',
            data: JSON.stringify ({
                'val': x,
            }),
            success: function(response) {
                var data = JSON.parse(response);
                if(data.prime == 'true') {
                    var box = document.getElementById('primes');
                    box.value = box.value + ", " + x;
                }
            },
            error: function(xhr, status, error) {
                console.log('error');
            }
        });
    }
}
