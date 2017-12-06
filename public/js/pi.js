function calc() {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/calcPi',
        type: 'POST',
        contentType: 'application/json',
        dataType: 'text',
        data: JSON.stringify ({
            'iterations': document.getElementById('itrations').value,
        }),
        success: function(response) {
            console.log(response);
            var box = document.getElementById('piBox');
            var data = JSON.parse(response);
            box.innerHTML = data.pi;
        },
        error: function(xhr, status, error) {
            console.log('error');
        }
    });
}
