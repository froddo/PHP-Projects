$(document).ready(function () {
    $('#btn').click(function (e) {
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'index.php',
            data:{
                firstName:$('#first_name').val(),
                email:$('#email').val(),
                state:$('#state').val(),
                occupation:$('#occupation').val()
            }
        }).done(function (data) {
            $('#content').html(data);
        }).always(function () {
            console.log('ok');
        });
        $('#stylized').hide();
        $('#cancel_comment').hide();
        $('#clear').show();
        validateForm();
    });
    $(document).ajaxStart(function () {
        $('#clear').click(function () {
            location.reload();

        });
    });
});




