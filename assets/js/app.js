$(document).on('change', '#plugin-list', function(){
	let ths = $(this);
    let url = '/fs_code_task/index.php/index/getForm';
    $.ajax({
        url: url,
        type: 'POST',
        data: 'plugin=' + ths.val(),
        success: function(response){
            $('#form-section').html('');
            $('#response-section').html('');
            $('#form-section').append(response);
        },
        error: function (jqXhr, textStatus, errorMessage) {
            console.log(errorMessage);
        }
    });
});


$(document).on('submit', 'form', function(e){
    e.preventDefault();
    let ths = $(this);
    let url = '/fs_code_task/index.php/index/send';
    $.ajax({
        url: url,
        type: 'POST',
        data: $('form').serialize() + '&plugin=' + $('#plugin-list option:selected').val(),
        success: function(response){
            $('#response-section').html('');
            $('#response-section').html(response);
        },
        error: function (jqXhr, textStatus, errorMessage) {
            console.log(errorMessage);
        }
    });
});
